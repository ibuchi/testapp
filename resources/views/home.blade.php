@extends('layouts.app')

@section('content')

<div class="bg-white">
    <header class="absolute inset-x-0 top-0 z-50">
        <x-navbar />
    </header>



    <div class="px-20 py-10">


        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-y-8 sm:gap-8 my-10 font-sans">
            <!-- card -->
            <div class="bg-red-500 px-5  rounded-md ">
                <h2 class="text-white py-3">Event Created</h2>
                <div class="flex flex-row justify-between py-3">
                    <span class="text-white text-xl font-semibold">30</span>
                    <span class="w-10 h-10 rounded-full bg-slate-100/50 text-white flex justify-center items-center"><i class='bx bx-detail text-xl'></i></span>
                </div>
            </div>
            <!-- card -->
            <div class="bg-blue-700 px-5  rounded-md ">
                <h2 class="text-white py-3">Event Created</h2>
                <div class="flex flex-row justify-between py-3">
                    <span class="text-white text-xl font-semibold">30</span>
                    <span class="w-10 h-10 rounded-full bg-slate-100/50 text-white flex justify-center items-center"><i class='bx bx-detail text-xl'></i></span>
                </div>
            </div>
            <!-- card -->
            <div class="bg-blue-500 px-5 rounded-md ">
                <h2 class="text-white py-3">Event Created</h2>
                <div class="flex flex-row justify-between py-3">
                    <span class="text-white text-xl font-semibold">30</span>
                    <span class="w-10 h-10 rounded-full bg-slate-100/50 text-white flex justify-center items-center"><i class='bx bx-detail text-xl'></i></span>
                </div>
            </div>
            <!-- card -->
            <div class="bg-blue-700 px-5  rounded-md ">
                <h2 class="text-white py-3">Event Created</h2>
                <div class="flex flex-row justify-between py-3">
                    <span class="text-white text-xl font-semibold">30</span>
                    <span class="w-10 h-10 rounded-full bg-slate-100/50 text-white flex justify-center items-center"><i class='bx bx-detail text-xl'></i></span>
                </div>
            </div>
        </section>

        <section class="grid grid-cols-1  lg:grid-cols-4 gap-y-8 lg:gap-x-8 my-10 font-sans">
            <div class="col-span-3 bg-white  rounded-md">
                <div class="flex flex-row justify-between">
                    <h2 class="text-gray-700 font-semibold p-10">Incomplete Order</h2>
                    <a href="#" class="text-red-400 text-xs p-10">
                        <i class="bx bx-signal-5 text-left my-auto text-yellow-400"></i>
                        View All Order
                    </a>
                </div>
                <table class="w-full table table-fixed">
                    <thead>
                        <tr class="text-left border-b-2 shadow-md ">
                            <th class="text-gray-700 font-semibold uppercase text-sm pl-10">Customer</th>
                            <th class="text-gray-700 font-semibold uppercase text-sm ">Order ID</th>
                            <th class="text-gray-700 font-semibold uppercase text-sm ">Amount</th>
                            <th class="text-gray-700 font-semibold uppercase text-sm ">Date</th>
                            <th class="text-gray-700 font-semibold uppercase text-sm ">Status</th>
                            <th class="text-gray-700 font-semibold uppercase text-sm pr-10">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-gray-700 font-normal text-sm p-10 text-center" colspan="6">No pending orer available...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-span-1 grid grid-cols-2 lg:grid-cols-1 gap-8">
                <!-- card -->
                <div class="bg-white px-5  rounded-md  py-3">
                    <h2 class="text-blue-700 pb-3 font-bold">Orders</h2>
                    <div class="flex flex-row justify-between ">
                        <div class="">
                            <div class="flex flex-row">
                                <div class="w-10 h-10 bg-blue-900 rounded-full  border  border-gray-300  overflow-hidden mr-1">
                                    <img src="" alt="avatar" class="w-full object-cover">
                                </div>
                                <div>
                                    <h1 class="text-gray-700 text-sm font-semibold ">$0.00</h1>
                                    <span class="text-red-500 text-xs">Total - 0</span>
                                </div>
                            </div>
                        </div>
                        <div><i class="bx bx-signal-5 text-left my-auto  text-2xl  text-yellow-400"></i></div>
                    </div>
                </div>
                <!-- card -->
                <div class="bg-white px-5  rounded-md  py-3">
                    <h2 class="text-blue-700 pb-3 font-bold">Orders</h2>
                    <div class="flex flex-row justify-between ">
                        <div class="">
                            <div class="flex flex-row">
                                <div class="w-10 h-10 bg-blue-900 rounded-full  border  border-gray-300   overflow-hidden mr-1">
                                    <img src="" alt="avatar" class="w-full object-cover">
                                </div>
                                <div>
                                    <h1 class="text-gray-700 text-sm font-semibold ">$0.00</h1>
                                    <span class="text-red-500 text-xs">Total - 0</span>
                                </div>
                            </div>
                        </div>
                        <div><i class="bx bx-signal-5 text-left my-auto  text-2xl  text-green-400"></i></div>
                    </div>
                </div>
            </div>
        </section>
    </div>




    @endsection
