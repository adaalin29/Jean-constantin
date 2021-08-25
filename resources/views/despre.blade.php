@extends('parts.template') @section('content')
<div class = "despre-banner" style = "background-image:url('images/despre.png')">
    <div class = "index-banner-overlay">
        <div class = "banner-social-media">
            <a href = "{{setting('site.facebook')}}" class = "banner-social-item"><img src = "images/facebook.svg" class = "full-width"></a>
            <a href = "{{setting('site.instagram')}}" class = "banner-social-item"><img src = "images/instagram.svg" class = "full-width"></a>
            <a href = "{{setting('site.youtube')}}" class = "banner-social-item"><img src = "images/youtube.svg" class = "full-width"></a>
        </div>
        <div class = "container">
            <div class = "white-title" style = "color:white;">Despre noi</div>
            <div class = "yellow-line"></div>
            <div class = "despre-noi-text">{!!setting('despre.descriere')!!}</div>
        </div>
    </div>
</div>
<div class = "white-container">
    <div class = "container">
        <div class = "white-title">Istoric si evolutie</div>
        <div class = "yellow-line"></div>
        <div class = "istoric-container">
            <div class = "istoric-item">
                <div class = "istoric-item-text">{!!setting('despre.istoric-text1')!!}</div>
                <div class = "istoric-item-image"><img src = "{{ route('thumb', ['width:700', setting('despre.istoric-imagine1')]) }}" class = "full-width cover"></div>
            </div>
            <div class = "istoric-item istoric-item-reverse">
                <div class = "istoric-item-text">{!!setting('despre.istoric-text1')!!}</div>
                <div class = "istoric-item-image"><img src = "{{ route('thumb', ['width:700', setting('despre.istoric-imagine2')]) }}" class = "full-width cover"></div>
            </div>
        </div>
    </div>
</div>

<div class = "white-container">
    <div class = "container">
        <div class = "white-title white-title-margin-mobile">Comunicate</div>
        <div class = "yellow-line"></div>
        <div class="swiper-container comunicate-container">
            <div class="swiper-wrapper">

            @foreach($comunicate as $comunicat)
              <div class="swiper-slide">
                <div class = "comunicat" style = "width:100%;">
                    <div class = "comunicat-imagine">
                        <img src = "{{ route('thumb', ['width:700', $comunicat->image]) }}" class = "full-width cover">
                        <div class = "comunicat-data">
                            <div class = "day">{{$comunicat->added_date[0]}}</div>
                            <div class = "month">{{$comunicat->added_date[1]}}</div>
                            <div class = "year">{{$comunicat->added_date[2]}}</div>
                        </div>
                    </div>
                    <div class = "comunicat-descriere">
                        <div class = "comunicat-title">{{$comunicat->name}}</div>
                        <div class = "comunicat-text">{{$comunicat->short_description}}</div>
                        <a href = "comunicat-detaliu/{{$comunicat->slug}}" class = "about-citeste citeste-comunicat">Citeste</a>
                    </div>
                </div>
            </div>
            @endforeach

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination comunicat-pagination"></div>
          </div>
    </div>
</div>
<div class = "white-container">
    <div class = "container">
        <div class = "white-title">Galerie foto</div>
        <div class = "yellow-line"></div>
        <div class = "gallery-container">
            @foreach($gallery as $galleryItem)
            <a  data-fancybox="images-{{$galleryItem->name}}" 
                data-thumbs='{"autoStart":true}' href = "{{ route('thumb', ['width:700', $galleryItem->images[0]]) }}" class = "gallery-item">
                <img src = "{{ route('thumb', ['width:700', $galleryItem->images[0]]) }}" class = "full-width cover">
                <div class = "gallery-overlay">
                    <div class = "gallery-overlay-inside">
                        <img class = "view-gallery" src = "images/view.svg">
                        <div class = "gallery-name">{{$galleryItem->name}}</div>
                    </div>
                </div>
            </a>
                @foreach($galleryItem->images as $key=>$image)
                    @if($key!=0)
                    <div style="display: none;">
                        <a href="{{ route('thumb', ['width:700', $image]) }}" data-fancybox="images-{{$galleryItem->name}}" 
                    
                        data-thumb="{{ route('thumb', ['width:700', $image]) }}"></a>
                    </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
    $slides = 4;
    if(screen.width<=1366)
        $slides = 3;
    if(screen.width<=1024)
        $slides = 2;
    if(screen.width<=768)
        $slides = 2;
    if(screen.width<=768)
        $slides = 1;
    var swiper = new Swiper('.comunicate-container', {
      slidesPerView: $slides,
      spaceBetween: 30,
      pagination: {
        el: '.comunicat-pagination',
        clickable: true,
      },
    });
  </script>
@endpush