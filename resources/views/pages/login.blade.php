@extends('include/base')

@section('content')
   <div class="flex bg-black h-screen place-content-center place-items-center">
    <div class="w-1/4 mx-auto">
        <div class="bg-light rounded p-4">
            <h1 class="font-sans font-semibold">Login here</h1>
            <form action="" method="POST">
                @csrf
                <div class="flex flex-col my-3">
                    <label for="" class="font-xs text-gray-500">email</label>
                    <input type="text" placeholder="enter email here" class="shadow-sm flex-1 border-2 p-2 outline-none focus:border-green-500">
                </div>
                <div class="flex flex-col my-3">
                    <label for="" class="font-xs text-gray-500">password</label>
                    <input type="text" placeholder="enter email here" class="shadow-sm flex-1 border-2 p-2 outline-none focus:border-green-500">
                </div>
                <div class="flex">
                    <input type="submit" class="bg-green-700 px-5 py-4 flex-1 text-white rounded-md hover:bg-green-800" value="login here">
                </div>
            </form>
        </div>
    </div>
   </div>
   @endsection