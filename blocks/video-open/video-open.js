(function(){
	var videoBlocks__img = document.getElementsByClassName("video-block__img-container");

	function changeSize(){
		var videoWidth = document.getElementsByClassName("video-block__img-container")[0].offsetWidth;

		for(var i = 0; i < videoBlocks__img.length; i++){
			videoBlocks__img[i];
			videoBlocks__img[i].style.height = (videoWidth / 2) + "px";
		}
	}; // function. changeSize

	changeSize();
	window.onresize = function(){
		changeSize();
	};
}());