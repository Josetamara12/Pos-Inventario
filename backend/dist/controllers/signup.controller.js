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
exports.SignupController = void 0;
const common_1 = require("@nestjs/common");
const auth_service_1 = require("../services/auth.service");
const express_1 = require("express");
const bycr = require("bcrypt");
let SignupController = class SignupController {
    constructor(auth) {
        this.auth = auth;
    }
    async signupUser(req, res) {
        const { name, last_name, address, contact, password, birth_date, gender } = req.body;
        if (!name || !last_name || !address || !contact || !password || !birth_date || !gender) {
            return res.status(common_1.HttpStatus.BAD_REQUEST).json({
                error: "Missing required fields: name, address, contact, password, birth_date, and gender"
            });
        }
        const pasw = await bycr.hash(password, 10);
        const { msg, status } = this.auth.createUser(name, last_name, address, contact, pasw.toString(), birth_date, gender);
        res.status(status).json({ msg: msg, pasw: pasw });
    }
};
exports.SignupController = SignupController;
__decorate([
    (0, common_1.Post)("/signup"),
    (0, common_1.Bind)((0, common_1.Request)(), (0, common_1.Response)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [Object, Object]),
    __metadata("design:returntype", Promise)
], SignupController.prototype, "signupUser", null);
exports.SignupController = SignupController = __decorate([
    (0, common_1.Controller)(),
    __metadata("design:paramtypes", [auth_service_1.AuthService])
], SignupController);
//# sourceMappingURL=signup.controller.js.map