<link rel="stylesheet" type="text/css" href="app.css">
<link rel="stylesheet" type="text/css" href="semantic.css">
<script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
<script src="semantic.js"></script>
<div class="ui labeled icon menu">
    <div class="header item">
        Greenitica
    </div>
    <a class="item <?=str_contains(Route::current()->uri, "transactions") ? 'active' : ''?>" href="/transactions">
        <i class="list icon "></i>
        Transactions
    </a>
    <a class="item <?=str_contains(Route::current()->uri, "profile") ? 'active' : ''?>" href="/profile">
        <i class="user icon"></i>
        Profile
    </a>
    <a class="item <?=str_contains(Route::current()->uri, "items") ? 'active' : ''?>" href="/items">
        <i class="gift icon"></i>
        Items
    </a>
    <div class="right menu">
        <i class="item">Balance: <br/>        <i class="money icon"></i> </i>
        <a class="item">
            <i class="sign-out icon"></i>
            Log out

        </a>
    </div>
</div>
<style>
    .label {
        width: 150px !important;
    }    
</style>

<div class="ui center aligned text container raised">
