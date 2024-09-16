import { Bind, Controller, Get, Post, Request, Response } from "@nestjs/common";
import ClientService from "src/services/client.service";
import express from "express"

@Controller()
export default class ClientsController{
    constructor(private readonly client: ClientService){}

    @Get("/api/clients")
    @Bind(Request(), Response())
    async getClients(req: express.Request, res: express.Response){
        const {msg, code} = await this.client.getAllClients()
        res.status(code).json(msg);
    }

    @Post("/api/clients")
    @Bind(Request(), Response())
    async registerClient(req: express.Request, res: express.Response){
        const {name, address} = req.body;
        const {code, msg} = await this.client.addClient(name, address);
        res.status(code).json(msg);
    }
}