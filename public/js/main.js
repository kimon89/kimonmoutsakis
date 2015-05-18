$(function(){
	$('#contact-form').submit(function(e){
		e.preventDefault();
        var data = $(this).serializeArray();
        $.ajax({
            url:"/contact/message",
            data:data,
            method:"POST",
            dataType:"json",
        }).done(function(data){
			if (data.success) {
				//show thank you message
			}
		}).fail(function(jqXHR){
			console.log(jqXHR.responseText);
		});
	});
});
