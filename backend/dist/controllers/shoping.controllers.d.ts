import express from "express";
import { ShoppingService } from "src/services/shopping.service";
export declare class ShoppingController {
    private readonly shopping;
    constructor(shopping: ShoppingService);
    getShoppingsAll(req: express.Request, res: express.Response): Promise<void>;
    create_shopping(req: express.Request, res: express.Response): Promise<express.Response<any, Record<string, any>>>;
}
