<?php
require('../config/databases.php');

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Agregar comillas simples alrededor del ID para la consulta
    $query_delete_user = "DELETE FROM users WHERE id = '$user_id'";
    $result = pg_query($conn, $query_delete_user);

    if ($result) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting user: " . pg_last_error($conn);
    }
    pg_close($conn);

    // Redirigir de vuelta a la lista de usuarios
    header("Location: list_users.php");
    exit();
} else {
    echo "No user ID provided.";
}
?>
