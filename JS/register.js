


//givenname

var givenname = document.querySelector('#givenname');
givenname.addEventListener('keyup', function(){
  // var u_times = document.querySelector('.u_times');
  // var u_check = document.querySelector('.u_check');
    if (givenname.value.length == 0 ||givenname.value.length <= 4){
        givenname.style.border = '1px solid red';
        return false;
    } else {
        givenname.style.border = '1px solid green';
      // u_times.style.display = 'none';
//u_check.style.display = 'block';
    }
})


//surname
var surname = document.querySelector('#surname');
surname.addEventListener('keyup', function(){
   // var s_times = document.querySelector('.s_times');
 //   var s_check = document.querySelector('.s_check');
    if (surname.value.length == 0 ||surname.value.length <= 4){
        surname.style.border = '1px solid red';
        return false;
    } else {
        surname.style.border = '1px solid green';
      //  s_times.style.display = 'none';
      //  s_check.style.display = 'block';
    }
})




//middlename
    var middlename = document.querySelector('#middlename');
    middlename.addEventListener('keyup', function(){
       // var m_times = document.querySelector('.m_times');
      //  var m_check = document.querySelector('.m_check');
        if (middlename.value.length == 0 ||middlename.value.length <= 4){
            middlename.style.border = '1px solid red';
            return false;
        } else {
            middlename.style.border = '1px solid green';
          //  m_times.style.display = 'none';
          //  m_check.style.display = 'block';
        }
    
    })

    //gender

        var gender = document.querySelector('#gender');
        gender.addEventListener('keyup', function(){
           // var m_times = document.querySelector('.m_times');
          //  var m_check = document.querySelector('.m_check');
            if (gender.value.length == 0 ||gender.value.length <= 2){
                gender.style.border = '1px solid red';
                return false;
            } else {
                gender.style.border = '1px solid green';
              //  m_times.style.display = 'none';
              //  m_check.style.display = 'block';
            }
})


//email
var email = document.querySelector('#email');
email.addEventListener('keyup', function(){
   // var m_times = document.querySelector('.m_times');
  //  var m_check = document.querySelector('.m_check');
    if (email.value.length == 0 ||email.value.length <= 4){
        email.style.border = '1px solid red';
        return false;
    } else {
        email.style.border = '1px solid green';
      //  m_times.style.display = 'none';
      //  m_check.style.display = 'block';
    }
})

//phoneno

var phonenumber = document.querySelector('#phonenumber');
phonenumber.addEventListener('keyup', function(){
   // var m_times = document.querySelector('.m_times');
  //  var m_check = document.querySelector('.m_check');
    if (phonenumber.value.length == 0 ||phonenumber.value.length <= 4){
        phonenumber.style.border = '1px solid red';
        return false;
    } else {
        phonenumber.style.border = '1px solid green';
      //  m_times.style.display = 'none';
      //  m_check.style.display = 'block';
    }
})

//username

var username = document.querySelector('#username');
username.addEventListener('keyup', function(){
   // var m_times = document.querySelector('.m_times');
  //  var m_check = document.querySelector('.m_check');
    if (username.value.length == 0 ||username.value.length <= 4){
        username.style.border = '1px solid red';
        return false;
    } else {
        username.style.border = '1px solid green';
      //  m_times.style.display = 'none';
      //  m_check.style.display = 'block';
    }
})





//passw

var password = document.querySelector('#password');
password.addEventListener('keyup', function(){
   // var m_times = document.querySelector('.m_times');
  //  var m_check = document.querySelector('.m_check');
    if (password.value.length == 0 |password.value.length <= 4){
        password.style.border = '1px solid red';
        return false;
    } else {
        password.style.border = '1px solid green';
      //  m_times.style.display = 'none';
      //  m_check.style.display = 'block';
    }
})




function validate(){

    if (givenname.value == 0 || givenname.value.length <= 2){
        document.getElementById('error').innerHTML = 'Please Fill the Required Fields!';
        return false;
    } else if (surname.value == 0 || surname.value.length <= 2){
        document.getElementById('error').innerHTML = 'Please Fill the Required Fields!';
        return false;

    } else if (middlename.value == 0 || middlename.value.length <= 2){
        document.getElementById('error').innerHTML = 'Please Fill the Required Fields!';
        return false;

    }else if (gender.value == 0 || gender.value.length <= 2){
        document.getElementById('error').innerHTML = 'Please Fill the Required Fields!';
        return false;
    
    }else if (email.value == 0 || email.value.length <= 2){
        document.getElementById('error').innerHTML = 'Please Fill the Required Fields!';
        return false;
    
    }else if (phonenumber.value == 0 || phonenumber.value.length <= 2){
        document.getElementById('error').innerHTML = 'Please Fill the Required Fields!';
        return false;
    
    }else if (username.value == 0 || username.value.length <= 4){
        document.getElementById('error').innerHTML = 'Please Fill the Required Fields!';
        return false;
    
    }else if (password.value == 0 || password.value.length <= 2){
        document.getElementById('error').innerHTML = 'Please Fill the Required Fields!';
        return false;






    

}}

    


