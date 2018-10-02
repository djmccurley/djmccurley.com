function menuToggle() {
	var bodyState = document.getElementById("body");
	if(bodyState.className != "show_menu") {
		bodyState.className = "show_menu";
		console.log("Menu open");
	} else {
		bodyState.className = "";
		console.log("menu closed");
	}
}


document.getElementById("menu_button").addEventListener("click", menuToggle);
$('.sidebar').load("nav/sidebar.html");
$('.mobile_menu').load("nav/mobile.html");