
$(()=> {
	createSlider()
});
/**
* Create slied
*/
const createSlider=()=> {
	let curSlide     = 0,
	autoSlideTimeout = 9000
	// Local data base
	$.getJSON("data/slider.json", (data)=>{
	let pagination = $( ".slider-pagi" ),slider=$('.slider'),i=0
	$.each(data.slider, function(i, d) {
		let h2 = d.h2,
		p = d.p,	
		href = d.href,
		a = d.a,
		image = d.image,
		b = $( "<li class='slider-pagi__elem'></li>" );
		slide=	'<article class="slide slide-'+i+'">'+
					'<div class="slide__overlay"></div>'+
					'<div class="slide__text">'+
						'<h2>'+h2+'</h2>'+
						'<div class="hidden-mobile">'+
							'<p class="lead">'+p+'</p>'+
							'<a href="'+href+'" class=" btn btn-primary"">'+a+'</a>'+
						'</div>'+
					'</div>'+
				'</article>';
		slider.append(slide)
		$('.slide-'+i).css("background", " url('"+image+"') no-repeat center")
		$('.slide-'+i).css("background-size", "cover");	
		$('.slide-'+i).css('left', +i*100 + '%');
		b.addClass( "slider-pagi__elem-" + i).data( "page", i ), pagination.append( b )
	});
	$('.slider-pagi__elem-0').addClass('active')
	$('.slide-0').addClass('active')
}).fail(()=>{
	console.log("An error has occurred.");
});
/**
* change Slides
*/
const changeSlides=(a)=>{
	animating  = ! 1;
	( animating = ! 0,  $( ".slider" ).addClass( "animating" ), $( ".slide" )
	.removeClass( "active" ), 
	$( ".slide-" + curSlide ).addClass( "active" ),
		setTimeout(()=> {
			$( ".slider" ).removeClass( "animating" ), animating = ! 1
			},
			500
		)
	),
	window.clearTimeout( autoSlideTimeout ),
	$( ".slider-pagi__elem" ).removeClass( "active" ), 
	$( ".slider-pagi__elem-" + curSlide ).addClass( "active" ), 
	//animation to change element
	$( ".slider" ).css( "transform", "translate3d( " + 100 * -curSlide + "%,0,0)" ), 
	$( ".slide__bg" ).css( "transform", "translate3d( " + 50 * curSlide + "%,0,0)" ), 
	autoSlide()
}
/**
*On click bullets change slide
*/
$( document ).on("click",".slider-pagi__elem",function() {
	curSlide = $( this ).data( "page" ), changeSlides()
}
);
//Navigate Left
const navigateLeft=()=>  {
	if(curSlide-- ==0)
		curSlide=$( ".slide" ).length - 1;
	changeSlides()
}
//Navigate right
const navigateRight=()=>  {
	if(curSlide++ == $( ".slide" ).length - 1)
		curSlide=0;
	changeSlides()
}
//Auto Slide 
const autoSlide=()=>  {
	autoSlideTimeout =   setTimeout(()=> {
			navigateRight()
		},
		9000
	)
}
//Create Bullets
changeSlides(),
$( document ).on(
	"click",".slider-control",
	()=> {
		$( this ).hasClass( "left" ) ? navigateLeft() : navigateRight()
	}
);
}