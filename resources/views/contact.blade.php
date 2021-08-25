@extends('parts.template') @section('content')
<div class = "small-banner" style = "background-image:url('images/despre.png')">
    <div class = "index-banner-overlay">
        <div class = "banner-social-media">
          <a href = "{{setting('site.facebook')}}" class = "banner-social-item"><img src = "images/facebook.svg" class = "full-width"></a>
          <a href = "{{setting('site.instagram')}}" class = "banner-social-item"><img src = "images/instagram.svg" class = "full-width"></a>
          <a href = "{{setting('site.youtube')}}" class = "banner-social-item"><img src = "images/youtube.svg" class = "full-width"></a>
        </div>
        <div class = 'container'>
            <div class = "white-title" style = "color:white;">Contact</div>
            <div class = "yellow-line"></div>
        </div>
    </div>
</div>
<div class = "contact-informations">
    <div class = "container" style = "height:100%;">
        <div class = "contact-informations-container">
            <div class=  "contact-informations-item">
                <div class = "contact-informations-image"><img src = "images/email.svg" class = "full-width"></div>
                <div class = "contact-informations-text-container">
                    <div class = "contact-informations-text-title">Email</div>
                    <a href = "mailto:{{setting('contact.email')}}" class = "contact-informations-text-link">{{setting('contact.email')}}</a>
                </div>
            </div>
            <div class=  "contact-informations-item">
                <div class = "contact-informations-image"><img src = "images/phone.svg" class = "full-width"></div>
                <div class = "contact-informations-text-container">
                    <div class = "contact-informations-text-title">Telefon</div>
                    <a href = "tel:{{setting('contact.telefon')}}" class = "contact-informations-text-link">{{setting('contact.telefon')}}</a>
                </div>
            </div>
            <div class=  "contact-informations-item">
                <div class = "contact-informations-image"><img src = "images/location.svg" class = "full-width"></div>
                <div class = "contact-informations-text-container">
                    <div class = "contact-informations-text-title">Localizare</div>
                    <div class = "contact-informations-text-link">{{setting('contact.locatie')}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class = "white-container">
    <div class = "container">
        <form class = "contact-form" action='{{ action("ContactController@send_message") }}' method="post">
            {{-- {{ csrf_token() }} --}}
            <div class = "contact-title">Formular de contact</div>
            <input type="text" name="name" placeholder="Nume, Prenume">
            <input type="email" name="email" placeholder="Email">
            <input type="number" name="phone" placeholder="Telefon">
            <textarea name="message" placeholder="Mesaj" class=""></textarea>
            <div class = "terms-container">
                <label class="checkbox">
                    <input type="checkbox" name="terms" value="checkbox">
                    <span></span>
                </label>
                <div class = "terms-text">Sunt de acord cu <a class = "terms-text-link" href = "confidentialitate"> politica de confidentialitate.</a></div>
            </div>
            <button class = "send-message">Trimite mesajul</button>
        </div>
    </div>
    <div id="map-canvas"></div>
</div>
@endsection
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCmM1P-D5Zka0kPEbZSrsR90gpBlDxgm18"></script>
<script>
  function initialize() {
    var defaultMarkerLat = {{setting('contact.latitudine')}};
    var defaultMarkerLng = {{setting('contact.longitudine')}};
    var markerImg = 'images/marker.png';
    var markerTitle = "Jean Constantin";


    var myLatlng = new google.maps.LatLng(defaultMarkerLat,defaultMarkerLng);
    var mapOptions = {
        zoom: 15,
        center: myLatlng,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
disableDefaultUI: true
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
icon:{url: "images/marker.png",
    scaledSize: new google.maps.Size(48,58)} ,

        title: markerTitle
    });

}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script>
    Notiflix.Block.Init({messageColor:"#ffffff",backgroundColor:"rgba(0,0,0,0.715)",svgColor:"#ffffff",});
    document.addEventListener("DOMContentLoaded", function () {
      $.ajaxSetup({
  
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
      });
      var $formContact = $('.contact-form');
      $('.send-message').on('click', function (event) {
        event.preventDefault();
        $.ajax({
          method: 'POST',
          url: '{{ action("ContactController@send_message") }}',
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