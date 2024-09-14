import { NestFactory } from '@nestjs/core';
import { AppModule } from './app.module';
import { ConnectionDB } from './services/connectDB.service';
import * as bodyParser from 'body-parser';
import * as dotenv from "dotenv"

async function bootstrap() {
  dotenv.config()
  await new ConnectionDB();
  const app = await NestFactory.create(AppModule);
  app.use(bodyParser.json())
  await app.listen(process.env.PORT || 3000);
}
bootstrap();
