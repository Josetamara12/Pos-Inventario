import { Injectable } from "@nestjs/common";
import * as mysql from "mysql2/promise"


@Injectable()
export class ConnectionDB {
    public connect: mysql.Pool;

    constructor() {
        try {
            this.connect = mysql.createPool({
                user: "uqctyfrcyircvdoy",
                password: "1ewvuWBoGA14d2WNlbfj",
                port: 3306,
                database: "bcfxa9izmbe68thefrqb",
                host: "bcfxa9izmbe68thefrqb-mysql.services.clever-cloud.com"
            })
            console.log("Connect with db");
        }
        catch (err) {
            console.log(err);
        }
    }

}