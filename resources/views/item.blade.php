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

<div class="ui special cards">
    @foreach($items as $item)
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui dimmer">
                    <div class="content">

                    </div>
                </div>
                <img src="/images/elliot.png">
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
                    <?= $item->price ?> karbon kredit
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
                        <button class="ui positive button">
                            <i class="gift icon"></i>
                            Gift
                        </button>
                    </div>
                @else
                    <div class="ui red message"><i class="x icon"></i> Not enough carbon credits.</div>
                @endif
            </div>

        </div>
    @endforeach
</div>
