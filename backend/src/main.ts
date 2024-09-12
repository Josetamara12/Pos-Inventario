import { NestFactory } from '@nestjs/core';
import { AppModule } from './app.module';
import { ConnectionDB } from './services/connectDB.service';

async function bootstrap() {
  const app = await NestFactory.create(AppModule);
  const connection = new ConnectionDB();
  connection.connectMysql();
  await app.listen(3000);
}
bootstrap();
