@extends('admin.layouts.layout')
@section('title','Add New Interview')


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
                                <li class="breadcrumb-item"><a href="{{route('admin.interviews.index')}}">Interviews</a></li>
                                <li class="breadcrumb-item active">Add New Interview</li>
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

                                <h4 class="header-title">Add New Interview</h4>

                                {!!Form::open( ['route' => 'admin.interviews.store', 'method' => 'Post','role'=>'form','class'=>'form-horizontal','files'=>true]) !!}
                                @include('admin.interviews.form')
                                {!!Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div> <!-- container-fluid -->
    </div>

@endsection
