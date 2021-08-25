@extends('parts.template') @section('content')
{{--  <div class = "program-overlay">
  <div class = "in-lucru">Pagina in lucru</div>
  <div class = "rugam">Va rugam sa reveniti mai tarziu</div>
</div>  --}}
<div class = "small-banner" style = "background-image:url('images/index-banner.png')">
    <div class = "index-banner-overlay">
        <div class = "banner-social-media">
            <a href = "{{setting('site.facebook')}}" class = "banner-social-item"><img src = "images/facebook.svg" class = "full-width"></a>
            <a href = "{{setting('site.instagram')}}" class = "banner-social-item"><img src = "images/instagram.svg" class = "full-width"></a>
            <a href = "{{setting('site.youtube')}}" class = "banner-social-item"><img src = "images/youtube.svg" class = "full-width"></a>
        </div>
        <div class = 'container'>
            <div class = "white-title" style = "color:white;">Program cinematograf</div>
            <div class = "yellow-line"></div>
        </div>
    </div>
</div>
<div class = "black-container">
    <div class = "container">



        <div class = "evenimente-dates">
            <div class = "evenimente-months">
                @foreach($months as $month)
                <div class = "evenimente-month evenimente-month-program" month = {{$month}}>{{$month}}</div>
                @endforeach
            </div>
            <div class="days-container swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 01 >01</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 02 >02</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 03 >03</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 04 >04</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 05 >05</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 06 >06</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 07 >07</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 08 >08</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 09 >09</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 10 >10</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 11 >11</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 12 >12</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 13 >13</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 14 >14</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 15 >15</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 16 >16</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 17 >17</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 18 >18</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 19 >19</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 20 >20</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 21 >21</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 22 >22</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 23 >23</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 24 >24</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 25 >25</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 26 >26</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 27 >27</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 28 >28</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 29 >29</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 30 >30</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item day-item-program" day = 31 >31</div>
                  </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        {{--  pentru mobil foloseste acest meniu  --}}
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
        
        <div class = "program-container">
            @foreach($movies as $movie)
            <div class = "program-item @foreach($movie->formatedDates as $date) month-{{substr($date, strpos($date, "-") + 1,-5)}} day-{{substr($date,0,2)}} @endforeach ">
                <div class = "program-item-image">
                    @if($movie->first_time == 1) <div class = "program-premiera">Premiera</div> @endif
                    <img src = "{{ route('thumb', ['width:700', $movie->image]) }}" class = "full-width">
                </div>
                <div class = "program-item-informations">
                    <div class = "program-item-title">{{$movie->name}}</div>
                    <div class = "hours-container">
                      @foreach($movie->date as $date)
                        @foreach($date->ore as $ora)
                          <div class = "program-item-hour-element-data month-data-{{\Carbon\Carbon::parse($date->data)->formatLocalized('%b')}} day-data-{{\Carbon\Carbon::parse($date->data)->formatLocalized('%d')}}">{{$ora}}</div>
                        @endforeach
                      @endforeach
                    </div>
                    {{-- posibil aici modificat daca vine cu mai multe categorii --}}
                    <div class = "tip-film-container">
                        <div class = "tip-film-text">Gen: <div class = "tip-fil-text-small">{{$movie->categories[0]['name']}}</div></div>
                        <div class = "tip-film-text">Durata: <div class = "tip-fil-text-small">{{substr($movie->duration,0,2)}}h {{substr($movie->duration,3,2)}}min</div></div>
                    </div>
                    <div class = "program-item-cumpara-container">
                        <a href = "{{$movie->cinema_link}}" class = "program-item-cumpara">Cumpara bilet</a>
                        <a href = "program-detaliu/{{$movie->slug}}" class = "program-item-detalii">Vezi detalii</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="program-container-mobile swiper-container">
          <div class="swiper-wrapper">
            @foreach($movies as $movie)
            <div class="swiper-slide @foreach($movie->formatedDates as $date) month-{{substr($date, strpos($date, "-") + 1,-5)}} day-{{substr($date,0,2)}} @endforeach">
                <a href=  "program-detaliu/{{$movie->slug}}" class = "program-item @foreach($movie->formatedDates as $date) month-{{substr($date, strpos($date, "-") + 1,-5)}} day-{{substr($date,0,2)}} @endforeach">
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
                        @foreach($movie->date as $date)
                          @foreach($date->ore as $ora) 
                            <div class = "program-item-hour-element-data month-data-{{\Carbon\Carbon::parse($date->data)->formatLocalized('%b')}} day-data-{{\Carbon\Carbon::parse($date->data)->formatLocalized('%d')}}">{{$ora}}</div>
                          @endforeach
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

        <div class = "white-title" style = "color:white;">Urmeaza</div>
        <div class = "yellow-line"></div>
    </div>
    <div class = "urmeaza-container">
        @foreach($nextMovies as $key=>$movie)
          @if(count($movie->formatedDates)>0)
            <a href = "program-detaliu/{{$movie->slug}}" class = "urmeaza-item urmeaza-item-{{$key}}">
                <img src = "{{ route('thumb', ['width:700', $movie->image]) }}" class = "full-width">
                <div class = "urmeaza-data">{{$movie->formatedDates[0]}}</div>
            </a>
          @endif 
        @endforeach
    </div>
    <div class = "container">
      <div class="urmeaza-container-mobile swiper-container">
        <div class="swiper-wrapper">
          @foreach($nextMovies as $movie)
          <div class="swiper-slide">
              <a href = "program-detaliu/{{$movie->slug}}" class = "urmeaza-item">
                <img src = "{{ route('thumb', ['width:700', $movie->image]) }}" class = "full-width">
              </a> 
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
        <div class = "white-title">Evenimente viitoare</div>
        <div class = "yellow-line"></div>
        <div class = "evenimente-container">
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
    </div>
