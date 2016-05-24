// JavaScript Document

function Loadme(){
$('#first').blur(function(e) {
	var fname = $('#first').val();
		if(fname==""){
			$('#1').removeClass('hide');
			$('#first').css('border-color','#F00');
		}else{
			$('#1').addClass('hide');
		}
});
			
$('#last').blur(function(e) {
	var fname = $('#last').val();
		if(fname==""){
			$('#2').removeClass('hide');
			$('#last').css('border-color','#F00');
		}
});
		
$('#mail').blur(function(e) {
	var fname = $('#mail').val();
		if(fname==""){
			$('#3').removeClass('hide');
			$('#mail').css('border-color','#F00');
		}
});
		
$('#ph').blur(function(e) {
	var fname = $('#ph').val();
		if(fname==""){
			$('#4').removeClass('hide');
			$('#ph').css('border-color','#F00');
		}
});
		
$('#addr').blur(function(e) {
		var fname = $('#addr').val();
		if(fname==""){
			$('#5').removeClass('hide');
			$('#addr').css('border-color','#F00');
		}
});

$('#country').blur(function(e) {
	    var fname = $('#country').val();
		if(fname==""){
			$('#6').removeClass('hide');
			$('#country').css('border-color','#F00');
		}
});
		
$('#user').blur(function(e) {
		var fname = $('#user').val();
		if(fname==""){
			$('#7').removeClass('hide');
			$('#user').css('border-color','#F00');
		}
});
		
$('#pass').blur(function(e) {
		var fname = $('#pass').val();
		if(fname==""){
			$('#8').removeClass('hide');
			$('#pass').css('border-color','#F00');
		}
});
	
}
