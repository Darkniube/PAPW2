    

        $(document).ready(function(){

    $(".limitado2").each(function (){

     $limite_text = $(this).text();

if ($limite_text.length > 50)
{
     $limite = $limite_text.substr(0, 50)+" ...";
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