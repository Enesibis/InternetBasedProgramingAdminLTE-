@extends('layouts.user')

@section('title', 'Home')

@section('contents')
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Home
            </h1>
        </div>
    </header>
    <hr />
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-0 py-3">#</th>
                            <th scope="col" class="px-0 py-3">Title</th>
                            <th scope="col" class="px-0 py-3">Price</th>
                            <th scope="col" class="px-0 py-3">Product Code</th>
                            <th scope="col" class="px-0 py-3">Amount</th>
                            <th scope="col" class="px-0 py-3">Description</th>
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
                                    <td class="w-100">
                                        <div class="h-14 pt-5">
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
            </div>
        </div>
    </main>
@endsection
