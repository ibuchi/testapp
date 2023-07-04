@extends('layouts.app')

@section('content')
<div class="content-wrapper h-full w-full overflow-x-hidden pb-16">
    <section class="w-full">
        <div class="bg-main h-screen w-full lg:px-12 fixed z-10 mt-[4rem] py-6">

            <div class="w-full z-50 flex flex-col items-center justify-center">
                <div class=" bg-green-500 w-[36rem] h-[500px] shadow-md text-white rounded-3xl p-5 flex flex-col items-center justify-center">
                    <h2 class="text-main font-bold text-4xl my-3">SUCCESS</h2>
                    <p class="font-medium text-xl">Congratulations, You've registered successfully! 🎉</p>
                    <p class="my-1 font-normal text-base text-center">Please note that your account is pending, and you won't be able to log in until it is approved by the admin. You will receive a confirmation email when your account has been activated.</p>
                    <p>Or <a class="text-2xl font-bold underline" href="{{ route('landing') }}">return to home</a></p>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection