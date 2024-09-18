import { HttpStatus } from "@nestjs/common";
import { ConnectionDB } from "./connectDB.service";
export default class ClientService extends ConnectionDB {
    getAllClients(): Promise<{
        msg: any;
        code: number;
    }>;
    addClient(nombre: string, correo: string): Promise<{
        msg: any;
        code: HttpStatus;
    }>;
}
