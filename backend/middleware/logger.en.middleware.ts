import { HttpStatus, Injectable, NestMiddleware } from "@nestjs/common";
import { JwtService } from "@nestjs/jwt";
import { Request, Response } from "express";

@Injectable()
export class LoggerMiddleware implements NestMiddleware {
    constructor(private jwtService: JwtService) { }

    async use(req: Request, res: Response, next: (error?: Error | any) => void) {
        const { user, pass, secret_key } = req.query;
        const [type, token] = req.headers.authorization?.split(' ') ?? [];

        if (!user && !pass && !token) {
            res.status(HttpStatus.UNAUTHORIZED).send("user and pass is required")
        }
        else if (token) {
            if (secret_key) {
                try {
                    await this.jwtService.verifyAsync(
                        token,
                        {
                            secret: secret_key.toString()
                        }
                    )
                    next();
                }
                catch (err) {
                    res.status(HttpStatus.UNAUTHORIZED).json(err);
                }
            }
            else {
                res.status(HttpStatus.UNAUTHORIZED).json("query ?secret_key is required in params");
            }
        }
        else {
            if (user == process.env.USER && pass == process.env.PASS) {
                next();
            }
            else {
                res.status(HttpStatus.UNAUTHORIZED).send("user or pass is invalid")
            }
        }

    }
}