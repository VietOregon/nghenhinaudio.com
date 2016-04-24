$(document).ready(function() {
	selectProductType();
});

function selectProductType() {
	var appRoot = $('#appRoot').val();
	var parentCategory = $('#parentCategoryHidden').val();
	var product_type = $('#productType').val();
	$.ajax({
        type: "POST",
        url: appRoot+"admin/categories/getCategoryByProductType/" + product_type,
        success: function(data){
        	if (data != null && data != "") {
        		var myjson='';
              	eval("myjson=" + data + ";");
              	var str = '<option value="">---</option>';
              	if(myjson != null && myjson.length > 0){
    	          	for(var i=0;i<myjson.length;i++){
        	      		str += '<option value="' + myjson[i]['Category']['id'] + '" ';
        	      		if (parentCategory == myjson[i]['Category']['id']) {
        	      			str += ' selected ';
        	      		}
        	      		str += '>' + myjson[i]['Category']['category_name']+'</option>'; 
            	  	}
              	}	
	          	$("#selectParentCategory").html(str);
          	}
      	}
    });
}
function checkParentCategory() {
	selectParentCategory
	if ($('#parentCategory').is(":checked")) {
		$('#selectParentCategory').attr('disabled','disabled');
	} else {
		$('#selectParentCategory').removeAttr('disabled');
	}
}