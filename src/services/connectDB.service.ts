import { Injectable } from "@nestjs/common";
import mysql from "mysql2/promise"


@Injectable()
export class ConnectionDB{
    public connect: mysql.Pool;

    async connectMysql(){
        this.connect = await mysql.createPool({
            user: "uqctyfrcyircvdoy",
            password: "1ewvuWBoGA14d2WNlbfj",
            port: 3306,
            database: "bcfxa9izmbe68thefrqb",
            host: "bcfxa9izmbe68thefrqb-mysql.services.clever-cloud.com"
        })

        this.connect.on("connection", ()=>{
            console.log("Connect with db");
        })
    }
}