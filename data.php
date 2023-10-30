<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <table class = "table table-strip table-hover">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Anime</th>
            </tr>
        </thead>
       
    </table>
    <?php
    $server= "localhost";
    $user = "ericyoel";
    $password= "Ericyoel11";
    $db= "waifu";
    //membangun koneksi
    $conect = new mysqli($server,$user,$password,$db);
    if($conect->connect_error){
        die("Connect gagal...");
    } 

    // untuk insert
    // $sql = "INSERT INTO waifulist(Waifu_name,Anime_from) VALUE('Shinobu Kochou','Kimetsu No Yaiba')";
    // if($conect->query($sql)=== true){
    //     echo"Complete!";
    // }
    // else{
    // echo "Error" .$sql ."<br>". $conect->error;
    // }
    // $conect->close();

    //untuk baca
    $sql = "SELECT * FROM waifulist ";
    $result = $conect->query($sql);
    echo"<tbody>";
    if($result->num_rows > 0){
        $counter = 0;
        while($row = $result->fetch_assoc()){
            $counter+=1;
            echo"
            <tr>
              <th scope= row>$counter</th>
              <td>$row[Waifu_id]</td>
              <td>$row[Waifu_name]</td>
              <td>$row[Anime_from]</td>
            </tr>";
            
        }
        echo"</tbody>";
    }
    else{
        echo "No Data";
    }
    $conect->close();
    
    ?>
</body>
</html>