@include('header')
<style>
    .label {
        width: 150px !important;
    }    
</style>
<h3>Edit your profile</h3>
<form method="PUT" action="/users/1">
    <div class="ui fluid labeled input">
    <div class="ui label">
        Name
    </div>
    <input name="name" required type="text" value="{{$user->name}}">
    </div>
    <br>
    <div class="ui fluid labeled input">
    <div class="ui label">
        E-mail address
    </div>
    <input name="email" required type="text" value="{{$user->email}}">
    </div>
    <br>
    <button class="ui primary button">
        Save
    </button>
</form>
