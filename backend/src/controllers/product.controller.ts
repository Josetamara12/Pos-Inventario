import { Bind, Controller, Get, Post, Request, Response } from "@nestjs/common";
import express from "express";
import { ProductService } from "src/services/product.service";


@Controller()
export class ProductController{
    constructor(private readonly products: ProductService){}

    @Get("/api/products")
    @Bind(Request(), Response())
    async getAllProducts(req: express.Request, res: express.Response){
        const {msg, code} = await this.products.getProducts();
        res.status(code).json(msg);
    }

    @Post("/api/products")
    @Bind(Request(), Response())
    async addProduct(req: express.Request, res: express.Response){
        const {name, price} = req.body;

        const {msg, code} = await this.products.addProduct(name, price);
        res.status(code).json(msg);
    }
}