function alter() {
	if($(".left-screen").hasClass("hide") == true) {
		$(".left-screen").removeClass("hide");
		$(".left-screen").addClass("unhide");
		$(".body-content").removeClass("max");
		$(".body-content").addClass("normal");
		$(".body-content").removeClass("left-align");
		$(".body-content").addClass("center-align");
		$(".hide-unhide").removeClass("position-hide");
		$(".hide-unhide").addClass("position-unhide");
	}
	else if($(".left-screen").hasClass("unhide") == true) {
		$(".left-screen").removeClass("unhide");
		$(".left-screen").addClass("hide");
		$(".body-content").removeClass("normal");
		$(".body-content").addClass("max");
		$(".body-content").removeClass("center-align");
		$(".body-content").addClass("left-align");
		$(".hide-unhide").removeClass("position-unhide");
		$(".hide-unhide").addClass("position-hide");
	}
}

function removeClassTest() {
	$(".left-screen").removeClass("unhide");
	$(".left-screen").addClass("hide");
	console.log("class Hide: " + $(".left-screen").hasClass("hide"));
	console.log("class Unhide: " + $(".left-screen").hasClass("unhide"));
}