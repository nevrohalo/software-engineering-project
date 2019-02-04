@extends('layouts/standard-layout')

@section('content')
<div class="login-wrapper">
    <img src="../pics/student-login-icon.png" class="avatar">
    <h1>Student Portal</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <p>Email: </p>
        <input type="text" name="username" placeholder="Enter Email" required autofocus>
        <p>Password: </p>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="submit" value="Login">
    </form>

    <div class="login-links">
        <p id="simple">Don't have an account? <a href="/">Sign Up.</a></p>
        <p id="simple">Not a student? <a href="/organizer-portal">Sign in as Organizer.</a></p><br>
    </div>
</div>
@endsection