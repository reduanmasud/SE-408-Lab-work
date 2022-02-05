<?php

function get_data($sql)
{
    $db = Database::getInstance();
    $mysqli = $db->getConnection();

    return $mysqli->query($sql);
}

function get_all_pages_as_array()
{
    $sql = 'SELECT * FROM `page`'; // TODO: Do it later
    $data = get_data($sql);

    return $data->fetch_all(MYSQLI_ASSOC);
}

function get_question($question_id)
{
    $sql = "SELECT * FROM quiz WHERE `quiz_id` = $question_id";
    $data = get_data($sql);

    return $data->fetch_assoc();
}


function password_check($a, $b)
{
    if ($a === $b) {
        return $a;
    }
    else return false;

}

function user_registration($data)
{
    $name = $data['username'];
    
    $password = password_check($data['userpassword'], $data['userpassword_check']);
    if($password === false) {
        //TODO: some thing
        die();
    }
    $password = md5($password);

    $email = $data['useremail'];

    $sql = "INSERT into users (`username`, `email`, `password`) VALUES (`$name`, `$email`, `$password`)";



    print_r(get_data($sql));
}