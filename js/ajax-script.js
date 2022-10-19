function adduser(){
    var form=$('#customerform');
    var form_method=form.attr('method');
    var form_action=form.attr('action');
    $.ajax({
    method: form_method,
    url: form_action,
    dataType: "json" ,
    data: form.serialize(),
    success: function(response){
        if(response.success) {
            alert("Customer Added Successfully");
            refreshtable();
          }
          else {
           alert("Failed Add Customer"+response.error);
          }
    }
    })
    // success: function(data){
    // $('#msg').html(data);
    // $('#customerform').find('input').val('')
    // }
}


function refreshtable(){
    $.ajax({
        method: 'get',
        url: 'includes/get_customer.php',
        dataType: "json",
        success: function(response){
            document.getElementById('modalclose').click();
            create_table(response)
        }
    })
}
