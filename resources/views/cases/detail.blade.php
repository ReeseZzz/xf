@extends('layouts.app')

@section('title')

@endsection

@section('content')
    <main role="main">
        <div class="container py-md-4">
          <div class="row">
              <div class="col-md-8">
                  <h3 class="pb-md-3">{{ $case['title'] }}</h3>
                  <p>项目情况</p>
                  <p>用户地点:{{ $case['address'] }}</p>
                  <p>案例时间:{{ $case['created_at'] }}</p>
                  <p>选用产品型号:{{ $case['product'] }}</p>
                  <p><img src="{{ $case['cover_url'] }}" alt=""></p>
                  <div>{!! $case['content'] !!}</div>
              </div>
              <div class="col-md-4">
                  <div>上一篇</div>
                  <div>下一篇</div>
              </div>
          </div>
        </div>
    </main>

@endsection



