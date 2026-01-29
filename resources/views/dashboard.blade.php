@extends('layouts.user')

@section('title', 'Dashboard')

@section('content')
    <div class="min-h-screen w-full flex justify-center items-center">
        <div class="border-2 border-blue-200 p-5 rounded w-1/4">
            <div class="grid gap-2">
                <h1 class="text-3xl font-bold">Dashboard</h1>

                <p class="text-xl"> Hello {{ auth()->user()->name }}</p>

                <p class="text-md"> Welcome to your home page. Amazing starts from here!</p>

                <form action="{{ route('user.logout') }}" method="POST" class="flex justify-end">
                    @method("DELETE")
                    @csrf
                    <button type="submit" class="bg-red-500 text-white px-3 py-2 rounded">Logout</button>
                </form>
            </div>
        </div>
    </div>
@endsection