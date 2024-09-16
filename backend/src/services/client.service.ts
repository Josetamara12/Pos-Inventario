import { HttpCode, HttpStatus, Injectable } from "@nestjs/common";
import { ConnectionDB } from "./connectDB.service";


@Injectable()
export default class ClientService extends ConnectionDB{
    async getAllClients(){
        try{
            const [result] = await this.connect.query(`SELECT * FROM clientes`);
            return {msg: result, code: 200}
        }
        catch(err){
            return {msg: err, code: 500}
        }
    }

    async addClient(nombre: string, correo: string){
        try{
            await this.connect.query(`INSERT INTO clientes(nombre, correo) VALUES("${nombre}", "${correo}")`);
            return {msg: "Client created", code: HttpStatus.CREATED};
        }
        catch(err){
            return {msg: err, code: HttpStatus.INTERNAL_SERVER_ERROR};
        }
    }
}