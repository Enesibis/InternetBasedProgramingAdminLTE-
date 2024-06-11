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
                    <div class="container mt-5">
                        <h1 class="mb-4 text-lg font-semibold text-gray-900">Admin Messages</h1>
                        <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative">
                            <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
                                <thead>
                                <tr class="text-center">
                                    <th class="px-4 py-2 bg-gray-200 text-gray-600">Title</th>
                                    <th class="px-4 py-2 bg-gray-200 text-gray-600">Content</th>
                                    <th class="px-4 py-2 bg-gray-200 text-gray-600">Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($messages as $message)
                                    <tr class="text-center">
                                        <td class="border px-4 py-2 whitespace-pre-line">{{ $message->baslik }}</td>
                                        <td class="border px-4 py-2 whitespace-pre-line">{{ $message->icerik }}</td>
                                        <td class="border px-4 py-2">{{ $message->created_at }}</td>
                                    </tr>
                                @empty
                                    <tr class="text-center">
                                        <td colspan="3" class="border px-4 py-2">No messages found.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
