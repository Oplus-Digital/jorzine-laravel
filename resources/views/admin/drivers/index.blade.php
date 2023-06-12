@extends('admin.layouts.layout')
@section('title','Drivers')


@section('content')

    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h4>Drivers</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.main')}}">Dashboard</a></li>
                                {{--                                <li class="breadcrumb-item"><a href="javascript: void(0);">Drivers</a></li>--}}
                                <li class="breadcrumb-item active">Drivers</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-end d-none d-sm-block">
                            <a href="{{route('admin.drivers.create')}}" class="btn btn-success">Add New Driver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="container-fluid">
            <div class="page-content-wrapper">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                @include('admin.layouts.status')

                                {{--                                <table id="datatable-buttons"--}}
                                {{--                                       class="table table-striped table-bordered dt-responsive nowrap"--}}
                                {{--                                       style="border-collapse: collapse; border-spacing: 0; width: 100%;">--}}
                                {{--                                    <thead>--}}
                                {{--                                    <tr>--}}
                                {{--                                        <th>#</th>--}}
                                {{--                                        <th>First Name</th>--}}
                                {{--                                        <th>Last Name</th>--}}
                                {{--                                        <th>Email</th>--}}
                                {{--                                        <th>Phone</th>--}}
                                {{--                                        <th>Image</th>--}}
                                {{--                                        <th>Created Date</th>--}}
                                {{--                                        <th>Vehicle Brand Name</th>--}}
                                {{--                                        <th>Vehicle Model </th>--}}
                                {{--                                        <th>Vehicle Plate Number </th>--}}
                                {{--                                        <th>Other Vehicle or Driver Info </th>--}}
                                {{--                                        <th>Vehicle Type </th>--}}
                                {{--                                        <th>Licence Image</th>--}}
                                {{--                                        <th>Operations</th>--}}
                                {{--                                    </tr>--}}
                                {{--                                    </thead>--}}

                                {{--                                    <tbody>--}}
                                {{--                                    @foreach($drivers as $index => $driver)--}}
                                {{--                                    <tr>--}}
                                {{--                                        <td>{{$index +1}}</td>--}}
                                {{--                                        <td>{{$driver->first_name}}</td>--}}
                                {{--                                        <td>{{$driver->last_name}}</td>--}}
                                {{--                                        <td>{{$driver->email}}</td>--}}
                                {{--                                        <td>{{$driver->phone ?? ''}}</td>--}}
                                {{--                                        <td>--}}
                                {{--                                            <a data-fancybox="gallery" href="{{$driver->image}} ">--}}
                                {{--                                                <img src="{{$driver->image }}"--}}
                                {{--                                                     alt="driver_img" width="50" height="50" class="img-fluid rounded">--}}
                                {{--                                            </a>--}}
                                {{--                                        </td>--}}
                                {{--                                        <td>{{$driver->created_at->format('d-m-Y H:i')}}</td>--}}
                                {{--                                        <td>{{$driver->car_brand}}</td>--}}
                                {{--                                        <td>{{$driver->car_model}}</td>--}}
                                {{--                                        <td>{{$driver->plate_number}}</td>--}}
                                {{--                                        <td>{{$driver->other_info}}</td>--}}
                                {{--                                        <td>{{$driver->car_type}}</td>--}}
                                {{--                                        <td>--}}
                                {{--                                            <a data-fancybox="gallery" href="{{$driver->licence_image}} ">--}}
                                {{--                                                <img src="{{$driver->licence_image }}"--}}
                                {{--                                                     alt="licence_image" width="50" height="50" class="img-fluid rounded">--}}
                                {{--                                            </a>--}}
                                {{--                                        </td>--}}
                                {{--                                        <td>--}}

                                {{--                                            <a href="{{route('admin.drivers.edit',$driver->id)}}" title="Edit"--}}
                                {{--                                               class="btn-icon waves-effect btn btn-primary btn-sm ml-2 rounded-3"><i--}}
                                {{--                                                    class="fa fa-edit"></i></a>--}}


                                {{--                                            <button data-url="{{route('admin.drivers.destroy',$driver->id)}}"--}}
                                {{--                                                    data-name="{{ $driver->name }}"--}}
                                {{--                                                    class="btn btn-danger rounded-3 btn-sm ml-2 delete"--}}
                                {{--                                                    title="Delete">--}}
                                {{--                                                <i class="fa fa-trash"></i>--}}
                                {{--                                            </button>--}}


                                {{--                                        </td>--}}
                                {{--                                    </tr>--}}
                                {{--                                    @endforeach--}}


                                {{--                                    </tbody>--}}
                                {{--                                </table>--}}

                                <div class="table-responsive">
                                    {{$dataTable->table(['class'=>'table table-striped table-bordered text-center dt-responsive nowrap'])}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div> <!-- container-fluid -->
    </div>

@endsection

@include('admin.layouts.datatables_scripts' )
