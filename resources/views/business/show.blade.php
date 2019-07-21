@extends('layouts.app')

@section('content')
    <main role="main">
        <div class="container py-md-4 case">
            <div class="row">
                <div class="col-md-12">
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
                </div>
            </div>

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
                         style="margin: 1.875rem 0;">
                        @foreach($business as $k => $v)
                        <div class="pr-md-3 tab-pane fade @if($k==0) show active @endif" id="tab-{{ $v['id'] }}" role="tabpanel" aria-labelledby="home-tab">
                            @foreach($v['business'] as $key => $value)
                                <div class="card pt-3 px-3 mb-4 box-shadow">
                                    <h4>{{ $value['title'] }}</h4>
                                    <div class="nav-index-border mb-md-3"></div>
                                    <div>{!! $value['content'] !!}</div>
                                </div>
                            @endforeach
                            @if($v['cases']->isNotEmpty())
                                <div class="card pt-3 px-3 mb-4 box-shadow">
                                    <h4>工程案例</h4>
                                    <div class="nav-index-border mb-md-3"></div>
                                    <div class="row">
                                        @foreach($v['cases'] as $key => $value)
                                            <div class="col-md-4">
                                                <div class="card mb-4 box-shadow">
                                                    <a href="{{ route('cases.detail',['id'=>$value['id']]) }}">
                                                        <img class="card-img-top" src="{{ $value['cover_url'] }}"
                                                             alt="Card image cap">
                                                        <div class="card-body">
                                                            <p class="card-text text-muted">{{ $value['title'] }}</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif


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
            $('.nav li').on('click',function(){
                no = $(this).index()
                p_no = $(this).parents('.row').index()
                if (p_no == 0 ){
                    $('.case .row').eq(1).find('li').eq(no).addClass('active');
                } else {
                    $('.case .row').eq(0).find('li').eq(no).addClass('active');
                }
            })
        })
    </script>
@endsection


