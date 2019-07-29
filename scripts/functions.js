// 取得現在時間
function nowtime(){
    var now=new Date().getFullYear() + "-" + (new Date().getMonth() + 1) + "-" + new Date().getDate() +
    " " + new Date().getHours() + ":" + new Date().getMinutes() + ":" + new Date().getSeconds();
    return now;
}

// 檢查帳號格式
function checkFormat(str){
    if (str.match(/^[a-zA-Z][a-zA-Z0-9]{6,20}$/)) {
        return true;  
    } else {    
        return false;
    }
}

// 檢查密碼格式
function checkPasswordFormat(str){
    if (str.match(/^[a-zA-Z0-9]{4,20}$/)) {
        return true; 
    } else {    
        return false;
    }
}

// 檢查身分證號碼格式

function checkIdNumberFormat(id){
    let patt=/^[A-Z][12]\d{8}$/g;
    let isright=patt.test(id);
    let result=id.match(patt);

    if(result!=null){
        let letters='ABCDEFGHJKLMNPQRSTUVXYWZIO';
        let head=id.substring(0,1);
        let n12=letters.indexOf(head)+10;
        let n1=parseInt(n12/10);
        let n2=n12%10;
        let n3=parseInt(id.substring(1,2));
        let n4=parseInt(id.substring(2,3));
        let n5=parseInt(id.substring(3,4));
        let n6=parseInt(id.substring(4,5));
        let n7=parseInt(id.substring(5,6));
        let n8=parseInt(id.substring(6,7));
        let n9=parseInt(id.substring(7,8));
        let n10=parseInt(id.substring(8,9));
        let n11=parseInt(id.substring(9,10));

        let sum=n1*1+n2*9+n3*8+n4*7+n5*6+n6*5+n7*4+n8*3+n9*2+n10*1+n11*1;
        if(sum%10==0){
            return true;
        }
        return false;
    }
    else{
        return false;
    }
}

// 檢查帳號格式與資料庫有無相同帳號 
function checkAccountFormat(e){
    if(checkFormat(e.target.value)){
        // ajax 到後端檢查帳號是否存在
        $.ajax({
            type:'post',
            url:'../controller/user_Controller.php',
            data:{
                account:e.target.value,
                action:'checkAccount',
            },
            success:function(user_account){
                user_account=JSON.parse(user_account)
                if(user_account['account']){
                    isAccountRight=false;
                    $('#account_Signal').html('已有相同帳號');
                }else{
                    $('#account_Signal').html('ok');
                    isAccountRight=true;
                }
            }
        })
    }else{
        $('#account_Signal').html('x');
        isAccountRight=false;
    }

}

// 檢查密碼格式
function checkPassword(e) {
    if(checkPasswordFormat(e.target.value)){
        isPasswordRight=true;
        isPasswordTwice=false;
        $('#password_Signal').html('ok');
        $('#passwordTwice_Signal').html('密碼不相同');
    }else{
        isPasswordRight=false;
        isPasswordTwice=false;
        $('#passwordTwice_Signal').html('密碼不相同');
        $('#password_Signal').html('格式錯誤');
    }

}

// 二次驗證輸入密碼
function confirmPassword(e){
    let password='';
    password=$('#password').val();
    if(e.target.value==password){
        isPasswordTwice=true;
        $('#passwordTwice_Signal').html('ok');
    }else{
        isPasswordTwice=false;
        $('#passwordTwice_Signal').html('密碼不相同');
    }

}


// 將html字元轉譯回符號
function unhtmlspecialchars(ch) {
    if (ch===null) return '';
    ch = ch.replace("&quot;","\"");
    ch = ch.replace("&#039;","\'");
    ch = ch.replace("&lt;","<");
    ch = ch.replace("&gt;",">");
    ch = ch.replace("&amp;","&");
    return ch;
    }