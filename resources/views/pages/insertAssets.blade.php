@extends('include/base')

@section('content')
    <div class="flex">
        <div class="w-1/2 p-5 h-screen">
           @include("include/side")
        
             <div class="w-1/2">
                <div class="bg-blue-200 p-3 rounded">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Assets Name</label>
                            <input type="text" name="assets_name" class="rounded w-full">
                        </div>
                        <div class="mb-3">
                            <label for="">Assets code</label>
                            <textarea name="assets_code" class="rounded w-full"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Assets type</label>
                            <textarea name="assets_type" class="rounded w-full"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Assets image</label>
                            <textarea name="assets_image" class="rounded w-full"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="bg-green-700 text-white px-3 py-4 rounded w-full">
                        </div>
                    </form>
                </div>
             </div>
          </div>
        </div>

  
@endsection