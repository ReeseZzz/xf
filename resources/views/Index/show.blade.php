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

    </main>

@endsection

