<footer style="background-image: url({{ asset('storage/common/footer.png') }});">
  <div class="container">
      <div class="row pt-5">
          <div class="col-md-12 text-left">
              <div class="row">
                  <div class="col-md-4">
                      <p>{{ $config['contact']['name'] }}：<span class="">{{ $config['contact']['value'] }}</span></p>
                      <p>{{ $config['tel']['name'] }}：<span class="">{{ $config['tel']['value'] }}</span></p>
                      <p>{{ $config['fax']['name'] }}：<span class="">{{ $config['fax']['value'] }}</span></p>
                  </div>
                  <div class="col-md-4">
                      <p>{{ $config['post_code_2']['name'] }}：<span class="">{{ $config['post_code_2']['value'] }}</span></p>
                      <p>{{ $config['address']['name'] }}：<span class="">{{ $config['address']['value'] }}</span></p>
                  </div>
                  <div class="col-md-4 text-right">
                      <img style="height: 9.6rem" src="{{ $config['qrcode']['value'] }}" alt="">
                  </div>
              </div>
          </div>
          <div class="col-md-12 text-center text-white">
              <p>{{ $config['icp']['value'] }}</p>
          </div>
      </div>
  </div>
</footer>