</div>
@endsection
@push('scripts')
<script>

  {{--  cod pentru desktop  --}}
  $global_day = null;
  $global_month = null;
  $(document).ready(function(){
      $selected_month =null;
      $selected_day =null;
      $('.evenimente-month').click(function(){
        var luna_curenta = $(this).attr('month');
        $selected_month = luna_curenta;
        $global_month = $selected_month;
        $('.evenimente-month').removeClass('program-month-selected');
        if($selected_day){
          var evenimente_afisate = '.month-' + $selected_month +'.day-' + $selected_day;
        }else{
          var evenimente_afisate = '.month-' + $selected_month;
        }
        $('.program-item').hide();
        $(evenimente_afisate).fadeIn();
        $(this).addClass('program-month-selected');
        $('.program-item').each(function(){
          if($(this).css('display')=='none'){
            $('.no-events-white').css('display','block');
            return true;
          }else{
            $('.no-events-white').css('display','none');
            return false;
          }
        });
        afiseazaDate();
      });
      $('.day-item').click(function(){
        var ziua_curenta = $(this).attr('day');
        $selected_day = ziua_curenta;
        $global_day = $selected_day;
        $('.day-item').removeClass('day-item-selected');
        if($selected_month){
          var evenimente_afisate = '.month-' + $selected_month +'.day-' + $selected_day;
        }else{
          var evenimente_afisate = '.day-' + $selected_day;
        }
        $('.program-item').hide();
        $(evenimente_afisate).fadeIn();
        $(this).addClass('day-item-selected');
        if($('.program-item').css('display')=='none'){
          $('.no-events-white').css('display','block');
        }else{
          $('.no-events-white').css('display','none');
        }
        afiseazaDate();
      });
      function afiseazaDate(){
        if($global_day && $global_month){
          $evenimente_afisate = '.month-data-' + $global_month +'.day-data-' + $global_day;
          console.log($evenimente_afisate);
          {{--  $('.program-item-hour-element-data').each(function(){
            console.log($(this).attr('class'));
          });  --}}
          $('.program-item-hour-element-data').css('display','none');
          $($evenimente_afisate).css('display','flex');
        }
      };
      $('.program-item-detalii').click(function(event){
        $url = $(this).attr('href');
        event.preventDefault();
        if($global_day && $global_month){
          $(location).attr('href', window.location.origin+'/'+$url+'?month='+$global_month+'&day='+$global_day);
        }else{
          $(location).attr('href', window.location.origin+'/'+$url);
        }
      })
  });
  {{--  pentru mobile  --}}
  $(document).ready(function(){
    $selected_month =null;
    $selected_day =null;
    $('.evenimente-month-mobile').click(function(){
      var luna_curenta = $(this).attr('month');
      $selected_month = luna_curenta;
      $('.evenimente-month-mobile').removeClass('evenimente-month-selected');
      if($selected_day){
        var evenimente_afisate = '.month-mobile-' + $selected_month +'.day-mobile-' + $selected_day;
      }else{
        var evenimente_afisate = '.month-mobile-' + $selected_month;
      }
      $('.program-item').parent().hide();
      $(evenimente_afisate).fadeIn();
      $(this).addClass('evenimente-month-selected');

      if($('.program-item').parent().css('display')=='none'){
          $('.no-events-white').css('display','block');
        }else{
          $('.no-events-white').css('display','none');
        }
        programSwiper.update();
        programSwiper.pagination.update();
        programSwiper.pagination.render();
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
      $('.program-item').parent().hide();
      $(evenimente_afisate).fadeIn();
      $(this).addClass('day-item-selected');
      $('.program-item').parent().each(function(){
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
        programSwiper.update();
        programSwiper.pagination.update();
        programSwiper.pagination.render();
    });
});
</script>
<script>
    $slides = 18;
    if(screen.width<=1366){
      $slides = 15;
    }
    if(screen.width<=1024){
      $slides = 12;
    }
    if(screen.width<=768){
      $slides = 10;
    }
    if(screen.width<=480){
      $slides = 9;
    }
    var daysSwiper = new Swiper('.days-container', {
        slidesPerView: $slides,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
      });
      $slidesMovies = 2;
      if(screen.width<=768)
      $slidesMovies = 1;
      var nextSwiper = new Swiper('.urmeaza-container-mobile', {
        slidesPerView: $slidesMovies,
        spaceBetween: 20,
        centeredSlides: true,
        loop: true,
        pagination: {
          el: '.swiper-pagination',
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
      var programSwiper = new Swiper('.program-container-mobile', {
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
    </script>
</script>
@endpush