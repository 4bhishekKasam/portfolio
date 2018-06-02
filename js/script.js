/*var jq = $.noConflict();
jq(document).ready(function () {
	jq("#submit").click(function(){
		var name = $('#name').val();
		var email = $('#email').val();
		var subject = $('#subject').val();
		var message = $('#message').val();
	    $.ajax({
	        type: 'POST',
            url: 'process.php',
            data: { name : name, email : email, email : email, subject : subject, message : message },
            success: function(data) {
                alert(data); //currently shows [object Object]
            },
            dataType: 'json'
	    });
	});

});*/
