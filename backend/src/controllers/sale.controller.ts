import { Bind, Body, Controller, Get, Param, Post, Request, Response } from '@nestjs/common';
import { SaleService } from 'src/services/sale.service';
import exp from "express"

@Controller()
export class SaleController {
    constructor(private readonly sale: SaleService){}

    @Get("/api/sales/:id")
    @Bind(Request(), Response())
    async getSaleByProduct(@Param("id") id: number, res: exp.Response){
        const {msg, code} = await this.sale.getSalesByproduct(id);
        res.status(code).json(msg);
    }

    @Post("/api/sales")
    @Bind(Request(), Response())
    async createSale(@Body() {date, id_user, id_product, id_client, total}: {date: string, id_user: number, id_product: number, id_client: number, total: number}, res: exp.Response){
        const {msg, code} = await this.sale.registerSale(date, id_user, id_product, id_client, total);
        res.status(code).json(msg);
    }
}
