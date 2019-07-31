logout();

function logout() {
    $.ajax({
        type : 'post',
        url : 'UserController.php',
        data : {action:'logout'},
        success : function(result_array) {
            console.log(result_array)
            result_array=JSON.parse(result_array);
            showSingal(result_array['alert']);
            direct(result_array['location']);
        }
    })
}