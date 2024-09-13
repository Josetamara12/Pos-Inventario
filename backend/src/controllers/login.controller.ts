import { Bind, Controller, Post, Request, Response } from "@nestjs/common";
import express from "express"
import { AuthService } from "src/services/auth.service";

@Controller()
export class LoginController{
    constructor(private readonly login: AuthService) {}

    @Post("/login")
    @Bind(Request(), Response())
    async loginUser(req: express.Request, res: express.Response){
        const {user, password} = req.body;
        if(await this.login.loginuser(user, password)){
          res.status(200).json({user: user}); 
        }
        else{
            res.status(404).send("user not exist")
        }
    }
}