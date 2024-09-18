import express from "express";
import { ProviderService } from "src/services/providers.service";
export declare class ProviderControler {
    private readonly provider;
    constructor(provider: ProviderService);
    getProviders(req: express.Request, res: express.Response): Promise<void>;
    createProvider(req: express.Request, res: express.Response): Promise<express.Response<any, Record<string, any>>>;
}
