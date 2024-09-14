import { Bind, Controller, Get, Request, Response } from "@nestjs/common";
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
}