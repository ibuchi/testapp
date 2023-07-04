@extends('layouts.app')

@section('content')
<x-navbar />

<div class="px-10 py-5 overflow-hidden">
    <div class="">
        <section class="bg-yellow-500 px-10 py-16 rounded-md font-sans">
            <div class="text-end"><span class="text-white text-sm py-2 px-4 bg-yellow-500 rounded-md">{{ today()->toFormattedDayDateString() }}</span></div>
            <h1 class="text-white text-md font-semibold text-xl">Good {{ now()->greet() }} 👋🏼, {{ Auth::user()->name }}</h1>
            <span class="text-white text-sm font-semibold">Admin</span>
        </section>
    </div>

    <div>
        <x-notification />

        <div class="grid grid-cols-3 gap-6 py-6">
            <div class="col-span-1 bg-yellow-900 px-5  rounded-md ">
                <h2 class="text-white py-3 font-bold">Total users</h2>
                <div class="flex flex-row justify-between py-3">
                    <span class="text-white text-xl font-semibold">{{ $users->count() }}</span>
                    <span class="w-10 h-10 rounded-full bg-slate-100/50 text-white flex justify-center items-center"><i class='bx bx-detail text-xl'></i></span>
                </div>
            </div>

            <div class="col-span-1 bg-yellow-500 px-5  rounded-md ">
                <h2 class="text-white py-3 font-bold">Active users</h2>
                <div class="flex flex-row justify-between py-3">
                    <span class="text-white text-xl font-semibold">{{ $activeUsers }}</span>
                    <span class="w-10 h-10 rounded-full bg-slate-100/50 text-white flex justify-center items-center"><i class='bx bx-detail text-xl'></i></span>
                </div>
            </div>

            <div class="col-span-1 bg-yellow-900 px-5  rounded-md ">
                <h2 class="text-white py-3 font-bold">Inactive users</h2>
                <div class="flex flex-row justify-between py-3">
                    <span class="text-white text-xl font-semibold">{{ $inactiveUsers }}</span>
                    <span class="w-10 h-10 rounded-full bg-slate-100/50 text-white flex justify-center items-center"><i class='bx bx-detail text-xl'></i></span>
                </div>
            </div>
        </div>

        <div class="overflow-auto">
            <caption class="p-5 text-left text-gray-900 bg-white">
                <div class="flex justify-between my-3">
                    <h3 class="text-lg font-semibold ">Registered Users</h3>
                </div>
            </caption>

            <table class="w-full text-left">
                <thead class="text-sm text-gray-700 uppercase bg-gray-50">
                    <tr class="bg-white shadow rounded-md">
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
                            <form action="{{ route('users.update', $user) }}?status={{ $user->isActive() ? 'Inactive' : 'Active' }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="bg-{{ $user->isActive() ? 'red' : 'green' }}-500 hover:bg-{{ $user->isActive() ? 'red' : 'green' }}-600 text-white rounded-lg px-2 py-1 px-1 whitespace-nowrap transition duration-300">
                                    @if ($user->isActive())
                                    {{ __('Deactivate') }}
                                    @else
                                    {{ __('Activate') }}
                                    @endif
                                </button>
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
</div>

@endsection