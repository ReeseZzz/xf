@extends('layouts.app')

@section('title')@endsection

@section('content')
    <main role="main">
        <div class="container py-md-4">
            <ul class="nav justify-content-center nav-pills mb-4 text-center" id="pills-tab" role="tablist">
                @foreach($cats as $k=>$v)
                <li class="nav-item">
                    <a class="nav-link @if($k==0) active @endif" id="pills-home-tab" data-toggle="pill" href="#pills-{{ $v['id'] }}" role="tab" aria-controls="pills-home" aria-selected="true">
                        {{ $v['name'] }}
                    </a>
                </li>
                @endforeach
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @foreach($cats as $k=>$v)
                    <div class="tab-pane fade @if($k==0) show active @endif" id="pills-{{ $v['id'] }}" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            @foreach($v['cases'] as $value)
                                <div class="col-md-4">
                                    <div class="card mb-4 box-shadow">
                                        <a href="{{ route('cases.detail',['id'=>$v['id']]) }}">
                                            <img class="card-img-top" src="{{ $value['cover_url'] }}"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $value['title'] }}</h5>
                                                <p class="card-text text-muted">地址 : {{ $value['address'] }}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </main>

@endsection
@section('js')
    <script>
        $(function () {
            $(".nav-item").mousemove(function () {
                $(this).find('img').first().attr('opacity',0);
                $(this).find('img').last().attr('opacity',1);
            }).mouseout(function () {
                $(this).find('img').first().attr('opacity',1);
                $(this).find('img').last().attr('opacity',0);
            });
            $('.case div').on('click', function () {
                $(this).siblings('div').find('a').removeClass('active')
                $(this).siblings('div').children('div').hide()
                $(this).children('div').show()
            })
        })
    </script>
@endsection


