@extends('parts.template') @section('content')
{{--  <div class = "program-overlay">
    <div class = "in-lucru">Pagina in lucru</div>
    <div class = "rugam">Va rugam sa reveniti mai tarziu</div>
</div>  --}}
<div class = "small-banner banner-movie-detail" style = "background-image:url('{{ route('thumb', ['width:1920', $movie->banner]) }}')">
    <div class = "index-banner-overlay">
        <div class = "banner-social-media">
            <a href = "{{setting('site.facebook')}}" class = "banner-social-item"><img src = "images/facebook.svg" class = "full-width"></a>
            <a href = "{{setting('site.instagram')}}" class = "banner-social-item"><img src = "images/instagram.svg" class = "full-width"></a>
            <a href = "{{setting('site.youtube')}}" class = "banner-social-item"><img src = "images/youtube.svg" class = "full-width"></a>
        </div>
        <div class = 'container'>
            <div class = "program-detaliu-title-container">
                <div class = "cumpara-mobile">
                    <div class = "program-detaliu-button">
                        <a data-fancybox="" href="{{$movie->trailer}}" class="informatii-button hvr-bounce-to-left-red">
                            <div class="informatii-buton-imagine">
                                <img class="play-button-red" src="images/play-button.svg">
                                <img class="play-button-white" src="images/play-button-white.svg">
                            </div>
                            <div class="informatii-button-text">Vezi Trailer</div>
                        </a>
                    </div>
                    <a target = "_blank" href = "{{$movie->cinemagia_link}}" class = "informatii-button hvr-bounce-to-left-red">
                        <div class = "informatii-buton-imagine">
                            <img class = "play-button-red" src = "images/ticket.svg">
                            <img class = "play-button-white" src = "images/ticket-white.svg">
                        </div>
                        <div class = "informatii-button-text">Cumpara bilete</div>
                    </a>
                </div>

                <div class = "program-detaliu-title-container-text">
                    <div class = "program-detaliu-title-container-text-title">{{$movie->name}}</div>
                    <div class = "program-detaliu-title-container-text-regie">In regia lui {{$movie->director}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class = "black-container">
    <div class = "container">
        <div class = "program-detaliu-container">
            <div class = "program-detaliu-mobile">

            </div>
            <div class = "program-detaliu-imagine">
                @if($movie->first_time==1 )<div class = "premiera premiera-mobile">Premiera</div>@endif
                <img src = "{{ route('thumb', ['width:700', $movie->image]) }}" class = "full-width">
                <div class = "imdb-container imdb-mobile">
                    <img src = "images/imdb.svg" class = "imdb-image">
                    <div class=  "imdb-note">{{$movie->note}}</div>
                </div>
            </div>
            <div class = "program-detaliu-text-container">
                <div class = "program-detaliu-text-title">{{$movie->name}} @if($movie->first_time==1 )<div class = "premiera">Premiera</div>@endif</div> 
                <div class = "hours-container hours-container-program-detaliu">
                    {{-- @foreach($movie->hours as $hour)
                    <div class = "program-item-hour-element hvr-bounce-to-left">{{$hour['hour']}}</div>
                    @endforeach --}}
                </div>
                <div class = "cumpara-bilet-mobile"></div>
                @foreach($movie->date as $date)
                    <div class = "data-da-container-da">
                        <div class = "program-detaliu-informatii"><div class = "program-detaliu-informatii-stanga data-program-da">Data: </div><div class = "program-detaliu-informatii-text program-informatii-primul">{{$date->data}}</div></div>
                        <div class = "program-detaliu-informatii"><div class = "program-detaliu-informatii-stanga">Ore: </div><div class = "program-detaliu-informatii-text">@foreach($date->ore as $ora) {{$ora}}, @endforeach</div></div>
                    </div>
                @endforeach
                <div class = "program-detaliu-informatii"><div class = "program-detaliu-informatii-stanga">Gen: </div><div class = "program-detaliu-informatii-text"> @foreach($movie->categories as $category) {{$category['name']}}, @endforeach</div></div>
                <div class = "program-detaliu-informatii"><div class = "program-detaliu-informatii-stanga">Durata: </div><div class = "program-detaliu-informatii-text"> {{substr($movie->duration,0,2)}}h {{substr($movie->duration,3,2)}}min</div></div>
                <div class = "program-detaliu-informatii"><div class = "program-detaliu-informatii-stanga">Grupa: </div><div class = "program-detaliu-informatii-text" style = "color:#FF574B"> {{$movie->group}}</div></div>
                <div class = "program-detaliu-text">{!!$movie->description!!}</div>
                <div class = "program-detaliu-informatii" style = "color:#FFB84D"><div class = "program-detaliu-informatii-stanga">Regia: </div><div class = "program-detaliu-informatii-text"> {{$movie->director}}</div></div>
                <div class = "program-detaliu-informatii" style = "color:#FFB84D"><div class = "program-detaliu-informatii-stanga">Distributie: </div><div class = "program-detaliu-informatii-text"> {{$movie->distribution}}</div></div>
                <div class = "cumpara-bilet-container">
                    <a target = '_blank' href = "{{$movie->cinemagia_link}}" class = "cumpara-bilet">
                        <div class=  "pret">{{$movie->price}} lei</div>
                        <div class = "pret-linie">|</div>
                        <div class=  "cumpara">cumpara bilet</div>
                    </a> 
                    <div class = "imdb-container mobile-hidden">
                        <img src = "images/imdb.svg" class = "imdb-image">
                        <div class=  "imdb-note">{{$movie->note}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class = "white-title mobile-hidden" style = "color:white;">Din aceeasi categorie</div>
        <div class = "yellow-line mobile-hidden"></div>
    </div>
    <div class = "urmeaza-container">
        @foreach($anotherMovies as $key=>$movie)
        <a href = "program-detaliu/{{$movie->slug}}" class = "urmeaza-item urmeaza-item-{{$key}}">
            <img src = "{{ route('thumb', ['width:700', $movie->image]) }}" class = "full-width">
        </a>
        @endforeach
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
        if(screen.width<=1024){
            $('.hours-container').prependTo('.program-detaliu-mobile');
            $('.program-detaliu-text-title').prependTo('.program-detaliu-mobile');
            $('.cumpara-bilet').prependTo('.cumpara-bilet-mobile');
        }
    });
</script>
@endpush