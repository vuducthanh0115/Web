function check(){
    let error_check = true;

    // Kiem tra ten
    let name = document.getElementById('name').value;
    if(name.length === 0){
        document.getElementById('error_name').innerHTML = 'Vui lòng nhập tên plsss...';
        error_check = false;
    }
    else{
        let regax_name = /^[A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ]*(?:[ ][A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ]*)*$/;
        if(regax_name.test(name) == false){
            document.getElementById('error_name').innerHTML = 'Tên không hợp lệ';
            error_check = false;
        }
        else{
            document.getElementById('error_name').innerHTML = '';
        }
    }
    //Kiem tra dia chi
    let address = document.getElementById('address').value;
    if(address.length === 0){
        document.getElementById('error_address').innerHTML = 'Vui lòng nhập địa chỉ';
        error_check = false;
    }
    else{
        document.getElementById('error_address').innerHTML = '';
    }
    // Kiem tra gioi tinh
    let arr_gender = document.getElementsByName('sex');
    let gender_check = false;
    for(let i = 0; i < arr_gender.length; i++){
        if(arr_gender[i].checked){
            gender_check = true;
        }
    }
    if(gender_check == false){
        document.getElementById('error_sex').innerHTML = 'Vui lòng chọn giới tính';
        error_check = false;
    }
    else{
        document.getElementById('error_sex').innerHTML = '';
    }

    // Kiem email
    let email = document.getElementById('email').value;
    if(email.length === 0){
        document.getElementById('error_email').innerHTML = 'Vui lòng nhập email';
        error_check = false;
    }
    else{
        let regax_email = /^\S+@\S+\.\S+$/;
        if(regax_email.test(email) == false){
            document.getElementById('error_email').innerHTML = 'Email không hợp lệ';
            error_check = false;
        }
        else{
            document.getElementById('error_email').innerHTML = '';
        }
    }

    //kiem tra mat khau
    
    let psw = document.getElementById('psw').value;
    if(psw.length === 0){
        document.getElementById('error_psw').innerHTML = 'Vui lòng nhập mật khẩu ...';
        error_check = false;
    }
    else{
        let regax_psw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
        if(regax_psw.test(psw) == false){
            document.getElementById('error_psw').innerHTML = 'Mật khẩu không hợp lệ';
            error_check = false;
        }
        else{
            document.getElementById('error_psw').innerHTML = '';
            let repeat_psw = document.getElementById('psw_repeat').value;
            if(repeat_psw != psw){
                document.getElementById('dissimilarity').innerHTML = 'Mật khẩu không trùng khớp. Vui lòng nhập lại.';
                error_check = false;
            }
            else{
                document.getElementById('dissimilarity').innerHTML = 'Mật khẩu đã trùng khớp';
                document.getElementById('dissimilarity').style.color = 'green';
            }
        }
    }
    

    //Kiem tra so thich
    let hobby = document.getElementById('hobby').value;
    if(hobby.length === 0){
        document.getElementById('error_hobby').innerHTML = 'Vui lòng nhập sở thích của bạn';
        error_check = false;
    }
    else{
        document.getElementById('errol_hobby').innerHTML = '';
    }

    if(error_check == false){
        return false;
    }
}
