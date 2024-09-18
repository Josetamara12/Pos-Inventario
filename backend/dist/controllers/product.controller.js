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
exports.ProductController = void 0;
const common_1 = require("@nestjs/common");
const express_1 = require("express");
const product_service_1 = require("../services/product.service");
let ProductController = class ProductController {
    constructor(products) {
        this.products = products;
    }
    async getAllProducts(req, res) {
        const { msg, code } = await this.products.getProducts();
        res.status(code).json(msg);
    }
    async addProduct(req, res) {
        const { name, price } = req.body;
        const { msg, code } = await this.products.addProduct(name, price);
        res.status(code).json(msg);
    }
};
exports.ProductController = ProductController;
__decorate([
    (0, common_1.Get)("/api/products"),
    (0, common_1.Bind)((0, common_1.Request)(), (0, common_1.Response)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [Object, Object]),
    __metadata("design:returntype", Promise)
], ProductController.prototype, "getAllProducts", null);
__decorate([
    (0, common_1.Post)("/api/products"),
    (0, common_1.Bind)((0, common_1.Request)(), (0, common_1.Response)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [Object, Object]),
    __metadata("design:returntype", Promise)
], ProductController.prototype, "addProduct", null);
exports.ProductController = ProductController = __decorate([
    (0, common_1.Controller)(),
    __metadata("design:paramtypes", [product_service_1.ProductService])
], ProductController);
//# sourceMappingURL=product.controller.js.map