import { Bind, Controller, Get, HttpStatus, Post, Request, Response } from "@nestjs/common";
import express from "express"
import { ProviderService } from "src/services/providers.service";

@Controller()
export class ProviderControler{
    constructor(private readonly provider : ProviderService){}

    @Get("/api/providers")
    @Bind(Request(), Response())
    async getProviders(req: express.Request, res: express.Response){
        const {code, msg} = await this.provider.getAllProviders()
        res.status(code).json(msg);
    }

    @Post("/api/providers")
    @Bind(Request(), Response())
    async createProvider(req: express.Request, res: express.Response){
        const {name, contact, email} = req.body;
        
        if (!name || !contact || !email) {
            return res.status(HttpStatus.BAD_REQUEST).json({
                error: "Missing required fields: name, contact, and email"
            });
        }

        const {msg, code} = await this.provider.registerProvider(name, contact, email);
        res.status(code).json(msg);
    }
}