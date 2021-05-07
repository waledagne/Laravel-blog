@extends('layouts.app')

@section('content')

 <div class="flex justify-center">
    <div class="w-5/12 bg-white p-6  rounded-lg">
        <h2 class="flex justify-center">Register</h2>
        <form action="{{ route('register') }}" method="POST">
            <div class="mb-4">
                <label for="Name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
            </div>
        </form>
    </div>
 </div>

@endsection