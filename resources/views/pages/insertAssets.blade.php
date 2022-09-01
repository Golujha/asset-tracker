@extends('include/base')

@section('content')
<div class="w-3/5 mx-auto mt-3">
    <div class="bg-blue-200 p-3 rounded">
        <form action="{{route('assets.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="">Assets Name</label>
                <input type="text" name="assets_name" value="{{old("assets_name")}}" class="rounded w-full">
                @error('assets_name')
                    <p class="bg-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Assets Code</label>
                <input name="assets_code" value="{{old("assets_code")}}" class="rounded w-full" type="text">
                @error('assets_code')
                    <p class="bg-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Assets Type</label>
                <select name="assets_type_id" id="" class="form-select rounded w-full">
                    <option value="">Select assets type</option>
                    @foreach ($assets_type as $item)
                        <option value="{{$item->id}}">{{$item->assets_type_name}}</option>
                    @endforeach    
                </select>
                @error('assets_type')
                    <p class="text-sm bg-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Image</label>
                <input class="rounded w-full" type="file" name="assets_image">
                @error('assets_image')
                    <p class="text-sm bg-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <input type="submit" class="bg-green-700 text-white px-3 py-2 rounded w-full">
            </div>
        </form>
    </div>
 </div>    
  
@endsection