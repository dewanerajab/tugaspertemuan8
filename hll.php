<html>
<head>
    <title>Menghitung Luas Lingkaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <style>
a, button,input[type=submit],input[type=reset] {
    font-family: sans-serif;
    font-size: 15px;
    background: #0c151c;
    color: white;
    border-radius: 20px;
    padding: 15px 20px;
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
    <h1>Hitung Luas Lingkaran</h1>
    <h2>Isi Data:</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Jari-jari Lingkaran</td>
                <td>:</td>
                <td><input type="text" name="jari" required></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"><br>
                <a href="" class="button">Reset</a></td>
            </tr>
        </table>
    </form><br<br<br
    <?php
        if(isset($_POST['submit'])){
            $jari   =$_POST['jari'];
            $phie    =22/7;
            
            // menghitung luas lingkaran
            $luas_lingkaran = $phie*($jari*$jari);
            
            echo "Hasil hitung luas lingkaran adalah sebagai berikut:<br />";
            echo "Diketahui;<br />";
            echo "Jari-jari lingkaran = $jari<br />";
            echo "Phie = $phie<br />";
            echo "Maka luas lingkaran sama dengan [ $phie x $jari x $jari ] = $luas_lingkaran";
        }
    ?>
</body>
</html>