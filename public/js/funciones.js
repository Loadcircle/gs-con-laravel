$(document).ready(function(){
    $('#alert').hide();
    $('.btn-enviar').click(function(e){
        e.preventDefault();
       
        var form = $(this).parents('form');
        var url = form.attr('action');


        $.post(url, form.serialize(), function(request){
            $('#alert').html(request);            
            $('#alert').show();

        }).fail(function(){
            $('#alert').html('Algo salió mal');
        });
        
    });
});



//smoth scroll
$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } 
  });
});
//smoth scroll

// marcas del menu lateral, waypoints
//nosotros
var waypoint = new Waypoint({
  element: document.getElementById('nosotros'),
  handler: function() {
      $(".imagen-vertical").removeClass("active-vertical");
      $(".nosotros-active").addClass("active-vertical");
      $(".menu-vertical").addClass("display-on");
      $(".flecha-arriba").addClass("flecha-on");
  }
});
//nosotros
//servicios
var waypoint = new Waypoint({
    element: document.getElementById('servicio'),
    handler: function() {                
        $(".imagen-vertical").removeClass("active-vertical");
        $(".servicio-active").addClass("active-vertical");
    }
});
//servicios
//historia
var waypoint = new Waypoint({
    element: document.getElementById('historia'),
    handler: function() {                
        $(".imagen-vertical").removeClass("active-vertical");
        $(".historia-active").addClass("active-vertical");
    }
});
//historia
//convenios
var waypoint = new Waypoint({
    element: document.getElementById('convenio'),
    handler: function() {                
        $(".imagen-vertical").removeClass("active-vertical");
        $(".convenio-active").addClass("active-vertical");
    }
});
//convenios
//contacto
var waypoint = new Waypoint({
    element: document.getElementById('contacto'),
    handler: function() {                
        $(".imagen-vertical").removeClass("active-vertical");
        $(".contacto-active").addClass("active-vertical");
    }
});
//contacto
//desaparecer menu lateral
var waypoint = new Waypoint({
  element: document.getElementById('inicio'),
  handler: function() {
      $(".menu-vertical").removeClass("display-on");
      $(".flecha-arriba").removeClass("flecha-on");
  }
});
//desaparecer menu lateral
// marcas del menu lateral, waypoints

//script para empresario en contacto
$(document).ready(function(){
    $("textarea").focus(function(){
        $(".empresario").css("opacity", ".6");
    });
});
$(document).ready(function(){
    $("textarea").focusout(function(){
        $(".empresario").css("opacity", "1");
    });
});
//script para empresario en contacto