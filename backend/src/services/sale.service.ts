import { HttpStatus, Injectable } from '@nestjs/common';
import { ConnectionDB } from './connectDB.service';

@Injectable()
export class SaleService extends ConnectionDB {
    async getSalesByproduct(id_product: number){
        try{
            const [result] = await this.connect.query(`SELECT * FROM ventas WHERE id_producto = ${id_product}`);
            return {msg: result, code: HttpStatus.OK}
        }
        catch(err){
            return {msg: err, code: HttpStatus.INTERNAL_SERVER_ERROR}
        }
    }

    async registerSale(date: string, id_user: number, id_product: number, id_client: number, total: number){
        try{
            await this.connect.query(`
                INSERT INTO ventas(fecha, id_usuario, id_producto, id_cliente, total)
                VALUES("${date}", ${id_user}, ${id_product}, ${id_client}, ${total})`);

                return {msg: "Sale created", code: HttpStatus.CREATED}
        }
        catch(err){
            return {msg: err, code: HttpStatus.INTERNAL_SERVER_ERROR}
        }
    }
}
