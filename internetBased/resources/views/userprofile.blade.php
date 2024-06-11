@extends('layouts.user')

@section('title', 'Profile Settings')

@section('contents')
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Profile
            </h1>
        </div>
    </header>
    <hr />
    <div class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <form method="POST" enctype="multipart/form-data" action="{{ route('profile.update') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input name="name" type="text" value="{{ auth()->user()->name }}" class="w-full rounded border px-3 py-2" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input name="email" type="text" value="{{ auth()->user()->email }}" class="w-full rounded border px-3 py-2" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="current_password">
                    Current Password
                </label>
                <input name="current_password" type="password" class="w-full rounded border px-3 py-2" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    New Password
                </label>
                <input name="password" type="password" class="w-full rounded border px-3 py-2" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">
                    Confirm New Password
                </label>
                <input name="password_confirmation" type="password" class="w-full rounded border px-3 py-2" />
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Save Profile
                </button>
            </div>
        </form>
    </div>
@endsection
