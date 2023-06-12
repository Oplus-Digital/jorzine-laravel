@extends('admin.layouts.layout')
@section('title','Interviews')


@section('content')

    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h4>Interviews</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.main')}}">Dashboard</a></li>
                                {{--                                <li class="breadcrumb-item"><a href="javascript: void(0);">Interviews</a></li>--}}
                                <li class="breadcrumb-item active">Interviews</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-end d-none d-sm-block">
                            <a href="{{route('admin.interviews.create')}}" class="btn btn-success">Add New Review</a>
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
                                <div class="table-responsive">
                                    <table id="datatable-buttons"
                                           class="table table-striped table-bordered dt-responsive nowrap"
                                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Details</th>
                                            <th>Created Date</th>
                                            <th>Operations</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($interviews as $index => $interview)
                                            <tr>
                                                <td>{{$index + $interviews->firstItem()}}</td>
                                                <td>{{$interview->title}}</td>
                                                <td>
                                                @include('admin.interviews.details')
                                                </td>
                                                <td>{{$interview->date}}</td>

                                                <td>
                                                    <a href="{{route('admin.interviews.edit',$interview->id)}}"
                                                       title="Edit"
                                                       class="btn-icon waves-effect btn btn-primary btn-sm ml-2 rounded-3"><i
                                                            class="fa fa-edit"></i>
                                                    </a>

                                                    <button
                                                        data-url="{{route('admin.interviews.destroy',$interview->id)}}"
                                                        data-name="{{ $interview->title }}"
                                                        class="btn btn-danger rounded-3 btn-sm ml-2 delete"
                                                        title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>

                                                </td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                    {!! $interviews->withQueryString()->links('pagination::bootstrap-5') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div> <!-- container-fluid -->
    </div>

@endsection
