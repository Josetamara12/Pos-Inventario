import { AuthService } from "src/services/auth.service";
import express from "express";
export declare class SignupController {
    private readonly auth;
    constructor(auth: AuthService);
    signupUser(req: express.Request, res: express.Response): Promise<express.Response<any, Record<string, any>>>;
}
