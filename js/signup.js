$(document).ready(function() {
	$('#signupBtn').click(function() {
		var username = $('#username').val();
		var password = $('#password').val();
		var email = $('#email').val();
		$.ajax({
			url: 'signup.php',