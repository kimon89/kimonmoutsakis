$(function(){
	$('#contact-form').submit(function(e){
		var contactForm = $(this);
		e.preventDefault();
        var data = contactForm.serializeArray();
        $.ajax({
            url:"/contact/message",
            data:data,
            method:"POST",
            dataType:"json",
        }).done(function(data){
			if (data.success) {
				//show thank you message
				contactForm.fadeOut(500,'swing',function(){
					$('#thank-you').fadeIn(300);
				});
			}
		}).fail(function(jqXHR){

		});
	});
});