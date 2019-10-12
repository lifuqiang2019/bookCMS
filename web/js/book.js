
function resultObj(url){
    var paraObj = {};

    if(url.indexOf("?") != -1){
        var str = url.substr(1);		 
        var strs = str.split("&");
        for (i=0; j=strs[i]; i++){ 
        	paraObj[j.substring(0,j.indexOf("=")).toLowerCase()] = j.substring(j.indexOf("=")+1,j.length); 
        }
        console.log(paraObj);	 
    }

    return paraObj;
}

$('.data-update').on('click', function () {
    var url = $(this).attr('href');
    var paraObj = resultObj(url);

    url = 'http://lfq.localhost/index.php?r=book/show&book_id=' + paraObj['id']; 
    console.log(url);
    $.get(url, function (data) {
            $('.modal-body').html(data);
        }  
    );
});


$('.del').on('click', function () {
    var url = $(this).attr('href');
    var paraObj = resultObj(url);

    url = 'http://lfq.localhost/index.php?r=book/delete&book_id=' + paraObj['id']; 
    console.log(url);
    $.get(url);
});


$('.del-all').on('click', function () {
    var keys = $("#grid").yiiGridView("getSelectedRows");
	console.log(keys);
	$.get("http://lfq.localhost/index.php?r=book/delall&id="+keys);
});

$('.add-data').on('click', function () {
    var url = 'http://lfq.localhost/index.php?r=book/showadd'; 
    console.log(url);
    $.get(url, function (data) {
            $('.modal-body').html(data);
        }  
    );
});
