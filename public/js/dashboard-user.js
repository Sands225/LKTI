var dashMenu = false;
var Menu = document.getElementById("phoneMenu");

function dashboardMenu() {
	if (!dashMenu) {
		Menu.style.display = "block";
		dashMenu = true;
	} else {
		Menu.style.display = "none";
		dashMenu = false;
	}
}
