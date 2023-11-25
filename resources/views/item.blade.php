@include('header')
<script>
    $(document).ready(function () {
        $('.special.cards .image').dimmer({
            on: 'hover'
        });

    });
</script>
@if(session()->has('message'))
    <div class="ui success message">
        {{ session()->get('message') }}
    </div>
@endif

<div class="ui special cards centered">
    @foreach($items as $item)
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui dimmer">
                    <div class="content">

                    </div>
                </div>
                <img src="{{$item->image}}">
            </div>
            <div class="content">
                <a class="header"><?= $item->name ?></a>
                <div class="meta">
                    <span class="date"><?= $item->partner->name ?></span>
                </div>
            </div>
            <div class="extra content">
                <span>
                    <i class="money icon"></i>
                    <?= $item->price ?> carbon credit
                </span>
            </div>
            <div class="extra content center aligned">
                @if ($user->balance >= $item->price)
                    <div class="ui buttons">
                        <form method="POST" action="useritems">
                            @csrf
                            <input type="hidden" name="item_id" value="{{$item->id}}">
                            <input type="hidden" name="from_user_id" value="{{$user->id}}">
                            <input type="hidden" name="recipient_user_id" value="{{$user->id}}">
                            <input type="hidden" name="is_redeemed" value="0">
                            <input type="hidden" name="is_gifted" value="0">
                            <input type="hidden" name="qr_code" value="">

                            <button class="ui blue button">
                                <i class="shopping basket icon"></i>
                                Buy
                            </button>
                        </form>
                        <div class="or"></div>
                        <button class="ui positive button" onclick="$('.modal.modal.mid{{$item->id}}').modal('show');">
                            <i class="gift icon"></i>
                            Gift
                        </button>
                    </div>

                    <div class="ui mini modal mid{{$item->id}}" style="display:none;">
                        <div class="header">Which friend do you want to gift?</div>
                        <form method="POST" action="useritems">
                            @csrf
                            <input type="hidden" name="item_id" value="{{$item->id}}">
                            <input type="hidden" name="from_user_id" value="{{$user->id}}">
                            <select name="recipient_user_id" class="ui fluid dropdown">
                                @foreach($users as $user2)
                                    @if ($user2->id != $user->id)
                                        <option value="{{$user2->id}}">{{$user2->name}} ({{$user2->email}})</option>
                                    @endif
                                @endforeach
                            </select>
                            <input type="hidden" name="is_redeemed" value="0">
                            <input type="hidden" name="is_gifted" value="0">
                            <input type="hidden" name="qr_code" value="">
                        <div class="content">

                        </div>


                        <div class="actions">
                            <button class="ui positive button">Gift it!</button>
                            <div class="ui cancel button">Cancel</div>
                        </div>
                        </form>
                    </div>

                @else
                    <div class="ui red message"><i class="x icon"></i> Not enough carbon credits.</div>
                @endif
            </div>

        </div>
    @endforeach
</div>
