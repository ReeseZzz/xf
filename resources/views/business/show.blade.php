@extends('layouts.app')

@section('title')@endsection

@section('content')
    <main role="main">
        <div class="container py-md-4 case">
            <ul class="nav row w-100 text-center">
                @foreach($business as $k=>$v)
                <li class="col-md-3 d-inline-block">
                    <a class="@if($k==0) active @endif" id="nav-{{ $v['id'] }}-tab" data-toggle="tab" href="#tab-{{ $v['id'] }}" role="tab" aria-controls="nav-5"
                       aria-selected="true">
                        <div class="card pt-3 mb-4 box-shadow">
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
            <div class="row">
                <div class="col-md-3">
                    <ul class="nav flex-column" id="myTab" role="tablist">
                        @foreach($business as $k=>$v)
                        <li class="nav-item">
                            <a class="nav-link @if($k==0) active @endif" id="nav-{{ $v['id'] }}-tab" data-toggle="tab" href="#tab-{{ $v['id'] }}" role="tab" aria-controls="home" aria-selected="true">{{ $v['name'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="tab-content w-100 text-left" id="nav-tabContent"
                         style="margin: 1.875rem 0;background-color: #FBFBFB">
                        @foreach($business as $k => $v)
                        <div class="tab-pane fade @if($k==0) show active @endif" id="tab-{{ $v['id'] }}" role="tabpanel" aria-labelledby="home-tab">
                            @foreach($v['business'] as $key => $value)
                                <div>
                                    <p>{{ $value['title'] }}</p>
                                    <p>{!! $value['content'] !!}</p>
                                </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
@section('js')
    <script>
        $(function () {
            $('.case li').on('click',function(){
                console.log($('.tab-content').find('.active').index())
            })
        })
    </script>
@endsection


