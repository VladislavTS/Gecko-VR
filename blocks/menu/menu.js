var main = function(){
	var $user = $("[module='menu'] .user");
	var $userTitle = $("[module='menu'] .user__title");
	var $userPhoto = $("[module='menu'] .user__photo");

	function userWindow_toggle(){
		if($user.hasClass("user_active")){
			$user.removeClass("user_active");
		} else {
			$user.addClass("user_active");
		} // if. $user has class "user_active"
	} // function. userWindow_toggle

	$userTitle.on("click", function(){ userWindow_toggle() });
	$userPhoto.on("click", function(){ userWindow_toggle() });
};

$(document).ready(main);