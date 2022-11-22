<!DOCTYPE html>
<html>
    <head>
        <title>Mengakses Variabel Array</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>

<?php
    $pegrograman_php = array ("Andi","Budi","Wati","Gunawan","Baco","Becce","Fatma",);

    $pegrograman_python = array ("Andi","Fatma","Fadli","Haris","Baco",);

    sort($pegrograman_php);
    rsort($pegrograman_python);

    //mahasiswa yang masuk kelompok Programmer PHP
    echo "Mahasiswa Yang Masuk Kelompok Programmer PHP<br/>";
    foreach ($pegrograman_php as $key) 
    {
        echo $key. "<br/>";
    }

    echo "<hr/>";
    //Daftar mahasiswa yang masuk kelompok Programmer Python
    echo "Daftar Mahasiswa Yang Masuk Kelompok Programmer Python <br/>";
    foreach ($pegrograman_python as $kuy)
    
    {
        echo $kuy. "<br/>";
    }

    echo "<hr/>";

    //Daftar mahasiswa yang masuk kelompok Programmer PHP tapi tidak termasuk kelompok Programmer Python
    echo "Daftar Mahasiswa  Programmer PHP Tapi Tidak
    Termasuk  Programmer Python<br/>";
    for($no=0; $no < count ($pegrograman_php) ; $no++)
    {
        if(!in_array($pegrograman_php[$no], $pegrograman_python))
        {
        echo $pegrograman_php[$no];
        echo "<br/>";
        }
    }

    echo "<hr/>";

    //Daftar mahasiswa yang masuk kelompok Programmer Python tapi tidak termasuk kelompok Programmer PHP
    echo "Daftar Mahasiswa Kelompok Programmer python Tapi Tidak
    Termasuk Kelompok Programmer PHP <br/>";
    for($no=0; $no < count ($pegrograman_python) ; $no++)
    {
        if(!in_array($pegrograman_python[$no], $pegrograman_php))
        {
        echo $pegrograman_python[$no];
        echo "<br/>";
        }
    }

    echo"<hr/>";

    //Daftar mahasiswa yang masuk kelompok Programmer PHP dan Programmer Python sekaligus
    echo "Daftar Mahasiswa  Kelompok Programmer PHP Dan Programmer
    Python Sekaligus <br/>";
    for($no=0; $no < count ($pegrograman_php) ; $no++){
    for($nu=0; $nu < count ($pegrograman_python) ; $nu++){
        if ($pegrograman_php[$no] == $pegrograman_python[$nu])
            {
            echo $pegrograman_php[$no];
            echo"<br/>";
            }
        }
    }

    echo "<hr/>";

    //Daftar seluruh mahasiswa yang masuk kelompok Programmer PHP atau Programmer Python.
    echo "Daftar Seluruh Mahasiswa Programmer PHP Atau
    Programmer Python.<br/>";
    $datakeduanya = array_merge($pegrograman_php, $pegrograman_python);
    $datapisah = array_unique($datakeduanya);
    $databaru = array_values($datapisah);

    for($no=0; $no < count ($databaru) ; $no++){
    echo $databaru[$no];
    echo "<br/>";
    }
    echo "<hr/>";

    //Menambahkan Nama Kedalam Variabel Programer_PHP 
    echo "Menambahkan Nama Kedalam Variabel Programer_PHP <br/>";
    $pegrograman_php = array ("Andi","Budi","Wati","Gunawan","Baco","Becce","Fatma",);
    array_push($pegrograman_php, 'hiknatius');
    foreach ($pegrograman_php as $kelompok_php) 
    echo $kelompok_php."<br/>";

    echo "<hr/>";
?>
        </table>
    </body>
</html>