<?php
    session_start();
    if ($_POST['title'] != NULL && $_POST['autor'] != NULL && $_POST['cat1'] != NULL && $_POST['cat2'] != NULL && $_POST['cat3'] != NULL && $_POST['price'] != NULL && $_POST['submit'] == 'OK')
    {
        if (!file_exists('./content'))
        {
            mkdir('./content');
        }
        if (file_exists('./content/list'))
        {
            $tab3 = file_get_contents('./content/list');
            $list = unserialize($tab3);
        }
            $details['title'] = $_POST['title'];
            $details['autor'] = $_POST['autor'];
            $details['cat1'] = $_POST['cat1'];
            $details['cat2'] = $_POST['cat2'];
            $details['cat3'] = $_POST['cat3'];
            $details['number'] = $_POST['number'];
            $details['price'] = $_POST['price'];
            $list[] = $details;
            $list_serialized = serialize($list);
            file_put_contents('./content/list', $list_serialized);
            header('Location: admin.php');
    }
    else
        header('Location: admin.php');
?>
