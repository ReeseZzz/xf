@extends('layouts.app')

@section('title')@endsection

@section('content')
    <main role="main">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('storage/common/index.png') }}" alt="First slide">
                </div>
            </div>
        </div>

        <div class="container pt-md-5 border-bottom text-center">
            <h1 class="jumbotron-heading">工程案例</h1>
            <p class="lead text-muted">消防、安防、维护、器材等案例</p>
            <div class="border-bottom-block"></div>
        </div>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @foreach([1,2,3,4,5,6] as $v)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{ asset('storage/common/case_img1.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">武汉恒基达鑫国际化物流仓储园</h5>
                                <p class="card-text text-muted">地址：武汉市洪山区临江大道与化工五路路口西南角</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <button style="margin: 0 auto;display: table;" type="button" class="btn btn-lg btn-outline-secondary">查看更多</button>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>


        <div class="container pt-md-5 border-bottom text-center">
            <h1 class="jumbotron-heading">业务范围</h1>
            <p class="lead text-muted">涵盖消防自动化等多项业务</p>
            <div class="border-bottom-block"></div>
        </div>
        <div>
            <nav>
                <div class="nav" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                        <img src="{{ asset('storage/common/check.png') }}" alt="">
                        <h5 class="text-center font-weight-bold text-dark pt-md-3">消防检测</h5>
                    </a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                        <img src="{{ asset('storage/common/check.png') }}" alt="">
                        <h5 class="text-center font-weight-bold text-dark pt-md-3">消防检测</h5>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                        <img src="{{ asset('storage/common/check.png') }}" alt="">
                        <h5 class="text-center font-weight-bold text-dark pt-md-3">消防检测</h5>
                    </a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
            </div>
        </div>




        <div class="container pt-md-5 border-bottom text-center">
            <h1 class="jumbotron-heading">公司简介</h1>
            <p class="lead text-muted">我们主要做什么</p>
            <div class="border-bottom-block"></div>
        </div>
        <div class="container pt-md-5 border-bottom text-center">
            <h1 class="jumbotron-heading">相关证书</h1>
            <p class="lead text-muted">我们的资质证书</p>
            <div class="border-bottom-block"></div>
        </div>

        <div id="myCarousel" class="carousel slide pad_010 b_k" data-ride="carousel">
            <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner bor_btm">
                <div class="item active" >
                    <div class="pic">
                        <img src="{{ asset('storage/common/certificate_img1.png') }}" >
                        <img src="{{ asset('storage/common/certificate_img2.png') }}" >
                        <img src="{{ asset('storage/common/certificate_img3.png') }}" >
                        <img src="{{ asset('storage/common/certificate_img4.png') }}" >
                    </div>
                </div>
                <div class="item">
                    <div class="pic">
                        <img src="{{ asset('storage/common/certificate_img1.png') }}" >
                        <img src="{{ asset('storage/common/certificate_img2.png') }}" >
                        <img src="{{ asset('storage/common/certificate_img3.png') }}" >
                        <img src="{{ asset('storage/common/certificate_img4.png') }}" >
                    </div>
                </div>
                <div class="item">
                    <div class="pic">
                        <img src="{{ asset('storage/common/certificate_img1.png') }}" >
                        <img src="{{ asset('storage/common/certificate_img2.png') }}" >
                        <img src="{{ asset('storage/common/certificate_img3.png') }}" >
                        <img src="{{ asset('storage/common/certificate_img4.png') }}" >
                    </div>
                </div>
            </div>
            <!-- 轮播（Carousel）导航 -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>


        <div class="container pt-md-5 border-bottom text-center">
            <h1 class="jumbotron-heading">合作伙伴</h1>
            <p class="lead text-muted">友情链接</p>
            <div class="border-bottom-block"></div>
        </div>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @foreach([1,2,3,4,5,6] as $v)
                        <div class="col-md-2">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="{{ asset('storage/common/logo3_img.png') }}" alt="Card image cap">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

@endsection
@section('js')
@endsection


