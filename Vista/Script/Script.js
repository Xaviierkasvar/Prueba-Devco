$(document).ready(function() {

  $('#key2').keyup(function() {

    var pass1 = $('#key1').val();
    var pass2 = $('#key2').val();

    if ( pass1 == pass2 ) {
      $('#checkey').css("background", "url(../img/check.png)");
    } else {
      $('#checkey').css("background", "url(../img/check-.png)");
    }

  });

});
$('#exampleModal').on('show.bs.modal', function (event) {
  let bookId = $(event.relatedTarget).data('bookid') 
  $(this).find('.modal-body input').val(bookId)
});
$(function(){
        // Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
        $("#adicional").on('click', function(){
          $("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo("#tabla");
        });
       
        // Evento que selecciona la fila y la elimina 
        $(document).on("click",".eliminar",function(){
          var parent = $(this).parents().get(0);
          $(parent).remove();
        });
      });

$(window).scroll(function() {
        if ($("#barra").offset().top > 56) {
            $("#barra").addClass("bg-dark");
        } else {
            $("#barra").removeClass("bg-dark");
        }
      });
function init(){
  var x = document.getElementById("uno");
    var y = document.getElementById("dos");
    var z = document.getElementById("tres");
    var a = document.getElementById("cuatro");
    var b = document.getElementById("cinco");
    var c = document.getElementById("seis");
    var d = document.getElementById("siete");
    var e = document.getElementById("ocho");
    x.style.display = "none";
    y.style.display = "none";
    z.style.display = "none";
    a.style.display = "none";
    b.style.display = "none";
    c.style.display = "none";
    d.style.display = "none";
    e.style.display = "none";  

}

function myFunctionB1() {
    var x = document.getElementById("uno");
    var y = document.getElementById("dos");
    var z = document.getElementById("tres");
    var a = document.getElementById("cuatro");
    var b = document.getElementById("cinco");
    var c = document.getElementById("seis");
    var d = document.getElementById("siete");
    var e = document.getElementById("ocho");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";  
        e.style.display = "none"; 
    } else {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";        
    }
    
}

function myFunctionB2() {
    var x = document.getElementById("uno");
    var y = document.getElementById("dos");
    var z = document.getElementById("tres");
    var a = document.getElementById("cuatro");
    var b = document.getElementById("cinco");
    var c = document.getElementById("seis");
    var d = document.getElementById("siete");
    var e = document.getElementById("ocho");
    if (y.style.display === "none") {
        y.style.display = "block";
        x.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";  
        e.style.display = "none"; 
    } else {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";        
    }
}

function myFunctionB3() {
    var x = document.getElementById("uno");
    var y = document.getElementById("dos");
    var z = document.getElementById("tres");
    var a = document.getElementById("cuatro");
    var b = document.getElementById("cinco");
    var c = document.getElementById("seis");
    var d = document.getElementById("siete");
    var e = document.getElementById("ocho");
    if (z.style.display === "none") {
        z.style.display = "block";
        x.style.display = "none";
        y.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none"; 
    } else {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";         
    }
}
function myFunctionB4() {
    var x = document.getElementById("uno");
    var y = document.getElementById("dos");
    var z = document.getElementById("tres");
    var a = document.getElementById("cuatro");
    var b = document.getElementById("cinco");
    var c = document.getElementById("seis");
    var d = document.getElementById("siete");
    var e = document.getElementById("ocho");
    if (a.style.display = "none") {
        a.style.display = "block";
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none"; 
    } else {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none"; 
        e.style.display = "none";       
    }
}
function myFunctionB5() {
    var x = document.getElementById("uno");
    var y = document.getElementById("dos");
    var z = document.getElementById("tres");
    var a = document.getElementById("cuatro");
    var b = document.getElementById("cinco");
    var c = document.getElementById("seis");
    var d = document.getElementById("siete");
    var e = document.getElementById("ocho");
    if (b.style.display === "none") {
        b.style.display = "block";
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none"; 
    } else {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";         
    }
}
    function myFunctionB6() {
    var x = document.getElementById("uno");
    var y = document.getElementById("dos");
    var z = document.getElementById("tres");
    var a = document.getElementById("cuatro");
    var b = document.getElementById("cinco");
    var c = document.getElementById("seis");
    var d = document.getElementById("siete");
    var e = document.getElementById("ocho");
    if (c.style.display === "none") {
        c.style.display = "block";
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        d.style.display = "none";
        e.style.display = "none"; 
    } else {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";         
    }
}
    function myFunctionB7() {
    var x = document.getElementById("uno");
    var y = document.getElementById("dos");
    var z = document.getElementById("tres");
    var a = document.getElementById("cuatro");
    var b = document.getElementById("cinco");
    var c = document.getElementById("seis");
    var d = document.getElementById("siete");
    var e = document.getElementById("ocho");
    if (d.style.display === "none") {
        d.style.display = "block";
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        e.style.display = "none";
    } else {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";         
    }
}
    function myFunctionB8() {
    var x = document.getElementById("uno");
    var y = document.getElementById("dos");
    var z = document.getElementById("tres");
    var a = document.getElementById("cuatro");
    var b = document.getElementById("cinco");
    var c = document.getElementById("seis");
    var d = document.getElementById("siete");
    var e = document.getElementById("ocho");
    if (e.style.display === "none") {
        e.style.display = "block";
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none"; 
    } else {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none"; 
        e.style.display = "none";        
    }
}

init();
