import { HttpStatus } from "@nestjs/common";
import { ConnectionDB } from "./connectDB.service";
export declare class ProductService extends ConnectionDB {
    getProducts(): Promise<{
        msg: any;
        code: HttpStatus;
    }>;
    addProduct(nombre: string, precio: number): Promise<{
        msg: string;
        code: number;
    } | {
        msg: any;
        code: HttpStatus;
    }>;
}
