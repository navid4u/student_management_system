<?php
$conn = mysqli_connect("localhost", "root", "6620514", "englishcall");
 
if (mysqli_connect_errno()) 
{
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}
?> 