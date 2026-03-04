<nav class="sticky top-0 z-50 flex justify-between w-full bg-linear-to-br from-amber-500 to-yellow-400">
    <div class="py-5 px-5 flex items-center gap-3">
        <img src="{{ asset('img/logo.png') }}" class="w-12 h-12 ">
        <span class="text-3xl font-bold text-emerald-700">Teh Sumo</span>
    </div>
    <div class="flex items-center">
        <div class="py-5 space-x-6 px-10 cursor-pointer text-emerald-700 text-2xs font-bold">
            <a href="{{ route('beranda') }}" class="rounded p-3 bg-gradient hover:bg-amber-600"> Home </a>
            <a href="{{ route('beranda') }}" class="rounded p-3 bg-gradient hover:bg-amber-600"> About Us </a>
            <a href="#produk" class="rounded p-3 bg-gradient hover:bg-amber-600"> Product </a>
            <a href="#lokasi" class="rounded p-3 bg-gradient hover:bg-amber-600"> Lokasi </a>
        </div>
    </div>
</nav>
