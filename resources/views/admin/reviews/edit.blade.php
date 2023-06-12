@extends('admin.layouts.layout')
@section('title','Edit Review')


@section('content')

    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title">

                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.main')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('admin.reviews.index')}}">Reviews</a></li>
                                <li class="breadcrumb-item active">Edit Review</li>
                            </ol>
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

                                <h4 class="header-title">Edit  Review
{{--                                    <span class="badge bg-info">{{$customer->name}}</span>--}}
                                </h4>


                                {!! Form::model($review,['route'=>['admin.reviews.update',$review->id],'method'=>'PUT','role'=>'form','class'=>'form-horizontal','files'=>true]) !!}
                                @include('admin.reviews.form')
                                {!!Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div> <!-- container-fluid -->
    </div>

@endsection
