/*AJAX*/
const d = new XMLHttpRequest();
/*send messages on enter*/
document.getElementById("msg").addEventListener("click", (event) => {
	d.open('POST', 'info.php');
	var formData = new FormData();
	formData.append("user", document.getElementById("user").value);
	formData.append("msg", document.getElementById("message").value);
	d.send(formData);
});
	
