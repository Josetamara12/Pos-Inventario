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
exports.LoginController = void 0;
const common_1 = require("@nestjs/common");
const express_1 = require("express");
const auth_service_1 = require("../services/auth.service");
let LoginController = class LoginController {
    constructor(login) {
        this.login = login;
    }
    async loginUser(req, res) {
        const { user, password } = req.body;
        if (await this.login.loginuser(user, password)) {
            res.status(200).json({ user: user });
        }
        else {
            res.status(404).send("user not exist");
        }
    }
};
exports.LoginController = LoginController;
__decorate([
    (0, common_1.Post)("/login"),
    (0, common_1.Bind)((0, common_1.Request)(), (0, common_1.Response)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [Object, Object]),
    __metadata("design:returntype", Promise)
], LoginController.prototype, "loginUser", null);
exports.LoginController = LoginController = __decorate([
    (0, common_1.Controller)(),
    __metadata("design:paramtypes", [auth_service_1.AuthService])
], LoginController);
//# sourceMappingURL=login.controller.js.map