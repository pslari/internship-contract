//function addreview(bookID){
//	var star = $('#reviewstar').val();
//	var comment = $('#reviewcomment').val();
//	$.post('core.php?add=newreview',{ bookID : bookID,star : star, comment : comment},function(resp){
//		console.log('OK');
//		window.location.href = 'review.php?book='+bookID;
//	});
//}

function sayHi(){
	alert('Hi');
}

$(document).ready(function() {
	
	var dataTableAjax = $('#test_dataTable').dataTable({
		"fixedHeader": true,
		"ajax": {
			"url": 'core.php?do=loaddata'
		}
	});
});