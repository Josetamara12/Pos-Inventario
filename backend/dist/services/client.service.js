"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
Object.defineProperty(exports, "__esModule", { value: true });
const common_1 = require("@nestjs/common");
const connectDB_service_1 = require("./connectDB.service");
let ClientService = class ClientService extends connectDB_service_1.ConnectionDB {
    async getAllClients() {
        try {
            const [result] = await this.connect.query(`SELECT * FROM clientes`);
            return { msg: result, code: 200 };
        }
        catch (err) {
            return { msg: err, code: 500 };
        }
    }
    async addClient(nombre, correo) {
        try {
            await this.connect.query(`INSERT INTO clientes(nombre, correo) VALUES("${nombre}", "${correo}")`);
            return { msg: "Client created", code: common_1.HttpStatus.CREATED };
        }
        catch (err) {
            return { msg: err, code: common_1.HttpStatus.INTERNAL_SERVER_ERROR };
        }
    }
};
ClientService = __decorate([
    (0, common_1.Injectable)()
], ClientService);
exports.default = ClientService;
//# sourceMappingURL=client.service.js.map