@extends('components.layout')

@section('content')

<div class="flex justify-center mt-20 rounded-lg">
    <img src="https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif" alt="Vision Icon" class="">
</div>

<div class="text-center">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">Currently, We don't have any openings.</h1>
    <h3 class="text-xl text-gray-600 mb-6">The page you are looking for is not available!</h3>
    <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Go to Home</a>
</div>

@endsection
