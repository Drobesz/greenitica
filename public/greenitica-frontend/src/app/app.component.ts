import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterOutlet } from '@angular/router';
import { User, Transaction, Partner, UserItem, Item } from './lib/interfaces';
import { UserService } from './user.service';
import { TransactionService } from './transaction.service';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [CommonModule, RouterOutlet],
  templateUrl: './app.component.html',
  styleUrl: './app.component.scss'
})
export class AppComponent {
  title = 'greenitica-frontend';
  users: User[] = [];
  transactions: Transaction[] = [];

  constructor(private userService : UserService, private transactionService : TransactionService) {}

  ngOnInit() {
    this.userService.getUsers().subscribe(x => this.users = x);
    this.transactionService.getTransactions().subscribe(x => this.transactions = x);
    console.log(this.users);
    console.log(this.transactions);
  }
}
