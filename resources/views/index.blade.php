@extends('parts.template') @section('content')
<div class="swiper-container index-banner">
    <div class="swiper-wrapper">
        @foreach($movies as $movie)
        <div class="swiper-slide">
            <div class = "index-banner-element" style = "background-image:url('{{ route('thumb', ['width:1920', $movie->index_banner]) }}')">
                <div class = "index-banner-overlay">
                    <div class = "banner-social-media">
                        <a href = "{{setting('site.facebook')}}" class = "banner-social-item"><img src = "images/facebook.svg" class = "full-width"></a>
                        <a href = "{{setting('site.instagram')}}" class = "banner-social-item"><img src = "images/instagram.svg" class = "full-width"></a>
                        <a href = "{{setting('site.youtube')}}" class = "banner-social-item"><img src = "images/youtube.svg" class = "full-width"></a>
                    </div>
                    <div class = "container">
                        <div class= "banner-categories">
                            @foreach($movie->categories as $category)
                            <div class = "banner-category hvr-bounce-to-left">{{$category->name}}</div>
                            @endforeach
                        </div>
                        <div class = "banenr-title">{{$movie->name}}</div>
                        <div class = "banner-informatii">
                            <a data-fancybox href="{{$movie->trailer}}" class = "informatii-button hvr-bounce-to-left-red" id = "trailer">
                                <div class = "informatii-buton-imagine">
                                    <img class = "play-button-red" src = "images/play-button.svg">
                                    <img class = "play-button-white" src = "images/play-button-white.svg">
                                </div>
                                <div class = "informatii-button-text">Vezi Trailer</div>
                            </a>
                            <a target = "_blank" href = "{{$movie->cinemagia_link}}" class = "informatii-button hvr-bounce-to-left-red">
                                <div class = "informatii-buton-imagine">
                                    <img class = "play-button-red" src = "images/ticket.svg">
                                    <img class = "play-button-white" src = "images/ticket-white.svg">
                                </div>
                                <div class = "informatii-button-text">Cumpara bilete</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next banner-next"></div>
    <div class="swiper-button-prev banner-prev"></div>
</div>


@if(count($programMovies)>0)

