$(".posts2").hover(function(){
    $(".post-re").fadeIn(500);
     }, function(){
    $(".post-re").fadeOut(500);    
});

    $(".limitado").each(function (){

        $limite_text = $(this).text();

        if ($limite_text.length > 300)
        {
            $limite = $limite_text.substr(0, 300)+" ...";
            $(this).text($limite);
        }
    });

function registro() {
    var password, password2;

    password = document.getElementById('contra');
    password2 = document.getElementById('contra2');

    if(password.value !== password2.value)
    {
        alert('Las contraseñas no coinciden.');
        return false;
    }
    else
    {
        return true;
    }
}