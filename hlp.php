<html>
<head>
    <title>Menghitung Persegi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <style>
a, button,input[type=submit],input[type=reset] {
    font-family: sans-serif;
    font-size: 15px;
    background: #0c151c;
    color: white;
    border-radius: 20px;
    padding: 10px 20px;
    margin-top: 0px;
}
a {
    text-decoration: none;
}
a:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover{
    opacity:0.9;
}
</style>
</head>
<body>
    <h2>Luas Persegi
    </h2>
    <h3>Isi Data:</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Panjang</td>
                <td>:</td>
                <td><input type="text" name="panjang" required ></td>
            </tr>
            <tr>
                
            </tr>
            
            <tr>
                <td>Lebar</td>
                <td>:</td>
                <td><input type="text" name="lebar" required ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"><p><a href="" class="button">Reset</a></td>
                
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $panjang    =$_POST['panjang'];
        $lebar        =$_POST['lebar'];
               
        // menghitung luas persegi panjang
        $luas_persegi_panjang = $panjang*$lebar;
        // menghitung keliling persegi panjang
        $keliling_persegi_panjang = 2*($panjang+$lebar);
                
        echo "Hasil hitung luas persegi panjang adalah sebagai berikut:<br />";
        echo "Diketahui:<br />";
        echo "Panjang = $panjang<br />";
        echo "Lebar = $lebar<br />";
        echo "Maka luas persegi panjang sama dengan [ $panjang x $lebar ] = $luas_persegi_panjang<br />";
        echo "Maka keliling persegi panjang sama dengan [ 2 x ($panjang + $lebar) ] = $keliling_persegi_panjang";
    }
?>
</body>
</html>