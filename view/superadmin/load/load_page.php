<?php
if (isset($_GET['line'])) {
    $page = $_GET['line'];
    switch ($page)
    {
        //index
        case "index":
            include ("index.php");
            break;

        //add file
        case "file_add_sale_apartment":
            include ("file_add_sale_apartment.php");
            break;
        case "file_add_rent_apartment":
            include ("file_add_rent_apartment.php");
            break;
        case "file_add_sale_commercial":
            include ("file_add_sale_commercial.php");
            break;
        case "file_add_rent_commercial":
            include ("file_add_rent_commercial.php");
            break;
        case "file_add_sale_old":
            include ("file_add_sale_old.php");
            break;
        case "file_add_rent_old":
            include ("file_add_rent_old.php");
            break;

        //archive file
        case "file_archive_sale_apartment":
            include ("file_archive_sale_apartment.php");
            break;
        case "file_archive_sale_commercial":
            include ("file_archive_sale_commercial.php");
            break;
        case "file_archive_sale_old":
            include ("file_archive_sale_old.php");
            break;
        case "file_archive_rent_apartment":
            include ("file_archive_rent_apartment.php");
            break;
        case "file_archive_rent_commercial":
            include ("file_archive_rent_commercial.php");
            break;
        case "file_archive_rent_old":
            include ("file_archive_rent_old.php");
            break;

        //edit file
        case "file_edit_sale_apartment":
            include ("file_edit_sale_apartment.php");
            break;
        case "file_edit_sale_commercial":
            include ("file_edit_sale_commercial.php");
            break;
        case "file_edit_sale_old":
            include ("file_edit_sale_old.php");
            break;
        case "file_edit_rent_apartment":
            include ("file_edit_rent_apartment.php");
            break;
        case "file_edit_rent_commercial":
            include ("file_edit_rent_commercial.php");
            break;
        case "file_edit_rent_old":
            include ("file_edit_rent_old.php");
            break;

        //disable file
        case "file_disable_sale_apartment":
            include ("file_disable_sale_apartment.php");
            break;
        case "file_disable_sale_commercial":
            include ("file_disable_sale_commercial.php");
            break;
        case "file_disable_sale_old":
            include ("file_disable_sale_old.php");
            break;
        case "file_disable_rent_apartment":
            include ("file_disable_rent_apartment.php");
            break;
        case "file_disable_rent_commercial":
            include ("file_disable_rent_commercial.php");
            break;
        case "file_disable_rent_old":
            include ("file_disable_rent_old.php");
            break;

        //code search
        case "file_code_search":
            include ("file_code_search.php");
            break;

        //profile
        case "profile_setting":
            include ("profile_setting.php");
            break;
        case "user_manage":
            include ("user_manage.php");
            break;

        default:
    }
}else{
    include("index.php");
}