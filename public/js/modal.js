$(document).ready(function(){

 $('#registrar').click(function()
    {

        $('.colorear').each(function()
            {
                var aa = $(this).val();
                if(aa == "")
                {   
                    $(this).addClass('input_vacio');
                    $(this).attr("placeholder", "* Campo obligatorio");
                    $(this).css("border-color","#990000","border-size","2px");
                    return false;

                }
                else
                {
                    $(this).addClass('input_lleno');
                    $(this).attr("placeholder", "");
                    $(this).css("border-color","green","border-size","2px");
                }

            });

        });

     $('.colorear').blur(function()
            {
                var aa = $(this).val();
                if(aa == "")
                {   
                    $(this).addClass('input_vacio');
                    $(this).attr("placeholder", "* Campo obligatorio");
                    $(this).css("border-color","#990000","border-size","2px");
                    return false;

                }
                else
                {
                    $(this).addClass('input_lleno');
                    $(this).attr("placeholder", "");
                    $(this).css("border-color","green","border-size","2px");
                }

            });
     

    $(".limitado").each(function (){

     $limite_text = $(this).text();

if ($limite_text.length > 500)
{
     $limite = $limite_text.substr(0, 400)+" ...";
$(this).text($limite);
}
});

    $(".limitado2").each(function (){

     $limite_text = $(this).text();

if ($limite_text.length > 50)
{
     $limite = $limite_text.substr(0, 50)+" ...";
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