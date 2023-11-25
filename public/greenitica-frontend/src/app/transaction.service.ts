import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../environments/environment';
import { Transaction } from './lib/interfaces';

@Injectable({
  providedIn: 'root'
})
export class TransactionService {
  private apiUrl = environment.apiURL + '/transactions';
  
  constructor(private http: HttpClient) { }
  
  getTransactions(): Observable<Transaction[]> {
    return this.http.get<Transaction[]>(this.apiUrl);
  }
}
