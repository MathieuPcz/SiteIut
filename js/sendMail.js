$(document).ready(function(){
	$('#name').keyup(function(){
		if($(this).val().length < 3){
		$('#name').css('background-color','rgb(237, 64, 64)');
		$('#infoForm').html('<br>your name should be between 3 and 16 characters.').fadeIn(1000);
		$('#infoForm').css('color','rgb(237, 64, 64)');
		$('#name').css('color','white');
		
		}else{
			$('#name').css('background-color','rgb(54,224,139)');
			$('#name').css('color','white');
			$('#infoForm').fadeOut(1000);
		}
	})

	$('#firstName').keyup(function(){
		if($(this).val().length < 3){
		$('#firstName').css('background-color','rgb(237, 64, 64)');
		$('#infoForm').html('<br>your first name should be between 3 and 16 characters.').fadeIn(1000);
		$('#infoForm').css('color','rgb(237, 64, 64)');
		$('#firstName').css('color','white');
		
		}else{
			$('#firstName').css('background-color','rgb(54,224,139)');
			$('#firstName').css('color','white');
			$('#infoForm').fadeOut(1000);
		}
	})
	$('#objet').keyup(function(){
		if($(this).val().length < 3){
		$('#objet').css('background-color','rgb(237, 64, 64)');
		$('#infoForm').html('<br>your topic should be 3 characters minimum.').fadeIn(1000);
		$('#infoForm').css('color','rgb(237, 64, 64)');
		$('#objet').css('color','white');
		
		}else{
			$('#objet').css('background-color','rgb(54,224,139)');
			$('#objet').css('color','white');
			$('#infoForm').fadeOut(1000);
		}
	})
	$('#email').keyup(function(){
		$.ajax({
		type: "post",
		url: "php/verifMail.php",
		data: {
			'email' : $('#email').val()
			},
			success: function(data){
				if(data == "success"){
				$('#email').css('background-color','rgb(54,224,139)');
				$('#email').css('color','white');
				$('#infoForm').fadeOut(1000);
				
				} else { 
					$('#email').css('background-color','rgb(237, 64, 64)');
					$('#email').css('color','white');
					$('#infoForm').html('<br>'+data).fadeIn(1000);
					$('#infoForm').css('color','rgb(237, 64, 64)');
					
				}
			}
		});
	})

	$('#envoyer').click(function(){
		$.ajax({
		type: "post",
		url: "php/sendMail.php",
		data: {
			'name' : $('#name').val(),
			'firstName' : $('#firstName').val(),
			'objet' : $('#objet').val(),
			'email' : $('#email').val(),
			'text' : $('#text').val()
			},
			success: function(data){
				if(data == "success"){
				$('#infoForm').html('Email envoyé avec succès').fadeIn(1000);
				$('#infoForm').fadeOut(5000);
				$('#infoForm').css('color','green');
				
				} else { 
					$('#infoForm').html('<br>'+data).fadeIn(1000);
					$('#infoForm').css('color','rgb(237, 64, 64)');
					
				}
			}
		});
	})
	

})