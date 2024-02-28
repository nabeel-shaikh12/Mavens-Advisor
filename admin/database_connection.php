<?php
$connect = new PDO("mysql:host=localhost;dbname=mavens advisor;charset=utf8mb4", "root", "");

function fetch_user_chat_history($from_user_email, $to_user_email, $connect)
{
    $query = "
    SELECT * FROM chat_message 
    WHERE (from_user_email = '".$from_user_email."' 
    AND to_user_email = '".$to_user_email."') 
    OR (from_user_email = '".$to_user_email."' 
    AND to_user_email = '".$from_user_email."') 
    ORDER BY timestamp DESC
    ";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $output = '<ul class="list-unstyled">';
    foreach($result as $row)
    {
        $user_name = '';
        $dynamic_background = '';
        $chat_message = '';
        if($row["from_user_email"] == $from_user_email)
        {
            if($row["status"] == '2')
            {
                $chat_message = '<em>This message has been removed</em>';
                $user_name = '<b class="text-success">You</b>';
            }
            else
            {
                $chat_message = $row['chat_message'];
                $user_name = '<button type="button" class="btn btn-danger btn-xs remove_chat" id="'.$row['chat_message_id'].'">x</button>&nbsp;<b class="text-success">You</b>';
            }
            

            $dynamic_background = 'background-color:#ffe6e6;';
        }
        else
        {
            if($row["status"] == '2')
            {
                $chat_message = '<em>This message has been removed</em>';
            }
            else
            {
                $chat_message = $row["chat_message"];
            }
            $user_name = '<b class="text-danger">'.get_user_name($row['from_user_email'], $connect).'</b>';
            $dynamic_background = 'background-color:#ffffe6;';
        }
        $output .= '
        <li style="border-bottom:1px dotted #ccc;padding-top:8px; padding-left:8px; padding-right:8px;'.$dynamic_background.'">
            <p>'.$user_name.' - '.$chat_message.'
                <div align="right">
                    - <small><em>'.$row['timestamp'].'</em></small>
                </div>
            </p>
        </li>
        ';
    }
    $output .= '</ul>';
    $query = "
    UPDATE chat_message 
    SET status = '0' 
    WHERE from_user_email = '".$to_user_email."' 
    AND to_user_email = '".$from_user_email."' 
    AND status = '1'
    ";
    $statement = $connect->prepare($query);
    $statement->execute();
    return $output;
}

function fetch_group_chat_history($connect)
{
    $query = "
    SELECT * FROM chat_message 
    WHERE to_user_email = '0'  
    ORDER BY timestamp DESC
    ";

    $statement = $connect->prepare($query);

    $statement->execute();

    $result = $statement->fetchAll();

    $output = '<ul class="list-unstyled">';
    foreach($result as $row)
    {
        $user_name = '';
        $dynamic_background = '';
        $chat_message = '';
        if($row["from_user_email"] == $_SESSION["email"])
        {
            if($row["status"] == '2')
            {
                $chat_message = '<em>This message has been removed</em>';
                $user_name = '<b class="text-success">You</b>';
            }
            else
            {
                $chat_message = $row["chat_message"];
                $user_name = '<button type="button" class="btn btn-danger btn-xs remove_chat" id="'.$row['chat_message_id'].'">x</button>&nbsp;<b class="text-success">You</b>';
            }
            
            $dynamic_background = 'background-color:#ffe6e6;';
        }
        else
        {
            if($row["status"] == '2')
            {
                $chat_message = '<em>This message has been removed</em>';
            }
            else
            {
                $chat_message = $row["chat_message"];
            }
            $user_name = '<b class="text-danger">'.get_user_name($row['from_user_email'], $connect).'</b>';
            $dynamic_background = 'background-color:#ffffe6;';
        }

        $output .= '

        <li style="border-bottom:1px dotted #ccc;padding-top:8px; padding-left:8px; padding-right:8px;'.$dynamic_background.'">
            <p>'.$user_name.' - '.$chat_message.' 
                <div align="right">
                    - <small><em>'.$row['timestamp'].'</em></small>
                </div>
            </p>
        </li>
        ';
    }
    $output .= '</ul>';
    return $output;
}

?>