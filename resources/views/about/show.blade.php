@extends('layouts.app')

@section('content')
    <main role="main" class="about">
        <div class="container py-md-5">
            <div class="text-center">
                <h2 class="mb-4">{{ $nav[0]['title'] }}</h2>
                <h5 class="mb-4" style="color: #999999">{{ $nav[0]['sub_title'] }}</h5>
                {{--<div class="border-bottom-block"></div>--}}
            </div>
            <div>
                <section class="desc">{!! $nav[0]['content'] !!}</section>
                <img style="width: 100%" src="{{ $nav[0]['cover_url'] }}" alt="">
            </div>
        </div>

        <div class="container py-md-5">
            <div class="text-center">
                <h2 class="mb-4">{{ $nav[1]['title'] }}</h2>
                <h5 class="mb-4" style="color: #999999">{{ $nav[1]['sub_title'] }}</h5>
                {{--<div class="border-bottom-block"></div>--}}
            </div>
            <div>
                <img style="width: 100%" src="{{ $nav[1]['cover_url'] }}" alt="">
            </div>
        </div>

        <div class="container py-md-5">
            <div class="text-center">
                <h2 class="mb-4">{{ $nav[2]['title'] }}</h2>
                <h5 class="mb-4" style="color: #999999">{{ $nav[2]['sub_title'] }}</h5>
                {{--<div class="border-bottom-block"></div>--}}
            </div>
            <section class="desc-history">
                @foreach($history as $k=>$v)
                    <span class="dot @if($k%2==0) top @else bottom @endif">
                        <img src="" class="img" alt="">
                        <img src="http://127.0.0.1:8000/storage/images/9e2f9f3de71e3cb30e472e4800cbf5b0.png" class="img">
                        <img src="http://127.0.0.1:8000/storage/images/32888b7de4e31f43e18368b0a9bbd8cc.png" class="active-img img" >
                        <span class="year">{{ $v['year'] }}</span>
                        <span class="sub-title">{{ $v['title'] }}</span>
                        <span class="content">{{ $v['sub_title'] }}</span>
                    </span>
                @endforeach
            </section>
        </div>

        <div class="container py-md-5">
            <div class="text-center">
                <h2 class="mb-4">{{ $nav[3]['title'] }}</h2>
                <h5 class="mb-4" style="color: #999999">{{ $nav[3]['sub_title'] }}</h5>
                {{--<div class="border-bottom-block"></div>--}}
            </div>
            <section class="desc">{!! $nav[3]['content'] !!}</section>
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
        })
    </script>
@endsection