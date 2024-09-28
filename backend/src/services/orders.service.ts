import { HttpStatus, Injectable } from '@nestjs/common';
import { ConnectionDB } from './connectDB.service';

@Injectable()
export class OrdersService extends ConnectionDB {
    async getAllOrdersByIdproduct(id_product: number){
        try{
            const [result] = await this.connect.query(`SELECT * FROM ordenes_recibidas WHERE id_producto = ${id_product}`);

            return {msg: result, code: HttpStatus.OK}
        }
        catch(err){
            return {msg: err, code: HttpStatus.INTERNAL_SERVER_ERROR}
        }
    }

    async getAllOrdersByIdprovider(id_provider: number){
        try{
            const [result] = await this.connect.query(`SELECT * FROM ordenes_recibidas WHERE id_proveedor = ${id_provider}`);

            return {msg: result, code: HttpStatus.OK}
        }
        catch(err){
            return {msg: err, code: HttpStatus.INTERNAL_SERVER_ERROR}
        }
    }

    async registerOrder(order_date: string, status: status_orders, total: number, id_product: number, id_provider: number, id_user: number){
        try {
            await this.connect.query(`
                INSERT INTO ordenes_recibidas(fecha_orden, estado, total, id_producto, id_proveedor, id_usuario)
                VALUES("${order_date}", "${status}", ${total}, ${id_product}, ${id_provider}, ${id_user})`)

            return {code: HttpStatus.CREATED, msg: "order created"}
        } catch (err) {
            return {code: HttpStatus.INTERNAL_SERVER_ERROR, msg: err}
        }
    }
}
