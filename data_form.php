<?php
    //operasi dari form 
    if($submit){
        echo "nilai\$a adalah:\n".$a;
        echo "nilai\$b adalah:\n".$b;
        echo "nilai\$a * \$b adalah: ".$a*$b;
    }
?>
<html>

<head>
    <title>tesr</title>
</head>

<body>
    <form method="POST" action="data_form.php">
        <p>Nilai A: <input type="text" name="a" size="14" /></p>
        <p>Nilai B: <input type="text" name="b" size="14" /></p>
        <p><input type="submit" value="hitung" name="submit" /></p>
    </form>
</body>

</html>