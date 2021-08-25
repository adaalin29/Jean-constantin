@extends('parts.template') @section('content')
<div class = "small-banner" style = "background-image:url('images/despre.png')">
    <div class = "index-banner-overlay">
        <div class = "banner-social-media">
            <a href = "{{setting('site.facebook')}}" class = "banner-social-item"><img src = "images/facebook.svg" class = "full-width"></a>
            <a href = "{{setting('site.instagram')}}" class = "banner-social-item"><img src = "images/instagram.svg" class = "full-width"></a>
            <a href = "{{setting('site.youtube')}}" class = "banner-social-item"><img src = "images/youtube.svg" class = "full-width"></a>
        </div>
        <div class = 'container'>
            <div class = "white-title" style = "color:white;">Cauta</div>
            <div class = "yellow-line"></div>
        </div>
    </div>
</div>
<div class = "white-container">
    <div class = "container">
        @if(count($comunicate) || count($evenimente))
        <div class = "white-title">Comunicate de presa</div>
        <div class = "yellow-line"></div>
        <div class = "comunicate-container">
                @if(count($comunicate))
                        @foreach($comunicate as $comunicat)
                        <div class = "comunicat year-{{$comunicat->added_date[2]}}">
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
                @else
                    <div class = "nu-elemente">Nu exista niciun comunicat</div>
                @endif
        </div>
        <div class = "white-title">Evenimente</div>
        <div class = "yellow-line"></div>
        <div class = "evenimente-container">
            @if(count($evenimente))
            @php
                $counter = 0;
            @endphp
            @foreach($evenimente as $key =>$event)
                @php
                    $counter++;
                @endphp
                <div class = "eveniment eveniment-selectat @if($event->data_range == true) start-month-{{$event->start_month}} end-month-{{$event->end_month}} start-day-{{$event->start_day}} end-day-{{$event->end_day}} @else month-{{$event['month']}} day-{{$event['day']}} @endif @if($counter ==3 || $counter==4 ) eveniment-inversat @endif">
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
                        <div class = "eveniment-description">{!!Str::limit($event['long_description'],170,'...')!!}</div>
                        <a href = "/eveniment-detaliu/{{$event['slug']}}" div class = "detalii-button">Detalii</a>
                    </div>
                </div>
                @php
                    if($counter ==4){
                        $counter =0;
                    }
                @endphp
            @endforeach
            @else
            <div class = "nu-elemente">Nu exista niciun eveniment</div>
            @endif
        </div>
        @else
        <div class = "nu-elemente">Nu exista niciun comunicat sau eveniment</div>
        @endif
    </div>
</div>
@endsection