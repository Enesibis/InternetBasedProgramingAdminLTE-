@extends('layouts.user')

@section('title', 'Home')

@section('contents')
<header class="bg-blue-100 shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-blue-900">
            Home
        </h1>
    </div>
</header>
<hr />
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-blue-300 rounded-lg h-96 text-xl p-6 bg-blue-50 text-blue-900"> <!-- Renkler burada değişti -->
                Welcome to the home page. If you want to see the Product List, please log in with your user account.
            </div>
        </div>
    </div>
</main>
@endsection
