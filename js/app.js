$(document).ready(() => {

	console.log("the page is ready");

	$(".student").click(e => {
		console.log("dog was clicked");


		let id = e.target.dataset.id;
		let name = e.target.dataset.breed;

		alert("you clicked on " + name);
	});
});