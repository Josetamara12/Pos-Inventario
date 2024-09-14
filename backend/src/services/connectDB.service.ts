import { Injectable } from "@nestjs/common";
import * as mysql from "mysql2/promise"


@Injectable()
export class ConnectionDB {
    public connect: mysql.Pool;

    constructor() {
        try {
            this.connect = mysql.createPool({
                user: process.env.DB_USER,
                password: process.env.DB_PASSWORD,
                port: parseInt(process.env.DB_PORT!),
                database: process.env.DB_DATABASE,
                host: process.env.DB_HOST
            })
            console.log("Connect with db");
        }
        catch (err) {
            console.log(err);
        }
    }

}