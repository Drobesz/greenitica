@include('header')
<script>
    $(document).ready(function () {
        $('.special.cards .image').dimmer({
            on: 'hover'
        });

    });
</script>
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
                    <?=$item->price?> karbon kredit
                </span>
            </div>
            <div class="extra content center aligned">
                <div class="ui buttons">
                    <button class="ui blue button">
                        <i class="shopping basket icon"></i>
                        Buy
                    </button>
                    <div class="or"></div>
                    <button class="ui positive button">
                        <i class="gift icon"></i>
                        Gift
                    </button>
                </div>
            </div>

        </div>
    @endforeach
</div>
