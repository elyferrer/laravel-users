@extends('layouts.user')

@section('title', 'Register')

@section('content')
    <div class="min-h-screen w-full flex justify-center items-center">
        <div class="border-2 border-blue-200 py-3 px-5 rounded w-1/4">
            <div>
                <h1 class="text-3xl font-bold py-3">Register</h1>
            </div>
            
            <div>
                <form id="frmRegister" method="POST" action="{{ route('user.store') }}" class="grid gap-2">
                    <input type="text" name="name" id="name" placeholder="Enter Full Name"
                        class="p-2 text-md border-2 border-black-400" autocomplete="off" />
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

    <script>
        // $(document).ready(function() {
        //     $("#frmRegister").submit(function(e) {
        //         e.preventDefault();

        //         $.ajaxSetup({
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //             }
        //         });

        //         let formData = $(this).serialize();

        //         $.post('/user', formData, function(response) {
        //             console.log(response);
        //         });

        //         console.log(formData);
        //     });
        // });
    </script>
@endsection