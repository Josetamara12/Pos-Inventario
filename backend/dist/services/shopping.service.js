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
exports.ShoppingService = void 0;
const common_1 = require("@nestjs/common");
const connectDB_service_1 = require("./connectDB.service");
let ShoppingService = class ShoppingService extends connectDB_service_1.ConnectionDB {
    constructor() {
        super();
    }
    async getAllShoppings() {
        try {
            const [result] = await this.connect.query(`SELECT * FROM compras`);
            return { status: 200, msg: result };
        }
        catch (err) {
            return { status: 500, msg: err };
        }
    }
    async createShopping(id_proveedor, id_producto, id_usuario, id_cliente, fecha_compra, nombre_articulo, cantidad, precio_unitario, monto_total) {
        try {
            await this.connect.query(`
                INSERT INTO compras(id_proveedor, id_producto, id_usuario, id_cliente, fecha_compra, nombre_articulo, cantidad, precio_unitario, monto_total)
                VALUES(${id_proveedor}, ${id_producto}, ${id_usuario}, ${id_cliente}, "${fecha_compra}", "${nombre_articulo}", ${cantidad}, ${precio_unitario}, ${monto_total})`);
            return { msg: "Shopping created", code: common_1.HttpStatus.CREATED };
        }
        catch (err) {
            return { msg: err, code: 500 };
        }
    }
};
exports.ShoppingService = ShoppingService;
exports.ShoppingService = ShoppingService = __decorate([
    (0, common_1.Injectable)(),
    __metadata("design:paramtypes", [])
], ShoppingService);
//# sourceMappingURL=shopping.service.js.map