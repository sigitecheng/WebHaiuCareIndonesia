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
                <h1 class="font-bold text-[26px] leading-[39px] text-white text-center">Tentang Kami</h1>
            </div>
        </div>
        <div class="flex flex-col gap-4 px-4">

            @foreach ($data_tentangkami as $data)
                
            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="https://picsum.photos/200/300/?tentang" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-bold text-blue-800 border-spacing-5">Nama Perusahaan </p>
                        <p class="font-semibold line-clamp-1 hover:line-clamp-none">{{ $data->nama_perusahaan}}</p>
                        {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p> --}}
                        {{-- <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="assets/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </a>

            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="https://picsum.photos/200/300/?keterangan" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-bold text-blue-800 border-spacing-5">Deskripsi </p>
                        <p class="text-justify font-semibold line-clamp-1 hover:line-clamp-none">{{ $data->deskripsi}}</p>
                        {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p> --}}
                        {{-- <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="assets/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </a>
            
            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="https://picsum.photos/200/300/?berdiri" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-bold text-blue-800 border-spacing-5">Berdiri </p>
                        <p class="text-justify font-semibold line-clamp-1 hover:line-clamp-none">{{ $data->berdiri}}</p>
                        {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p> --}}
                        {{-- <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="assets/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </a>
            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="https://picsum.photos/200/300/?founder" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-bold text-blue-800 border-spacing-5">Founder</p>
                        <p class="text-justify font-semibold line-clamp-1 hover:line-clamp-none">{{ $data->founder}}</p>
                        {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p> --}}
                        {{-- <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="assets/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </a>
            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="https://picsum.photos/200/300/?bandung" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-bold text-blue-800 border-spacing-5">Alamat</p>
                        <p class="text-justify font-semibold line-clamp-1 hover:line-clamp-none">{{ $data->alamat}}</p>
                        {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p> --}}
                        {{-- <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="assets/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </a>
            
            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="https://picsum.photos/200/300/?email" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-bold text-blue-800 border-spacing-5">Email</p>
                        <p class="text-justify font-semibold line-clamp-1 hover:line-clamp-none">{{ $data->email}}</p>
                        {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p> --}}
                        {{-- <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="assets/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </a>
            
            <a href="#" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="https://picsum.photos/200/300/?telepon" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-bold text-blue-800 border-spacing-5">Telepon</p>
                        <a href="https://wa.me/{{$data->nomor_telepon}}">
                            <p class="text-center badge bg-green-500 px-2 py-2 badge-pill rounded-full text-white font-bold hover:bg-stone-200 hover:text-slate-800 hover:font-bold flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M20.52 3.48A11.87 11.87 0 0 0 12 0C5.372 0 0 5.372 0 12a11.938 11.938 0 0 0 1.6 6.023L0 24l5.99-1.56A11.945 11.945 0 0 0 12 24c6.627 0 12-5.372 12-12 0-3.202-1.251-6.216-3.48-8.52zM12 21.75c-1.773 0-3.524-.497-5.032-1.44l-.366-.217-3.553.922.922-3.553-.217-.366A9.726 9.726 0 0 1 2.25 12C2.25 6.615 6.615 2.25 12 2.25c2.603 0 5.047 1.014 6.885 2.852A9.73 9.73 0 0 1 21.75 12c0 5.385-4.365 9.75-9.75 9.75zm4.85-7.827l-.663-.342c-.354-.182-.786-.387-1.296-.604-.509-.217-.937-.326-1.285-.326-.344 0-.68.064-1.006.193a3.617 3.617 0 0 0-.762.463 5.785 5.785 0 0 1-.913.574c-.338.168-.637.252-.897.252-.208 0-.413-.044-.617-.131-.204-.088-.464-.253-.78-.497-.317-.244-.654-.574-1.013-.991a9.44 9.44 0 0 1-.798-1.057 7.875 7.875 0 0 1-.63-1.197 6.265 6.265 0 0 1-.311-.89 2.503 2.503 0 0 1-.098-.628c0-.249.045-.517.133-.802.088-.285.208-.534.36-.75.151-.216.308-.4.471-.553.163-.153.34-.282.532-.387.192-.104.369-.171.532-.2.164-.03.33-.045.496-.045.163 0 .326.01.488.03.161.021.34.065.535.132s.358.131.474.192c.118.06.24.139.364.235.124.097.272.225.445.385.173.16.363.36.57.599.208.238.446.523.716.854.27.331.485.64.646.928.162.288.302.617.423.985.121.368.204.673.246.916.043.243.064.432.064.568 0 .157-.027.304-.08.442-.054.138-.151.311-.29.516-.138.205-.252.358-.342.46z"/>
                                </svg>
                            </p>  
                        </a>
                    </div>
                </div>
            </a>
            <a href="https://haiucares.com" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="https://picsum.photos/200/300/?persib" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-bold text-blue-800 border-spacing-5">Website</p>
                        {{-- <a href="https://haiucares.com"> --}}
                            <p class="text-justify font-semibold line-clamp-1 hover:line-clamp-none">{{ $data->website}}</p>
                        {{-- </a> --}}
                        {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 55.000.000</span></p> --}}
                        {{-- <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="assets/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </a>

            @endforeach
            
            
        </div>

             
        @include('fe_dashboard.menu.menufooter')

        @include('fe_dashboard.menu.android')

        

    </section>


    @include('fe_dashboard.menu.footer')