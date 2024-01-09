@extends('layouts.app')
@section('content')

<div>

<div>
    @if (session('message'))
        <div>{{ session('message') }}</div>
    @endif

    <form wire:submit="register">
    @csrf
        <label for="phone_number">Phone Number:</label>
        <input wire:model="phone" type="text" name="phone" required>

        <label for="password">Password:</label>
        <input wire:model="password" type="password" name="password" required>

        <label for="password_confirmation">Confirm Password:</label>
        <input wire:model="password_confirmation" type="password" name="password_confirmation" required>

        <button type="submit">Register</button>

        <a href="login">Login</a>
    </form>
</div>

</div>
@endsection