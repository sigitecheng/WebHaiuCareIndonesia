
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
                <button class="font-bold py-1 px-6 bg-indigo-700 text-white rounded-full text-sm hover:bg-stone-600">
                    <i class="fas fa-user mr-2"></i>{{ $title_halaman }}
                </button>
                {{-- <button class="font-bold py-1 px-6 bg-indigo-700 text-white rounded-full text-sm hover:bg-stone-600">
                    <i class="fas fa-edit mr-2"></i>Create New
                </button> --}}
            </div>
        </div>
    </body>

                    
                            <table class="table table-stripped bg-slate-100" id="project_table">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Telp</th>
                                        <th class="text-center">Total</th>
                                        {{-- <th class="text-center w-3/12">Email</th> --}}
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_donatur as $data)
                                    
                                    <tr>
                                        <td class="text-center" width="20px">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            {{ $data->name }}
                                        </td>
                                        
                                        <td class="text-center">{{ $data->phone_number }}</td> 
                                        {{-- <td class="text-center">{{ $data->email }}</td>  --}}
                                        {{-- <td class="text-center">{{ $data->total_amount }}</td>  --}}
                                        
                                        <td class="w-1/3 py-3 px-4 text-center">
                                            {{  'Rp.'  . number_format($data->total_amount, 0, ',', '.') }}
                                        </td>
                                        
                                        
                                        @if ($data->is_paid == '1')
                                        <td class="text-center badge bg-green-700 badge-pill mt-2 text-white">Success</td>
                                            @else
                                        <td class="text-center badge bg-red-700 badge-pill mt-2  text-white">Pending</td>
                                        @endif
                                        
                                        <td class="text-center badge bg-blue-700 badge-pill mt-2  text-white ml-2">Show</td>
                                        
                                        
                                            </tr>
                                    
                                    @endforeach
                                </tbody>
                            </table>
                             <hr>
                            <br> 
<br>
                            <div class="paginations text-dark font-bold">
                                {{ $data_donatur->links() }}
                            </div>
                            <br>

                            @include('admin_dashboard.be_dashboard.dashboard.footer')
                        </div>
                        <!--/Inverse table-->


</body>


