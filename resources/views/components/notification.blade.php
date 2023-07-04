@if (session()->has('success'))
<div class="p-5 bg-green-100">
    <p class="text-green-500">{{ session('success') }}</p>
</div>

@endif

@if (session()->has('unauthorized'))
<div class="p-5 bg-red-100">
    <p class="text-red-500">{{ session('unauthorized') }}</p>
</div>

@endif