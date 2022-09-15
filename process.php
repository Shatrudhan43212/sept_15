<?php 
    function get_log($user_id){
        $today = date('Y-m-d h:i:s');
        $conn->query("SELECT * FROM users_log WHERE date = '".$today."'")->fetch_assoc()['name'];
    }
?>