function logout(){
    var choice = confirm ("Are you sure you want to log out?");
    if (choice ==true)
    window.location = "../PHP/tologout.php";
}