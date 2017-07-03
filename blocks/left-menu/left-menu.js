var main = function(){
	var $leftMenu = $("[module='left-menu']");
	var $leftMenu_inner = $(".left-menu__container");
	var $toggleButton = $("[module='left-menu'] [button='close']");
	var $orderButton = $("[module='left-menu'] [button='order']");
	var $stepBackButton = $("[module='left-menu'] [button='step-back']");

	var leftMenu_pos = 1;
	var leftMenu_width = $leftMenu.width();



	function toggleMenu(){
		if($leftMenu.hasClass("active")){
			$leftMenu.removeClass("active");
		} else { $leftMenu.addClass("active") };
	}; // function. toggleMenu

	function change_innerMenu(){
		$leftMenu_inner.animate({
			left: "-" + (leftMenu_pos * leftMenu_width - leftMenu_width)
		}, 250); // animate. $leftMenu_inner

		console.log(leftMenu_pos);
	}; // function. change_innerMenu



	$leftMenu.addClass("active");
	$toggleButton.on("click", function(){ toggleMenu() });

	$orderButton.on("click", function(){
		leftMenu_pos++;
		change_innerMenu();
	});
	$stepBackButton.on("click", function(){
		leftMenu_pos--;
		change_innerMenu();
	});
};

$(document).ready(main);