import { Bind, Controller, Get, Post, Request, Response } from "@nestjs/common";
import express from "express"

@Controller()
export class LoginController{
    @Post("/login")
    @Bind(Request(), Response())
    loginUser(req: express.Request, res: express.Response){
        
    }
}