<?ph

if (!isset($_SESSION)) {
    session_start();
} 

if (!Oncologist::authenticate()) {
    redirect('login.php'); 
}