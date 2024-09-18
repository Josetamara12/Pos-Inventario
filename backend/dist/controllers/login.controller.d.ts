import express from "express";
import { AuthService } from "src/services/auth.service";
export declare class LoginController {
    private readonly login;
    constructor(login: AuthService);
    loginUser(req: express.Request, res: express.Response): Promise<void>;
}
