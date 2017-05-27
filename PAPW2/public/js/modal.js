$(document).ready(function(){

 $('#registrar').click(function()
    {
        var cont = $("#pass").val();
        var cont2 = $("#pass2").val();

        $('.colorear').each(function()
            {
                var aa = $(this).val();
                if(aa == "")
                {   
                    $(this).attr("placeholder", "* Campo obligatorio");
                    $(this).css("border-color","#990000","border-size","2px");
                    event.preventDefault();

                }
                else
                {
                    $(this).attr("placeholder", "");
                    $(this).css("border-color","green","border-size","2px");
                }

            });

        if(cont!=cont2)
        {
            $("#pass").val("");
            $("#pass2").val("");
            $("#pass").attr("placeholder","Las contraseñas no coinciden");
            $("#pass2").attr("placeholder","Las contraseñas no coinciden");
            $("#pass").css("border-color","#990000","border-size","3px");
            $("#pass2").css("border-color","#990000","border-size","3px");
            event.preventDefault();
        }

        });

     $('.colorear').blur(function()
            {
                var aa = $(this).val();
                if(aa == "")
                {   
                    $(this).addClass('input_vacio');
                    $(this).attr("placeholder", "* Campo obligatorio");
                    $(this).css("border-color","#990000","border-size","2px");

                }
                else
                {
                    $(this).addClass('input_lleno');
                    $(this).attr("placeholder", "");
                    $(this).css("border-color","green","border-size","2px");
                }

            });
     
$('#resenar').click(function()
    {

        $('.colorear2').each(function()
            {
                var aa = $(this).val();
                if(aa == "")
                {   
                    $(this).addClass('input_vacio');
                    $(this).attr("placeholder", "* Campo obligatorio");
                    $(this).css("border-color","#990000","border-size","2px");
                    event.preventDefault();

                }
                else
                {
                    $(this).addClass('input_lleno');
                    $(this).attr("placeholder", "");
                    $(this).css("border-color","green","border-size","2px");
                }

            });

        });

     $('.colorear2').blur(function()
            {
                var aa = $(this).val();
                if(aa == "")
                {   
                    $(this).addClass('input_vacio');
                    $(this).attr("placeholder", "* Campo obligatorio");
                    $(this).css("border-color","#990000","border-size","2px");

                }
                else
                {
                    $(this).addClass('input_lleno');
                    $(this).attr("placeholder", "");
                    $(this).css("border-color","green","border-size","2px");
                }

            });

    $('#logueo').click(function()
    {

        $('.colorear3').each(function()
            {
                var aa = $(this).val();
                if(aa == "")
                {   
                    $(this).addClass('input_vacio');
                    $(this).attr("placeholder", "* Campo obligatorio");
                    $(this).css("border-color","#990000","border-size","2px");
                    event.preventDefault();

                }
                else
                {
                    $(this).addClass('input_lleno');
                    $(this).attr("placeholder", "");
                    $(this).css("border-color","green","border-size","2px");
                }

            });

        });

     $('.colorear3').blur(function()
            {
                var aa = $(this).val();
                if(aa == "")
                {   
                    $(this).attr("placeholder", "* Campo obligatorio");
                    $(this).css("border-color","#990000","border-size","2px");

                }
                else
                {
                    $(this).attr("placeholder", "");
                    $(this).css("border-color","green","border-size","2px");
                }

            });

     $('.colorear4').blur(function()
            {
                var aa = $(this).val();
                if(aa == "")
                {   ;
                    $(this).attr("placeholder", "¿Que pelicula buscas?");
                    $(this).css("border-color","blue","border-size","2px");

                }

            });

    $(".limitado").each(function (){

     $limite_text = $(this).text();

if ($limite_text.length > 300)
{
     $limite = $limite_text.substr(0, 300)+" ...";
$(this).text($limite);
}
});

    $(".limitado2").each(function (){

     $limite_text = $(this).text();

if ($limite_text.length > 10)
{
     $limite = $limite_text.substr(0, 10);
$(this).text($limite);
}
});

      $(".limitado3").each(function (){

     $limite_text = $(this).text();

if ($limite_text.length > 100)
{
     $limite = $limite_text.substr(0, 100);
$(this).text($limite);
}
});

      $(".limitado4").each(function (){

     $limite_text = $(this).text();

if ($limite_text.length > 100)
{
     $limite = $limite_text.substr(0, 300);
$(this).text($limite);
}
});
});

  /*function archivo(evt) {
        var files = evt.target.files; // FileList object     
        // Obtenemos la imagen del campo "file".
        for (var i = 0, f; f = files[i]; i++) {
            //Solo admitimos imágenes.
            if (!f.type.match('image.*')) {
              continue;
            }    
            var reader = new FileReader();   
                reader.onload = (function(theFile) {
                    return function(e) {
                                // Insertamos la imagen
                    document.getElementById("list").innerHTML = ['<img class="preview" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                    };
                })(f);            
            reader.readAsDataURL(f);
        }
    }
   
document.getElementById('imagen').addEventListener('change', archivo, false);*/

function archivo(evt) {
  var files = evt.target.files; // FileList object
           
                        // Obtenemos la imagen del campo "file".
    for (var i = 0, f; f = files[i]; i++) {
                          //Solo admitimos imágenes.
    if (!f.type.match('image.*')) {
          continue;
    }
                   
            var reader = new FileReader();
                   
            reader.onload = (function(theFile) {
                 return function(e) {
                                // Insertamos la imagen
                  document.getElementById("imagen-pre").setAttribute("src", e.target.result);
                };
            })(f);
                   
            reader.readAsDataURL(f);
          }
      }
                   
      document.getElementById('imagen').addEventListener('change', archivo, false);



function archivo2(evt) {
  var files = evt.target.files; // FileList object
           
                        // Obtenemos la imagen del campo "file".
    for (var i = 0, f; f = files[i]; i++) {
                          //Solo admitimos imágenes.
    if (!f.type.match('image.*')) {
          continue;
    }
                   
            var reader = new FileReader();
                   
            reader.onload = (function(theFile) {
                 return function(e) {
                                // Insertamos la imagen
                  document.getElementById("imagen-pre2").setAttribute("src", e.target.result);
                };
            })(f);
                   
            reader.readAsDataURL(f);
          }
      }
                   
      document.getElementById('imagen2').addEventListener('change', archivo2, false);