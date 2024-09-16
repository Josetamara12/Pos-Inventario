import { HttpStatus, Injectable } from "@nestjs/common";
import { ConnectionDB } from "./connectDB.service";


@Injectable()
export class ShoppingService extends ConnectionDB {
    constructor() {
        super()
    }

    async getAllShoppings() {
        try {
            const [result]: Array<any> = await this.connect.query(`SELECT * FROM compras`);

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