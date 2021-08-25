@extends('parts.template') @section('content')
<div class = "small-banner" style = "background-image:url('images/despre.png')">
    <div class = "index-banner-overlay">
        <div class = "banner-social-media">
            <a href = "{{setting('site.facebook')}}" class = "banner-social-item"><img src = "images/facebook.svg" class = "full-width"></a>
            <a href = "{{setting('site.instagram')}}" class = "banner-social-item"><img src = "images/instagram.svg" class = "full-width"></a>
            <a href = "{{setting('site.youtube')}}" class = "banner-social-item"><img src = "images/youtube.svg" class = "full-width"></a>
        </div>
        <div class = 'container'>
            <div class = "white-title" style = "color:white;">Comunicate</div>
            <div class = "yellow-line"></div>
        </div>
    </div>
</div>
<div class = "white-container">
    <div class = "container">
        <div class = 'eveniment-detaliu-container comunicat-detaliu-container'>
            <div class = "eveniment-detaliu-mobile">
                <div class = "comunicat-date-mobile">
                    <div class = "eveniment-informatii-container">
                        <div class = "eveniment-informatii">
                            <div class = "eveniment-informatii-image"><img src = "images/date-yellow.svg " class = "full-width"></div>
                            <div class = "eveniment-informatii-text">{{$comunicat->event_date[0]}}</div>
                        </div>
                        <div class = "eveniment-informatii">
                            <div class = "eveniment-informatii-image"><img src = "images/clock.svg " class = "full-width"></div>
                            <div class = "eveniment-informatii-text">{{$comunicat->event_date[1]}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "comunicat-detaliu-stanga">
                <div class = "comunicat-detaliu-imagine">
                    <img src = "{{ route('thumb', ['width:700', $comunicat->image]) }}" class = "full-width cover">
                </div>
                @if($comunicat->pdf!='null')
                    <a target = "_blank" href = "{{ Storage::disk(config('voyager.storage.disk'))->url($comunicat->pdf)}}" class = "download-pdf">Download fisier PDF</a>
                @endif
            </div>
            <div class = "eveniment-detaliu-descriere">
                <div class = "eveniment-detaliu-titlu">{{$comunicat->name}}</div>
                <div class = "eveniment-detaliu-linie"></div>
                
                <div class = "eveniment-informatii-container">
                    <div class = "eveniment-informatii" id = "data">
                        <div class = "eveniment-informatii-image"><img src = "images/date-yellow.svg " class = "full-width"></div>
                        <div class = "eveniment-informatii-text">{{$comunicat->event_date[0]}}</div>
                    </div>
                </div>
                <div class = "eveniment-informatii-text-lung">{!!$comunicat->long_description!!}</div>
                <div class = "eveniment-detaliu-social">
                    <a target = "_blank" href = "https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}" class = "eveniment-detaliu-social-link"><img src = "images/facebook-red.svg" class = "full-width"></a>
                    {{-- <a href = "{{setting('site.youtube')}}" class = "eveniment-detaliu-social-link"><img src = "images/youtube-red.svg" class = "full-width"></a> --}}
                    {{-- <a href = "setting('site.instagram')" class = "eveniment-detaliu-social-link"><img src = "images/instagram-red.svg" class = "full-width"></a> --}}
                </div>
            </div>
        </div>
        <div class = "white-title">Alte comunicate</div>
        <div class = "yellow-line"></div>
        <div class = "comunicate-container comunicate-mobile-hidden">
            @foreach($alteComunicate as $key=>$comunicat)
            <div class = "comunicat comunicat-{{$key}}">
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
            @endforeach
        </div>
        <div class="comunicate-desktop-hidden swiper-container">
            <div class="swiper-wrapper">
                @foreach($alteComunicate as $key=>$comunicat)
                    <div class="swiper-slide">
                        <div class = "comunicat comunicat-{{$key}}">
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
            <div class="swiper-pagination"></div>
          </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
        if(screen.width<=1024){
            $('#locatie').prependTo('.eveniment-detaliu-mobile');
            $('.eveniment-detaliu-titlu').prependTo('.eveniment-detaliu-mobile');
        }
        var evenimenteViitoare = new Swiper('.evenimente-viitoare-mobile', {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
          });
    });
    $slides = 2;
    if(screen.width<=768)
        $slides = 1;
    var swiperComunicate = new Swiper('.comunicate-desktop-hidden', {
        slidesPerView: $slides,
        spaceBetween: 30,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });
</script>
@endpush