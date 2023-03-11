@extends('frontend.layouts.main')
@section('main-content')
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>{{ $category->category_name }}</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="row">
               @foreach ($product as $item)
               <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="box">
                        <div class="option_container">
                           <div class="options">
                              <a href="{{url('/products/'.$item->slug) }}" class="option2">
                                 View
                              </a>
                              <a href="{{url('/products/'.$item->slug) }}" class="option1">
                                 Add To Cart
                              </a>
                           </div>
                        </div>
                        <div class="img-box">
                           <img src="{{ asset('uploads/product/'.$item->image) }}" alt="">
                        </div>
                        <div class="detail-box">
                           <h5>
                              {{ $item->title }}
                           </h5>
                           <h6>
                              ${{ $item->selling_price }}.00
                           </h6>
                        </div>
                     </div>
                  </div>
               @endforeach
            </div>
            <!-- Pagination -->
         </div>
      </section>
      <!-- end product section -->
@endsection 