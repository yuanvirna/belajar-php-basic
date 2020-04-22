<?php
    $siswa = 'ini test variable with print()';
    // = adalah assignment operator atau penegasan
    // echo $siswa;
    // echo "<br>";
    $tanggal = date("d M Y");
    print "$tanggal  <br>  $siswa";
    #latihan 1
    // $warna = "merah";
    $str1 = 'Buah Apel warnanya $warna'; //variabel tidak terbaca
    $str2 = "Buah Apel warnana $warna"; //variable terbaca
    echo "<br> ini text petik satu : $str1   ini text petik dua : $str2";
    #latihan 2
    $array[] = 10;
    $array[] = '100';
    $array[] = "50";
    $array[] = "ini array";
    $array[] = 'array';
    $nama[awal] = "yuan";
    $nama[akhir] = "virna";

    for ($initial=0; $initial < 5; $initial++) { 
        echo "<br> variable \$array[$initial] nilainya adalah: $array[$initial]";
    }
    echo "<br> variable \$nama[awal] nilainya adalah : $nama[awal]";
    echo "<br> variable \$nama[akhir] nilainya adalah : $nama[akhir]";
    echo "<br> Perkenalkan nama saya adalah $nama[awal] $nama[akhir], biasa di panggil $nama[awal]";
    #latihan 3
    $buah = array(
        "warna"=>array(
            "jambu" => "hijau",
            "apel" => "merah",
            "jeruk" => "kuning"
        ),
        "rasa" => array(
            "mangga" => "asam",
            "melon" => "manis",
            "semangka" => "segar"
        )
    );
    echo "<br>mengambil array dari rasa mangga:\n".$buah["rasa"]["mangga"];
    echo "<br>mengambil array dari warna jeruk:\n".$buah["warna"]["jeruk"];
    #pengenalan object
    // class warna_langit()
    // {   
    //     function warna(){
    //         return "pada umumnya warna biru, tapi kadang berawan kelabu dan putih";
    //     }
    // }
    // $langit = new warna_langit;
    // echo "warna langit adalah".$langit->$warna();
    #pengenalan variable
    $var = "ini variable";
    $_var = "ini juga variable";
    $var32 = " ini juga variable";
    $var_var = "ini juga variable";
    $var_var32 = "ini juga variable";

    echo "<br> mencoba var:\n $var";
    echo "<br> mencoba _var:\n $_var";
    echo "<br> mencoba var32:\n $var32";
    echo "<br> mencoba var_var:\n $var_var";
    echo "<br> mencoba var_var32:\n $var_var32";
    // variable referensi.php
    $nama_pertama = "yuan";
    $nama_kedua = &$nama_pertama;
    echo "<br>ini nama pertama:\n $nama_pertama";
    echo "<br>ini nama kedua yang di ambil dari nama pertama:\n $nama_kedua";
?>