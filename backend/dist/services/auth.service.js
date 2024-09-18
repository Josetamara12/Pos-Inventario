"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.AuthService = void 0;
const common_1 = require("@nestjs/common");
const connectDB_service_1 = require("./connectDB.service");
const bycript = require("bcrypt");
let AuthService = class AuthService extends connectDB_service_1.ConnectionDB {
    constructor() {
        super();
    }
    createUser(name, apellido, correo, contacto, password, fecha_nacimiento, genero) {
        try {
            this.connect.query(`
                INSERT INTO usuarios(nombre, correo, apellido, contacto, password, fecha_nacimiento, genero) 
                VALUES("${name}", "${apellido}", "${correo}", "${contacto}", "${password}", "${fecha_nacimiento}", "${genero}")`);
            return { msg: "User created", status: common_1.HttpStatus.CREATED };
        }
        catch (err) {
            return { msg: err, status: 500 };
        }
    }
    async loginuser(user, password) {
        const [result] = await this.connect.query(`SELECT * FROM usuarios WHERE nombre = "${user}"`);
        if (result.length > 0) {
            const passwordEncript = result[0].password;
            console.log(passwordEncript);
            if (await bycript.compare(password, passwordEncript)) {
                return true;
            }
            else {
                return false;
            }
        }
        else {
            return false;
        }
    }
};
exports.AuthService = AuthService;
exports.AuthService = AuthService = __decorate([
    (0, common_1.Injectable)(),
    __metadata("design:paramtypes", [])
], AuthService);
//# sourceMappingURL=auth.service.js.map