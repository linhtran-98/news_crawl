@extends('admin.main')
@section('content')
@include('admin.alert')
<section class="content">
  <div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="{{$post->image}}" style="object-fit: cover;">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-3">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Technology</a>
                            <a class="text-body" href="">Jan 01, 2045</a>
                        </div>
                        <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">{{$post->title}}</h1>
                        <p class="text-secondary text-justify">{{$post->summary}}</p>
                        <p class="text-justify">{{$post->description}}</p>
                    </div>
                    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle mr-2" src="{{asset('/uploads/logo.jpg')}}" width="25" height="25" alt="">
                            <span>From vatvostudio.vn</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="ml-3"><i class="far fa-eye mr-2"></i>12345</span>
                            <span class="ml-3"><i class="far fa-comment mr-2"></i>123</span>
                        </div>
                    </div>
                </div>
                <!-- News Detail End -->
            </div>

            <div class="col-lg-4">

                <!-- Ads Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                    </div>
                    <div class="bg-white text-center border border-top-0 p-3">
                        <img class="img-fluid" src="{{asset('/uploads/pi-network-co-tin-duoc-khong.png')}}" alt="ads">
                    </div>
                    <div class="bg-white text-center border border-top-0 p-3">
                        <img class="img-fluid" src="{{asset('/uploads/pi.jpg')}}" alt="ads">
                    </div>
                </div>
                <!-- Ads End -->

                <!-- Popular News Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Popular News</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        @foreach ($popular as $key => $value)
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Technology</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="{{url('admin/show/'.$value->id)}}">{{$value->title}}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Popular News End -->

                <!-- Tags Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Tin tức</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Công nghệ</a>
                        </div>
                    </div>
                </div>
                <!-- Tags End -->
            </div>
        </div>
    </div>
  </div>
@endsection