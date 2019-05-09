// Permet de fermer la navbar lors d'un clique d'un a sous mobile
$('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide');
});

const element = document.querySelector('.introSite');
element.classList.add('animated', 'fadeInDown');

$(window).scroll(function(){
    var $height = $(window).scrollTop();
    console.log($height);

    var element = document.querySelector('.introSite');
  
            

    if($height<0){
        element = document.querySelector('.introSite');
        element.classList.add('animated', 'fadeDown');
    }
    else if($height > 300 && $height < 1400){
        element = document.querySelector('#about');
        element.classList.add('animated', 'flipInY');

    }
    else if($height > 1410 && $height < 2250){
        element = document.querySelector('#service');
        element.classList.add('animated', 'flipInY');

    }
    else if($height > 2300 && $height < 2749){
        element = document.querySelector('#work');
        element.classList.add('animated', 'flipInY');

    }
    else if($height > 2750 && $height < 3200){
        element = document.querySelector('#formulaire');
        element.classList.add('animated', 'flipInY');
    }
    else if($height > 3201){
        element = document.querySelector('#footer');
        element.classList.add('animated', 'flipInY');
    }
    /*
    else if($height > 1840 && $height < 2900){
        element = document.querySelector('#service');
        element.classList.add('animated', 'fadeDown');
    }
    /*
    else if($height < 1255){
        const element = document.querySelector('#about');
        element.classList.add('animated', 'flipInY', 'delay-1s');
    }/*
    else{
    alert("hum");
    }*/
});