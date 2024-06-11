@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
<h1 class="font-bold text-2xl ml-3 text-gray-900">Add Product</h1> <!-- Başlık rengi değiştirildi -->
<hr />
<div class="border-b border-gray-200 pb-12"> <!-- Border ve arkaplan rengi değiştirildi -->
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <form action="{{ route('admin/products/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                <div class="mt-2">
                    <input type="text" name="title" id="title" class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm sm:leading-6"> <!-- Border ve placeholder rengi değiştirildi -->
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                <div class="mt-2">
                    <input id="price" name="price" type="text" class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm sm:leading-6"> <!-- Border ve placeholder rengi değiştirildi -->
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Product Code</label>
                <div class="mt-2">
                    <input id="product_code" name="product_code" type="text" class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm sm:leading-6"> <!-- Border ve placeholder rengi değiştirildi -->
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Amount</label>
                <div class="mt-2">
                    <input id="amount" name="amount" type="text" class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm sm:leading-6"> <!-- Border ve placeholder rengi değiştirildi -->
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                <div class="mt-2">
                    <textarea name="description" placeholder="Description" rows="3" class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm sm:leading-6"></textarea> <!-- Border ve placeholder rengi değiştirildi -->
                </div>
            </div>
            <button type="submit" class="flex w-full justify-center mt-10 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button> <!-- Buton rengi değiştirildi -->
        </form>
    </div>
</div>
@endsection
