@extends('Admin.users.users')

@section('user-content')
    <div class="flex justify-center">
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-slate-100 hover:bg-slate-50">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">ID: {{ $user->id }}</div>
                <div class="font-bold text-xl mb-2">Name: {{ $user->user_first_name }} {{ $user->user_last_name }}</div>
                <p class="text-gray-700 text-base">
                    Phone: {{ $user->user_phone }}
                </p>

                <p class="text-gray-700 text-base">
                    Email: {{ $user->email }}
                </p>
            </div>
        </div>
    </div>
@endsection
