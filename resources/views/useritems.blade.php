@include('header')
<style>
    .label {
        width: 150px !important;
    }
</style>

<h3>Here are your rewards!</h3>
<script>
    $(document).ready(function () {

        $('.special.cards .image').dimmer({
            on: 'hover'
        });
    });
</script>

@if (count($userItems) <= 0)
    <div class="ui icon message">
        <i class="thumbs down icon"></i>
        <div class="content">
            <div class="header">
                No redeemable rewards yet.
            </div>
            <p>You need to buy some gifts in order to redeem them.</p>
        </div>
    </div>
@endif

<div class="ui special cards centered">
    @foreach($userItems as $userItem)
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui dimmer">
                    <div class="content">
                        <div class="ui inverted button" onclick="$('.modal.modal.mid{{$userItem->id}}').modal('show');">
                            Display Code
                        </div>
                    </div>
                </div>
                <img src="{{$userItem->item->image}}">
            </div>
            <div class="content">
                <a class="header"><?= $userItem->item->name ?></a>
                <div class="meta">
                    <span class="date"><?= $userItem->item->partner->name ?></span>
                </div>
            </div>
        </div>
        <div class="ui mini modal mid{{$userItem->id}}" style="display:none;">
            <div class="header">Here is your code!</div>
            <div class="content">
                Code: <b>{{$userItem->qr_code}}</b>
            </div>
            <div class="actions">
                <button class="ui cancel button">OK</button>
            </div>
        </div>
    @endforeach
</div>
