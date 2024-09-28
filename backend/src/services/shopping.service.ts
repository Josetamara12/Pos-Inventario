import { HttpStatus, Injectable } from "@nestjs/common";
import { ConnectionDB } from "./connectDB.service";


@Injectable()
export class ShoppingService extends ConnectionDB {
    constructor() {
        super()
    }

    async getAllShoppings() {
        try {
            const [result]: Array<any> = await this.connect.query(`SELECT cps.*, pt.nombre as Nombre_producto,
                pt.precio as Precio_producto, pv.nombre as Nombre_proveedor, 
                pv.telefono as Telefono_proveedor, us.nombre as Nombre_usuario, us.correo as Correo_usuario FROM compras cps
                INNER JOIN productos pt ON cps.id_producto = pt.id_producto
                INNER JOIN proveedores pv ON cps.id_proveedor = pv.id_proveedor
                INNER JOIN usuarios us ON cps.id_usuario = us.id_usuario`);

            return { status: 200, msg: result };
        }
        catch (err) {
            return { status: 500, msg: err };
        }
    }

    async createShopping(id_proveedor: number, id_producto: number, id_usuario: number, id_cliente: string, fecha_compra: string, nombre_articulo: string, cantidad: number, precio_unitario: number, monto_total: number) {
        try {
            await this.connect.query(`
                INSERT INTO compras(id_proveedor, id_producto, id_usuario, id_cliente, fecha_compra, nombre_articulo, cantidad, precio_unitario, monto_total)
                VALUES(${id_proveedor}, ${id_producto}, ${id_usuario}, ${id_cliente}, "${fecha_compra}", "${nombre_articulo}", ${cantidad}, ${precio_unitario}, ${monto_total})`)
            return { msg: "Shopping created", code: HttpStatus.CREATED }
        }
        catch (err) {
            return { msg: err, code: 500 }
        }
    }
}