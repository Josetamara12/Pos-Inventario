import { Module } from '@nestjs/common';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { LoginController } from './controllers/login.controller';
import { AuthService } from './services/auth.service';
import { SignupController } from './controllers/signup.controller';

@Module({
  imports: [],
  controllers: [AppController, LoginController, SignupController],
  providers: [AppService, AuthService],
})
export class AppModule {}