<div class = "filme-container">
        <div class = "white-title" style = "color:white;">Program cinematograf</div>
        <div class = "yellow-line"></div>
        <div class = "program-data-container">
            <div class = "program-data program-data-desktop" month = "{{$currentMonth}}">{{$currentMonth}}</div>
            <div class="swiper-container program-zile-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class = "day-item day-item-desktop day-item-program" day = 01 >01</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 02>02</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 03>03</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 04>04</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 05>05</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 06>06</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 07>07</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 08>08</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 09>09</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 10>10</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 11>11</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 12>12</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 13>13</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 14>14</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 15>15</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 16>16</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 17>17</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 18>18</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 19>19</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 20>20</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 21>21</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 22>22</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 23>23</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 24>24</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 25>25</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 26>26</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 27>27</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 28>28</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 29>29</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 30>30</div>
                    </div>
                    <div class="swiper-slide">
                        <div class = "day-item  day-item-desktop day-item-program" day = 31>31</div>
                    </div>
                </div>
            </div>
            <div class = "program-data program-data-desktop" month = "{{$nextMonth}}">{{$nextMonth}}</div>
        </div>
        <div class = "program-cinematograf-container">
            <div class = "program-cinematograf-blur"></div>
            <div class = "program-overlay">
              <div class = "program-movies-desktop-overlay"><div class = "no-events-movies-desktop">Nu exista filme in aceasta perioada</div></div>
                <div class = "program-movies-container">
                    <div class = "program-movies-left">
                        <div class = 'program-movies-title-container'>
                            {{--  <div class = "movie-group">+18</div>  --}}
                            <div class = "program-movies-title-text trick-title">{{$programMovies[0]->name}}</div>
                        </div>
                        {{--  <div class = "program-movies-rating">
                            <img src ="images/yellow-star.svg" class = "star">
                            <img src ="images/yellow-star.svg" class = "star">
                            <img src ="images/yellow-star.svg" class = "star">
                            <img src ="images/yellow-star.svg" class = "star">
                            <img src ="images/grey-star.svg" class = "star">
                        </div>  --}}
                    </div>
                    <div class = "program-movies-center">
                        <div class = "program-movies-element-contaier">
                            <div class = "program-movies-element-left">Data:</div>
                            <div class = "program-movies-element-right trick-date">{{$programMovies[0]->date}}</div>
                        </div>
                        <div class = "program-movies-element-contaier">
                            <div class = "program-movies-element-left">Gen:</div>
                            <div class = "program-movies-element-right trick-gen">{{$programMovies[0]->formated_categories}}</div>
                        </div>
                        <div class = "program-movies-element-contaier">
                            <div class = "program-movies-element-left">Program:</div>
                            <div class = "program-movies-element-right trick-hours">
                                @foreach($programMovies[0]->hours as $hour)
                                <div class = "program-item-hour-element hvr-bounce-to-left">{{$hour->hour}}</div>
                                @endforeach
                            </div>
                        </div>
                        <div class = "program-movies-element-contaier">
                            <div class = "program-movies-element-left">Durata:</div>
                            <div class = "program-movies-element-right trick-duration">{{substr($programMovies[0]->duration,1,1)}}h {{substr($programMovies[0]->duration,3,2)}}min</div>
                        </div>
                        <div class = "progran-movies-descriere trick-description">{{substr($programMovies[0]->description,0,300)}}<a href = "program-detaliu/{{$programMovies[0]->slug}}" class = "detalii"> Detalii...</a>
                        </div>
                        <a href = "{{$programMovies[0]->cinemagia_link}}" class = "cumpara-bilet cumpara-bilet-index trick-link">
                            <div class=  "pret trick-price">{{$programMovies[0]->price}} lei</div>
                            <div class = "pret-linie">|</div>
                            <div class=  "cumpara">cumpara bilet</div>
                        </a> 
                    </div>
                    <div class = "program-movies-right">
                            <div class = "premiera-container"></div>
                        <div class="imdb-container">
                            <img src="images/imdb.svg" class="imdb-image">
                            <div class="imdb-note trick-note">{{$programMovies[0]->note}}</div>
                        </div>
                    </div>
                </div>
                <div class = "program-swiper-container">
                    <div class="program-swiper swiper-container">
                        <div class="swiper-wrapper">
                        @foreach($programMovies as $movie)
                          <div class="swiper-slide" movie-title="{{$movie->name}}" movie-date = "{{$movie->date}}" movie-duration = "{{$movie->duration}}" movie-description = '{{$movie->description}}' movie-price = "{{$movie->price}}" movie-slug = "{{$movie->slug}}" movie-link = "{{$movie->cinemagia_link}}" movie-categories = "{{$movie->formated_categories}}" movie-note = "{{$movie->note}}" movie-first_time = "{{$movie->first_time}}"
                            movie-hours = "{{$movie->formated_hours}}">
                              <div class = "program-movie program-item-desktop month-desktop-{{$movie->month}} day-desktop-{{$movie->day}}">
                                  <div class = "program-movie-image">
                                      <img src = "{{ route('thumb', ['width:400', $movie->image]) }}" class = "full-width">
                                  </div>
                              </div>
                          </div>
                        @endforeach
                        </div>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="program-button-next swiper-button-next"></div>
                <div class="program-button-prev swiper-button-prev"></div>
            </div>
        </div>
</div>






<div class = "filme-container-mobile container">
    <div class = "evenimente-dates evenimente-dates-mobile">
        <div class = "evenimente-months">
            @foreach($months as $month)
            <div class = "evenimente-month evenimente-month-mobile evenimente-month-program" month = {{$month}}>{{$month}}</div>
            @endforeach
        </div>
        <div class="days-container swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class = "day-item day-item-mobile day-item-program" day = 01 >01</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile  day-item-program" day = 02 >02</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 03 >03</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 04 >04</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 05 >05</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 06 >06</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 07 >07</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 08 >08</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 09 >09</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 10 >10</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 11 >11</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 12 >12</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 13 >13</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 14 >14</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 15 >15</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 16 >16</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 17 >17</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 18 >18</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 19 >19</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 20 >20</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 21 >21</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 22 >22</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 23 >23</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 24 >24</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 25 >25</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 26 >26</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 27 >27</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 28 >28</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 29 >29</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 30 >30</div>
              </div>
              <div class="swiper-slide">
                <div class = "day-item  day-item-mobile day-item-program" day = 31 >31</div>
              </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="program-container-mobile swiper-container">
          <div class="swiper-wrapper">
            @foreach($programMovies as $movie)
            <div class="swiper-slide">
                <a href=  "program-detaliu/{{$movie->slug}}" class = "program-item program-item-mobile month-mobile-{{$movie->month}} day-mobile-{{$movie->day}}">
                  <div class = "program-item-mobile-name">{{$movie->name}}</div>
                  <div class = "program-item-mobile-type">
                    @foreach($movie->categories as $category)
                      {{$category['name']}}
                    @endforeach
                  </div>
                  <div class = "program-item-image">
                      @if($movie->first_time == 1) <div class = "program-premiera">Premiera</div> @endif
                      <img src = "{{ route('thumb', ['width:700', $movie->image]) }}" class = "full-width">
                  </div>
                  <div class = 'program-informations-mobile'>
                      <div class = "hours-container">
                        @foreach($movie->hours as $hour)
                        <div class = "program-item-hour-element hvr-bounce-to-left">{{$hour->hour}}</div>
                        @endforeach
                      </div>
                      <a target = '_blank' href = "{{$movie->cinemagia_link}}" class = "cumpara-bilet">
                        <div class=  "pret">{{$movie->price}} lei</div>
                        <div class = "pret-linie">|</div>
                        <div class=  "cumpara">cumpara bilet</div>
                    </a> 
                  </div>
                </a>
            </div>
            @endforeach
          </div>
          <div class="program-pagination swiper-pagination"></div>
        </div>
        <div class = "no-events-white">Nu exista filme la aceasta data</div>
