@extends('layout.layout')
@section('title', 'Teh Sumo')
@section('content')
    <main class="grow bg-slate-50 py-12 px-6">
        <div class="max-w-6xl mx-auto">

            <!-- Hero Section Ringkas -->
            <div id="hero" class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-extrabold text-emerald-900 mb-4">
                    Segarkan Harimu dengan <span class="text-orange-500">Teh Sumo</span>
                </h1>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Racikan teh alami dengan kualitas premium untuk menemani setiap momen produktifmu.
                </p>
            </div>

            <section id="about" class="py-20 bg-white">
                <div class="max-w-6xl mx-auto px-6">

                    <!-- Header Section -->
                    <div class="mb-16">
                        <span class="text-orange-500 font-bold uppercase tracking-[0.2em] text-xs">Profil Brand</span>
                        <h2 class="text-4xl font-black text-emerald-900 mt-2">Dibalik <span class="text-orange-500">Teh
                                Sumo.</span></h2>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

                        <!-- Blok Visi: Fokus & Tegas -->
                        <div
                            class="group p-10 rounded-[2rem] bg-emerald-900 text-white shadow-2xl shadow-emerald-900/20 relative overflow-hidden">
                            <!-- Aksen Dekorasi -->
                            <div class="absolute -top-12 -right-12 w-32 h-32 bg-white/5 rounded-full"></div>

                            <h3 class="text-xl font-bold text-orange-400 mb-6 flex items-center gap-3">
                                <span class="w-8 h-[2px] bg-orange-400"></span> VISI
                            </h3>
                            <p class="text-2xl font-medium leading-relaxed italic">
                                "Menjadi brand minuman es teh lokal yang terpercaya, terlaris, dan berkelanjutan di Jakarta
                                Timur melalui inovasi rasa dan pelayanan terbaik."
                            </p>
                        </div>

                        <!-- Blok Misi: Poin-poin Bersih -->
                        <div class="p-2">
                            <h3 class="text-xl font-bold text-emerald-900 mb-8 flex items-center gap-3">
                                <span class="w-8 h-[2px] bg-emerald-900"></span> MISI KAMI
                            </h3>

                            <div class="space-y-10">
                                <!-- Item Misi -->
                                <div class="flex gap-6">
                                    <div class="text-orange-500 font-black text-3xl opacity-30">01</div>
                                    <div>
                                        <h4 class="text-lg font-bold text-emerald-900">Kepercayaan & Loyalitas</h4>
                                        <p class="text-slate-500 text-sm mt-1 leading-relaxed">
                                            Membangun hubungan jangka panjang melalui pelayanan yang jujur dan transparan.
                                        </p>
                                    </div>
                                </div>

                                <div class="flex gap-6">
                                    <div class="text-orange-500 font-black text-3xl opacity-30">02</div>
                                    <div>
                                        <h4 class="text-lg font-bold text-emerald-900">Komitmen Mutu</h4>
                                        <p class="text-slate-500 text-sm mt-1 leading-relaxed">
                                            Menjaga kualitas rasa di setiap gelas yang kami sajikan untuk Anda.
                                        </p>
                                    </div>
                                </div>

                                <div class="flex gap-6">
                                    <div class="text-orange-500 font-black text-3xl opacity-30">03</div>
                                    <div>
                                        <h4 class="text-lg font-bold text-emerald-900">Kebersihan Lingkungan</h4>
                                        <p class="text-slate-500 text-sm mt-1 leading-relaxed">
                                            Menjaga keasrian dan kebersihan area usaha sebagai bentuk tanggung jawab kami.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="py-20 bg-white">
                <div class="max-w-6xl mx-auto px-6">
                    <!-- Judul yang lebih santai -->
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-emerald-900">Kenapa Pilih <span class="text-orange-500">Teh
                                Sumo?</span></h2>
                        <div class="w-16 h-1 bg-yellow-400 mx-auto mt-3 rounded-full"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Item 1: Alami -->
                        <div
                            class="group p-8 rounded-2xl bg-slate-50 border border-transparent hover:border-emerald-200 hover:bg-white hover:shadow-xl transition-all duration-300">
                            <div
                                class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                                🍃
                            </div>
                            <h3 class="text-xl font-bold text-emerald-900 mb-3">Pucuk Alami</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Diseduh dari daun teh asli pilihan tanpa tambahan pemanis buatan. Rasa aslinya bikin tenang.
                            </p>
                        </div>

                        <!-- Item 2: Hemat -->
                        <div
                            class="group p-8 rounded-2xl bg-slate-50 border border-transparent hover:border-orange-200 hover:bg-white hover:shadow-xl transition-all duration-300">
                            <div
                                class="w-14 h-14 bg-orange-100 text-orange-500 rounded-xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                                💰
                            </div>
                            <h3 class="text-xl font-bold text-emerald-900 mb-3">Harga Sahabat</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Kualitas kafe tapi harga tetap oke di dompet. Segar di tenggorokan, aman di tabungan.
                            </p>
                        </div>

                        <!-- Item 3: Cepat -->
                        <div
                            class="group p-8 rounded-2xl bg-slate-50 border border-transparent hover:border-yellow-300 hover:bg-white hover:shadow-xl transition-all duration-300">
                            <div
                                class="w-14 h-14 bg-yellow-100 text-yellow-600 rounded-xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                                ⚡
                            </div>
                            <h3 class="text-xl font-bold text-emerald-900 mb-3">Kilat Saji</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Nggak perlu nunggu lama. Pesan sekarang, dalam 5 menit kesegaran sudah di tanganmu.
                            </p>
                        </div>
                    </div>
                </div>
            </section>


            <section id="produk" class="py-24 bg-slate-50 scroll-mt-20">
                <div class="max-w-6xl mx-auto px-6">

                    <!-- Judul Section -->
                    <div class="text-center mb-16">
                        <span class="text-orange-500 font-bold uppercase tracking-widest text-xs">Pilih Mood-mu</span>
                        <h2 class="text-4xl font-black text-emerald-900 mt-2">Menu <span class="text-orange-500">Teh
                                Sumo</span></h2>
                        <div class="w-16 h-1 bg-yellow-400 mx-auto mt-4 rounded-full"></div>
                    </div>

                    <!-- Filter Produk (Interaktif) -->
                    <div class="flex justify-center gap-4 mb-10 text-sm font-semibold">
                        <button onclick="filterProduct('all')"
                            class="px-6 py-2 rounded-full bg-emerald-600 text-white shadow-md hover:bg-emerald-700 transition">Semua</button>
                        <button onclick="filterProduct('tea')"
                            class="px-6 py-2 rounded-full bg-white text-emerald-700 border border-emerald-200 hover:bg-emerald-50 transition">Teh
                            Original</button>
                        <button onclick="filterProduct('freshmilk')"
                            class="px-6 py-2 rounded-full bg-white text-emerald-700 border border-emerald-200 hover:bg-emerald-50 transition">Freshmilk
                        </button>
                    </div>


                    <!-- Grid Produk -->
                    <div id="product-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                        <!-- Card 1: Tea -->
                        <div class="product-item bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all border border-slate-100 overflow-hidden group"
                            data-category="tea">
                            <div class="h-56 bg-orange-100 flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('img/tehsumo.png') }}" alt="Sumo Original"
                                    class="group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="p-6">
                                <span class="text-xs font-bold text-orange-500 uppercase tracking-widest">Signature
                                    Menu</span>
                                <h3 class="text-xl font-bold text-emerald-900 mt-1">Sumo Tea</h3>
                                <p class="text-slate-500 text-sm mt-2 leading-relaxed">"Kesegaran murni dari pucuk teh
                                    pilihan.
                                    Aroma melatinya yang menenangkan bikin dahaga langsung hilang. Teman setia di segala
                                    suasana!".
                                </p>
                                <div class="mt-6 flex justify-between items-center">
                                    <span class="text-lg font-bold text-emerald-700">Rp 4.000</span>
                                    <button
                                        class="bg-emerald-600 text-white p-2 px-4 rounded-lg hover:bg-emerald-700 transition active:scale-95">Beli</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: Freshmilk -->
                        <div class="product-item bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all border border-slate-100 overflow-hidden group"
                            data-category="freshmilk">
                            <div class="h-56 bg-yellow-100 flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('img/chocolate.jpeg') }}" alt="Sumo Chocolate"
                                    class="group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="p-6">
                                <span class="text-xs font-bold text-yellow-600 uppercase tracking-widest">Freshness</span>
                                <h3 class="text-xl font-bold text-emerald-900 mt-1">Sumo Chocolate Freshmilk</h3>
                                <p class="text-slate-500 text-sm mt-2 leading-relaxed">Perpaduan cokelat premium dan susu
                                    segar yang
                                    super creamy. Mood booster paling ampuh buat harimu!.</p>
                                <div class="mt-6 flex justify-between items-center">
                                    <span class="text-lg font-bold text-emerald-700">Rp 13.000</span>
                                    <button
                                        class="bg-emerald-600 text-white p-2 px-4 rounded-lg hover:bg-emerald-700 transition active:scale-95">Beli</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3: Freshmilk -->
                        <div class="product-item bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all border border-slate-100 overflow-hidden group"
                            data-category="freshmilk">
                            <div class="h-56 bg-red-100 flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('img/blueberry.jpg') }}" alt="Sumo Berry"
                                    class="group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="p-6">
                                <span class="text-xs font-bold text-red-500 uppercase tracking-widest">New Flavor</span>
                                <h3 class="text-xl font-bold text-emerald-900 mt-1">Sumo Berry Freshmilk</h3>
                                <p class="text-slate-500 text-sm mt-2 leading-relaxed">Sensasi manis asam buah beri yang
                                    menyegarkan
                                    tenggorokan.</p>
                                <div class="mt-6 flex justify-between items-center">
                                    <span class="text-lg font-bold text-emerald-700">Rp 10.000</span>
                                    <button
                                        class="bg-emerald-600 text-white p-2 px-4 rounded-lg hover:bg-emerald-700 transition active:scale-95">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="flex justify-center pt-10">
            <button onclick="openQris()"
                class=" bg-emerald-600 text-white p-2 px-4 rounded-lg hover:bg-emerald-700 transition">
                Bayar QRIS
            </button>
        </div> --}}

                <!-- Modal QRIS (Sembunyikan dulu dengan 'hidden') -->
                <div id="qris-modal"
                    class="hidden fixed inset-0 z-100 bg-black/60 items-center justify-center p-6 backdrop-blur-sm">
                    <div class="bg-white p-8 rounded-4xl max-w-sm w-full text-center relative">
                        <button onclick="closeQris()"
                            class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 text-2xl">×</button>

                        <h3 class="text-xl font-bold text-emerald-900 mb-2">Scan QRIS Di Sini</h3>
                        <p class="text-slate-500 text-sm mb-6">Silakan scan kode di bawah ini untuk menyelesaikan pesanan
                            Teh Sumo Anda.</p>

                        <!-- Gambar QRIS Anda -->
                        <div class="bg-slate-100 p-4 rounded-2xl border-4 border-emerald-50 mb-6">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?color=000000&bgcolor=FFFFFF&data=00020101021126610014COM.GO-JEK.WWW01189360091438405947150210G8405947150303UMI51440014ID.CO.QRIS.WWW0215ID10222350453360303UMI5204581253033605802ID5925Es+Teh+SUMO%2C+Cipinang+Bes6013JAKARTA+TIMUR61051331062070703A026304FEDD&qzone=1&margin=0&size=400x400&ecc=L"
                                alt="QRIS Code" class="mx-auto">
                        </div>

                        <button onclick="closeQris()"
                            class="w-full bg-emerald-600 text-white py-3 rounded-xl font-bold cursor-pointer hover:bg-emerald-900">Saya
                            Sudah
                            Bayar</button>
                    </div>
                </div>

    </main>

    <section class="py-20 bg-emerald-50/50 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-black text-emerald-900 italic">"GAK CUMA SEGER, TAPI NAGIH!"</h2>
                <p class="text-slate-500 mt-2">Dengarkan kata mereka yang sudah mencoba.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card Testimoni 1 -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-emerald-100 hover:shadow-md transition">
                    <div class="flex text-yellow-400 mb-4">★★★★★</div>
                    <p class="text-slate-600 italic mb-6">"Minuman yang jadi favorit akhir-akhir ini. karna es teh manisnya
                        yang enak, murah cuma 4k, dan kemasannya gede."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center text-sm">👩</div>
                        <span class="font-bold text-emerald-900 text-sm">Siska, Mahasiswi</span>
                    </div>
                </div>

                <!-- Card Testimoni 2 -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-emerald-100 hover:shadow-md transition">
                    <div class="flex text-yellow-400 mb-4">★★★★★</div>
                    <p class="text-slate-600 italic mb-6">"Original Tea-nya seger pol pas siang bolong. Aroma melatinya
                        beneran kerasa premium."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center text-sm">👨
                        </div>
                        <span class="font-bold text-emerald-900 text-sm">Budi, Siswa SMK</span>
                    </div>
                </div>

                <!-- Card Testimoni 3 -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-emerald-100 hover:shadow-md transition">
                    <div class="flex text-yellow-400 mb-4">★★★★★</div>
                    <p class="text-slate-600 italic mb-6">"Cokelat Freshmilk-nya favorit anak saya. Gak terlalu manis,
                        susunya kerasa banget."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center text-sm">👨🏼
                        </div>
                        <span class="font-bold text-emerald-900 text-sm">Dava, Warga Sekitar</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-black text-emerald-900 mb-12">Cara Pesan <span class="text-orange-500">Gak Pakai
                    Ribet</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
                <!-- Garis Penghubung (Desktop) -->
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-emerald-100 -z-10"></div>

                <!-- Step 1 -->
                <div class="bg-white p-6 relative">
                    <div
                        class="w-12 h-12 bg-emerald-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">
                        1</div>
                    <h4 class="font-bold text-emerald-900">Pilih Menu</h4>
                    <p class="text-slate-500 text-sm mt-2">Cari rasa favoritmu di katalog kami.</p>
                </div>
                <!-- Step 2 -->
                <div class="bg-white p-6 relative">
                    <div
                        class="w-12 h-12 bg-emerald-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">
                        2</div>
                    <h4 class="font-bold text-emerald-900">Checkout</h4>
                    <p class="text-slate-500 text-sm mt-2">Isi detail pengiriman dengan lengkap.</p>
                </div>
                <!-- Step 3 -->
                <div class="bg-white p-6 relative">
                    <div
                        class="w-12 h-12 bg-emerald-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">
                        3</div>
                    <h4 class="font-bold text-emerald-900">Siap Kirim!</h4>
                    <p class="text-slate-500 text-sm mt-2">Duduk manis, kurir kami akan segera sampai.</p>
                </div>
            </div>
            <div class="mt-16 p-8 bg-slate-50 rounded-4xl border border-slate-100 inline-block">
                <p class="text-slate-600 mb-4 font-medium">Mager keluar rumah? Langsung klik di bawah ini:</p>
                <a href="https://gofood.co.id/jakarta/restaurant/es-teh-sumo-cipinang-besar-dab125f6-5fa6-4860-81da-08a2bf800e9c?page=6"
                    target="_blank"
                    class="inline-flex items-center gap-3 bg-white border-2 border-red-500 text-red-600 px-8 py-3 rounded-full font-bold hover:bg-red-500 hover:text-white transition-all shadow-md active:scale-95">
                    <!-- Icon sederhana (Bisa ganti SVG Gojek kalau ada) -->
                    <span class="text-xl">🛵</span>
                    Order via GoFood
                </a>
            </div>
        </div>
    </section>

    <!-- Payment -->
    <section id="pembayaran" class="py-24 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-6">
            <div class="relative flex flex-col lg:flex-row items-center gap-16">

                <!-- Sisi Visual (QR Card) -->
                <div class="lg:w-1/2 relative">
                    <!-- Dekorasi Background (Lingkaran Orange) -->
                    <div
                        class="absolute -top-10 -left-10 w-64 h-64 bg-orange-100 rounded-full blur-3xl opacity-60 animate-pulse">
                    </div>

                    <!-- Main QR Card -->
                    <div
                        class="relative z-10 bg-white border-2 border-slate-100 p-8 rounded-[3rem] shadow-[0_32px_64px_-15px_rgba(0,0,0,0.08)] transform -rotate-2 hover:rotate-0 transition-transform duration-500">
                        <div class="flex justify-between items-center mb-8 px-2">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                                <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                                <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                            </div>
                            <span
                                class="text-[10px] font-black text-slate-300 uppercase tracking-widest italic leading-none">Official
                                QRIS Payment</span>
                        </div>

                        <!-- Frame QR -->
                        <div class="bg-slate-50 p-6 rounded-[2rem] border-2 border-dashed border-slate-200">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?color=000000&bgcolor=FFFFFF&data=00020101021126610014COM.GO-JEK.WWW01189360091438405947150210G8405947150303UMI51440014ID.CO.QRIS.WWW0215ID10222350453360303UMI5204581253033605802ID5925Es+Teh+SUMO%2C+Cipinang+Bes6013JAKARTA+TIMUR61051331062070703A026304FEDD&qzone=1&margin=0&size=400x400&ecc=L"
                                alt="QRIS Teh Sumo" class="w-full aspect-square rounded-xl mix-blend-multiply">
                        </div>

                        <!-- Wallet Icons -->
                        <div class="mt-8 flex justify-center items-center gap-6 opacity-40 grayscale">
                            <span class="font-bold text-xs">GOPAY</span>
                            <span class="font-bold text-xs">OVO</span>
                            <span class="font-bold text-xs">DANA</span>
                            <span class="font-bold text-xs">LINKAJA</span>
                        </div>
                    </div>

                    <!-- Floating Badge -->
                    <div
                        class="absolute -bottom-6 -right-6 z-20 bg-emerald-600 text-white p-6 rounded-3xl shadow-xl rotate-12 hidden md:block">
                        <p class="text-xs font-bold uppercase tracking-tight">Atas Nama:</p>
                        <p class="text-lg font-black">TEH SUMO</p>
                    </div>
                </div>

                <!-- Sisi Teks (Copywriting) -->
                <div class="lg:w-1/2">
                    <span
                        class="inline-block px-4 py-1 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold mb-6">
                        ⚡ TRANSAKSI SAT SET
                    </span>
                    <h2 class="text-5xl font-black text-emerald-900 leading-[1.1] mb-6">
                        Gak Perlu <span class="text-orange-500">Cari Kembalian,</span> <br> Scan Aja.
                    </h2>
                    <p class="text-slate-500 text-lg leading-relaxed mb-10">
                        Lebih praktis, lebih cepat. Kami mendukung pembayaran via QRIS untuk semua aplikasi bank dan dompet
                        digital kesayanganmu.
                    </p>

                    <!-- List Benefit -->
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 shrink-0 bg-orange-100 rounded-2xl flex items-center justify-center text-xl">
                                📱</div>
                            <div>
                                <h4 class="font-bold text-emerald-900">Scan & Pay</h4>
                                <p class="text-sm text-slate-500">Cukup buka aplikasi kamera atau e-wallet, lalu scan.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 shrink-0 bg-yellow-100 rounded-2xl flex items-center justify-center text-xl">
                                🛡️</div>
                            <div>
                                <h4 class="font-bold text-emerald-900">Aman & Resmi</h4>
                                <p class="text-sm text-slate-500">Terintegrasi langsung dengan sistem pembayaran nasional
                                    (GPN).</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section Google Maps -->
    <section id="lokasi" class="py-24 bg-white scroll-mt-20">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">

                <!-- Sisi Kiri: Informasi Alamat -->
                <div class="lg:w-1/3 text-center lg:text-left">
                    <span class="text-orange-500 font-bold uppercase tracking-widest text-xs">Mampir Yuk!</span>
                    <h2 class="text-4xl font-black text-emerald-900 mt-2 mb-6">Lokasi <br> <span
                            class="text-orange-500">Jakarta Timur</span></h2>

                    <div class="space-y-6 mb-8 text-left">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 shrink-0 bg-emerald-100 rounded-xl flex items-center justify-center text-xl">
                                📍</div>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                <span class="font-bold text-emerald-900 block">Alamat Utama</span>
                                Jl. Pancawarga 1, Cipinang Besar Sel., Kecamatan Jatinegara, Kota Jakarta Timur, Daerah
                                Khusus Ibukota Jakarta 13410
                            </p>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 shrink-0 bg-orange-100 rounded-xl flex items-center justify-center text-xl">
                                ⏰</div>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                <span class="font-bold text-emerald-900 block">Jam Operasional</span>
                                Setiap Hari: 08.00 - 23.00 WIB
                            </p>
                        </div>
                    </div>

                    <!-- Tombol Direct -->
                    <a href="https://maps.google.com" target="_blank"
                        class="inline-flex items-center gap-2 bg-emerald-600 text-white px-8 py-3 rounded-full font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100 active:scale-95 text-sm">
                        Petunjuk Jalan 🚀
                    </a>
                </div>

                <!-- Sisi Kanan: Map Embed -->
                <div class="lg:w-2/3 w-full group">
                    <div class="relative rounded-[3rem] overflow-hidden shadow-2xl border-8 border-slate-50 h-[450px]">
                        <!-- Ganti src di bawah ini dengan link embed asli dari lokasi tokomu -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126918.46951208032!2d106.73647174335937!3d-6.237061899999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3c67cf1320d%3A0xa98e619f9473142e!2sEs%20Teh%20Sumo%20Cipinang%20Besar!5e0!3m2!1sid!2sid!4v1772583892658!5m2!1sid!2sid"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-full border-0 grayscale-[0.2] group-hover:grayscale-0 transition-all duration-700"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- Simple JavaScript untuk Filter -->
    <script>
        function filterProduct(category) {
            const items = document.querySelectorAll('.product-item');
            items.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        function openQris() {
            document.getElementById('qris-modal').classList.remove('hidden');
        }

        function closeQris() {
            document.getElementById('qris-modal').classList.add('hidden');
        }
    </script>

@endsection
