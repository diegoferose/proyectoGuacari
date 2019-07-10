$(document).ready(function(){

      var consulta;

      //hacemos focus
      $("#username").focus();

      //comprobamos si se pulsa una tecla
      $("#username").keyup(function(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#username").val();

             //hace la búsqueda
             $("#resultado").delay(1000).queue(function(n) {

                  $("#resultado").html('<img src="ajax-loader.gif" />');

                        $.ajax({
                              type: "POST",
                              url: "validarUsuario.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){
                                    $("#resultado").html(data);
                                    n();
                              }
                  });

             });

      });

});