</div>

@endif




<div class = "white-container">
    <div class = "container">
        <div class = "white-title">Evenimente culturale</div>
        <div class = "yellow-line"></div>
        <div class = "evenimente-container mobile-hidden">
            @php
                $counter = 0;
            @endphp
            @foreach($events as $key =>$event)
                @php
                    $counter++;
                @endphp
                <div class = "eveniment @if($counter ==3 || $counter==4 ) eveniment-inversat @endif">
                    <div class = "eveniment-poza">
                        <img src = '{{ route('thumb', ['width:700', $event->event_image]) }}' class = "full-width cover">
                        <div class = "eveniment-overlay">
                            <a href = "/eveniment-detaliu/{{$event->slug}}" class = "eveniment-button">Detalii</a>
                        </div>
                    </div>
                    <div class = "eveniment-descriere">
                        <div class = "eveniment-title">{{Str::limit($event['name'],35,'...')}}</div>
                        <div class = "eveniment-flex">
                            <div class = "eveniment-svg">
                                <img class = "eveniment-svg-white" src = "images/pin.svg" class = "full-width">
                                <img class = "eveniment-svg-yellow" src = "images/pin-yellow.svg" class = "full-width">
                            </div>
                            <div class = "eveniment-flex-text">{{$event->location}}</div>
                        </div>
                        <div class = "eveniment-flex">
                            <div class = "eveniment-svg">
                                <img class = "eveniment-svg-white" src = "images/date.svg" class = "full-width">
                                <img class = "eveniment-svg-yellow" src = "images/date-yellow.svg" class = "full-width">
                            </div>
                            <div class = "eveniment-flex-text">{{$event->date_formated}}</div>
                        </div>
                        <div class = "eveniment-description">{!!Str::limit($event['long_description'],150,'...')!!}</div>
                        <a href = "/eveniment-detaliu/{{$event->slug}}" div class = "detalii-button">Detalii</a>
                    </div>
                </div>
                @php
                    if($counter ==4){
                        $counter =0;
                    }
                @endphp
            @endforeach
        </div>
        <div class="evenimente-viitoare-mobile swiper-container evenimente-index">
            <div class="swiper-wrapper">
              @foreach($events as $event)
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
<div class = "about-us" style = "background-image:url('images/despre.png')">
    <div class = 'index-banner-overlay'>
        <div class = "container">
            <div class = "white-title" style = "color:white;">Despre noi</div>
            <div class = "yellow-line"></div>
            <div class = "despre-noi-text">{!!setting('index.despre')!!}</div>
            <a href = "despre" class = "about-citeste hvr-bounce-to-left">Citeste</a>
        </div>
    </div>
