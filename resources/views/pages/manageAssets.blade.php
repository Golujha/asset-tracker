@extends('include/base')

@section('content')
<div class=" flex">
    <div class="w-1/4 p-5 h-screen">
       @include("include/side")
    </div>
    <div class="w-3/4 ">
      <div class="flex mt-5 px-10 gap-5">
         <div class="w-full">
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold">Manage Assets</h2>
                <a href="{{route('assets.create')}}" class="mb-3  rounded-lg bg-green-600 px-2 py-1 text-white hover:bg-green-700">Add Assets</a>
            </div>
            <table class="table w-full">
                <thead class="table-header-group">
                    <tr class="bg-gray-200">
                        <th>Id</th>
                        <th>Asset Name</th>
                        <th>Asset Code</th>
                        <th>Asset Type</th>
                        <th>Asset Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($assets as $item)
                        <tr class="border border-gray-300">
                            <td class="">{{$item->id}}</td>
                            <td class="px-5">{{$item->assets_name}}</td>
                            <td class="px-5">{{$item->assets_code}}</td>
                            <td class="px-5">{{$item->getAssetType->assets_type_name}}</td>
                             <td class="px-5">{{$item->assets_image}}</td>
                            <td class="flex gap-2 px-5">
                                <form action="{{route('assets.destroy',$item)}}" method="POST">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="bg-red-500 text-white px-2 py-0.5 text-sm rounded hover:bg-red-700">Delete</button>
                                </form>

                                <a href="" class="bg-teal-700 text-white px-3 py-0.5 text-sm rounded hover:bg-teal-900">Edit</a>
                                <a href="" class="bg-yellow-700 text-white px-3 py-0.5 text-sm rounded hover:bg-yellow-900">Send</a>
                            </td>
                        </tr>
                    @endforeach 
                </thead>
           </table>
         </div>
        
    </div>
</div>

  
@endsection