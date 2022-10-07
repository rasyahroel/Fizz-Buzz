<!-- -case Kamis:
Buatlah sebuah program yang akan mencetak angka dari 1 hingga 15.
Tetapi untuk angka kelipatan 3 cetak "fizz", untuk angka kelipatan 5 cetak "buzz",
dan untuk angka kelipatan 3 dan 5 cetak "fizzbuzz".
contoh
hasil output yang diharapkan = 1, 2, "fizz", 4, "buzz", "fizz", 7, 8, "fizz", "buzz", 11, "fizz", 13, 14, "fizzbuzz" -->

<title>Mini Quiz Kamis - Fizz Buzz</title>

<?php
    for($i=1; $i<=15; $i++){
        if($i%3==0 && $i%5==0){
            echo "fizzbuzz";
        }else if($i%3==0){
            echo "fizz";
        }else if($i%5==0){
            echo "buzz";
        }else{
            echo "$i";
        }
        echo "\n"; 
    }
?>