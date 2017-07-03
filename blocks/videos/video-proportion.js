(function(){
	var videoBlocks = document.getElementsByClassName("video-block");
	var videoBlocks__img = document.getElementsByClassName("video-block__img-container");

	function changeSize(){
		for(var i = 0; i < videoBlocks__img.length; i++){
			var videoWidth = document.getElementsByClassName("video-block__img-container")[i].offsetWidth;

			videoBlocks__img[i];
			videoBlocks__img[i].style.height = (videoWidth / 2) + "px";
		} // for. i < videoBlocks__img.length
	}; // function. changeSize

	changeSize();
	window.onresize = function(){
		changeSize();
	};
}());