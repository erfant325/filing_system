<?php
include_once "../../model/files/rent_apartment.php";
$m_class = new rent_apartment();

//add file
if (isset($_POST['submit']))
{
    //form data
    $data = $_POST['frm'];

    //pics
    $pic1 = $_FILES['pic1'];
    $pic2 = $_FILES['pic2'];
    $pic3 = $_FILES['pic3'];

    //upload pics
    if (!empty($pic1['name'])){
        //upload pic 1 and return $to path and add to $data
        // name = sale_apartment
        // file = pic1
        $file_name = 'rent_apartment';
        $upload_1 = $m_class->upload_photo($pic1, $file_name);
        $data += [ "pic_url1" => $upload_1 ];
    }
    if (!empty($pic2['name'])){
        //upload pic 2 and return $to path and add to $data
        // name = sale_apartment
        // file = pic2
        $file_name = 'rent_apartment';
        $upload_2 = $m_class->upload_photo($pic2, $file_name);
        $data += [ "pic_url2" => $upload_2 ];
    }
    if (!empty($pic3['name'])){
        //upload pic 3 and return $to path and add to $data
        // name = sale_apartment
        // file = pic3
        $file_name = 'rent_apartment';
        $upload_3 = $m_class->upload_photo($pic3, $file_name);
        $data += [ "pic_url3" => $upload_3 ];
    }

    $data += [ "status" => 1 ];

    $time_array = $m_class->realtime();
    $time = $time_array["pdate(NOW())"];
    $data += [ "submit_fa" => $time ];

    //insert to db
    $filds = array_keys($data);
    $m_class->insert_file($data, $filds);
    //new code
    $last_row = $m_class->last_id();
    $new_code = $last_row['id'];

    header('location:'.BASE_URL.'file_add_rent_apartment/code/'.$new_code);
}

//delete file
if (isset($_GET['del_code']))
{
    if (isset($_GET['img_1']))
    {
        $url_img_1 = "../../public/image/".$_GET['img_1'];
        unlink($url_img_1);
    }
    if (isset($_GET['img_2']))
    {
        $url_img_2 = "../../public/image/".$_GET['img_2'];
        unlink($url_img_2);
    }
    if (isset($_GET['img_3']))
    {
        $url_img_3 = "../../public/image/".$_GET['img_3'];
        unlink($url_img_3);
    }
    $m_class->deleteData($_GET['del_code']);
    header("location:".BASE_URL."file_archive_rent_apartment");
}

//disable file
if (isset($_GET['arc_code']))
{
    $m_class->disable_row($_GET['arc_code']);
    header("location:".BASE_URL."file_archive_rent_apartment");
}

//edit file
if (isset($_POST['edit']))
{
    $data_edit = $_POST['frmedit'];
    $id = $_POST['frmedit']['id'];

    $pic_edit1 = $_FILES['pic1_edit'];
    $pic_edit2 = $_FILES['pic2_edit'];
    $pic_edit3 = $_FILES['pic3_edit'];

    $pic_url_dump = $m_class->pic_url_dumper($id);


    if (!empty($pic_edit1['name']))
    {
        if (!empty($pic_url_dump['pic_url1']))
        {

            $url_1 = "../../public/image/".$pic_url_dump['pic_url1']."";
            unlink($url_1);
        }
        $file_name = 'rent_apartment';
        $upload_edit1 = $m_class->upload_photo($pic_edit1, $file_name);
        $data_edit += [ "pic_url1" => $upload_edit1 ];
    }
    if (!empty($pic_edit2['name']))
    {
        if (!empty($pic_url_dump['pic_url2']))
        {

            $url_2 = "../../public/image/".$pic_url_dump['pic_url2']."";
            unlink($url_2);
        }
        $file_name = 'rent_apartment';
        $upload_edit2 = $m_class->upload_photo($pic_edit2, $file_name);
        $data_edit += [ "pic_url2" => $upload_edit2 ];
    }
    if (!empty($pic_edit3['name']))
    {
        if (!empty($pic_url_dump['pic_url3']))
        {

            $url_3 = "../../public/image/".$pic_url_dump['pic_url3']."";
            unlink($url_3);
        }
        $file_name = 'rent_apartment';
        $upload_edit3 = $m_class->upload_photo($pic_edit3, $file_name);
        $data_edit += [ "pic_url3" => $upload_edit3 ];
    }

    $time_array = $m_class->realtime();
    $time = $time_array["pdate(NOW())"];
    $data_edit += [ "submit_fa_edit" => $time ];

    $filds_edit = array_keys($data_edit);
    $m_class->editData($filds_edit,$data_edit,$id);
    header("location:".BASE_URL."file_archive_rent_apartment");
}

//disable file instance
$list_disable_files = $m_class->list_disable_files();

