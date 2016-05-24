$(document).ready(function() {

$("#first").click(function() {
var fname = $("#first").val();
});

$("#last").click(function() {
var lname = $("#last").val();
});

$("#mail").click(function() {
var mail = $("#mail").val();
});

$("#ph").click(function() {
var ph = $("#ph").val();
});

$("#addr").click(function() {
var addr = $("#addr").val();
});

$("#country").click(function() {
var country = $("#country").val();
});

$("#user").click(function() {
var user = $("#user").val();
});

$("#pass").click(function() {
var pass = $("#pass").val();
});

});
$("#register").click(function() {
if (fname == '') {
$("#1").css("display","block");
}else if(lname == ''){
$("#2").css("display","block");
}else if(mail == ''){
$("#3").css("display","block");
}else if(ph == ''){
$("#4").css("display","block");
}else if(addr == ''){
$("#5").css("display","block");
}else if(country == ''){
$("#6").css("display","block");
}else if(user == ''){
$("#7").css("display","block");
}else if(pass == ''){
$("#8").css("display","block");
}
});







/*$('#close').click(function() {
$('body').hide();
});

function callme(){
//var a = ['first','last','mail','ph','country','user','pass'];

if($('#first').attr('value')== null){
$('#first')css("border","1px solid red");
}else if ($('#last').attr('value')== null) {
$('#last')css("border","1px solid red");
}else if ($('#mail').attr('value')== null) {
$('#mail')css("border","1px solid red");
}else if ($('#ph').attr('value')== null) {
$('#ph')css("border","1px solid red");
}else if ($('#country').attr('value')== null) {
$('#country')css("border","1px solid red");
}else if ($('#user').attr('value')== null) {
$('#user')css("border","1px solid red");
}else if ($('#pass').attr('value')== null) {
$('#pass')css("border","1px solid red");
}*/





/*if($('#first').focus()){
if(!$('#first').focus()) {
var txt = $(this).attr('value');

if(txt == null) {
$(this).css("border","1px solid red");
}
});

}


for(i=0;i<7;i++){
$('#'+a[i]+'').mouseleave(function(){
var value = $('#'+a[i]+'').attr('value');
if(value==null){
$('#'+a[i]+'').css("border","1px solid red");
}
});
}
}*/
