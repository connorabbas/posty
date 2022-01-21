@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-3/12 bg-white p-6 rounded-lg shadow-md">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input name="name" type="text" class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('name') border-red-500 @enderror" placeholder="Your Name">
                @error('name')
                <div class="text-red-500 my-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="sr-only">Username</label>
                <input name="username" type="text" class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('username') border-red-500 @enderror" placeholder="Your Username">
                @error('username')
                <div class="text-red-500 my-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input name="email" type="email" class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('email') border-red-500 @enderror" placeholder="Your Email">
                @error('email')
                <div class="text-red-500 my-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input name="password" type="text" class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('password') border-red-500 @enderror" placeholder="Your Password">
                @error('password')
                <div class="text-red-500 my-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Repeat Password</label>
                <input name="password_confirmation" type="text" class="bg-gray-100 border-2 w-full p-3 rounded-lg" placeholder="Repeat Your Password">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded-lg font-medium w-full">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection