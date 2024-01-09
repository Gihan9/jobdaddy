@extends('layouts.app')

@section('content')
<div>
<div>
    @if (session('error'))
        <div>{{ session('error') }}</div>
    @endif
   
    <form wire:submit.prevent="login">
         @csrf
        <label for="phone_number">Phone Number:</label>
        <input wire:model="phone" type="text" name="phone" required>

        <label for="password">Password:</label>
        <input wire:model="password" type="password" name="password" required>

        <button type="submit">Login</button>
        <a href="register">register</a>
    </form>
   
</div>

</div>
@endsection
