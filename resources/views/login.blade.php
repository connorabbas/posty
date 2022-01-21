@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-3/12 bg-white p-6 rounded-lg shadow-md">
        @if (session('invalid_login'))
        <div class="mb-4 text-white bg-red-500 text-center rounded-lg p-3">
            {{session('invalid_login')}}
        </div>
        @endif
        <form action="{{ route('login') }}" method="post">
            @csrf
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
                <input name="password" type="password" class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('password') border-red-500 @enderror" placeholder="Your Password">
                @error('password')
                <div class="text-red-500 my-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2"> 
                    <label for="remember">Remember me</label>
                </div>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded-lg font-medium w-full">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection