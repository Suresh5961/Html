<?php

if (isset($_POST['Name']) && isset($_POST['message'])) {
    include 'db_conn.php';


    echo "Hello";


}
 else {
    header("location: Form.html");



}