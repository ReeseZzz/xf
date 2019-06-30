@extends('layouts.app')

@section('title')@endsection

@section('content')
    <main role="main">
        <div class="container pt-md-5">
            <div class="text-center">
                <h2 class="mb-4">工程案例</h2>
                <h5 class="mb-4" style="color: #999999">消防、安防、维护、器材等案例</h5>
                {{--<div class="border-bottom-block"></div>--}}
            </div>
            <div class="album">
                <div class="container">
                    <div class="row">
                        @foreach($cases as $v)
                            <div class="col-md-4">
                                <div class="card mb-4 box-shadow">
                                    <a href="{{ route('cases.detail',['id'=>$v['id']]) }}">
                                        <img class="card-img-top" src="{{ $v['cover_url'] }}"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $v['title'] }}</h5>
                                            <p class="card-text text-muted">地址：{{ $v['address'] }}</p>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        @endforeach
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            @if(count($cases)>=8 )
                            <button type="button" class="btn btn-lg btn-outline-secondary read-more">查看更多</button>
                            @endif
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="pt-md-5 text-center">
                <h1 class="jumbotron-heading">业务范围</h1>
                <p class="lead text-muted">涵盖消防自动化等多项业务</p>
                {{--<div class="border-bottom-block"></div>--}}
            </div>
            <div class="case">
                <div class="text-center w-100">
                    <ul class="nav row">
                        @foreach($businessType[0] as $k=>$v)
                            <li class="col-md-3 d-inline-block">
                                <a class="@if($k==0) active @endif" id="nav-5-tab" data-toggle="tab" href="#nav-{{ $v['id'] }}" role="tab" aria-controls="nav-5"
                                   aria-selected="true">
                                    <div class="border-bottom-me">
                                        <span class="home-product-icon">
                                            <img src="{{ $v['icon'] }}">
                                            <img src="{{ $v['icon_active'] }}" class="active-img">
                                        </span>
                                        <h5 class="card-title text-dark pt-md-3">{{ $v['name'] }}</h5>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content w-100 text-left" id="nav-tabContent"
                         style="background-color: #FBFBFB">
                        @foreach($businessType[0] as $k => $v)
                            <div class="tab-pane fire-nav-panel fade show {{$k==0?'active':''}}" id="nav-{{$v['id']}}"
                                 role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">
                                    @foreach($v['business'] as $child)
                                        <div class="col-md-4">
                                            <a class="nav-link" href="#">
                                                <h4 class="pl-5 pt-4">{{ $child['title'] }}</h4>
                                                <h5 class="pl-5">{!!  $child['content'] !!}</h5>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="text-center">
                    <ul class="nav row">
                        @foreach($businessType[1] as $k=>$v)
                            <li class="col-md-3 d-inline-block">
                                <a class="" id="nav-5-tab" data-toggle="tab" href="#nav-{{ $v['id'] }}" role="tab" aria-controls="nav-5"
                                   aria-selected="true">
                                    <div class="pt-3 border-bottom-me">
                                        <span class="home-product-icon">
                                            <img src="{{ $v['icon'] }}">
                                            <img src="{{ $v['icon_active'] }}" class="active-img">
                                        </span>
                                        <h5 class="card-title text-dark pt-md-3">{{ $v['name'] }}</h5>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content w-100 text-left" id="nav-tabContent"
                         style="background-color: #FBFBFB">
                        @foreach($businessType[1] as $k => $v)
                            <div class="tab-pane fire-nav-panel fade show {{$k==0?'active':''}}" id="nav-{{$v['id']}}"
                                 role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">
                                    @foreach($v['business'] as $child)
                                        <div class="col-md-4">
                                            <a class="nav-link" href="#">
                                                <h4 class="pl-5 pt-4">{{ $child['title'] }}</h4>
                                                <h5 class="pl-5">{{ $child['content'] }}</h5>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="pt-md-5 text-center">
                <h1 class="jumbotron-heading">公司简介</h1>
                <p class="lead text-muted">我们主要做什么</p>
                {{--<div class="border-bottom-block"></div>--}}
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('storage/common/case_img1.png') }}" alt="">
                </div>
                <div class="col-md-8">
                    <div class="container">
                        <p class="text-muted">武汉安源消防安全设备有限公司成立于2005年，注册资金5200万。公司专门从事消防、电子与智能化、装饰装修及机电工程的设计、施工；消防设施技术检测、维修保养；公司下设消防设施维修（护）分公司及消防器材维修部；具有标准化消防器材维修车间及先进的维修设备，维修部是湖北省第一家通过省消防总队验收合格企业；本着过硬的施工质量，公司在2008年顺利通过ISO9001:2008国际质量管理体系认证，认证号03416Q21172ROS；并通过省建设厅安全生产认定，核发安全生产许可证；2017年公司通过全体员工努力获得江汉区“十佳企业”称号。公司聚集了一批高素质的专业人才,建立了一支优秀的员工团队，现有在编各类专业技术人员96人：其中高级工程师6人、工程师15人、助理工程师26人、一级注册消防工程师2人、一级建造师7人、二级建造师2人、中级建（构）筑物消防员8人，各类专业技工43人，从业人员全部经过消防、建设部门专业培训，并持有相关的证书。</p>
                        <button type="button" class="btn btn-lg btn-outline-secondary read-more float-right">查看更多</button>
                    </div>

                </div>
            </div>
        </div>


        <div class="container">
            <div class="pt-md-5 text-center">
                <h1 class="jumbotron-heading">相关证书</h1>
                <p class="lead text-muted">我们的资质证书</p>
                {{--<div class="border-bottom-block"></div>--}}
            </div>
            <div class="row">
                @foreach($cert as $v)
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{ $v['url'] }}"
                                 alt="Card image cap">
                        </div>
                    </div>
                @endforeach
            </div>
            {{--<div id="myCarousel" class="carousel slide pad_010 b_k" data-ride="carousel">--}}
            {{--<!-- 轮播（Carousel）指标 -->--}}
            {{--<ol class="carousel-indicators">--}}
            {{--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
            {{--<li data-target="#myCarousel" data-slide-to="1"></li>--}}
            {{--<li data-target="#myCarousel" data-slide-to="2"></li>--}}
            {{--</ol>--}}
            {{--<!-- 轮播（Carousel）项目 -->--}}
            {{--<div class="carousel-inner bor_btm">--}}
            {{--<div class="item active" >--}}
            {{--<div class="pic">--}}
            {{--<img src="{{ asset('storage/common/certificate_img1.png') }}" >--}}
            {{--<img src="{{ asset('storage/common/certificate_img2.png') }}" >--}}
            {{--<img src="{{ asset('storage/common/certificate_img3.png') }}" >--}}
            {{--<img src="{{ asset('storage/common/certificate_img4.png') }}" >--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<!-- 轮播（Carousel）导航 -->--}}
            {{--<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>--}}
            {{--<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>--}}
            {{--</div>--}}
        </div>

        <div class="container">
            <div class="pt-md-5 text-center">
                <h1 class="jumbotron-heading">合作伙伴</h1>
                <p class="lead text-muted">友情链接</p>
                {{--<div class="border-bottom-block"></div>--}}
            </div>
            <div class="album py-5">
                <div class="row">
                    @foreach($logo as $v)
                        <div class="col-md-{{ ceil(12/count($logo)) }}">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="{{ $v['url'] }}"
                                     alt="Card image cap">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

@endsection
@section('js')
    <script>
        $(function () {
            $('.case div').on('click', function () {
                $(this).siblings('div').find('a').removeClass('active')
                $(this).siblings('div').children('div').hide()
                $(this).children('div').show()
            })
        })
    </script>
@endsection


