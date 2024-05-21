{{-- <x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Categories') }}
            </h2>
            <a href="#" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New
            </a>
        </div>
    </x-slot>
    
    
</x-app-layout> --}}


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
                <button class="font-bold py-1 px-6 bg-indigo-700 text-white rounded-full text-sm hover:bg-stone-600">
                    <i class="fas fa-edit mr-2"></i>Create New
                </button>
            </div>
        </div>
    </body>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-100 overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                
                @foreach($data_category as $data)
                <div class="item-card flex flex-row justify-between items-center">
                    <div class="flex flex-row items-center gap-x-3">
                        <img src="https://picsum.photos/200/300/?{{$data->nama}}" alt="https://picsum.photos/200/300/?{{$data->nama}}" class="rounded-2xl object-cover w-[80px] h-[60px]">
                        <div class="flex flex-col">
                            <h3 class="text-indigo-950 font-bold text-center text-sm text-2xl ml-3">{{ $data->nama }}</h3>
                        </div>
                    </div> 
                    <div  class="hidden md:flex flex-col">
                        {{-- <p class="text-slate-500 text-sm">Date</p> --}}
                        <p class="text-indigo-950 text-xl font-bold text-2xl">{{ $data->created_at}}</p>
                    </div>
                    <div class="hidden md:flex flex-row items-center gap-x-3">
                        <a href="#" class="font-bold py-1 px-6 bg-indigo-700 text-white rounded-full text-sm">
                            Edit
                        </a>
                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-bold py-1 px-6 bg-red-700 text-white rounded-full text-sm">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
{{--                             
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
                                            {{-- <img src="https://picsum.photos/id/120/200/300?{{ $data->avatar }}" alt="https://picsum.photos/id/120/200/300?{{ $data->avatar }}" class="rounded-circle w-14 h-14" />
                                        </td>
                                        
                                        <td class="text-center">{{ $data->email }}</td> 
                                        
                                            @if ($data->is_admin == 'super_admin')
                                            <td class="text-center badge bg-green-500 badge-pill mt-4 text-white">Super Admin</td>
                                                @else
                                            <td class="text-center badge bg-blue-500 badge-pill mt-4 text-white">{{ ucfirst($data->is_admin) }}</td>
                                                @endif
                                    </tr>
                                    
                                    @endforeach
                                </tbody> --}}
                            {{-- </table> --}}
                            {{-- <hr>
                            <br> --}}

                            {{-- <div class="paginations text-dark font-bold">
                                {{ $data_users->links() }}
                            </div>
                            <br> --}}
                            

                            @include('admin_dashboard.be_dashboard.dashboard.footer')
                        </div>
                        <!--/Inverse table-->


</body>


