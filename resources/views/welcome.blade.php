<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi Final Projek | Politeknik IDN</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body x-data="{ mobileMenuOpen: false }">

    <div class="overflow-x-hidden">

        <nav class="relative z-10 p-6 md:px-12 mx-auto max-w-7xl" x-data="{ mobileMenuOpen: false }">
            <div class="flex justify-between items-center">

                <div class="font-bold text-lg uppercase tracking-wider text-accent">
                    IDN Consult
                </div>

                <div class="hidden md:flex items-center space-x-6 uppercase text-sm tracking-widest">
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/dashboard') }}"
                        class="bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Dashboard
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="hover:text-primary transition-colors duration-300">
                        Log in
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Register
                    </a>
                    @endif
                    @endauth
                    @endif
                </div>

                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden z-20 focus:outline-none">
                    <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div x-show="mobileMenuOpen" @click.outside="mobileMenuOpen = false"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform -translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-4"
                class="absolute top-16 left-0 right-0 md:hidden bg-white shadow-lg p-8 space-y-6 uppercase text-center">

                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}" class="block hover:text-primary"
                    @click="mobileMenuOpen = false">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="block hover:text-primary" @click="mobileMenuOpen = false">Log
                    in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="block hover:text-primary"
                    @click="mobileMenuOpen = false">Register</a>
                @endif
                @endauth
                @endif
            </div>
        </nav>

        <header class="grid md:grid-cols-5 min-h-[calc(100vh-80px)]">
            <div
                class="md:col-span-2 bg-primary text-white p-12 md:p-20 flex flex-col justify-center order-2 md:order-1">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-8">
                    Selamat Datang di Konsultasi Final Projek Mahasiswa Politeknik IDN
                </h1>

                <a href="https://www.numenide.id" target="_blank" rel="noopener noreferrer" class="mt-4 inline-block bg-white text-primary font-semibold py-3 px-8 uppercase tracking-wider border-2 border-white
                          hover:bg-transparent hover:text-white transition-all duration-300 ease-in-out self-start">
                    More About Consultor
                </a>
            </div>

            <div class="md:col-span-3 p-12 md:p-20 flex items-center justify-center order-1 md:order-2">
                <img src="https://picsum.photos/600/400?grayscale&blur=1" alt="Konsultasi Final Projek" class="w-full h-auto max-h-[60vh] object-cover shadow-2xl
                            hover:scale-105 transition-transform duration-300 ease-in-out">
            </div>
        </header>

        <section class="px-6 md:px-12 py-16 md:py-24 max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-accent mb-4">
                        Scaffold Projek TALL Stack
                    </h2>
                    <div class="w-20 h-1 bg-primary mb-6"></div>
                    <p class="text-gray-600 leading-relaxed text-lg">
                        Ini adalah scaffold projek kalian menggunakan Stack TALL yang sudah disiapkan sebaik mungkin
                        agar memudahkan
                        pengembangan final projek ke depan.
                    </p>
                </div>

                <div>
                    <img src="https://picsum.photos/500/350" alt="TALL Stack Scaffold" class="w-full h-auto object-cover shadow-lg
                                hover:scale-105 transition-transform duration-300 ease-in-out">
                </div>
            </div>
        </section>

        <section class="px-6 md:px-12 py-16 md:py-24 max-w-7xl mx-auto">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-accent mb-4">
                    Peserta Konsultasi Proyek
                </h2>
                <div class="w-20 h-1 bg-primary mb-6 mx-auto"></div>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Fondasi dari setiap aplikasi hebat adalah arsitektur data yang matang. Kami bangga mempersembahkan
                    para
                    mahasiswi bertalenta yang telah mendedikasikan analisis dan keterampilan mereka untuk merancang
                    <i>Entity-Relationship Diagram</i> (ERD) sebagai langkah awal fundamental dalam <i>final project</i>
                    mereka.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Ais</h3>
                    <a href="https://dbdiagram.io/d/68f9c61e357668b732373fa1" target="_blank" rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Amalia</h3>
                    <a href="https://dbdiagram.io/d/Copy-of-ERD-68df950ad2b621e4221cecff" target="_blank"
                        rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Anggun</h3>
                    <a href="https://dbdiagram.io/d/68f9b15c357668b73234c4f6" target="_blank" rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Arin</h3>
                    <a href="https://dbdiagram.io/d/68f96da1357668b7322da2fa" target="_blank" rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Asyaa</h3>
                    <a href="https://dbdiagram.io/d/68f91ddb357668b73224a61c" target="_blank" rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Ayu Aisya</h3>
                    <a href="https://dbdiagram.io/d/68f9bd6e357668b732362c45" target="_blank" rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Kanya</h3>
                    <a href="https://dbdiagram.io/d/cafexploOore-68fb5caa357668b732749d2f" target="_blank"
                        rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Nabila</h3>
                    <a href="https://dbdiagram.io/d/68f4ccc92e68d21b412cba10" target="_blank" rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Najla</h3>
                    <a href="https://dbdiagram.io/d/ERD-MANAJEMEN-KOSAN-68f9dff5357668b7323c00ae" target="_blank"
                        rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Putri</h3>
                    <a href="https://dbdiagram.io/d/68f65ea92e68d21b415c5669" target="_blank" rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Ratu</h3>
                    <a href="https://dbdiagram.io/d/68f985c9357668b7322fc6dc" target="_blank" rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Risha Adzkia Putri</h3>
                    <a href="https://dbdiagram.io/d/68f965a8357668b7322d08a9" target="_blank" rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Rizka Azzah</h3>
                    <a href="https://dbdiagram.io/d/68f95e5e357668b7322c8d02" target="_blank" rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Sausan</h3>
                    <a href="https://dbdiagram.io/d/68f8f167357668b7321da62d" target="_blank" rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Unaisah</h3>
                    <a href="https://dbdiagram.io/d/68f9bea6357668b73236537f" target="_blank" rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Windy</h3>
                    <a href="httpsD/erd-web-reservasi-kelas-68f9c55b357668b7323724d2" target="_blank"
                        rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

                <div
                    class="border border-gray-200 p-6 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    <h3 class="font-bold text-xl mb-3">Zaahiroh</h3>
                    <a href="httpsD/TeaTales-68f96fca357668b7322dc63c" target="_blank" rel="noopener noreferrer"
                        class="inline-block bg-primary text-white text-sm font-semibold py-2 px-5 uppercase tracking-wider hover:bg-accent transition-colors duration-300">
                        Lihat ERD
                    </a>
                </div>

            </div>
        </section>


        <footer class="border-t border-gray-200 mt-16">
            <div class="max-w-7xl mx-auto px-6 md:px-12 py-8 text-center text-gray-500 text-sm">
                &copy; 2025 Konsultasi Final Projek - Politeknik IDN.
            </div>
        </footer>

    </div>

</body>

</html>
