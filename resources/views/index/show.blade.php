@extends('layouts.app')

@section('content')
    <main role="main">
        <div class="container py-md-5">
            <div class="text-center">
                <h2 class="mb-4">{{ $nav[0]['title'] }}</h2>
                <h5 class="mb-4" style="color: #999999">{{ $nav[0]['sub_title'] }}</h5>
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
                                             alt="Card image cap" style="height: 13.875rem;display: block;">
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


        <div class="container py-md-5">
            <div class="text-center">
                <h2 class="mb-4">{{ $nav[1]['title'] }}</h2>
                <h5 class="mb-4" style="color: #999999">{{ $nav[1]['sub_title'] }}</h5>
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


        <div class="container py-md-5">
            <div class="text-center">
                <h2 class="mb-4">{{ $nav[2]['title'] }}</h2>
                <h5 class="mb-4" style="color: #999999">{{ $nav[2]['sub_title'] }}</h5>
                {{--<div class="border-bottom-block"></div>--}}
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img style="width: 100%" src="{{ $nav[2]['cover_url'] }}" alt="">
                </div>
                <div class="col-md-8">
                    <div class="container about">
                        <section class="desc">{!! $nav[2]['content'] !!}</section>
                        <button type="button" class="btn btn-lg btn-outline-secondary read-more float-right">查看更多</button>
                    </div>

                </div>
            </div>
        </div>


        <div class="container py-md-5">
            <div class="text-center">
                <h2 class="mb-4">{{ $nav[3]['title'] }}</h2>
                <h5 class="mb-4" style="color: #999999">{{ $nav[3]['sub_title'] }}</h5>
                {{--<div class="border-bottom-block"></div>--}}
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($cert as $v)
                        <div class="swiper-slide">
                            <img src="{{ $v['url'] }}" class="honor" alt="">
                        </div>
                    @endforeach
                </div>
                @if($cert->count() > 4)
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                @endif
            </div>
        </div>

        <div class="container py-md-5">
            <div class="text-center">
                <h2 class="mb-4">{{ $nav[4]['title'] }}</h2>
                <h5 class="mb-4" style="color: #999999">{{ $nav[4]['sub_title'] }}</h5>
                {{--<div class="border-bottom-block"></div>--}}
            </div>
            <div class="row">
                @foreach($logo as $v)
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <div class="card-img-top" style="height: 70px;background: url('{{ $v['url']}}') no-repeat center/contain"
                                 alt="Card image cap"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

@endsection
@section('js')
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script>
        $(function () {
            var mySwiper = new Swiper('.swiper-container', {
                slidesPerView: 'auto',
                spaceBetween: 20,
                // 如果需要前进后退按钮
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

            })

            $('.case div').on('click', function () {
                $(this).siblings('div').find('a').removeClass('active')
                $(this).siblings('div').children('div').hide()
                $(this).children('div').show()
            })
        })
    </script>
@endsection


