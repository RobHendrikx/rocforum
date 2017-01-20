<?php
if(isset($_POST['send'])) {
    if(!empty($_POST['colleges'])) {
        switch ($_POST['colleges']) {
            case 'ict':
                header('Location: mail-ict.php');
                break;
            case 'business':
                header('Location: mail-business.php');
                break;
            case 'techniektechnologie':
                header('Location: mail-techniektechnologie.php');
                break;
            case 'bouwdesign':
                header('Location: mail-bouwdesign.php');
                break;
            case 'dienstverlening':
                header('Location: mail-dienstverlening.php');
                break;
            case 'onderwijskinderopvang':
                header('Location: mail-onderwijskinderopvang.php');
                break;
            case 'zorgwelzijn':
                header('Location: mail-zorgwelzijn.php');
                break;
            default:
                header('Location: mail-blalala.php');
        }
    }
}
