function validarUsuario(id,tipo){

      var consulta;
      consulta = $(id).val();
      cadena= "b="+ consulta+
                "&clave=" + tipo;

             

                        $.ajax({
                              type: "POST",
                              url: "../util/validarUsuario.php",
                              data: cadena,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){
                                    $("#usuarioValido").html(data);
                                    

                              }
                  });


}
