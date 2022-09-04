<?php require_once("connection.php"); ?>

<?php

    $adminName = "admin";

    $adminPassword = password_hash("admin123!", PASSWORD_BCRYPT);

    $query = mysqli_prepare($connection, "INSERT INTO adminaccounts(adminName, adminPassword) VALUES (?, ?)");
    $query->bind_param('ss', $adminName, $adminPassword);
    $execute = mysqli_stmt_execute($query);

    echo "Admin account created."

?>