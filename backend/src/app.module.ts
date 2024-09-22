import { Module } from '@nestjs/common';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { LoginController } from './controllers/login.controller';
import { AuthService } from './services/auth.service';
import { SignupController } from './controllers/signup.controller';
import { ShoppingController } from './controllers/shoping.controllers';
import { ShoppingService } from './services/shopping.service';
import { ProviderControler } from './controllers/providers.controller';
import { ProviderService } from './services/providers.service';
import { ProductController } from './controllers/product.controller';
import { ProductService } from './services/product.service';
import ClientsController from './controllers/client.controller';
import ClientService from './services/client.service';
import { DevolutionController } from './controllers/devolution.controller';
import { DevolutionService } from './services/devolution.service';
import { SaleController } from './controllers/sale.controller';
import { SaleService } from './services/sale.service';

@Module({
  imports: [],
  controllers: [AppController, LoginController, SignupController, ShoppingController, ProviderControler, ProductController, ClientsController, DevolutionController, SaleController],
  providers: [AppService, AuthService, ShoppingService, ProviderService, ProductService, ClientService, DevolutionService, SaleService],
})
export class AppModule {}
