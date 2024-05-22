@include('fe_dashboard.menu.header')



<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
        <div class="header flex flex-col bg-gradient-to-b from-[#ADD8E6] to-[#0b4fb6]
        rounded-b-[50px] overflow-hidden">
            <nav class="pt-5 px-3 flex justify-between items-center">
                <ul>
                    <div class="flex items-center gap-[10px]">
                        <div class="w-10 h-10 flex shrink-0">
                                <img src="assets/css/fe_css/images/icons/loc.svg" alt="icon">
                            </div>
                            <div class="flex flex-col text-white">
                                {{-- <p class="text-xs leading-[18px]">Tentang Program</p> --}}
                                <p class="font-semibold text-sm">Tentang Program</p>
                            </div>
                        </div>
            </ul>
                
                <ul>
                    <div class="flex items-center gap-[10px]">
                        <div class="w-10 h-10 flex shrink-0">
                                <img src="assets/css/fe_css/images/icons/loc.svg" alt="icon">
                            </div>
                            <div class="flex flex-col text-white">
                                {{-- <p class="text-xs leading-[18px]">Location</p> --}}
                                <p class="font-semibold text-sm">Lokasi</p>
                            </div>
                        </div>
                    </ul>
                
                <ul>
                    <div class="flex items-center gap-[10px]">
                        <div class="w-10 h-10 flex shrink-0">
                                <img src="assets/css/fe_css/images/icons/loc.svg" alt="icon">
                            </div>
                            <div class="flex flex-col text-white">
                                {{-- <p class="text-xs leading-[18px]">Location</p> --}}
                                <p class="font-semibold text-sm">Penyelenggara UMKM</p>
                            </div>
                        </div>
                    </ul>
                
                {{-- <a href="/" class="w-10 h-10 flex shrink-0"> --}}
                    <!-- <img src="assets/images/icons/menu.svg" alt="icon"> -->
                    {{-- <img src="assets/css/fe_css/images/icons/login.svg" alt="icon">
                </a> --}}
            </nav>
            <div class="mt-[30px] z-10">
                <h1 class="font-extrabold text-2xl leading-[36px] text-white text-center">Program Makan Gratis<br></h1>
            </div>
            <div class="w-full h-fit overflow-hidden -mt-[33px]">
                <img src="assets/css/fe_css/images/backgrounds/halamanmakangratis.svg" class="w-full h-full object-contain" alt="background">            
            </div>
            <div class="text-center">
                <a href="">
                    <div class="flex items-center justify-center gap-[10px] mt-2">
                        
                            <div class="flex flex-col text-stone-800 font-bold">
                                {{-- <p class="text-xs leading-[18px]">Tentang Program</p> --}}
                                <p class="text-center badge bg-blue-500 px-5 py-1 badge-pill rounded-full text-white hover:bg-stone-200 hover:text-stone-800">Donasi</p>
                            </div>
                        </div>
                        
                        <h1 class="text-center badge bg-green-500 badge-pill mt-4 mb-4 text-dark font-bold"></h1>
                    {{-- </button> --}}
                </a>
            </div>
        </div>



        <div id="popular-fundrising" class="mt-8">
            <div class="px-4 flex justify-between items-center">
                <h2 class="font-bold text-lg">Program <br>Makan Gratis</h2>
                <a href="" class="p-[6px_12px] rounded-full bg-blue-500 hover:bg-stone-200 font-semibold text-sm text-white hover:text-stone-800">Ajukan Lokasi</a>
            </div>
            <div class="main-carousel mt-[14px]">
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    <a href="/makangratis" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                        <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                            <img src="assets/css/fe_css/images/icons/icon natural disasters.png" alt="icon">
                        </div>
                        <span class="font-semibold text-center my-auto">Distribusi Makan Gratis</span>
                    </a>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                        <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                            <img src="assets/css/fe_css/images/icons/icon medical treatment.png" alt="icon">
                        </div>
                        <span class="font-semibold text-center my-auto">Mitra UMKM</span>
                    </a>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                        <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                            <img src="assets/css/fe_css/images/icons/icon medical treatment-1.png" alt="icon">
                        </div>
                        <span class="font-semibold text-center my-auto">Laporan Distribusi</span>
                    </a>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                        <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                            <img src="assets/css/fe_css/images/icons/icon medical treatment-1.png" alt="icon">
                        </div>
                        <span class="font-semibold text-center my-auto">Daftar Menu Makanan</span>
                    </a>
                </div>

            </div>
        </div>

        <div id="best-choices" class="mt-8 -mb-6">
            <div class="px-4 flex justify-between items-center">
                <h2 class="font-bold text-lg">HaiuCare Indonesia <br>Penggalangan Dana Untuk Sesama</h2>
                <a href="" class="p-[6px_12px] rounded-full bg-blue-500 hover:bg-stone-200 font-semibold text-sm text-white hover:text-stone-800">Daftar Mitra</a>
            </div>
            <div class="main-carousel mt-[14px]">
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="https://picsum.photos/200/300/?children" class="w-full h-full object-cover" alt="thumbnail">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="details.html" class="font-bold line-clamp-2 hover:line-clamp-none">Makanan Gratis Warga Kurang Mampu</a>
                            <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 150.000.000</span></p>
                        </div>
                        <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                    </div>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                {{-- <img src="assets/css/fe_css/images/thumbnails/th2.png" class="w-full h-full object-cover" alt="thumbnail"> --}}
                                <img src="https://picsum.photos/200/300/?kitchen" class="w-full h-full object-cover" alt="thumbnail">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="details.html" class="font-bold line-clamp-2 hover:line-clamp-none">Operational Makan Gratis</a>
                            <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 25.000.000</span></p>
                        </div>
                        <progress id="fund" value="66" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                    </div>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                {{-- <img src="assets/css/fe_css/images/thumbnails/th3.png" class="w-full h-full object-cover" alt="thumbnail"> --}}
                                <img src="https://picsum.photos/200/300/?cars" class="w-full h-full object-cover" alt="thumbnail">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="details.html" class="font-bold line-clamp-2 hover:line-clamp-none">Armada Bantuan Untuk Operational Makan Gratis</a>
                            <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 12.000.000</span></p>
                        </div>
                        <progress id="fund" value="10" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                    </div>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="assets/css/fe_css/images/thumbnails/th4.png" class="w-full h-full object-cover" alt="thumbnail">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="details.html" class="font-bold line-clamp-2 hover:line-clamp-none">Perbaikan Asli Kebakaran Hutan</a>
                            <p class="text-xs leading-[18px]">Target <span class="font-bold text-blue-500">Rp 800.000.000</span></p>
                        </div>
                        <progress id="fund" value="88" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                    </div>
                </div>
            </div>
        </div>

        {{-- ==================== --}}

        <div id="popular-fundrising" class="mt-8">
            <div class="px-4 flex justify-center items-center">
                {{-- <h2 class="font-bold text-lg">Program <br>Makan Gratis</h2> --}}
                <a href="" class="flex items-center p-[3px_6px] mr-2 ml-2 px-5 py-2 rounded-full bg-blue-500 hover:bg-stone-200 font-semibold text-sm text-white hover:text-stone-800">
                    <img class="w-5 h-5 mr-2 text-white hover:text-stone-800" src="assets/css/fe_css/images/icons/kontributors.svg" alt="icon">
                    Kontributors
                </a>
                <a href="" class="flex items-center p-[3px_6px] mr-2 ml-2 px-5 py-2 rounded-full bg-blue-500 hover:bg-stone-200 font-semibold text-sm text-white hover:text-stone-800">
                    <img class="w-5 h-5 mr-2" src="assets/css/fe_css/images/icons/distribusi.svg" alt="icon">
                    Alur Distribusi
                </a>
                <a href="" class="flex items-center p-[3px_6px] mr-2 ml-2 px-5 py-2 rounded-full bg-blue-500 hover:bg-stone-200 font-semibold text-sm text-white hover:text-stone-800">
                    <img class="w-5 h-5 mr-2 text-white" src="assets/css/fe_css/images/icons/star.svg" alt="icon">
                    Awwards
                </a>
                
            </div>
            
            <div class="px-4 flex justify-center items-center mt-4">
                {{-- <h2 class="font-bold text-lg">Program <br>Makan Gratis</h2> --}}
                <a href="" class="flex items-center p-[3px_6px] mr-2 ml-2 px-5 py-2 rounded-full bg-blue-500 hover:bg-stone-200 font-semibold text-sm text-white hover:text-stone-800">
                    <img class="w-5 h-5 mr-2" src="assets/css/fe_css/images/icons/distribusi.svg" alt="icon">
                    Tentang Kami
                </a>
                <a href="" class="flex items-center p-[3px_6px] mr-2 ml-2 px-5 py-2 rounded-full bg-blue-500 hover:bg-stone-200 font-semibold text-sm text-white hover:text-stone-800">
                    <img class="w-5 h-5 mr-2 text-white" src="assets/css/fe_css/images/icons/star.svg" alt="icon">
                    Kontak Kami
                </a>
                
            </div>
            
            
            </div>
        </div>
        
        {{-- ============== --}}

        
        <div id="popular-fundrising" class="mt-8">
            <div class="px-4 flex justify-center items-center">
                <a href="">
                    <h5 class="font-semibold ml-2 mr-2 text-sm">HaiuCare</h5>
                </a>
                <p>|</p>
                <a href="">
                    <h5 class="font-semibold ml-2 mr-2 text-sm">Syarat & Ketentuan</h5>
                </a>
                <p>|</p>
                <a href="">
                    <h5 class="font-semibold ml-2 mr-2 text-sm">Pusat Bantuan</h5>
                </a>
            
                {{-- <a href="" class="p-[6px_12px] rounded-full bg-blue-500 hover:bg-stone-200 font-semibold text-sm text-white hover:text-stone-800">Ajukan Lokasi</a> --}}
            </div>
            <div class="main-carousel mt-[50px] ml-[100px] ">
                
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    {{-- <a href="/makangratis" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]"> --}}
                        <div class="w-[40px] h-[40px] flex shrink-0 overflow-hidden ml-3">
                            <img src="assets/css/fe_css/images/icons/facebook.svg" alt="icon">
                        </div>
                        {{-- <span class="font-semibold text-center my-auto">Distribusi Makan Gratis</span> --}}
                    </a>
                </div>

                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    {{-- <a href="/makangratis" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]"> --}}
                        <div class="w-[40px] h-[40px] flex shrink-0 overflow-hidden ml-3">
                            <img src="assets/css/fe_css/images/icons/twitter.svg" alt="icon">
                        </div>
                        {{-- <span class="font-semibold text-center my-auto">Distribusi Makan Gratis</span> --}}
                    </a>
                </div>
               
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    {{-- <a href="/makangratis" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]"> --}}
                        <div class="w-[40px] h-[40px] flex shrink-0 overflow-hidden ml-3">
                            <img src="assets/css/fe_css/images/icons/tiktok.svg" alt="icon">
                        </div>
                        {{-- <span class="font-semibold text-center my-auto">Distribusi Makan Gratis</span> --}}
                    </a>
                </div>

                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    {{-- <a href="/makangratis" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]"> --}}
                        <div class="w-[40px] h-[40px] flex shrink-0 overflow-hidden ml-3">
                            <img src="assets/css/fe_css/images/icons/email.svg" alt="icon">
                        </div>
                        {{-- <span class="font-semibold text-center my-auto">Distribusi Makan Gratis</span> --}}
                    </a>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    {{-- <a href="/makangratis" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]"> --}}
                        <div class="w-[40px] h-[40px] flex shrink-0 overflow-hidden ml-3">
                            <img src="assets/css/fe_css/images/icons/instagram.svg" alt="icon">
                        </div>
                        {{-- <span class="font-semibold text-center my-auto">Distribusi Makan Gratis</span> --}}
                    </a>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    {{-- <a href="/makangratis" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]"> --}}
                        <div class="w-[40px] h-[40px] flex shrink-0 overflow-hidden ml-3">
                            <img src="assets/css/fe_css/images/icons/youtube.svg" alt="icon">
                        </div>
                        {{-- <span class="font-semibold text-center my-auto">Distribusi Makan Gratis</span> --}}
                    </a>
                </div>

        
                
               
            </div>

            <div class="px-4 flex justify-center items-center mt-[50px]">
                <h2 class="font-bold text-sm text-blue-500 border-spacing-2">PT. HaiuCare Bangun Indonesia</h2>
                {{-- <a href="" class="p-[6px_12px] rounded-full bg-blue-500 hover:bg-stone-200 font-semibold text-sm text-white hover:text-stone-800">Daftar Mitra</a> --}}
            </div>
        </div>

        
        {{-- <div id="latest-fundrising" class="mt-8">
            <div class="px-4 flex justify-between items-center">
                <h2 class="font-bold text-lg"><br>Program Kemanusiaan</h2>
                <a href="" class="p-[6px_12px] rounded-full bg-[#E8E9EE] font-semibold text-sm">Explore All</a>
            </div>
            <div class="flex flex-col gap-4 mt-[14px] px-4">
                <a href="details.html" class="card">
                    <div class="w-full border border-[#E8E9EE] flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                        <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                            <img src="assets/css/fe_css/images/thumbnails/th5.png" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-1">
                            <p class="font-bold line-clamp-1 hover:line-clamp-none">Operasi Ginjal Kanan</p>
                            <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p>
                            <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                                <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                                <div class="flex shrink-0">
                                    <img src="assets/css/fe_css/images/icons/tick-circle.svg" alt="icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="details.html" class="card">
                    <div class="w-full border border-[#E8E9EE] flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                        <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                            <img src="assets/css/fe_css/images/thumbnails/th6.png" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-1">
                            <p class="font-bold line-clamp-1 hover:line-clamp-none">Buku Edukasi Peduli Anak lorem ipsum</p>
                            <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 800.000.000</span></p>
                            <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                                <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                                <div class="flex shrink-0">
                                    <img src="assets/css/fe_css/images/icons/tick-circle.svg" alt="icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="details.html" class="card">
                    <div class="w-full border border-[#E8E9EE] flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                        <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                            <img src="assets/css/fe_css/images/thumbnails/th7.png" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-1">
                            <p class="font-bold line-clamp-1 hover:line-clamp-none">Bangun Desa Angga</p>
                            <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 18.500.000.000</span></p>
                            <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                                <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                                <div class="flex shrink-0">
                                    <img src="assets/css/fe_css/images/icons/tick-circle.svg" alt="icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div> --}}
        <div id="menu" class="max-w-[341px] w-full fixed bottom-[20px] p-3 flex items-center justify-between rounded-[30px] bg-[#1E2037] transform -translate-x-1/2 left-1/2">
            <a href="" class="p-[14px_16px] flex items-center gap-[6px] rounded-full bg-blue-500">
                <div class="flex shrink-0">
                    <img src="assets/css/fe_css/images/icons/heart.svg" alt="icon">
                </div>
                <span class="font-semibold text-sm text-white">Donasi</span>
            </a>
            <a href="" class="flex items-center justify-center text-white w-[56px] h-[52px] p-[14px_16px]">
                <div class="flex shrink-0 w-6 h-6 overflow-hidden text-white">
                    <img src="assets/css/fe_css/images/icons/menu-user.svg" alt="icon">
                </div>
            </a>
            <a href="" class="flex items-center justify-center w-[56px] h-[52px] p-[14px_16px]">
                <div class="flex shrink-0 w-6 h-6 overflow-hidden">
                    <img src="assets/css/fe_css/images/icons/windows.svg" alt="icon">
                </div>
            </a>
            <a href="" class="flex items-center justify-center w-[56px] h-[52px] p-[14px_16px]">
                <div class="flex shrink-0 w-6 h-6 overflow-hidden">
                    <img src="assets/css/fe_css/images/icons/settings.svg" alt="icon">
                </div>
            </a>
        </div>
    </section>


    
@include('fe_dashboard.menu.footer')