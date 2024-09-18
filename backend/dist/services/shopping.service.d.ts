import { ConnectionDB } from "./connectDB.service";
export declare class ShoppingService extends ConnectionDB {
    constructor();
    getAllShoppings(): Promise<{
        status: number;
        msg: any;
    }>;
    createShopping(id_proveedor: number, id_producto: number, id_usuario: number, id_cliente: string, fecha_compra: string, nombre_articulo: string, cantidad: number, precio_unitario: number, monto_total: number): Promise<{
        msg: any;
        code: number;
    }>;
}
