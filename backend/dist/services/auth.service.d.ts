import { ConnectionDB } from "./connectDB.service";
export declare class AuthService extends ConnectionDB {
    constructor();
    createUser(name: string, apellido: string, correo: string, contacto: string, password: string, fecha_nacimiento: string, genero: string): {
        msg: any;
        status: number;
    };
    loginuser(user: string, password: string): Promise<boolean>;
}
