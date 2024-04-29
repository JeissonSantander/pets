include('../../config/databases.php');

$email = $_POST['email'];
$pass = $_POST['passdw'];
$enc_pass = md5($passwd);

$sql = "
    SELECT * 
    FROM
        users2
    WHERE
        email = '$email' AND
        password = ''
"