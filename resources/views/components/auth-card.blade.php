{{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>

    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

    </div>
</div> --}}

<div class="card">
    <div class="card-header align-items-center">
        <p class="text-center text-uppercase font-semibold">
            {{ $logo }}
        <h4 class="text-center text-uppercase">Login</h4>
        </p>
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
    <div class="card-footer">
        Sareng
    </div>
</div>