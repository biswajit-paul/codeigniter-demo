$(document).ready(function(){

	$('a[href="#"]').not('.dropdown-toggle').click(function(e){
		e.preventDefault();
		return false;
	});
	
});