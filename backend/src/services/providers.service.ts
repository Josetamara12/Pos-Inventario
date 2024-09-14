import { Injectable } from "@nestjs/common";
import { ConnectionDB } from "./connectDB.service";


@Injectable()
export class ProviderService extends ConnectionDB{
    constructor(){
        super()
    }

    async getAllProviders(){
        try{
            const [result]: Array<any> = await this.connect.query(`SELECT * FROM proveedores`);

            return {msg: result[0], code: 200};
        }
        catch(err){
            return {msg: err, code: 500};
        } 
    }
}