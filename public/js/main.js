$(function(){
	$('#contact-form').submit(function(e){
		e.preventDefault();
        var data = $(this).serializeArray();
        $.ajax({
            url:"/contact/message",
            data:data,
            method:"POST",
            dataType:"json"
        }).done(function(data){
            console.log(data);
        });
	});
});