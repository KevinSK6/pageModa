$(document).ready(function () {

	$(".like").click(function () {
		$(".like i").removeClass("fa fa-thumbs-up").addClass("fa fa-check"); 
	});

	$("#public_one").click(function () {
		$("#comment_one").slideToggle();
	});

	$("#public_two").click(function () {
		$("#comment_two").slideToggle();
	});

	$("#public_three").click(function () {
		$("#comment_three").slideToggle();
	});


	$("#send").click(function () {
		$(".container-form").css({'left' : '0'})
		$(".bg").css({'left' : '0'})
	});

	$("#close_send").click(function () {
		$(".container-form").css({'left' : '-100%'})
		$(".bg").css({'left' : '-100%'})
	});


});


function validar() {
	var messege = document.getElementById("messege").value;

	if (messege.length > 500) {
		alert("El mensaje está muy largo, maximo 500 caracteres");
		return false;
	}
}