(function(){
	var gallery = document.getElementsByClassName("gallery");
	var gallerySlidesBlock = document.getElementsByClassName("gallery__slide-blocks");
	var gallerySlides = document.getElementsByClassName("slide-block");

	var slidePosition = 1;
	var galleryWidth = document.getElementsByClassName("gallery")[0].offsetWidth;



	function changeSize(){
		galleryWidth = document.getElementsByClassName("gallery")[0].offsetWidth;

		for(var i = 0; i < gallery.length; i++){
			gallery[i];
			gallery[i].style.height = (galleryWidth / 2) + "px";
		} // for. i < gallery.length

		for(var i = 0; i < gallerySlidesBlock.length; i++){
			gallerySlidesBlock[i];
			gallerySlidesBlock[i].style.width = (galleryWidth * gallerySlides.length) + "px";
		} // for. i < gallerySlidesBlock.length

		for(var i = 0; i < gallerySlides.length; i++){
			gallerySlides[i];
			gallerySlides[i].style.width = galleryWidth + "px";
		} // for. i < gallerySlides.length
	}; // function. changeSize

	function changePosition(){
		if(slidePosition < 1){ slidePosition = gallerySlides.length };
		if(slidePosition > gallerySlides.length){ slidePosition = 1 };

		gallerySlides[0];
		gallerySlidesBlock[0].style.left = "-" + (slidePosition * galleryWidth - galleryWidth) + "px";
	}; // function. changePosition



	changeSize();
	window.onresize = function(){
		changeSize();
	};

	document.getElementById("slide-left").onclick = function(){
		slidePosition--;
		changePosition();
	};
	document.getElementById("slide-right").onclick = function(){
		slidePosition++;
		changePosition();
	};
}());