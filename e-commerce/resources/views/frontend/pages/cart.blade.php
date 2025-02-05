
@extends('frontend.mainpage.mainpage')

@section('content')

<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="{{route('anasehife')}}">Ana Səhifə</a>
             <span class="mx-2 mb-0">/</span> <strong class="text-black">Səbət</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if (session()->get('success'))
                    <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif
            </div>
        </div>
      <div class="row mb-5">
          <div class="col-md-12 site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="product-thumbnail">Şəkil</th>
                  <th class="product-name">Məhsul</th>
                  <th class="product-price">Qiymət</th>
                  <th class="product-quantity">Ədəd</th>
                  <th class="product-total">Toplam</th>
                  <th class="product-remove">Sil</th>
                </tr>
              </thead>
              <tbody>
                @if (!empty($cart_item))
                    @foreach ($cart_item as $key => $item)
                    <tr>
                        <td class="product-thumbnail">
                          <img src="{{asset($item['image'])}}" alt="Image" class="img-fluid">
                        </td>
                        <td class="product-name">
                          <h2 class="h5 text-black">{{$item['name']}}</h2>
                        </td>
                        <td>{{$item['price']}}</td>
                        <td>
                          <div class="input-group mb-3" style="max-width: 120px;">
                            <div class="input-group-prepend">
                              <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                            </div>
                            <input type="text" class="form-control text-center" value="{{$item['qty']}}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-append">
                              <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                            </div>
                          </div>

                        </td>
                        <td>{{$item['price'] * $item['qty']}}</td>
                        <td>
                            <form action="{{route('sebet.remove')}}" method="POST">
                                @csrf
                                <input type="text" hidden name="product_id" value="{{$key}}"/>
                                <button type="submit" class="btn btn-primary btn-sm">X</button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                @endif

              </tbody>
            </table>
          </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          
          <div class="row">
            <div class="col-md-12">
              <label class="text-black h4" for="coupon">Endirim kodu</label>
              <p>Endirim kodunuz varsa əlavə edin</p>
            </div>
            <div class="col-md-8 mb-3 mb-md-0">
              <input type="text" class="form-control py-3" id="coupon" placeholder="Endirim kodu">
            </div>
            <div class="col-md-4">
              <button class="btn btn-primary btn-sm">Endirim kodunu yaz</button>
            </div>
          </div>
        </div>
        <div class="col-md-6 pl-5">
          <div class="row justify-content-end">
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-12 text-right border-bottom mb-5">
                  <h3 class="text-black h4 text-uppercase">Toplam Qiymət</h3>
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-6">
                  <span class="text-black">Cəm</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black">{{$total_price}}</strong>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Ödənişi tamamla
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
