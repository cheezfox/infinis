var navMobileOpen = false;
function navMobile() {
	if (navMobileOpen === false) {
		document.getElementById("mnav_matches").style.display = "block";
		document.getElementById("mnav_events").style.display = "block";
		document.getElementById("mnav_players").style.display = "block";
		document.getElementById("mnav_news").style.display = "block";
		document.getElementById("mnav_about").style.display = "block";
		document.getElementById("mnav_login").style.display = "block";
		document.getElementById("nav_background").style.display = "block";
		navMobileOpen = true;
	} else {
		document.getElementById("mnav_matches").style.display = "none";
		document.getElementById("mnav_events").style.display = "none";
		document.getElementById("mnav_players").style.display = "none";
		document.getElementById("mnav_news").style.display = "none";
		document.getElementById("mnav_about").style.display = "none";
		document.getElementById("mnav_login").style.display = "none";
		document.getElementById("nav_background").style.display = "none";
		navMobileOpen = false;
	};
}
function navLogin() {
	document.getElementById("page_login").style.display = "block";
}
function closeLogin() {
	document.getElementById("page_login").style.display = "none";
}
function login() {
	var user_name = document.getElementById("login_username").value;
	var user_pass = document.getElementById("login_password").value;
	document.getElementById("page_login").style.display = "none";
}