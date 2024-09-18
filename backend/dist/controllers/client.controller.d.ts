import ClientService from "src/services/client.service";
import express from "express";
export default class ClientsController {
    private readonly client;
    constructor(client: ClientService);
    getClients(req: express.Request, res: express.Response): Promise<void>;
    registerClient(req: express.Request, res: express.Response): Promise<void>;
}
