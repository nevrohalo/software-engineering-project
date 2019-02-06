@extends('layouts/standard-layout')

@section('content')
<div class="login-wrapper">
    <img src="../pics/organizer-login-icon.png" class="avatar">
    <h1>Organizer Portal</h1>

    <form action="" method="POST">
        @csrf

        <p>Email: </p>
        <input type="text" name="username" placeholder="Enter Email" required autofocus>
        <p>Password: </p>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="submit" value="Login">
    </form>
    
    <div class="login-links">
        <p id="simple">Don't have an account? <a href="/">Sign Up.</a></p><br>
    </div>
</div>
@endsection