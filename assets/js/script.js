// Permet de fermer la navbar lors d'un clique d'un a sous mobile
$('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide');
});

const element = document.querySelector('.introSite');
element.classList.add('animated', 'fadeInDown');

$(window).scroll(function(){
    // Permet de recuperer la hauteur en scroll
    var $height = $(window).scrollTop();
    // Permet de recuperer la largeur de l'ecran
    var $width = $(window).width();

    //Affiche dans la console la variable demander
    console.log($height);

    var element = document.querySelector('.introSite');
    // TO DO
    // Trouver une largeur puis adapter la hauteur pour les animations sur mobile

    //Pour smartphone
    if($width <= 400){
        if($height<0){
            element = document.querySelector('.introSite');
            element.classList.add('animated', 'fadeDown');
        }
        else if($height > 450 && $height < 1500){
            element = document.querySelector('#about');
            element.classList.add('animated', 'flipInY');
    
        }
        else if($height > 1501 && $height < 3120){
            element = document.querySelector('#service');
            element.classList.add('animated', 'flipInY');
    
        }
        else if($height > 3121 && $height < 4000){
            element = document.querySelector('#work');
            element.classList.add('animated', 'flipInY');
    
        }
        else if($height > 4001 && $height < 4660){
            element = document.querySelector('#formulaire');
            element.classList.add('animated', 'flipInY');
        }
        else if($height > 4661  ){
            element = document.querySelector('#footer');
            element.classList.add('animated', 'flipInY');
        }
    }
    //Pour les pcs
    else{
        //Contidtion de hauteur pour animation
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
    }
});