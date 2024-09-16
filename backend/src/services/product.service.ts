import { HttpStatus, Injectable } from "@nestjs/common";
import { ConnectionDB } from "./connectDB.service";


@Injectable()
export class ProductService extends ConnectionDB{
    async getProducts(){
        try{
            const [result] = await this.connect.query(`SELECT * FROM productos`);

            return {msg: result, code: HttpStatus.OK}
        }
        catch(err){
            return {msg: err, code: HttpStatus.INTERNAL_SERVER_ERROR}
        }
        
    }

    async addProduct(nombre: string, precio: number){
        try{
            await await this.connect.query(`
                INSERT INTO productos(nombre, precio) 
                VALUES("${nombre}", ${precio})`);

            return {msg: "Product created", code: 200}
        }
        catch(err){
            return {msg: err, code: HttpStatus.INTERNAL_SERVER_ERROR}
        }
    }
}