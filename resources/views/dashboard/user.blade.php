@extends('layouts.app')

@section('content')
<x-navbar />

<div class="px-10 py-5 overflow-hidden">
    <div class="">
        <section class="bg-white px-10 py-16 rounded-md font-sans shadow-md">
            <div class="text-end"><span class="text-yellow-900 text-sm py-2 px-4 bg-gray-100 rounded-md">{{ today()->toFormattedDayDateString() }}</span></div>
            <h1 class="text-yellow-900 text-md font-semibold text-xl">Good {{ now()->greet() }} 👋🏼, {{ Auth::user()->name }}</h1>
        </section>
    </div>

    <div>
        <section class="grid sm:grid-cols-2 grid-cols-1 text-yellow-900 py-10">
            <div class="col-span-1">
                <div class="">
                    <i class='bx bxs-user w-full h-full text-[300px] text-center text-yellow-900/50'></i>
                </div>
            </div>
            <div class="col-span-1">
                <div>
                    <h1 class="font-bold text-2xl">About Me</h1>
                    <h2 class="font-bold text-sm text-red-500 py-2">A Lead UX & UI based in Canada</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident inventore sint natus veniam consequatur nesciunt delectus. Quia quidem enim et officiis accusamus voluptate quis totam, explicabo vel corporis mollitia.
                        Harum eum ea eius tempora! Quod quidem quasi neque commodi voluptate repellendus rem magni odit modi minima, harum perferendis officia nulla, iusto, velit amet repudiandae placeat enim autem nemo reprehenderit.</p>
                </div>
                <div class="grid grid-cols-2 py-4">
                    <div class="col-span-1">
                        <p><span class="font-bold">Birthday</span> / 4th april 1998</p>
                        <p><span class="font-bold">Age</span> / 22 Yr</p>
                        <p><span class="font-bold">Residence</span> / Canada</p>
                        <p><span class="font-bold">Address</span> / California, USA</p>
                    </div>
                    <div class="col-span-1">
                        <p><span class="font-bold">Email</span> / info@domain.com</p>
                        <p><span class="font-bold">Phone</span> / 820-855-3321</p>
                        <p><span class="font-bold">Skype</span> / skype0404</p>
                        <p><span class="font-bold">Freelance</span> / Available</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white shadow px-8 py-4 rounded text-yellow-900">
            <div class="flex justify-between text-center">
                <div>
                    <p class="font-bold text-lg">500</p>
                    <p class="text-xs">Happy Clients</p>
                </div>
                <div>
                    <p class="font-bold text-lg">150</p>
                    <p class="text-xs">Project Completed</p>
                </div>
                <div>
                    <p class="font-bold text-lg">850</p>
                    <p class="text-xs">Photo Capture</p>
                </div>
                <div>
                    <p class="font-bold text-lg">190</p>
                    <p class="text-xs">Telephonic Talk</p>
                </div>
            </div>
        </section>

    </div>
</div>

@endsection
