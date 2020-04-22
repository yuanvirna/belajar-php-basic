<?php
    //contoh program menggunakan swith 
    // dalam mengkonversi bulan

    $bulan_ini=date("m");
    //mengkonversi ke dalam bahsa indoensia
    switch($bulan_ini){
        case "01";
        $bulan = "januari";
        break;
        case "02";
        $bulan = "februari";
        break;
        case "03";
        $bulan = "maret";
        break;
        case "04";
        $bulan = "april";
        break;
        case "05";
        $bulan = "mei";
        break;
        case "06";
        $bulan = "juni";
        break;
        case "07";
        $bulan = "juli";
        break;
        case "08";
        $bulan = "agustus";
        break;
        case "09";
        $bulan = "september";
        break;
        case "10";
        $bulan = "Oktober";
        break;
        case "11";
        $bulan = "November";
        break;
        case "12";
        $bulan = "Desember";
        break;
    }
    echo "Bulan ini adalah bulan\n".$bulan."\n(sudah di konversi)";
    echo "<br>Bulan ini adalah bulan\n".$bulan_ini."\n(original)";
?>