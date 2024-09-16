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

            return { status: 200, msg: result[0] };
        }
        catch (err) {
            return { status: 500, msg: err };
        }
    }

    async createShopping(proveedor: string, fecha_compra: string, nombre_articulo: string, cantidad: number, precio_unitario: number, monto_total: number) {
        try {
            await this.connect.query(`
                INSERT INTO compras(proveedor, fecha_compra, nombre_articulo, cantidad, precio_unitario, monto_total)
                VALUES("${proveedor}", "${fecha_compra}", "${nombre_articulo}", ${cantidad}, ${precio_unitario}, ${monto_total})`)
            return { msg: "Shopping created", code: HttpStatus.CREATED }
        }
        catch (err) {
            return { msg: err, code: 500 }
        }
    }
}