import { HttpStatus, Injectable } from "@nestjs/common";
import { ConnectionDB } from "./connectDB.service";
import * as bycript from "bcrypt"
import { JwtService } from "@nestjs/jwt";

@Injectable()
export class AuthService extends ConnectionDB {
    public jwtService: JwtService = new JwtService({secretOrPrivateKey: process.env.SECRETJWT});
    constructor() {
        super();
    }
    createUser(name: string, apellido: string, correo: string, contacto: string, password: string, fecha_nacimiento: string, genero: string) {
        try {
            this.connect.query(`
                INSERT INTO usuarios(nombre, correo, apellido, contacto, password, fecha_nacimiento, genero) 
                VALUES("${name}", "${apellido}", "${correo}", "${contacto}", "${password}", "${fecha_nacimiento}", "${genero}")`);

            return {msg: "User created", status: HttpStatus.CREATED}
        }
        catch(err){
            return {msg: err, status: 500}
        }
    }
    async loginuser(user: string, password: string) {
        const [result]: Array<any> = await this.connect.query(`SELECT * FROM usuarios WHERE nombre = "${user}"`);
        if (result.length > 0) {
            const passwordEncript = result[0].password;
            console.log(passwordEncript);
            
            if (await bycript.compare(password, passwordEncript)) {
                return true
            }
            else {
                return false
            }
        }
        else {
            return false
        }
    }
}