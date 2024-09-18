import { HttpStatus } from "@nestjs/common";
import { ConnectionDB } from "./connectDB.service";
export declare class ProviderService extends ConnectionDB {
    constructor();
    getAllProviders(): Promise<{
        msg: any;
        code: number;
    }>;
    registerProvider(name: string, contact: string, email: string, city: string): Promise<{
        msg: any;
        code: HttpStatus;
    }>;
}
