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
@if(count($comunicate)>0)
<div class = "white-container">
    <div class = "container">
        <div class = "white-title">Comunicate de presa</div>
        <div class = "yellow-line"></div>
        <div class = "comunicate-date-container">
            @foreach($years as $year)
            <div class = "comunicate-date-item" year = {{$year}}>{{$year}}</div>
            @endforeach
        </div>
        {{-- <div class="swiper-container comunicate-date-container-mobile">
            <div class="swiper-wrapper">
                @foreach($years as $year)
                <div class="swiper-slide">
                    <div class = "comunicate-date-item" year = {{$year}}>{{$year}}</div>
                </div>
                @endforeach
            </div>
          </div> --}}
        <div class = "comunicate-container">

                @foreach($comunicate as $comunicat)
                <div class = "comunicat year-{{$comunicat->event_date[2]}}">
                    <div class = "comunicat-imagine">
                        <img src = "{{ route('thumb', ['width:700', $comunicat->image]) }}" class = "full-width cover">
                        <div class = "comunicat-data">
                            <div class = "day">{{$comunicat->event_date[0]}}</div>
                            <div class = "month">{{$comunicat->event_date[1]}}</div>
                            <div class = "year">{{$comunicat->event_date[2]}}</div>
                        </div>
                    </div>
                    <div class = "comunicat-descriere">
                        <div class = "comunicat-title">{{Str::limit($comunicat['name'],60,'...')}}</div>
                        <div class = "comunicat-text">{{$comunicat->short_description}}</div>
                        <a href = "comunicat-detaliu/{{$comunicat->slug}}" class = "about-citeste citeste-comunicat">Citeste</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</div>
@else
<div class = "niciun-comunicat">Nu exista niciun comunicat</div>
@endif
        
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
        $('.comunicate-date-item').click(function(){
            var categorie_curenta = $(this).attr('year');
            $('.comunicate-date-item').removeClass('comunicate-date-item-selected');
            if(categorie_curenta == 0){
                $('.comunicat').fadeIn();
            }else{
            var elemente_afisate = '.year-' + categorie_curenta;
            $('.comunicat').hide();
            console.log(elemente_afisate);
            $(elemente_afisate).fadeIn();
            $(this).addClass('comunicate-date-item-selected');
            
            }
        });
    });
</script>
@endpush