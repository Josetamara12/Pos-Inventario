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
exports.ProviderService = void 0;
const common_1 = require("@nestjs/common");
const connectDB_service_1 = require("./connectDB.service");
let ProviderService = class ProviderService extends connectDB_service_1.ConnectionDB {
    constructor() {
        super();
    }
    async getAllProviders() {
        try {
            const [result] = await this.connect.query(`SELECT * FROM proveedores`);
            return { msg: result, code: 200 };
        }
        catch (err) {
            return { msg: err, code: 500 };
        }
    }
    async registerProvider(name, contact, email, city) {
        try {
            await this.connect.query(`
                INSERT INTO proveedores(nombre, contacto, telefono, email, ciudad) 
                VALUES("${name}", "${contact}", "${contact}", "${email}", "${city}")`);
            return { msg: "provider created", code: common_1.HttpStatus.CREATED };
        }
        catch (err) {
            return { msg: err, code: common_1.HttpStatus.INTERNAL_SERVER_ERROR };
        }
    }
};
exports.ProviderService = ProviderService;
exports.ProviderService = ProviderService = __decorate([
    (0, common_1.Injectable)(),
    __metadata("design:paramtypes", [])
], ProviderService);
//# sourceMappingURL=providers.service.js.map