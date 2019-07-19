function validarUsuario(id,tipo,destino){

      var consulta;
      consulta = $(id).val();
      cadena= "b="+ consulta+
                "&clave=" + tipo;

             //alert(cadena);

                        $.ajax({
                              type: "POST",
                              url: "../util/validarUsuario.php",
                              data: cadena,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){
                                    $(destino).html(data);
                                    

                              }
                  });


}