</div>
<div class = "white-container">
    <div class = "container">
        <div class = "white-title">Comunicate</div>
        <div class = "yellow-line"></div>
        <div class = "comunicate-container mobile-hidden">

            @if(count($comunicate)>0)
            @foreach($comunicate as $key=>$comunicat)
            <div class = "comunicat comunicat-index-{{$key}}">
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
            <div class = "no-comunications-index">Nu exista niciun comunicat</div>
           @endif
           
        </div>
        <div class="comunicate-desktop-hidden swiper-container comunicate-index">
            <div class="swiper-wrapper">
                @foreach($comunicate as $key=>$comunicat)
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
    var IndexBanner = new Swiper('.index-banner', {
      effect: 'fade',
      navigation: {
        nextEl: '.banner-next',
        prevEl: '.banner-prev',
      },
      autoplay: {
        delay: 2000,
        },
    });
    $('.fancybox-button--close').click(function(){
        alert('da');
    })
  </script>
  <script>
    $(document).ready(function(){
    $firstCourse = "{{$programMovies[0]->first_time}}";
    if($firstCourse ==1){
      $premieraHtml = '<div class="premiera">Premiera</div>';
      $('.premiera-container').html($premieraHtml);
    }
    $daysSlides = 18;
    if(screen.width<=1366){
      $daysSlides = 15;
    }
    if(screen.width<=1024){
      $daysSlides = 12;
    }
    if(screen.width<=768){
      $daysSlides = 10;
    }
    if(screen.width<=480){
      $daysSlides = 9;
    }
    var daysSwiperMobile = new Swiper('.days-container', {
        slidesPerView: $daysSlides,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
      });
      $slidesMovies = 2;
      if(screen.width<=768)
      $slidesMovies = 1;
      var programSwiperMobile = new Swiper('.program-container-mobile', {
        slidesPerView: $slidesMovies,
        spaceBetween: 20,
        centeredSlides: true,
        loop: true,
        pagination: {
          el: '.program-pagination',
          clickable: true,
        },
        on: {
          init: function () {
            $('.swiper-slide-active').addClass('program-active');
          },
          transitionStart: function() {
            $('.swiper-slide-active').removeClass('program-active');
          },
          transitionEnd: function(swiper) {
            $('.swiper-slide-active').addClass('program-active');
          }
        }
      });

      $('.evenimente-month-mobile').click(function(){
        var luna_curenta = $(this).attr('month');
        $selected_month = luna_curenta;
        $('.evenimente-month-mobile').removeClass('evenimente-month-selected');
        if($selected_day){
          var evenimente_afisate = '.month-mobile-' + $selected_month +'.day-mobile-' + $selected_day;
        }else{
          var evenimente_afisate = '.month-mobile-' + $selected_month;
        }
        $('.program-item-mobile').parent().hide();
        $(evenimente_afisate).parent().fadeIn();
        console.log(evenimente_afisate);
        $(this).addClass('evenimente-month-selected');
  
        /*if($('.program-item-mobile').parent().css('display')=='none'){
            $('.no-events-white').css('display','block');
          }else{
            $('.no-events-white').css('display','none');
          }*/

        programSwiperMobile.update();
        programSwiperMobile.pagination.update();
        programSwiperMobile.pagination.render();
          
    });

    $('.day-item-mobile').click(function(){
      var ziua_curenta = $(this).attr('day');
      $selected_day = ziua_curenta;
      $('.day-item-mobile').removeClass('day-item-selected');
      if($selected_month){
        var evenimente_afisate = '.month-mobile-' + $selected_month +'.day-mobile-' + $selected_day;
      }else{
        var evenimente_afisate = '.day-mobile-' + $selected_day;
      }
      $('.program-item-mobile').parent().hide();
      $(evenimente_afisate).parent().fadeIn();
      $(this).addClass('day-item-selected');
      $('.program-item-mobile').parent().each(function(){
        if($(this).css('display')=='none'){
            $('.program-container-mobile').fadeOut();
            $('.no-events-white').css('display','block');
            return true;
  
          }else{
            
            $('.program-container-mobile').fadeIn();
            $('.no-events-white').css('display','none');
            return false;
          }
      });
        programSwiperMobile.update();
        programSwiperMobile.pagination.update();
        programSwiperMobile.pagination.render();
    });
        $programSlidesPerView = 6;
        $programSpaceBetween = -50;
        if(screen.width<=1640){
          $programSlidesPerView = 4;
          $programSpaceBetween = -50;
        }
        if(screen.width<=1200){
          $programSlidesPerView = 3;
          $programSpaceBetween = -50;
        }
        var ProgramSwiper = new Swiper('.program-swiper', {
            slidesPerView: $programSlidesPerView,
            spaceBetween:  $programSpaceBetween,
            slidesPerGroup: 1,
            slideToClickedSlide:true,
            //centerInsufficientSlides:true,
            slidesOffsetAfter:2000,
            //loop: true,
            loopFillGroupWithBlank: true,
            navigation: {
              nextEl: '.program-button-next',
              prevEl: '.program-button-prev',
            },
            on:{
                activeIndexChange:function(swiper, event){
                   var slide = $('.program-swiper .swiper-slide').get(swiper.activeIndex);
                   var title = $(slide).attr('movie-title');
                   var date = $(slide).attr('movie-date');
                   var note = $(slide).attr('movie-note');
                   var first_time = $(slide).attr('movie-first_time');
                   var duration = $(slide).attr('movie-duration');
                    duration = duration.split(":");
                   var description = $(slide).attr('movie-description');
                   description = description.substring(0,300);
                   if(screen.width<=1640){
                    description = description.substring(0,100);
                   }
                   var slug = $(slide).attr('movie-slug');
                   var htmlDescription = '';
                   htmlDescription = description + '<a href = "program-detaliu/'+slug+'" class = "detalii"> Detalii...</a>';
                   console.log(description);
                   var price = $(slide).attr('movie-price');
                   var link = $(slide).attr('movie-link');
                   var categories = $(slide).attr('movie-categories');
                   categories.substring(1);
                   var hours = $(slide).attr('movie-hours');
                   hours = hours.split(" ");
                   var html = '';
                   $.each(hours, function(index,value) {
                       html = html + '<div class="program-item-hour-element hvr-bounce-to-left">'+value+'</div>';
                       
                    });
                   $('.trick-title').text(title);
                   $('.trick-date').text(date.replace('-',' '));
                   $('.trick-duration').text(duration[0].replace('0',"")+"h "+duration[1]+"min");
                   $('.trick-description').html(htmlDescription);
                   $('.trick-price').text(price);
                   $('.trick-gen').text(categories);
                   $('.trick-note').text(note);
                   $('.trick-link').attr("href", link);
                   $('.trick-hours').html(html);
                   $premieraHtml = '<div class="premiera">Premiera</div>';
                   if(first_time){
                       $('.premiera-container').html($premieraHtml);
                   }
                },
                click:function(swiper,event){ 
                  swiper.slideTo(swiper.clickedIndex);
                },
            },
        });
       $selected_month =null;
       $selected_day =null;
       $('.program-data-desktop').click(function(){
        var luna_curenta = $(this).attr('month');
        $selected_month = luna_curenta;
        $('.program-data-desktop').removeClass('evenimente-month-selected');
        if($selected_day){
          var evenimente_afisate = '.month-desktop-' + $selected_month +'.day-desktop-' + $selected_day;
        }else{
          var evenimente_afisate = '.month-desktop-' + $selected_month;
        }
        $('.program-item-desktop').parent().hide();
        $(evenimente_afisate).parent().fadeIn();
        $(this).addClass('evenimente-month-selected');

        if($('.program-item-desktop').parent().css('display')=='none'){
            $('.program-movies-desktop-overlay').css('display','flex');
            $('.program-movies-container').css('opacity',0);

          }else{
            $('.program-movies-desktop-overlay').css('display','none');
            $('.program-movies-container').css('opacity',1);
          }
          ProgramSwiper.updateSlides();
          ProgramSwiper.pagination.update();
          ProgramSwiper.pagination.render();
       });

       $('.day-item-desktop').click(function(){
        var ziua_curenta = $(this).attr('day');
        $selected_day = ziua_curenta;
        $('.day-item-desktop').removeClass('day-item-selected');
        if($selected_month){
          var evenimente_afisate = '.month-desktop-' + $selected_month +'.day-desktop-' + $selected_day;
        }else{
          var evenimente_afisate = '.day-desktop-' + $selected_day;
        }
        console.log(evenimente_afisate);
        $('.program-item-desktop').parent().hide();
        $(evenimente_afisate).parent().fadeIn();
        $(this).addClass('day-item-selected');
        $('.program-item-desktop').parent().each(function(){
          if($(this).css('display')=='none'){
              $('.program-movies-desktop-overlay').css('display','flex');
              $('.program-movies-container').css('opacity',0);
              return true;
    
            }else{
              
              $('.program-movies-desktop-overlay').css('display','none');
              $('.program-movies-container').css('opacity',1);
              return false;
            }
        });
          ProgramSwiper.updateSlides();
          ProgramSwiper.pagination.update();
          ProgramSwiper.pagination.render();
      });
    
        var DaysSwiper = new Swiper('.program-zile-container', {
            slidesPerView: 10,
            spaceBetween: 30,
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
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
            var evenimenteViitoare = new Swiper('.evenimente-viitoare-mobile', {
              slidesPerView: 1,
              spaceBetween: 30,
              pagination: {
                el: '.swiper-pagination',
                clickable: true,
              },
            });
          $("[data-fancybox]").fancybox({
              afterClose     :function(e){
                  $("#trailer").css("background-color",e.type === "mouseenter"?"transparent":"transparent");
              }
          });
    });
  </script>
@endpush