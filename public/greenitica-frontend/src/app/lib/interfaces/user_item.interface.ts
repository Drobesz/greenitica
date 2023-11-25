import { Item } from "./item.interface";
import { User } from "./user.interface";

export interface UserItem {
    id: number,
    item: Item,
    from_user: User,
    recipient_user: User,
    is_redeemed: boolean,
    is_gifted: boolean,
    qr_code: number
}