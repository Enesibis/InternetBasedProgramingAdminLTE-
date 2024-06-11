@extends('layouts.app')

@section('title', 'Home Product List')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3 text-gray-900">Home Product List</h1> <!-- Başlık rengi değiştirildi -->
    <a href="{{ route('admin/products/create') }}" class="text-white float-right bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Add Product</a> <!-- Buton rengi ve hover rengi değiştirildi -->
    <hr />
    @if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert"> <!-- Arka plan ve yazı rengi değiştirildi -->
        {{ Session::get('success') }}
    </div>
    @endif

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-0 py-3">#</th>
                <th scope="col" class="px-0 py-3">Title</th>
                <th scope="col" class="px-0 py-3">Price</th>
                <th scope="col" class="px-0 py-3">Product Code</th>
                <th scope="col" class="px-0 py-3">Amount</th>
                <th scope="col" class="px-0 py-3">Description</th>
                <th scope="col" class="px-0 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
            @foreach($product as $rs)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td>
                    {{ $rs->title }}
                </td>
                <td>
                    {{ $rs->price }}
                </td>
                <td>
                    {{ $rs->product_code }}
                </td>
                <td>
                    {{ $rs->amount }}
                </td>
                <td>
                    {{ $rs->description }}
                </td>
                <td class="w-36">
                    <div class="h-14 pt-5">
                        <a href="{{ route('admin/products/show', $rs->id) }}" class="text-indigo-800">Detail</a> | <!-- Renk değiştirildi -->
                        <a href="{{ route('admin/products/edit', $rs->id)}}" class="text-green-800 pl-2">Edit</a> | <!-- Renk değiştirildi -->
                        <form action="{{ route('admin/products/destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="float-right text-red-800">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="5">Product not found</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
