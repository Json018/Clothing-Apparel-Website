var username = document.querySelector('#username');
username.addEventListener('keyup', function(){
    var u_times = document.querySelector('.u_times');
    var u_check = document.querySelector('.u_check');
    if (username.value.length == 0 || username.value.length < 3){
        username.style.border = '1px solid red';
        u_times.style.display = 'block';
        u_check.style.display = 'none';
        return false;
    } else {
        username.style.border = '1px solid green';
        u_times.style.display = 'none';
        u_check.style.display = 'block';
    }
})

var password = document.querySelector('#password');
password.addEventListener('keyup', function(){
    var p_times = document.querySelector('.p_times');
    var p_check = document.querySelector('.p_check');
    if (password.value.length == 0 || password.value.length < 3){
        password.style.border = '1px solid red';
        p_times.style.display = 'block';
        p_check.style.display = 'none';
        return false;
    } else {
        password.style.border = '1px solid green';
        p_times.style.display = 'none';
        p_check.style.display = 'block';
    }

})

function validate(){
    if (username.value == 0 || username.value.length < 3){
        document.getElementById('error').innerHTML = 'Please Fill the Required Fields!';
        return false;
    } else if (password.value == 0 || password.value.length < 3){
        document.getElementById('error').innerHTML = 'Please Fill the Required Fields!';
        return false;
}}