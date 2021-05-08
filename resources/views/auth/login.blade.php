@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6  rounded-lg">
        @if(session('status'))
        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
            {{ session('status')  }}
        </div>
        @endif
        <h1 class="flex justify-center font-bold">Login</h1>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="Name" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="Enter your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                    @error('email') border-red-500 @enderror" value="{{ old('email')}}">

                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                    @error('password') border-red-500 @enderror" value="">

                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 mt-4
            roundedfont-medium w-full">Register</button>
            </div>
        </form>

        @endsection