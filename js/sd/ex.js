$(document).ready(function(){
    $('input[type="file"]').change(function(){
        $(this).next().removeAttr('disabled');
    }).next().attr('disabled','disabled');
});

















/*function codename() {

if(submit.onClick===true)
{
	document.getElementById('reveal').innerHTML='proceed with images (optional)';
	//alert("button pressed");
$('input[type=submit]').attr('disabled',false);
$("submit2").attr('disabled',false);

}
else
{
$('input[type=submit]').attr('disabled',false);
$("submit2").attr('disabled',false);
}
}*/