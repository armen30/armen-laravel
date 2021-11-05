@extends('app.master')
<form action="/users" method="post">
    @method('put')
    @csrf
    <div>
        Name<input type="name" name="name" value="{{$user->name}}">
    </div>
    <div>
        Email<input type="email" name="email" value="{{$user->email}}">
    </div>
    <div>
        Password<input type="password" name="password">
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Update">
    </div>
</form>
