function validarUsuario(id){

      var consulta;

             consulta = $(id).val();

                        $.ajax({
                              type: "POST",
                              url: "../util/validarUsuario.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){
                                    $("#usuarioValido").html(data);
                                    

                              }
                  });


}
