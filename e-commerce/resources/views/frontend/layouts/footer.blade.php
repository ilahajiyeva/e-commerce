<footer class="site-footer border-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-6">
          <div class="row">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Menu</h3>
            </div>
            <div class="col-md-6 col-lg-4">
              <ul class="list-unstyled">
                <li><a href="{{route("anasehife")}}">Ana Səhifə</a></li>
                <li><a href="{{route('haqqimizda')}}">Haqqımızda</a></li>
                <li><a href="{{route('mehsullar')}}">Məhsullar</a></li>
                <li><a href="{{route("elaqe")}}">Əlaqə</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="block-5 mb-5">
            <h3 class="footer-heading mb-4">Əlaqə</h3>
            <ul class="list-unstyled">
              <li class="address">{{$settings['address']}}</li>
              <li class="phone"><a href="{{str_replace(" ", '', $settings['phone'])}}">{{$settings['phone']}}</a></li>
              <li class="email">{{$settings['email']}}</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;{{date('Y')}} Bütün hüquqlar qorunur.
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>

      </div>
    </div>
  </footer>
