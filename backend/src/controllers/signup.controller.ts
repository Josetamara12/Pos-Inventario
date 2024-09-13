import { Bind, Controller, Post, Request, Response } from "@nestjs/common";
import { AuthService } from "src/services/auth.service";
import express from "express"
import * as bycr from "bcrypt"

@Controller()
export class SignupController{
     constructor(private readonly auth: AuthService){}

     @Post("/signup")
     @Bind(Request(), Response())
    async signupUser(req: express.Request, res: express.Response){
        const {name, address, contact, password, birth_date, gender} = req.body;
        const pasw = await bycr.hash(password, 10);
        const {msg, status} = this.auth.createUser(name, address, contact, pasw.toString(), birth_date, gender);
        res.status(status).json({msg: msg, pasw: pasw});
     }
}