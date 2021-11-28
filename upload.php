
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
    if ($_FILES['file']['error'] > 0) {
        echo 'ERR: UNKNOWN_ERR';
        switch ($_FILES['file']['error'])
        {
            case 1:
                echo 'ERR: FI_TOO_BIG';
                break;
            case 2:
                echo 'ERR: FI_TOO_BIG';
                break;
            case 3:
                echo 'ERR: FI_PART_UL';
                break;
            case 4:
                echo 'ERR: FI_NO_UL';
                break;
            case 5:
                echo 'ERR: FI_UNKNOWN_SIZE';
                break;
        }
    }
    else if ($_FILES['file']['type'] == "application/octet-stream") {
        echo 'Sorry, do not support the files';
        $sure = "fuck";
    }
    else{
        $sure = "shit";
        // Show the information
        echo '<title>Upload '.$_FILES['file']['name'].' Successfully</title>';
        echo 'NAME: '.$_FILES['file']['name'].'<br/>';
        echo 'TPYE: '.$_FILES['file']['type'].'<br/>';
        echo 'SIZE: '.$_FILES['file']['size'].' KB<br/>';

        // Set where the files in
        // WTF, you *have to* download full-English-name files! 
        $dir = 'uploads/'.iconv('UTF-8','gbk',basename($_FILES['file']['name']));
 
        // Show the return code
        if (move_uploaded_file($_FILES['file']['tmp_name'],$dir) && $sure == "shit"){                      
            echo '<font color="green"><b>CODE: 100; SUCESSFUL.</b></font><br/><br/>'.'PATH: <a href="https://www.example.com/'.$dir.'" target="_blank">https://www.example.com/'.$dir.'</a>'; // Here, change https://example.com/ to your own domain name, must include [/] !!!
        }
        else{
            echo '<font color="red"><b>CODE: 400; FAILED.</b></font>';
        }
    }
