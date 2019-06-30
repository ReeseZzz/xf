@extends('layouts.app')

@section('title')

@endsection

@section('content')
    <main role="main">
        <div class="container py-md-4">
          <div class="row detail">
              <div class="col-md-8 breif">
                  <h3 class="pb-md-3 detail-title">{{ $case['title'] }}</h3>
                  <p>项目情况</p>
                  <p>用户地点:{{ $case['address'] }}</p>
                  <p>案例时间:{{ $case['created_at'] }}</p>
                  <p>选用产品型号:{{ $case['product'] }}</p>
                  <p><img src="{{ $case['cover_url'] }}" alt=""></p>
                  <div class="detail-content">{!! $case['content'] !!}</div>
              </div>
              <div class="col-md-4" style="margin-bottom: 48px;">
                  <div class="detail-prev">
                    <span class="prev-text">上一篇</span>
                    <span class="prve-title">上一篇的标题</span>
                  </div>
                  <div class="detail-prev">
                    <span class="prev-text">下一篇</span>
                    <span class="prve-title">下一篇的标题</span>
                  </div>
              </div>
          </div>
        </div>
    </main>

@endsection



