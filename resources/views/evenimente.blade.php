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
        <div class = "evenimente-dates evenmente-dates-da">
            <div class = "evenimente-months">
                @foreach($months as $month)
                <div class = "evenimente-month" month = {{$month}}>{{$month}}</div>
                @endforeach
            </div>
            {{-- <div class = "days-container">
                <div class = "day-item"></div>
            </div> --}}
            <div class="days-container swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class = "day-item" day = 01 >01</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 02 >02</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 03 >03</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 04 >04</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 05 >05</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 06 >06</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 07 >07</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 08 >08</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 09 >09</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 10 >10</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 11 >11</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 12 >12</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 13 >13</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 14 >14</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 15 >15</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 16 >16</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 17 >17</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 18 >18</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 19 >19</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 20 >20</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 21 >21</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 22 >22</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 23 >23</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 24 >24</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 25 >25</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 26 >26</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 27 >27</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 28 >28</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 29 >29</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 30 >30</div>
                  </div>
                  <div class="swiper-slide">
                    <div class = "day-item" day = 31 >31</div>
                  </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class = "evenimente-container">
            @php
                $counter = 0;
            @endphp
            @foreach($events as $key =>$event)
                @php
                    $counter++;
                @endphp
                 {{-- <div class = "eveniment eveniment-selectat @if($event->data_range == true) eveniment-range start-month-{{$event->start_month}} end-month-{{$event->end_month}} start-day-{{$event->start_day}} end-day-{{$event->end_day}} @else month-{{$event['month']}} day-{{$event['day']}} @endif @if($counter ==3 || $counter==4 ) eveniment-inversat @endif" >  --}}
                <div class = "eveniment eveniment-selectat @if($counter ==3 || $counter==4 ) eveniment-inversat @endif @if($event->data_range ==true) eveniment-range @endif" @if($event->data_range == true) month = "{{$event->start_month}}" start_day = "{{$event->start_day}}" end_day = "{{$event->end_day}}"  @else day="{{$event['day']}}"  month="{{$event['month']}}" @endif >
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
        </div>
        <div class = 'no-events'>Nu exista evenimente.</div>
        <div class = "white-title">Evenimente trecute</div>
        <div class = "yellow-line"></div>
        <div class = "evenimente-container evenimente-container-expirate">
            @php
                $counter = 0;
            @endphp
            @foreach($expiredEvents as $key =>$event)
                @php
                    $counter++;
                @endphp
                <div class = "eveniment @if($counter ==3 || $counter==4 ) eveniment-inversat @endif">
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
                        <div class = "eveniment-description">{!!Str::limit($event['long_description'],150,'...')!!}</div>
                        <a href = "/eveniment-detaliu/{{$event['slug']}}" div class = "detalii-button">Detalii</a>
                    </div>
                </div>
                @php
                    if($counter ==4){
                        $counter =0;
                    }
                @endphp
                @endforeach
                @unless (count($expiredEvents))
                    <div class = 'no-events-old'>Nu exista evenimente.</div>
                @endunless
        </div>
        <a href = "/" class = "vezi-mai-multe">Vezi mai multe</a>
      </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
        $url = $(location).attr('href');
        console.log($url);
        if($url.indexOf('?page=') != -1){
          $('html, body').animate({
              scrollTop: $(".evenimente-container-expirate").offset().top
          }, 500);
        }
        if (window.location.href.indexOf("page") > -1) {
            $actualPage = parseInt($url.substring($url.length - 1, $url.length));
            $actualUrl = $url.substring(0,$url.length-1);
            $(".vezi-mai-multe").attr("href", $url.substring(0,$url.length-1)+parseInt($actualPage+1));
          }else{
            $(".vezi-mai-multe").attr("href", window.location.href+'?page=2');
          }
          $selected_month =null;
          $selected_day =null;
          $('.evenimente-month').click(function(){
            window.luna_curenta = $(this).attr('month');
            $selected_month = luna_curenta;
            $('.evenimente-month').removeClass('evenimente-month-selected');
            $(this).addClass('evenimente-month-selected');
            console.log(window.luna_curenta,window.ziua_curenta, $(".eveniment-selectat[month="+window.luna_curenta+"][day="+window.ziua_curenta+"]"));
            $('.eveniment-selectat').hide();
            
           if(window.ziua_curenta && window.luna_curenta){
             $( ".eveniment-selectat" ).each(function( index ) {
               if($(this).hasClass('eveniment-range')){
                 var start_day = $(this).attr('start_day');
                 var end_day = $(this).attr('end_day');
                 var current_month = $(this).attr('month');
                 if(window.ziua_curenta >= start_day && end_day >= window.ziua_curenta && current_month == window.luna_curenta){
                   $(this).show();
                 }
               }
             });
            $(".eveniment-selectat[month="+window.luna_curenta+"][day="+window.ziua_curenta+"]").show();
           } else if(window.ziua_curenta){
              $( ".eveniment-selectat" ).each(function( index ) {
               if($(this).hasClass('eveniment-range')){
                 var start_day = $(this).attr('start_day');
                 var end_day = $(this).attr('end_day');
                 console.log(start_day >= window.ziua_curenta && end_day >= window.ziua_curenta);
                 console.log(start_day,window.ziua_curenta,end_day);
                 if(window.ziua_curenta >= start_day && end_day >= window.ziua_curenta){
                   $(this).show();
                 }
               }
              });
              $(".eveniment-selectat[day="+window.ziua_curenta+"]").show();
           } else if(window.luna_curenta){
              $( ".eveniment-selectat" ).each(function( index ) {
               if($(this).hasClass('eveniment-range')){
                 var start_day = $(this).attr('start_day');
                 var end_day = $(this).attr('end_day');
                 var current_month = $(this).attr('month');
                 if(current_month == window.luna_curenta){
                   $(this).show();
                 }
               }
              });
              $(".eveniment-selectat[month="+window.luna_curenta+"]").show();
           }
            if(!$('.eveniment-selectat:visible').length){
              $('.no-events').css('display','block');
            } else{
              $('.no-events').css('display','none');
            }
//             if($('.eveniment-selectat').css('display')=='none'){
//               $('.no-events').css('display','block');
//             }else{
//               $('.no-events').css('display','none');
//             }

          });
          $('.day-item').click(function(){
            window.ziua_curenta = $(this).attr('day');
            $selected_day = ziua_curenta;
            $('.day-item').removeClass('day-item-selected');
            $(this).addClass('day-item-selected');
            $('.eveniment-selectat').hide();
            /*if(window.ziua_curenta){
              $(".eveniment-selectat[month="+window.luna_curenta+"][day="+window.ziua_curenta+"]").show();
            }else{
              $(".eveniment-selectat[month="+window.luna_curenta+"]").show();
            }*/

           if(window.ziua_curenta && window.luna_curenta){
             $( ".eveniment-selectat" ).each(function( index ) {
               if($(this).hasClass('eveniment-range')){
                 var start_day = $(this).attr('start_day');
                 var end_day = $(this).attr('end_day');
                 var current_month = $(this).attr('month');
                 if(window.ziua_curenta >= start_day && end_day >= window.ziua_curenta && current_month == window.luna_curenta){
                   $(this).show();
                 }
               }
             });
            $(".eveniment-selectat[month="+window.luna_curenta+"][day="+window.ziua_curenta+"]").show();
           } else if(window.ziua_curenta){
              $( ".eveniment-selectat" ).each(function( index ) {
               if($(this).hasClass('eveniment-range')){
                 var start_day = $(this).attr('start_day');
                 var end_day = $(this).attr('end_day');
                 console.log(start_day >= window.ziua_curenta && end_day >= window.ziua_curenta);
                 console.log(start_day,window.ziua_curenta,end_day);
                 if(window.ziua_curenta >= start_day && end_day >= window.ziua_curenta){
                   $(this).show();
                 }
               }
              });
              $(".eveniment-selectat[day="+window.ziua_curenta+"]").show();
           } else if(window.luna_curenta){
              $( ".eveniment-selectat" ).each(function( index ) {
               if($(this).hasClass('eveniment-range')){
                 var start_day = $(this).attr('start_day');
                 var end_day = $(this).attr('end_day');
                 var current_month = $(this).attr('month');
                 if(current_month == window.luna_curenta){
                   $(this).show();
                 }
               }
              });
              $(".eveniment-selectat[month="+window.luna_curenta+"]").show();
           }
        
            if(!$('.eveniment-selectat:visible').length){
              $('.no-events').css('display','block');
            } else{
              $('.no-events').css('display','none');
            }
            
          });
    });
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
      
</script>
@endpush