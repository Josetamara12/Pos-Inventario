import { MessageBody, OnGatewayConnection, OnGatewayDisconnect, SubscribeMessage, WebSocketGateway, WebSocketServer } from '@nestjs/websockets';
import {Server, Socket} from "socket.io"

@WebSocketGateway()
export class MessagesGateway implements OnGatewayConnection, OnGatewayDisconnect {
  @WebSocketServer()
  server: Server


  @SubscribeMessage('message')
  handleMessage(@MessageBody() data: string): string {
    this.server.emit('new_msg', data);
    return data;
  }

  handleConnection(client: Socket, ...args: any[]) {
      console.log(`client connected: ${client.id}`);
  }

  handleDisconnect(client: Socket) {
      console.log(`client disconnected ${client.id}`);
      
  }
}
