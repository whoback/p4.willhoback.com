<?php

    $db = new mysqli("localhost", "willhoba_user", "da7aba53", "willhoba_p4");
    if (mysqli_connect_errno()){
        echo 'Cannot connect to database: ' . mysqli_connect_error();
    }
    else{
        $query = 'SELECT * FROM users, reminders';
        $result = $db->query($query);
        $numResults = $result->num_rows;
     
        echo "Your reminder:";

        while ($row = $result->fetch_assoc()){
            $time_to_send = $row['the_time'];
            $mailto = $row['email'];
            $name = $row['first_name'];
            
            $time_to_send_string = strtotime($time_to_send);
            
            $curtime = time();
            if( $time_to_send_string > $curtime ){
                    // The message
                $message = $row['content'];

                // In case any of our lines are larger than 70 characters, we should use wordwrap()
                $message = wordwrap($message, 70, "\r\n");

                // Send
                mail('will.hoback@gmail.com', 'Remind.me Reminder', $message);
        }
        
    }
    $result->free();
        $db->close();
    }
?>

time = 5000
curtime = 5001