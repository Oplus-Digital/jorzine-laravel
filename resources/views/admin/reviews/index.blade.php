@extends('admin.layouts.layout')
@section('title','Reviews')


@section('content')

    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h4>Reviews</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.main')}}">Dashboard</a></li>
                                {{--                                <li class="breadcrumb-item"><a href="javascript: void(0);">Reviews</a></li>--}}
                                <li class="breadcrumb-item active">Reviews</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-end d-none d-sm-block">
                            <a href="{{route('admin.reviews.create')}}" class="btn btn-success">Add New Review</a>
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
                                        @foreach($reviews as $index => $review)
                                            <tr>
                                                <td>{{$index + $reviews->firstItem()}}</td>
                                                <td>{{$review->title}}</td>
                                                <td>
                                                @include('admin.reviews.details')
                                                </td>
                                                <td>{{$review->date}}</td>

                                                <td>
                                                    <a href="{{route('admin.reviews.edit',$review->id)}}"
                                                       title="Edit"
                                                       class="btn-icon waves-effect btn btn-primary btn-sm ml-2 rounded-3"><i
                                                            class="fa fa-edit"></i>
                                                    </a>

                                                    <button
                                                        data-url="{{route('admin.reviews.destroy',$review->id)}}"
                                                        data-name="{{ $review->title }}"
                                                        class="btn btn-danger rounded-3 btn-sm ml-2 delete"
                                                        title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>

                                                </td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                    {!! $reviews->withQueryString()->links('pagination::bootstrap-5') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div> <!-- container-fluid -->
    </div>

@endsection
