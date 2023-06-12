@extends('admin.layouts.layout')
@section('title','Jorzine')

@section('content')


    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">

                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="container-fluid">

            <div class="page-content-wrapper">

                <div class="row">


                        <div class="row">
                            <div class="col-xl-4 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{route('admin.admins.index')}}">
                                            <div class="text-center">
                                                <p class="font-size-16">Admins</p>
                                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary">
                                                                <i class="mdi mdi-account-group text-primary font-size-20"></i>
                                                            </span>
                                                </div>
                                                <h5 class="font-size-22">{{\App\Models\User::count()}}</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xl-4 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{route('admin.news.index')}}">
                                            <div class="text-center">
                                                <p class="font-size-16">News</p>
                                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-success">
                                                                <i class="dripicons-flag text-success font-size-20"></i>
                                                            </span>
                                                </div>
                                                <h5 class="font-size-22">{{\App\Models\News::count()}}</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{route('admin.articles.index')}}">
                                            <div class="text-center">
                                                <p class="font-size-16">Articles</p>
                                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-danger">
                                                                <i class="dripicons-article text-success font-size-20"></i>
                                                            </span>
                                                </div>
                                                <h5 class="font-size-22">{{\App\Models\Article::count()}}</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{route('admin.reviews.index')}}">
                                            <div class="text-center">
                                                <p class="font-size-16">Reviews</p>
                                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-pink">
                                                                <i class="dripicons-retweet text-success font-size-20"></i>
                                                            </span>
                                                </div>
                                                <h5 class="font-size-22">{{\App\Models\Review::count()}}</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{route('admin.reviews.index')}}">
                                            <div class="text-center">
                                                <p class="font-size-16">Interviews</p>
                                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-warning">
                                                                <i class="dripicons-conversation text-success font-size-20"></i>
                                                            </span>
                                                </div>
                                                <h5 class="font-size-22">{{\App\Models\Interview::count()}}</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>


                </div>






            </div>

        </div> <!-- container-fluid -->
    </div>


@endsection

{{--@include('admin.layouts.datatables_scripts' )--}}
