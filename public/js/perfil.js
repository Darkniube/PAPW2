$(".posts").hover(function(){
    $(".post-re").fadeIn(500);
     }, function(){
    $(".post-re").fadeOut(500);    
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