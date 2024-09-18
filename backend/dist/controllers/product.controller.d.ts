import express from "express";
import { ProductService } from "src/services/product.service";
export declare class ProductController {
    private readonly products;
    constructor(products: ProductService);
    getAllProducts(req: express.Request, res: express.Response): Promise<void>;
    addProduct(req: express.Request, res: express.Response): Promise<void>;
}
