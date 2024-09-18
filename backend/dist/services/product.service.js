"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.ProductService = void 0;
const common_1 = require("@nestjs/common");
const connectDB_service_1 = require("./connectDB.service");
let ProductService = class ProductService extends connectDB_service_1.ConnectionDB {
    async getProducts() {
        try {
            const [result] = await this.connect.query(`SELECT * FROM productos`);
            return { msg: result, code: common_1.HttpStatus.OK };
        }
        catch (err) {
            return { msg: err, code: common_1.HttpStatus.INTERNAL_SERVER_ERROR };
        }
    }
    async addProduct(nombre, precio) {
        try {
            await await this.connect.query(`
                INSERT INTO productos(nombre, precio) 
                VALUES("${nombre}", ${precio})`);
            return { msg: "Product created", code: 200 };
        }
        catch (err) {
            return { msg: err, code: common_1.HttpStatus.INTERNAL_SERVER_ERROR };
        }
    }
};
exports.ProductService = ProductService;
exports.ProductService = ProductService = __decorate([
    (0, common_1.Injectable)()
], ProductService);
//# sourceMappingURL=product.service.js.map