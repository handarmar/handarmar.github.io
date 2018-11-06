$(document).ready(function() {


	$(".ajax-form").submit(function() {
		$.ajax({
			type: "POST",
			url: "/mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			window.location.replace('http://skymedia.tech/good');
			$("#form").trigger("reset");
		});
		return false;
	});
	
});