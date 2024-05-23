@include('fe_dashboard.menu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-slate-100 overflow-x-hidden pb-4">
        <div class="header flex flex-col bg-[#56BBC5] rounded-b-[50px] overflow-hidden h-[320px] bg-gradient-to-b from-[#5bc7eb] to-[#0b4fb6] -mb-[181px]">
            <nav class="pt-5 px-3 flex justify-between items-center">
                <div class="flex items-center gap-[10px]">
                    <a href="/makangratis" class="w-10 h-10 flex shrink-0">
                        <img src="assets/images/icons/back.svg" alt="icon">
                    </a>
                </div>
                <p class="font-semibold text-sm text-white">HaiuCare Indonesia</p>
                <a href="" class="w-10 h-10 flex shrink-0">
                    <img src="assets/images/icons/menu-dot.svg" alt="icon">
                </a>
            </nav>
            <div class="mt-5">
                <h1 class="font-bold text-[26px] leading-[39px] text-white text-center">Daftar Mitra UMKM</h1>
            </div>
        </div>
        <div class="flex flex-col gap-4 px-4">

            @foreach ($data_daftarmitrarumahmakan as $data)
                
            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="https://picsum.photos/200/300/?rumahmakan" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-bold text-blue-800 border-spacing-5">{{ $data->kota }}, Kota Bandung, Jawa Barat</p>
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]">Nama Pemilik : <span class="bg-blue-500 px-3 badge-pill rounded-full font-bold text-white">{{ $data->nama_pemilik}}</span></p> 
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]">Rumah Makan : <span class="bg-blue-200 px-3 badge-pill rounded-full font-bold text-stone-800">{{ $data->namarumahmakan}}</span></p> 
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]">Telepon : <span class="font-bold text-stone-800">{{ $data->telepon}}</span></p> 
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]">Email : <span class="font-bold text-stone-800">{{ $data->email}}</span></p> 
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]">Alamat Rumah Makan : <span class="font-bold text-stone-800">{{ $data->alamat_rumahmakan}}</span></p> 
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]">Deskripsi : <span class="font-bold text-stone-800">{{ $data->deskripsi}}</span></p> 
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]">Kuota : <span class="font-bold text-red-600">{{ $data->kuotamakan}} </span><span>Porsi</span></p> 
                        {{-- <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]">Rumah Makan : <span class="bg-blue-200 px-3 badge-pill rounded-full font-bold text-stone-800">{{ $data->nama_rumah_makan}}</span></p>  --}}
                         
                    </div>
                </div>
            </a>

           
            @endforeach
            
            
        </div>

             
        @include('fe_dashboard.menu.menufooter')

        @include('fe_dashboard.menu.android')

        

    </section>


    @include('fe_dashboard.menu.footer')