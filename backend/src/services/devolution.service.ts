import { HttpStatus, Inject, Injectable } from "@nestjs/common";
import { ConnectionDB } from "./connectDB.service";


@Injectable()
export class DevolutionService extends ConnectionDB{
    async getDevolutions(){
        try{
            const [result] = await this.connect.query(`SELECT * FROM devoluciones`);

            return {msg: result, code: HttpStatus.OK}
        }
        catch(err){
            return {msg: err, code: HttpStatus.INTERNAL_SERVER_ERROR}
        }
    }

    async getDevolutionById(id: number){
        try{
            const [result] = await this.connect.query(`SELECT * FROM devoluciones WHERE id_devolucion = ${id}`);

            return {msg: result, code: HttpStatus.OK}
        }
        catch(err){
            return {msg: err, code: HttpStatus.INTERNAL_SERVER_ERROR}
        }
    }

    async createDevolution(id_orden: number, devolution_date: string, ammount_total: number, id_sale: number, id_product: number, id_client: number){
        try{
            await this.connect.query(`
                INSERT INTO devoluciones(id_orden, fecha_devolucion, monto_total, id_venta, id_producto, id_cliente)
                VALUES(${id_orden}, "${devolution_date}", ${ammount_total}, ${id_sale}, ${id_product}, ${id_client})`);

            return {msg: "Devolution created", code: HttpStatus.CREATED}
        }
        catch(err){
            return {msg: err, code: HttpStatus.INTERNAL_SERVER_ERROR}
        }
    }
}