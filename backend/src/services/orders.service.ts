import { HttpStatus, Injectable } from '@nestjs/common';
import { ConnectionDB } from './connectDB.service';

@Injectable()
export class OrdersService extends ConnectionDB {
    async getAllOrdersByIdproduct(id_product: number){
        try{
            const [result] = await this.connect.query(`SELECT ord.*, pt.nombre as nombre_producto, pt.precio,
                us.nombre as nombre_usuario FROM ordenes_recibidas ord 
                INNER JOIN productos pt ON ord.id_producto = pt.id_producto
                INNER JOIN usuarios us ON ord.id_usuario = us.id_usuario
                WHERE ord.id_producto = ${id_product}`);

            return {msg: result, code: HttpStatus.OK}
        }
        catch(err){
            return {msg: err, code: HttpStatus.INTERNAL_SERVER_ERROR}
        }
    }

    async getAllOrdersByIdprovider(id_provider: number){
        try{
            const [result] = await this.connect.query(`SELECT ord.*, pv.nombre as nombre_proveedor,
                pv.telefono as telefono_provedor, us.nombre as nombre_usuario FROM ordenes_recibidas ord
                INNER JOIN proveedores pv ON ord.id_proveedor = pv.id_proveedor
                INNER JOIN usuarios us ON ord.id_usuario = us.id_usuario
                WHERE ord.id_proveedor = ${id_provider}`);

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