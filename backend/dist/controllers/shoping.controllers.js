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
exports.ShoppingController = void 0;
const common_1 = require("@nestjs/common");
const express_1 = require("express");
const shopping_service_1 = require("../services/shopping.service");
let ShoppingController = class ShoppingController {
    constructor(shopping) {
        this.shopping = shopping;
    }
    async getShoppingsAll(req, res) {
        const result = await this.shopping.getAllShoppings();
        res.status(result.status).json(result.msg);
    }
    async create_shopping(req, res) {
        const { id_proveedor, id_user, id_client, id_product, date_shop, name_article, ammount, ammount_unit, ammount_total } = req.body;
        if (!id_proveedor || !date_shop || !id_user || !id_client || !id_product || !name_article || !ammount || !ammount_unit || !ammount_total) {
            return res.status(common_1.HttpStatus.BAD_REQUEST).json({
                error: "Missing required fields: id_proveedor, id_user, id_product, date_shop, name_article, ammount, ammount_unit, and ammount_total"
            });
        }
        const result = await this.shopping.createShopping(id_proveedor, id_product, id_user, id_client, date_shop, name_article, ammount, ammount_unit, ammount_total);
        res.status(await result.code).send(await result.msg);
    }
};
exports.ShoppingController = ShoppingController;
__decorate([
    (0, common_1.Get)("/api/shopping"),
    (0, common_1.Bind)((0, common_1.Request)(), (0, common_1.Response)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [Object, Object]),
    __metadata("design:returntype", Promise)
], ShoppingController.prototype, "getShoppingsAll", null);
__decorate([
    (0, common_1.Post)("/api/shopping"),
    (0, common_1.Bind)((0, common_1.Request)(), (0, common_1.Response)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [Object, Object]),
    __metadata("design:returntype", Promise)
], ShoppingController.prototype, "create_shopping", null);
exports.ShoppingController = ShoppingController = __decorate([
    (0, common_1.Controller)(),
    __metadata("design:paramtypes", [shopping_service_1.ShoppingService])
], ShoppingController);
//# sourceMappingURL=shoping.controllers.js.map