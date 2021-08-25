@extends('parts.template') @section('content')
<div class = "small-banner" style = "background-image:url('images/despre.png')">
    <div class = "index-banner-overlay">
        <div class = "banner-social-media">
            <a href = "{{setting('site.facebook')}}" class = "banner-social-item"><img src = "images/facebook.svg" class = "full-width"></a>
            <a href = "{{setting('site.instagram')}}" class = "banner-social-item"><img src = "images/instagram.svg" class = "full-width"></a>
            <a href = "{{setting('site.youtube')}}" class = "banner-social-item"><img src = "images/youtube.svg" class = "full-width"></a>
        </div>
        <div class = 'container'>
            <div class = "white-title" style = "color:white;">Evenimente</div>
            <div class = "yellow-line"></div>
        </div>
    </div>
</div>
<div class = "white-container">
    <div class = "container">
        <div class = 'eveniment-detaliu-container'>
            <div class = "eveniment-detaliu-mobile"></div>
            <div class = "eveniment-detaliu-poza">
                <img src = "{{ Voyager::image($event->event_image)}}" class = "full-width">
            </div>
            <div class = "eveniment-detaliu-descriere">
                <div class = "eveniment-detaliu-titlu">{{$event->name}}</div>
                <div class = "eveniment-detaliu-linie"></div>
                <div class = "eveniment-informatii">
                    <div class = "eveniment-informatii-image"><img src = "images/pin-yellow.svg " class = "full-width"></div>
                    <div class = "eveniment-informatii-text">{{$event->location}}</div>
                </div>
                <div class = "eveniment-informatii-container">
                    <div class = "eveniment-informatii">
                        <div class = "eveniment-informatii-image"><img src = "images/date-yellow.svg " class = "full-width"></div>
                        <div class = "eveniment-informatii-text">{{$event->date_formated}}</div>
                    </div>
                    @if($event->hour)
                    <div class = "eveniment-informatii">
                        <div class = "eveniment-informatii-image"><img src = "images/clock.svg " class = "full-width"></div>
                        <div class = "eveniment-informatii-text">@if($event->end_hour) {{$event->hour}} - {{$event->end_hour}} @else {{$event->hour}} @endif</div>
                    </div>
                    @endif
                </div>
                <div class = "eveniment-informatii-text-lung">{!!$event->long_description!!}</div>
                <div class = "eveniment-detaliu-social">
                    <a target = "_blank" href = "https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}" class = "eveniment-detaliu-social-link"><img src = "images/facebook-red.svg" class = "full-width"></a>
                    {{-- <a href = "{{setting('site.youtube')}}" class = "eveniment-detaliu-social-link"><img src = "images/youtube-red.svg" class = "full-width"></a> --}}
                    {{-- <a href = "setting('site.instagram')" class = "eveniment-detaliu-social-link"><img src = "images/instagram-red.svg" class = "full-width"></a> --}}
                </div>
            </div>
        </div>
        <div class = "white-title">Evenimente viitoare</div>
        <div class = "yellow-line"></div>
        <div class = "evenimente-container evenimente-container-desktop">
            @foreach($nextEvents as $event)
            <div class = "eveniment">
                <div class = "eveniment-poza">
                    <img src = '{{ route('thumb', ['width:700', $event['event_image']]) }}' class = "full-width cover">
                    <div class = "eveniment-overlay">
                        <a href = "/eveniment-detaliu/{{$event['slug']}}" class = "eveniment-button">Detalii</a>
                    </div>
                </div>
                <div class = "eveniment-descriere">
                    <div class = "eveniment-title">{{Str::limit($event['name'],35,'...')}}</div>
                    <div class = "eveniment-flex">
                        <div class = "eveniment-svg">
                            <img class = "eveniment-svg-white" src = "images/pin.svg" class = "full-width">
                            <img class = "eveniment-svg-yellow" src = "images/pin-yellow.svg" class = "full-width">
                        </div>
                        <div class = "eveniment-flex-text">{{$event['location']}}</div>
                    </div>
                    <div class = "eveniment-flex">
                        <div class = "eveniment-svg">
                            <img class = "eveniment-svg-white" src = "images/date.svg" class = "full-width">
                            <img class = "eveniment-svg-yellow" src = "images/date-yellow.svg" class = "full-width">
                        </div>
                        <div class = "eveniment-flex-text">{{$event['date_formated']}}</div>
                    </div>
                    <div class = "eveniment-description">{{$event['short_description']}}</div>
                    <a href = "/eveniment-detaliu/{{$event['slug']}}" div class = "detalii-button">Detalii</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="evenimente-viitoare-mobile swiper-container">
            <div class="swiper-wrapper">
              @foreach($nextEvents as $event)
              <div class="swiper-slide">
                <div class = "eveniment">
                    <div class = "eveniment-poza">
                        <img src = '{{ route('thumb', ['width:700', $event['event_image']]) }}' class = "full-width cover">
                        <div class = "eveniment-overlay">
                            <a href = "/eveniment-detaliu/{{$event['slug']}}" class = "eveniment-button">Detalii</a>
                        </div>
                    </div>
                    <div class = "eveniment-descriere">
                        <div class = "eveniment-title">{{$event['name']}}</div>
                        <div class = "eveniment-flex">
                            <div class = "eveniment-svg">
                                <img class = "eveniment-svg-white" src = "images/pin.svg" class = "full-width">
                                <img class = "eveniment-svg-yellow" src = "images/pin-yellow.svg" class = "full-width">
                            </div>
                            <div class = "eveniment-flex-text">{{$event['location']}}</div>
                        </div>
                        <div class = "eveniment-flex">
                            <div class = "eveniment-svg">
                                <img class = "eveniment-svg-white" src = "images/date.svg" class = "full-width">
                                <img class = "eveniment-svg-yellow" src = "images/date-yellow.svg" class = "full-width">
                            </div>
                            <div class = "eveniment-flex-text">{{$event['date_formated']}}</div>
                        </div>
                        <div class = "eveniment-description">{{$event['short_description']}}</div>
                        <a href = "/eveniment-detaliu/{{$event['slug']}}" div class = "detalii-button">Detalii</a>
                    </div>
                </div> 
              </div>
              @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="evenimente-viitoare-pagination swiper-pagination"></div>
          </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
        if(screen.width<=1024){
            $('.eveniment-informatii').prependTo('.eveniment-detaliu-mobile');
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
</script>
@endpush