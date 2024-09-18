"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.AppModule = void 0;
const common_1 = require("@nestjs/common");
const app_controller_1 = require("./app.controller");
const app_service_1 = require("./app.service");
const login_controller_1 = require("./controllers/login.controller");
const auth_service_1 = require("./services/auth.service");
const signup_controller_1 = require("./controllers/signup.controller");
const shoping_controllers_1 = require("./controllers/shoping.controllers");
const shopping_service_1 = require("./services/shopping.service");
const providers_controller_1 = require("./controllers/providers.controller");
const providers_service_1 = require("./services/providers.service");
const product_controller_1 = require("./controllers/product.controller");
const product_service_1 = require("./services/product.service");
const client_controller_1 = require("./controllers/client.controller");
const client_service_1 = require("./services/client.service");
let AppModule = class AppModule {
};
exports.AppModule = AppModule;
exports.AppModule = AppModule = __decorate([
    (0, common_1.Module)({
        imports: [],
        controllers: [app_controller_1.AppController, login_controller_1.LoginController, signup_controller_1.SignupController, shoping_controllers_1.ShoppingController, providers_controller_1.ProviderControler, product_controller_1.ProductController, client_controller_1.default],
        providers: [app_service_1.AppService, auth_service_1.AuthService, shopping_service_1.ShoppingService, providers_service_1.ProviderService, product_service_1.ProductService, client_service_1.default],
    })
], AppModule);
//# sourceMappingURL=app.module.js.map