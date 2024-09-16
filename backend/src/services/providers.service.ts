import { HttpStatus, Injectable } from "@nestjs/common";
import { ConnectionDB } from "./connectDB.service";


@Injectable()
export class ProviderService extends ConnectionDB{
    constructor(){
        super()
    }

    async getAllProviders(){
        try{
            const [result]: Array<any> = await this.connect.query(`SELECT * FROM proveedores`);

            return {msg: result, code: 200};
        }
        catch(err){
            return {msg: err, code: 500};
        } 
    }

    async registerProvider(name: string, contact: string, email: string){
        try{
            await this.connect.query(`
                INSERT INTO proveedores(nombre, contacto, telefono, email) 
                VALUES("${name}", "${contact}", "${contact}", "${email}")`);

                return {msg: "provider created", code: HttpStatus.CREATED}
        }
        catch(err){
            return {msg: err, code: HttpStatus.INTERNAL_SERVER_ERROR};
        } 
    }
}