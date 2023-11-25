<?php
    use App\Models\User;
?>
<link rel="stylesheet" type="text/css" href="app.css">
<link rel="stylesheet" type="text/css" href="semantic.css">
<script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
<script src="semantic.js"></script>
<div class="ui center aligned text container raised">

<div class="ui blue inverted  labeled icon menu">
    <div class="header item">
        <a href="/transactions">
            <img class="ui image" src="images/logo.jpg" width="64">
        </a>
    </div>
    <a class="item <?=str_contains(Route::current()->uri, "transactions") ? 'active' : ''?>" href="/transactions">
        <i class="list icon "></i>
        Transactions
    </a>
    <a class="item <?=str_contains(Route::current()->uri, "profile") ? 'active' : ''?>" href="/profile">
        <i class="user icon"></i>
        Profile
    </a>
    <a class="item <?=Route::current()->uri == "items" ? 'active' : ''?>" href="/items">
        <i class="gift icon"></i>
        Rewards
    </a>
    <a class="item <?=str_contains(Route::current()->uri, "useritems") ? 'active' : ''?>" href="/useritems">
        <i class="box icon"></i>
        My rewards
    </a>
    <div class="right menu">
        <i class="item"><i class="money icon"></i> Balance: {{User::findOrFail(1)->balance}} </i>
        <a class="item">
            <i class="sign-out icon"></i>
            Log out

        </a>
    </div>
</div>

