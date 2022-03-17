<?php
global $params;

if(!isMember()){
    logout();
    header("Location: /home");
} else {
    switch ($params[2]) {
        case 'home':
            include_once "../templates/member/home.php";
            break;
        case 'profile':
            include_once "../Templates/member/profile.php";
            break;
        case 'editprofile':
            $titleSuffix = ' | Profile';

            if(isset($_POST['profile'])){
                $result = changeProfile();
                if ($result === true) {
                    header("Location: /member/profile");
                } else {
                    $message = "Niet alle velden zijn correct ingvuld!";
                    include_once "../Templates/member/editprofile.php";
                }
                break;
            } else {
                include_once "../Templates/member/editprofile.php";
            }
            break;
        case 'changepassword':
            $titleSuffix = ' | Password';
            include_once "../Templates/member/changepassword.php";
            break;
        case 'logout':
            $titleSuffix = ' | Home';
            logout();
            header("Location: /home");
            break;
        default:
            include_once "../templates/member/home.php";
            break;
    }
}