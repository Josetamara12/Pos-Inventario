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
exports.ProviderControler = void 0;
const common_1 = require("@nestjs/common");
const express_1 = require("express");
const providers_service_1 = require("../services/providers.service");
let ProviderControler = class ProviderControler {
    constructor(provider) {
        this.provider = provider;
    }
    async getProviders(req, res) {
        const { code, msg } = await this.provider.getAllProviders();
        res.status(code).json(msg);
    }
    async createProvider(req, res) {
        const { name, contact, email, city } = req.body;
        if (!name || !contact || !email || !city) {
            return res.status(common_1.HttpStatus.BAD_REQUEST).json({
                error: "Missing required fields: name, contact, and email"
            });
        }
        const { msg, code } = await this.provider.registerProvider(name, contact, email, city);
        res.status(code).json(msg);
    }
};
exports.ProviderControler = ProviderControler;
__decorate([
    (0, common_1.Get)("/api/providers"),
    (0, common_1.Bind)((0, common_1.Request)(), (0, common_1.Response)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [Object, Object]),
    __metadata("design:returntype", Promise)
], ProviderControler.prototype, "getProviders", null);
__decorate([
    (0, common_1.Post)("/api/providers"),
    (0, common_1.Bind)((0, common_1.Request)(), (0, common_1.Response)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [Object, Object]),
    __metadata("design:returntype", Promise)
], ProviderControler.prototype, "createProvider", null);
exports.ProviderControler = ProviderControler = __decorate([
    (0, common_1.Controller)(),
    __metadata("design:paramtypes", [providers_service_1.ProviderService])
], ProviderControler);
//# sourceMappingURL=providers.controller.js.map