let cookies = document.cookie.split(";");

let userCookie = cookies.find((cookie) => cookie.includes("user"));

if (userCookie) {
	let user = userCookie.split("=")[1];
	document.getElementById("user").innerHTML = user;
} else {
	window.location.href = "/login.html";
}
