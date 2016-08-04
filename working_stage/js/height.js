$(document).ready(function(){
function col (){
	var 
	max = $(window).height(),
	footer = $('#footer').height(),
	header = $('#header').height(),
	content = 0;
	content = (max - footer -header);

	$('#container').height(content);
	if (($('#main > p').height()) > content){
		$('#main ').css({'overflow-y':'hidden'});
	}
	alert(content);
	alert($('#main > p').height());
}
	col();
$(window).resize(function(){
	col();
})
})