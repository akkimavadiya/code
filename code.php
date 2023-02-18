    <?php

$conn = mysqli_connect("localhost", "root", "", "record");
if (isset($_POST['sb'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $RepeatPassword = $_POST['RepeatPassword'];

    $query = "INSERT INTO register(name, email, username, password, repeatpassword) 
              VALUES ('$name', '$email', '$Username', '$Password', '$RepeatPassword')";
    $query_run = mysqli_query($conn, $query);
}

?>


