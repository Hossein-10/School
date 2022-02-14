@extends('layouts.master')
@section('content')

<style>
    form {
        background: #fff;
        padding: 4em 4em 2em;
        max-width: 400px;
        margin: 50px auto 0;
        box-shadow: 0 0 1em #a0aec0;
        border-radius: 2px;
    }
    input {
        display: block;
        box-sizing: border-box;
        width: 100%;
        outline: none;
        margin: 0;
        border: 1px solid #dbdbdb;
        border-radius: 3px;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        background: #fff
    }

    input[type="submit"] {
        background: #282d32;
        color:floralwhite;
        padding: 15px;
        border-radius: 3px;
    }


</style>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('register') }}" method="post">
    @csrf
{{--    @method('PUT')--}}

    <h2>Sign Up</h2>
    <p>
        <label for="Name" class="floatLabel">Name</label>
        <input id="Name" name="Name" type="text">
    </p>

    <p>
        <label for="Email" class="floatLabel">Email</label>
        <input id="Email" name="Email" type="text">
    </p>
    <p>
        <label for="password" class="floatLabel">Password</label>
        <input id="password" name="password" type="password">
{{--        <span>Enter a password longer than 8 characters</span>--}}
    </p>
    <p>
        <label for="confirm_password" class="floatLabel">Confirm Password</label>
        <input id="confirm_password" name="confirm_password" type="password">
{{--        <span>Your passwords do not match</span>--}}
    </p>
    <p>
        <input type="submit" value="Create Account" id="submit">
    </p>
</form>

@endsection
