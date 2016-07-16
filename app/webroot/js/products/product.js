$(document).ready(function() {
    selectProductType();
});

function selectProductType() {
    var appRoot = $('#appRoot').val();
    var productType = $('#productType').val();
    var productAction = $('#productAction').val();
    var parentCategory = '';
    if (productAction == 'edit') {
        var parentCategory = $('#parentCategoryHidden').val();
    }
    $.ajax({
        type: "POST",
        url: appRoot+"admin/products/getCategoryByProductType/" + productType,
        success: function(data){
            if (data != null && data != "") {
                var myjson='';
                eval("myjson=" + data + ";");
                var str = '';
                if(myjson != null && myjson.length > 0){
                    for(var i=0;i<myjson.length;i++){
                        var categories = myjson[i];
                        if (categories.length > 0) {
                            str += '<div class="group-category">';
                            for (var j = 0; j < categories.length; j++) {
                                str += '<label class="sub-category checkbox-inline">';
                                str += '<input type="checkbox" name="data[Product][category_slug][]" id="category_' +
                                categories[j]['id']+ '" value="' +
                                categories[j]['category_slug'] + '"';
                                if (parentCategory != '' && parentCategory.indexOf(categories[j]['category_slug']) != -1) {
                                    str += ' checked ';
                                }
                                str += '>' + categories[j]['category_name'];
                                str += '</label>';
                            }
                            str += '</div>';
                        }
                    }
                } else {
                    str += '<input type="hidden" name="data[Product][category_slug][]" value="" >';
                }
                $("#categoryCheckbox").html(str);
            }
        }
    });
}

function removeImg(input) {
    img_id = input.parentElement.attributes['id'].value;
    $('#'+img_id).css('display', 'none');
    img_remove_id = $('#'+img_id).attr('data-id');
    $('#'+img_id).append('<input type="hidden" name="data[ProductImage][img_remove_id][]" value="' + img_remove_id + '" />');
}

function insertTemplate(templateName) {
    var appRoot = $('#appRoot').val();
    $.ajax({
        type: "POST",
        url: appRoot+"admin/products/getTemplateBody/" + templateName,
        success: function(data){
            if (data != null && data != "") {
                var myjson='';
                eval("myjson=" + data + ";");
                // console.log(myjson['Template']['template_body']);
                if (templateName == 'overview') {
                    CKEDITOR.instances.ProductOverview.setData(myjson['Template']['template_body']);
                } else if (templateName == 'specification') {
                    CKEDITOR.instances.ProductSpecification.setData(myjson['Template']['template_body']);
                } else if (templateName == 'review') {
                    CKEDITOR.instances.ProductReview.setData(myjson['Template']['template_body']);
                } else if (templateName == 'customer_review') {
                    CKEDITOR.instances.ProductCustomerReview.setData(myjson['Template']['template_body']);
                } else if (templateName == 'note') {
                    CKEDITOR.instances.ProductNote.setData(myjson['Template']['template_body']);
                }
            }
        }
    });
}