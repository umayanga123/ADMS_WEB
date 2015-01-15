$(document).ready(function(){
	$("#submit2").attr('disabled','disabled');
	
	$("sdform2").keyup(function(){
	
	//To disable submit button
	$("#submit2").attr('disabled','disabled');

	//Validating Fields
	//var name=$("#name").val();
	//var email=$("#email").val();
	//var message=$("#message").val();
	//var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

	if(!(submit==""))
	{
	//if(filter.test(email))
	{
	
	//To enable submit button 
	$("#submit2").removeAttr('disabled');
	//$("#submit").css({"cursor":"pointer","box-shadow":"1px 0px 6px #333"});
	}
	}
});

	//On click of submit button 
	$("#submit2").click(function(){
	$("#submit2").css({"cursor":"default","box-shadow":"none"});
	alert("Form Submitted Successfully..!!");
	});

});