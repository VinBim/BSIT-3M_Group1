$(function() {
    $('#loginform').on('submit', function(e){
        e.preventDefault();
        
        let $error = $('#error');
        
        $.ajax({
            type: 'POST',
            url: 'login.php',
            data: $(this).serialize()
        }).then(function(res){
            let data = JSON.parse(res);
            
            if(data.error){
                $error.removeClass('d-none').html(data.error);
                return;
            }
            
            localStorage.setItem('token', data.token);
            location.href = 'profile.php';
        }).fail(function(res){
            $error.removeClass('d-none').html('Error attempting to sign in.');
        })
    });
});
$(document).ready(function() {
    $('#signupForm').on('submit', function(event) {
        event.preventDefault();
		
		$.ajax({
			url: 'simple_signup.php',
			type: 'POST',
			data: $(this).serialize(), 
			success: function(response) {
				$('#response').html(response);
				
				setTimeout(function() {
					location.href = 'profile.php';
				}, 2000);
				},
				error: function() {
					$('#response').html('An error occurred.');
                }
            });
        });
    });