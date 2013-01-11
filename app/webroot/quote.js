$(document).ready(function() {
	
	/* QUOTES SCRIPT */
    $('#firstSlide').fadeIn(5000);
    $('#testimonials .slide');
    setInterval(function(){
        $('#testimonials .slide').filter(':visible').fadeOut(3000,function(){
            if($(this).next('li.slide').size()){
                $(this).next().fadeIn(3000);
            }
            else{
                $('#testimonials .slide').eq(0).fadeIn(3000);
            }
        });
    },10000);  

	/* IMAGE SLIDER SCRIPT */
	                $('#coin-slider').coinslider(
                {
                width: 420, // width of slider panel
height: 250, // height of slider panel
spw: 5, // squares per width
sph: 3, // squares per height
delay: 4000, // delay between images in ms
sDelay: 30, // delay beetwen squares in ms
opacity: 0.8, // opacity of title and navigation
titleSpeed: 500, // speed of title appereance in ms
effect: 'random', // random, swirl, rain, straight
navigation: true, // prev next and buttons
links : true, // show images as links
hoverPause: true // pause on hover

        });
        });