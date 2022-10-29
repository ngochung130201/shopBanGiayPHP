<?php
    $fp = @fopen('E:\HocTap\PHP\BTPHP\songuyento.txt', 'r');
    if (!$fp) {
        # code...
        echo "Mo file khong thanh cong";
    } else {
        # code...
        while (!feof($fp)) {
            echo fgetc($fp);
    }

}
    
?>