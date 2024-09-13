import { Injectable } from "@nestjs/common";
import { ConnectionDB } from "./connectDB.service";


@Injectable()
export class AuthService extends ConnectionDB {
    constructor(){
        super();
    }
    createUser(name: string, apellido: string, contacto: string, password: string, fecha_nacimiento: string, genero: string) {
        try{
            this.connect.query(`
                INSERT INTO usuarios(nombre, apellido, contacto, password, fecha_nacimiento, genero) 
                VALUES("${name}", "${apellido}", "${contacto}", "${password}", "${fecha_nacimiento}", "${genero}")`);

            return {msg: "User created", status: 200}
        }
        catch(err){
            return {msg: err, status: 500}
        }
    }
    async loginuser(user: string, password: string) {
        const result: Array<any> = await this.connect.query(`SELECT * FROM usuarios WHERE nombre = "${user}" AND password = "${password}"`);
        if (result[0].length > 0) {
            return true
        }
        else {
            return false
        }
    }
}