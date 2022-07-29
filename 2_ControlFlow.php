<?php
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// PENGULANGAN FOR

// for(inisialisasi,kondisi terminasi,increment/decrement)
// inisialisasi kita menentukan variabel awal pengulangannya(biasanya variabel $i untuk indeks)
// kondisi terminasi digunakan untuk memberhentikan pengulangannya
// increment/decrement pengulangannya mau maju atau mundur
// blok for kita batasi kurung kurawal, untuk menandai bagian mana yang mau diulang

// for( $i = 0; $i < 5; $i++) {
    // echo "Hello World!\n";
    // echo "Hello World <br>";
    // ditambahkan tag html breakline(<br>), jika ingin menambahkan baris baru
    // di dalam web, jika hanya di terminal bisa menggunakn \n
// }


// PENGULANGAN WHILE

// while(kondisi)
// selama kondisi nya true ia akan melakukan pengulangan true
// didalam while belum ada nilai awal, harus ditambahkan diluar while(sebelum sintaks while)
// lalu increment/decrement nya diakhir while sebelum ditutup

// $i = 0;
// while( $i < 5 ) {
    // echo "Hello World <br>";
    // echo "Hello World \n";
// $i++;
// }

// jangan lupa menambahkan increment/decrementnya, kalau lupa, akan ada looping forever
// karena dia gk nambah nambah, atau tidak mengurang sehingga akan true terus


// PENGULANGAN DO WHILE
// $i = 0;
// do {
    // echo "Hello World <br>";
// $i++;
// } while( $i < 5 );

// perbedaannya , jika kondisinya bernilai false, maka bloknya akan dijalankan sekali
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan control flow</title>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <!-- <?php 
        for( $i = 1; $i <= 3; $i++ ){
            echo "<tr>";
            for( $j = 1; $j <= 5; $j++){
                echo "<td>$i,$j</td>"; // karena i baris, j nya kolom
            }
            echo "</tr>";
        }
    ?> -->

    <?php  for($i = 1; $i <= 3; $i++ ) : ?>
        <tr>
            <?php for($j = 1; $j <= 5; $j++) :?>
                <td><?= "$i,$j"; ?></td>
                <!-- php echo nya bisa diganti dengan sama dengan -->
            <?php endfor;?>
        </tr>
    <?php endfor; ?>  
    <!-- endfor digunakan untuk selesai for, diawali dengan (:)
    untuk mengganti kurung kurawal, yaitu dengan titik dua, lalu diakhiri dengan endfor; (menyesuaikan) -->

</table>
    
</body>
</html>


