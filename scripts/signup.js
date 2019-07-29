window.onload=function(){
    let isAccountRight = true;
    let isPasswordRight = false;
    let isPasswordTwice = false;
    let isIdNumberRight = false;

    let account_input = document.getElementById('account');
    let password_input = document.getElementById('password');
    let passwordTwice_input = document.getElementById('passwordTwice');
    let name = document.getElementById('name');
    let id_number = document.getElementById('id_number');
    let login_button = document.getElementById('login_button');

    passwordTwice_input.oninput = function(event){confirmPassword(event)}
    account_input.oninput = function(event){checkAccountFormat(event)};
    password_input.oninput = function(event){checkPassword(event)};
    id_number.oninput = function(event){checkIdNumber(event)};


    login_button.onclick=function(){return false;};

    // 格式驗證正確後submit才能激活
    function isSubmit(){
        return (isAccountRight && isPasswordRight && isPasswordTwice) ? true : false;  
    }

    // 檢查身分證
    function checkIdNumber(e){
        id=e.target.value.toUpperCase();
        isIdNumberRight=checkIdNumberFormat(id);
        if (isIdNumberRight) {
            document.getElementById('id_number_Signal').innerText='ok';
        } else {
            document.getElementById('id_number_Signal').innerText='錯誤';
        }
        
    }
}
    

