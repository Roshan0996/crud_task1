// get form data in json format
function getFormData($form){
    let unindexed_array = $form.serializeArray();
    let indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}


$(document).on('click', '#submitButton', function () {
    // get form data
    var data = getFormData($('#formId'));
    console.log(data);
    $.ajax({
        url: "http://localhost:8080/path_to_api",
        type: 'POST',
        data: data,
        dataType: 'json',
        success: function (res, textStatus, jqXHR) {
            // success response here
        },
        error: function (res) {
            //console.log(res.responseJSON);
        }
    });
})
