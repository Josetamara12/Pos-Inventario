import { Bind, Body, Controller, Get, Param, Post, Req, Request, Response } from "@nestjs/common";
import { DevolutionService } from "src/services/devolution.service";
import exp from "express";


@Controller()
export class DevolutionController{
    constructor(private readonly devolution: DevolutionService){}

    @Get("/api/devs")
    @Bind(Request(), Response())  
    async getAllDevolutions(req: exp.Request, res: exp.Response){
        const {msg, code} = await this.devolution.getDevolutions();
        res.status(code).json(msg);
    }

    @Get("/api/devs/:id")
    @Bind(Request(), Response())
    async getDevolution(@Param('id') id: number, res: exp.Response){
        const {msg, code} = await this.devolution.getDevolutionById(id);
        res.status(code).json(msg);
    }

    @Post("/api/devs")
    @Bind(Request(), Response())
    async addDevolution(@Body() {id_orden, devolution_date, ammount_total, id_sale, id_product, id_client}: {id_orden: number, devolution_date: string, ammount_total: number, id_sale: number, id_product: number, id_client: number}, res: exp.Response){
        const {msg, code} = await this.devolution.createDevolution(id_orden, devolution_date, ammount_total, id_sale, id_product, id_client);
        res.status(code).json(msg);
    }
}