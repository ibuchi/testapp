@extends('layouts.app')

@section('content')
<x-navbar />

<div class="px-10 py-5">
    <div class="">
        <section class="bg-yellow-500 px-10 py-16 rounded-md font-sans">
            <div class="text-end"><span class="text-white text-sm py-2 px-4 bg-yellow-500 rounded-md">{{ today()->toFormattedDayDateString() }}</span></div>
            <h1 class="text-white text-md font-semibold text-xl">Good {{ now()->greet() }} 👋🏼, {{ Auth::user()->name }}</h1>
            <span class="text-white text-sm font-semibold">Admin</span>
        </section>
    </div>

    <div>
        <caption class="p-5 text-left text-gray-900 bg-white">
            <div class="flex justify-between my-3">
                <h3 class="text-lg font-semibold ">Registered Users</h3>
            </div>
        </caption>

        <table class="w-full text-left">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr class="bg-white shadow-md rounded-md">
                    <th scope="col" class="px-6 py-3">
                        S/N
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="bg-[#f2990a00] shadow rounded-lg mt-2">
                    <td class="px-6 py-4">
                        {{ $loop->iteration }}
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4 ">
                        <span class=" px-2 py-1  rounded-lg {{ $user->status === 'Active' ? 'bg-green-100': 'bg-red-100' }}">
                            {{ $user->status }}</span>
                    </td>
                    <td class="px-6 py-4 text-right" x-data="{ toggle: true }">
                        <form action="{{ route('status', $user) }}" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg px-2 py-1 transition duration-300">Update Status</button>
                        </form>
                    </td>

                </tr>
                @endforeach

                @if($users->isEmpty())
                <tr>
                    <td colspan="6" class="text-center text-muted pt-5">No user records available...</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
