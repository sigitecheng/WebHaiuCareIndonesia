@include('admin_dashboard.be_dashboard.dashboard.header')

<body>

    {{-- PAGE LOADER --}}
    <!--Page loader-->
    <div class="loader-wrapper">
        <div class="loader-circle">
            <div class="loader-wave"></div>
        </div>
    </div>
    <!--Page loader-->
    
    <!--Page Wrapper-->

    <div class="container-fluid">

@include('admin_dashboard.be_dashboard.dashboard.menuheader')
@include('admin_dashboard.be_dashboard.dashboard.sidebar')

                


<!--Inverse table-->
<div class="col-9 mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
    <body class="min-h-screen bg-gray-100 flex items-center justify-center">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-4">
                {{-- <h4 class="text-blue-500 font-bold font-sans text-stroke"><i class="fas fa-users mr-2"></i>{{ $title_halaman }}</h4> --}}
                <button class="btn btn-sn bg-slate-300 hover:bg-blue-500 text-dark font-bold px-3 py-1 p-0 rounded">
                    <i class="fas fa-user mr-2"></i>{{ $title_halaman }}
                </button>
                <button class="btn btn-sn bg-slate-300 hover:bg-blue-500 text-dark font-bold  px-3 py-1 p-0 rounded">
                    <i class="fas fa-edit mr-2"></i>Create New
                </button>
            </div>
        </div>
    </body>
                            {{-- <h6 class="mb-2">Striped tables</h6>
                            <p class="mb-2">Add class <code>table-dark</code></p> --}}
                            
                            <table class="table table-stripped bg-white" id="project_table">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Avatar</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_users as $data)
                                    
                                    <tr>
                                        <td class="text-center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            {{ $data->name }}
                                        </td>
                                        <td class="text-center">
                                            {{-- <img src="https://picsum.photos/seed/picsum/200/300?{{ $data->avatar}}"  alt="https://picsum.photos/seed/picsum/200/300?{{ $data->avatar}}" class="rounded" class="rounded-circle w-20 h-20"> --}}
                                            <img src="https://picsum.photos/id/120/200/300?{{ $data->avatar }}" alt="https://picsum.photos/id/120/200/300?{{ $data->avatar }}" class="rounded-circle w-14 h-14" />
                                        </td>
                                        
                                        <td class="text-center">{{ $data->email }}</td> 
                                        
                                            @if ($data->is_admin == 'super_admin')
                                            <td class="text-center badge bg-green-500 badge-pill mt-4 text-white">Super Admin</td>
                                                @else
                                            <td class="text-center badge bg-blue-500 badge-pill mt-4 text-white">{{ ucfirst($data->is_admin) }}</td>
                                                @endif
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                            </table>

                            <hr>
                            <br>

                            <div class="paginations text-dark font-bold">
                                {{ $data_users->links() }}
                            </div>
                            <br>
                            <hr>

                            @include('admin_dashboard.be_dashboard.dashboard.footer')
                        </div>
                        <!--/Inverse table-->


</body>


