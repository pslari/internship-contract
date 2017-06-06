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

function acceptWork(id){
	alert(id);
	$.post('core.php?do=acceptwork',{id: id},function(){
		$('#test_dataTable').DataTable().ajax.reload();
	});
}

$(document).ready(function() {

	var $dataTableAjax = $('#test_dataTable').dataTable({
		"fixedHeader": true,
		"select": true,
		"ajax": {
			"url": 'core.php?do=loaddata'
		}
	});

});