@include('header')
<style>
    .label {
        width: 150px !important;
    }
</style>

<h3>Here's your rewards!</h3>

<div class="ui special cards">
    @foreach($userItems as $item)
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui dimmer">
                    <div class="content">

                    </div>
                </div>
                <img src="/images/elliot.png">
            </div>
            <div class="content">
                <a class="header"><?= $item->item->name ?></a>
                <div class="meta">
                    <span class="date"><?= $item->item->partner> ?></span>
                </div>
            </div>
        </div>
    @endforeach
</div>