"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const core_1 = require("@nestjs/core");
const app_module_1 = require("./app.module");
const connectDB_service_1 = require("./services/connectDB.service");
const bodyParser = require("body-parser");
const dotenv = require("dotenv");
async function bootstrap() {
    dotenv.config();
    await new connectDB_service_1.ConnectionDB();
    const app = await core_1.NestFactory.create(app_module_1.AppModule);
    app.use(bodyParser.json());
    await app.listen(process.env.PORT || 3000);
}
bootstrap();
//# sourceMappingURL=main.js.map