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
const common_1 = require("@nestjs/common");
const client_service_1 = require("../services/client.service");
const express_1 = require("express");
let ClientsController = class ClientsController {
    constructor(client) {
        this.client = client;
    }
    async getClients(req, res) {
        const { msg, code } = await this.client.getAllClients();
        res.status(code).json(msg);
    }
    async registerClient(req, res) {
        const { name, address } = req.body;
        const { code, msg } = await this.client.addClient(name, address);
        res.status(code).json(msg);
    }
};
__decorate([
    (0, common_1.Get)("/api/clients"),
    (0, common_1.Bind)((0, common_1.Request)(), (0, common_1.Response)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [Object, Object]),
    __metadata("design:returntype", Promise)
], ClientsController.prototype, "getClients", null);
__decorate([
    (0, common_1.Post)("/api/clients"),
    (0, common_1.Bind)((0, common_1.Request)(), (0, common_1.Response)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [Object, Object]),
    __metadata("design:returntype", Promise)
], ClientsController.prototype, "registerClient", null);
ClientsController = __decorate([
    (0, common_1.Controller)(),
    __metadata("design:paramtypes", [client_service_1.default])
], ClientsController);
exports.default = ClientsController;
//# sourceMappingURL=client.controller.js.map