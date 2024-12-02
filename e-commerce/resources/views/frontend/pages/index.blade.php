@extends('frontend.mainpage.mainpage')

@section('content')

<div class="site-blocks-cover" style="background-image: url({{ asset($slider->image)}});" data-aos="fade">
    <div class="container">
      <div class="row align-items-start align-items-md-center justify-content-end">
        <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
          <h1 class="mb-2">{{ $slider->title ?? _('Ən mükəmməl ayaqqabınızı tapın.')  }}</h1>
          <div class="intro-text text-center text-md-left">
            <p class="mb-4">{{ $slider->content ?? '' }}</p>
            <p>
              <a href="{{ url('/').'/'.$slider->url}}" class="btn btn-sm btn-primary">Məhsullarımız</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section site-section-sm site-blocks-1">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
          <div class="icon mr-4 align-self-start">
            <span class="{{ $about->text_1_icon }}"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">{{ $about->text_1_title }}</h2>
            <p>{{ $about->text_1_content }}</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
          <div class="icon mr-4 align-self-start">
            <span class="{{ $about->text_2_icon }}"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">{{ $about->text_2_title }}</h2>
            <p>{{ $about->text_2_content }}</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
          <div class="icon mr-4 align-self-start">
            <span class="{{ $about->text_3_icon }}"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">{{ $about->text_3_title }}</h2>
            <p>{{ $about->text_3_content }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section site-blocks-2">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
          <a class="block-2-item" href="{{ route('qadin-geyim') }}">
            <figure class="image">
              <img src="assets/images/women.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <span class="text-uppercase">Geyim</span>
              <h3>Qadın</h3>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
          <a class="block-2-item" href="{{ route('ushaq-geyim') }}">
            <figure class="image">
              <img src="assets/images/children.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <span class="text-uppercase">Geyim</span>
              <h3>Uşaq</h3>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
          <a class="block-2-item" href="{{ route('kishi-geyim') }}">
            <figure class="image">
              <img src="assets/images/men.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <span class="text-uppercase">Geyim</span>
              <h3>Kişi</h3>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section block-3 site-blocks-2 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 site-section-heading text-center pt-4">
          <h2>Yeni gələn məhsullarımız</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="nonloop-block-3 owl-carousel">
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="assets/images/cloth_1.jpg" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">Tank Top</a></h3>
                  <p class="mb-0">Finding perfect t-shirt</p>
                  <p class="text-primary font-weight-bold">50 &#8380;</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="assets/images/shoe_1.jpg" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">Corater</a></h3>
                  <p class="mb-0">Finding perfect products</p>
                  <p class="text-primary font-weight-bold">50 &#8380;</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="assets/images/cloth_2.jpg" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">Polo Shirt</a></h3>
                  <p class="mb-0">Finding perfect products</p>
                  <p class="text-primary font-weight-bold">50 &#8380;</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="assets/images/cloth_3.jpg" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">T-Shirt Mockup</a></h3>
                  <p class="mb-0">Finding perfect products</p>
                  <p class="text-primary font-weight-bold">50 &#8380;</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="assets/images/shoe_1.jpg" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">Corater</a></h3>
                  <p class="mb-0">Finding perfect products</p>
                  <p class="text-primary font-weight-bold">50 &#8380;</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section block-8">
    <div class="container">
      <div class="row justify-content-center  mb-5">
        <div class="col-md-7 site-section-heading text-center pt-4">
          <h2>Möhtəşəm Endirimlər!</h2>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-7 mb-5">
          <a href="#"><img src="assets/images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
        </div>
        <div class="col-md-12 col-lg-5 text-center pl-md-5">
          <h4>Bütün məhsullarda 50% endirim</h2>
          <p>Seçilmiş məhsullardakı endirim fürsətlərini qaçırmayın.</p>
          <p><a href="{{ route('endirimli-mehsullar') }}" class="btn btn-primary btn-sm">Endirimli məhsullar</a></p>
        </div>
      </div>
    </div>
  </div>

@endsection


