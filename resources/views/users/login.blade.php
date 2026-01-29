@extends('layouts.user')

@section('title', 'Login')

@section('content')
    <div class="min-h-screen w-full flex justify-center items-center">
        <div class="border-2 border-blue-200 py-3 px-5 rounded">
            <div>
                <h1 class="text-3xl font-bold py-3">Login</h1>
            </div>
            
            <div>
                <form method="POST" action="{{ route('user.login') }}" class="grid gap-2">
                    <input type="email" name="email" id="email" placeholder="Enter Email"
                        class="p-2 text-md border-2 border-black-400" autocomplete="off" />
                    <input type="password" name="password" id="password" placeholder="Enter Password"
                        class="p-2 text-md border-2 border-black-400" autocomplete="off" />
                    <button class="bg-blue-800 text-white p-1 rounded">Sign In</button>
                    @csrf
                </form>
            </div>
            
        </div>
    </div>
@endsection