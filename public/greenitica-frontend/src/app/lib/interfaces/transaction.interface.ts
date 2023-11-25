import { Partner } from "./partner.interface";
import { User } from "./user.interface";

export interface Transaction {
    id: number,
    user: User,
    partner: Partner,
    amount: number,
    category: string,
    date: Date,
    carbon_token: number
}