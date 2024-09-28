import { Bind, Body, Controller, Get, Param, Post, Request, Response } from '@nestjs/common';
import { OrdersService } from 'src/services/orders.service';
import exp from "express"

@Controller()
export class OrdersController {
    constructor(private readonly orderService: OrdersService){}

    @Get("api/orders/product/:id")
    @Bind(Request(), Response())
    async getOrdersByProduct(@Param("id") id: number, @Response() res: exp.Response){
        const {code, msg} = await this.orderService.getAllOrdersByIdproduct(id);

        res.status(code).json(msg);
    }

    @Get("api/orders/provider/:id")
    @Bind(Request(), Response())
    async getOrdersByProvider(@Param("id") id: number, @Response() res: exp.Response){
        const {code, msg} = await this.orderService.getAllOrdersByIdprovider(id);

        res.status(code).json(msg);
    }

    @Post("api/orders")
    @Bind(Request(), Response())
    async registerOrder(
        @Body() {order_date, status, total, id_product, id_user, id_provider}
        : {order_date: string, status: status_orders, total: number, id_product: number, id_user: number, id_provider: number}, res: exp.Response){
            const {msg, code} = await this.orderService.registerOrder(order_date, status, total, id_product, id_provider, id_user);
            res.status(code).json(msg); 
        }
}
