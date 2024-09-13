import { NestFactory } from '@nestjs/core';
import { AppModule } from './app.module';
import { ConnectionDB } from './services/connectDB.service';
import * as bodyParser from 'body-parser';

async function bootstrap() {
  await new ConnectionDB();
  const app = await NestFactory.create(AppModule);
  app.use(bodyParser.json())
  
  await app.listen(3000);
}
bootstrap();
