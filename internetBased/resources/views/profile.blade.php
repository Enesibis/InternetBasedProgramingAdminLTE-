@extends('layouts.app')

@section('title', 'Profile Settings')

@section('contents')
    <header class="bg-green-100 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-green-900">Profile</h1>
        </div>
    </header>
    <hr />
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.profile.update') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-green-700">Name</label>
                    <input id="name" name="name" type="text" value="{{ auth()->user()->name }}" class="mt-1 focus:ring-teal-500 focus:border-teal-500 block w-full shadow-sm sm:text-sm border-teal-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-green-700">Email</label>
                    <input id="email" name="email" type="email" value="{{ auth()->user()->email }}" class="mt-1 focus:ring-teal-500 focus:border-teal-500 block w-full shadow-sm sm:text-sm border-teal-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="current_password" class="block text-sm font-medium text-green-700">Current Password</label>
                    <input id="current_password" name="current_password" type="password" class="mt-1 focus:ring-teal-500 focus:border-teal-500 block w-full shadow-sm sm:text-sm border-teal-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-green-700">New Password</label>
                    <input id="password" name="password" type="password" class="mt-1 focus:ring-teal-500 focus:border-teal-500 block w-full shadow-sm sm:text-sm border-teal-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-green-700">Confirm New Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 focus:ring-teal-500 focus:border-teal-500 block w-full shadow-sm sm:text-sm border-teal-300 rounded-md">
                </div>
                <div class="mt-6">
                    <button type="submit" class="w-full px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">Save Profile</button>
                </div>
            </form>
        </div>
    </div>
@endsection
