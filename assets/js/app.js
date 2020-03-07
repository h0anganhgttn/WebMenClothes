
/* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}






$('.owl-carousel-myclass1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoPlay:true,    
    responsive:{
        0:{
            items:1
            
        },
        600:{
        	items:2
        },
        1000:{
            items:3
        },
        1600:{
            items:4
        }
       
    }
})



$('.owl-carousel-myclass2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoPlay:true,    
    responsive:{
        0:{
            items:1
            
        },
        600:{
            items:2
        },
        1000:{
            items:3
        },
        1600:{
            items:5
        }
       
    }
})




