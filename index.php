<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php</title>
</head>
<body>
    <h1>Belajar PHP</h1>

    <?php 
        // echo"<p> HALLO DUNIA ROBLOX</p>";
        // $nama = "Maple";
        // $angka1 = 12.2;
        // $angka2 = 20;
        // // (.) untuk menggabungkan 2 buah string


        // // perkondisian if & switch
        // $nilai = 90;

        // if($nilai >= 50){
        //     echo "Lulus";
        // }else{
        //     echo "Ngulang";
        // }


        // echo "<br>";
        // $makanan = 1;
        // switch ($makanan) {
        //     case 1:
        //         echo "Baso";
        //         break;
        //     case 2:
        //         echo "Cireng";
        //         break;
        //     case 3:
        //         echo "Seblak";
        //         break;
        //     case 4:
        //         echo "Hikmahna";
        //         break;
        //     default:
        //         echo "Pilihan tidak ada ";
        //         break;
        // }

        // //perulangan 
        // //For, while, do while, foreach

        // $a = 1;

        // while($a<=8){
        //     echo "tung";
        //     $a++;
        // }

        // $i = 1;
        // do{
        //     echo "ding";
        //     $i++;
        // }while($i <= 4);
        // echo "ngoding";
        // echo "<br>";

        // $datas = [
        //     "Survivalist", "Vampire", "Werewolf", "Miner"
        // ];

        // foreach ($datas as $data) {
        //         echo $data . " ";
        // }
       
        
    ?> 

    <table border="1" >
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>

        <?php 
            $datas = [
                'Gabriel',
                'Steven',
                'Louis',
                'Maple'
            ];
            $no = 1;
            foreach ($datas as $data) {
                echo "<tr>";
                    echo"<td>".$no++."</td>";
                    echo"<td>$data</td>";
                echo" </tr>";
            }

        ?>
    </table>
    <h1>Kita Belajar Inputan</h1>
    <form action="process.php" method="POST">
        <label for="nama">Nama : </label>
        <input type="text" name="nama">
        <input type="submit" value="submit">
    </form>


</body>
</html>