@extends('parts.template') @section('content')
<div class = "tarif-pop-up">
    <form class = "pop-up-form" action='{{ action("TarifeController@send_request") }}' method="post">
        <div class = "close-pop-up"><img src = "images/close-pop-up.svg" class = "full-width"></div>
        <div class = "pop-up-cere">Cere o oferta</div>
        <input type = "hidden" name = "category">
        <input type = "hidden" name = "rate">
        <input type = "hidden" name = "description">
        <input type="text" name="name" placeholder="Nume, Prenume">
        <input type="email" name="email" placeholder="Email">
        <input type="number" name="phone" placeholder="Telefon">
        <input type="number" name="person" placeholder="Numar persoane">
        <input type="text" name="event" placeholder="Nume eveniment">
        <textarea name="details" placeholder="Detalii complete" class=""></textarea>
        <div class = "terms-container">
            <label class="checkbox">
                <input type="checkbox" name="terms" value="checkbox">
                <span></span>
            </label>
            <div class = "terms-text">Sunt de acord cu <a class = "terms-text-link" href = "confidentialitate"> politica de confidentialitate.</a></div>
        </div>
        <button class = "send-message">Trimite mesajul</button>
    </form>
</div>
<div class = "small-banner" style = "background-image:url('images/despre.png')">
    <div class = "index-banner-overlay">
        <div class = "banner-social-media">
            <a href = "{{setting('site.facebook')}}" class = "banner-social-item"><img src = "images/facebook.svg" class = "full-width"></a>
            <a href = "{{setting('site.instagram')}}" class = "banner-social-item"><img src = "images/instagram.svg" class = "full-width"></a>
            <a href = "{{setting('site.youtube')}}" class = "banner-social-item"><img src = "images/youtube.svg" class = "full-width"></a>
        </div>
        <div class = 'container'>
            <div class = "white-title" style = "color:white;">Tarife</div>
            <div class = "yellow-line"></div>
        </div>
    </div>
</div>
<div class = "white-container">
    <div class = "container">
        <div class = "tarife-container grid">
            @foreach($categorii as $key=>$categorie)
            <div class = "grid-sizer"></div>
            <div class = "tarife-element grid-item">
                <div class = "tarife-categorie-titlu">{{$categorie->name}}</div>
                    <div class = "tarife-elemente-container">
                    @foreach($tarife as $key2=>$tarif)
                        @if($tarif->id_rate_category ==$categorie->id)
                            @if($tarif['categories']->request_offer ==1)
                                <div class = "tarif tarif-modal" category ='{{$categorie->name}}' tarif_pret = '{{$tarif->rate}}' tarif_descriere = '{{$tarif->description}}'>
                                    <div class = "tarif-overlay"><div class = "cere-oferta">Cere o oferta</div></div>
                                    <div class = "tarif-pret">{{$tarif->rate}}</div>
                                    <div class = "tarif-descriere">{{$tarif->description}}</div>
                                </div>
                            @else
                                <div class = "tarif">
                                    <div class = "tarif-pret">{{$tarif->rate}}</div>
                                    <div class = "tarif-descriere">{{$tarif->description}}</div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                    </div>
                    @if($categorie->description!=null)
                <div class = "tarife-informatii">{{$categorie->description}}</div>
                @endif
                </div>
            @endforeach
        </div>
        <div class = "tarife-informatii-bottom">Men??ion??m c?? procesul de estimare al tarifelor pentru biletele de intrare, respectiv al stabilirii taxelor de utilizare temporar?? a spa??iilor din cadrul Centrului Multifunc??ional Educativ pentru Tineret ???Jean Constantin??? s-a realizat ??n conformitate cu analiza de cost beneficiu referitoare la stabilirea pre??ului biletului de intrare cinematograf cuprins?? ??n Formularul Cererii de Finan??are din 28 iunie 2012, ??ncadrat ??n PROGRAMUL OPERA??IONAL REGIONAL 2007-2013, Axa prioritar?? 1 ???Sprijinirea dezvolt??rii durabile a ora??elor ??? poli urbani de cre??tere???, Domeniul de interven??ie 1.1. ???Planuri integrate de dezvoltare urban?????, Sub-domeniul: Poli de cre??tere, ??n acord cu prevederi ale Hot??r??rii Consiliului Jude??ean Constan??a nr. 10 din 29.01.2018 privind stabilirea unor tarife, taxe ??i taxe speciale pentru 2018, cu respectarea Legii Educa??iei Na??ionale nr. 1/ 2011 din 5.01.2011 (art. 84 ??i 205), Legii Tinerilor nr. 350/ 2006 (art. 3) ??i Legii nr. 448/2006 privind protec??ia ??i promovarea drepturilor persoanelor cu handicap ( art. 21), cu modific??rile ??i complet??rile ulterioare. </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $('.grid').masonry({
        // set itemSelector so .grid-sizer is not used in layout
        itemSelector: '.grid-item',
        // use element for option
        columnWidth: '.grid-sizer',
        percentPosition: true
      });
      $('.tarif-modal').click(function(){
        $('.tarif-pop-up').fadeIn().show().css('display','flex');
        $("input[name=category]").val($(this).attr('category'));
        $("input[name=rate]").val($(this).attr('tarif_pret'));
        $("input[name=description]").val($(this).attr('tarif_descriere'));
        
      });
      $('.close-pop-up').click(function(){
        $('.tarif-pop-up').fadeOut();
        $("input[name=category]").val('');
        $("input[name=rate]").val('');
        $("input[name=description]").val('');
      });
</script>
<script>
    Notiflix.Block.Init({messageColor:"#ffffff",backgroundColor:"rgba(0,0,0,0.715)",svgColor:"#ffffff",});
    document.addEventListener("DOMContentLoaded", function () {
      $.ajaxSetup({
  
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
      });
      var $formContact = $('.pop-up-form');
      $('.send-message').on('click', function (event) {
        event.preventDefault();
        $.ajax({
          method: 'POST',
          url: '{{ action("TarifeController@send_request") }}',
          data: $formContact.serializeArray(),
          context: this,
          async: true,
          cache: false,
          dataType: 'json'
        }).done(function (res) {
          console.log(res);
          if (res.success == true) {
            Notiflix.Notify.Success(res.successMessage);
            setTimeout(function () {
              window.location.reload();
            
            }, 4000);
          } else {
            var eroare = res.error;
          for (var i = 0; i < eroare.length; i++) {
            eroare[i] = eroare[i] + "\n";
            Notiflix.Notify.Failure(eroare[i]);
          }
          }
        });
        return;
      });
  
    });
  </script>
@endpush