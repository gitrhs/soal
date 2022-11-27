<?php
//this question was made on 23 aug 2022
#soal 1 
//Diketahui A={9,7,6,5,4,3,2,1}. Lima anggota A diambil secara acak. Peluang terambilnya lima anggota tersebut berjumlah genap adalah... 
//Pada soal disampaikan lima anggota A diambil secara acak, sehingga S adalah lima dipilih dari delapan, maka:

//note: A harus lebih besar daripada yang diambil!
//jadi....
$jumlahyangdiambil = rand(3,8);
$selisihnya = rand(3,6);
$nentuinganjilataugenap = evenodd();
$genap = 0;
$ganjil = 1;
echo "diketahui A = {1";
for ($x = 1; $x <= $jumlahyangdiambil + $selisihnya; $x++) {
  $generatenumber = rand(1,9);
  echo ", $generatenumber";
  if ($generatenumber % 2 == 0) {
      $genap++;
  }else {
     $ganjil++; 
  }
} echo "}. $jumlahyangdiambil anggota A diambil secara acak. Peluang terambilnya $jumlahyangdiambil anggota tersebut berjumlah $nentuinganjilataugenap adalah...<br><br>";


//mulai jawab:
//jika genap...
echo "Dari himpunan, terlihat bahwa ada ".$jumlahyangdiambil+$selisihnya+1 ." anggota tertera yang terdiri dari : $genap bilangan genap dan $ganjil bilangan ganjil.<br>";
echo "Dari ".$jumlahyangdiambil+$selisihnya+1 ." anggota, dibutuhkan $jumlahyangdiambil anggota, jadi semestanya dihitung dengan :<br><br>";
echo carac($jumlahyangdiambil+$selisihnya+1, $jumlahyangdiambil)."<br><br>";
if ($nentuinganjilataugenap == "genap") {
    echo "Kita akan tuliskan beberapa kemungkinan :<br>";
    if($jumlahyangdiambil % 2 == 0){
        $ganjilbagi2 = (int)($ganjil / 2);
        $genapbagi2 = (int)($genap / 2);
        $result = [];
        for ($x = 0; $x <= $ganjilbagi2; $x++) {
            // ganjil = 2, genap = 4 .... ganjil = 0, genap = 6.... ganjil = 4, genap = 2...
            $xganjil = $x * 2;
            for ($y = 0; $y <= $genapbagi2; $y++) { //misal genap ada 4
                $ygenap = $y * 2;
                if ($xganjil + $ygenap == $jumlahyangdiambil) {
                    echo "Kemungkinan susunannya : $ygenap genap + $xganjil ganjil, yaitu :<br>";
                    echo $genap."C".$ygenap." x ".$ganjil."C".$xganjil."<br>";
                    echo "= [".caracawal($genap,$ygenap)."] x [".caracawal($ganjil,$xganjil)."]<br>";
                    echo "= ".c($genap,$ygenap)." x ".c($ganjil,$xganjil)."<br>";
                    echo "= ".c($genap,$ygenap)*c($ganjil,$xganjil)."<br>";
                    $result[$x] = c($genap,$ygenap)*c($ganjil,$xganjil);
                } else {
                    ///////
                }
            }
        }
        echo "Dengan demikian, peluang terambilnya $jumlahyangdiambil anggota tersebut berjumlah genap adalah :<br>";
        echo array_sum($result)."/".c($jumlahyangdiambil+$selisihnya+1, $jumlahyangdiambil)."<br>";
        echo "= ".array_sum($result)/c($jumlahyangdiambil+$selisihnya+1, $jumlahyangdiambil);
    } else { //jika yang diambil ganjil (totalnya genap)
        $ganjilbagi2 = (int)($ganjil / 2);
        $result = [];
        for ($x = 0; $x <= $ganjilbagi2; $x++) {
            $xganjil = $x * 2;
            for ($y = 0; $y <= $genap; $y++) {
                if ($xganjil + $y == $jumlahyangdiambil){
                    echo "Kemungkinan susunannya : $y genap + $xganjil ganjil, yaitu :<br>";
                    echo $genap."C".$y." x ".$ganjil."C".$xganjil."<br>";
                    echo "= [".caracawal($genap,$y)."] x [".caracawal($ganjil,$xganjil)."]<br>";
                    echo "= ".c($genap,$y)." x ".c($ganjil,$xganjil)."<br>";
                    echo "= ".c($genap,$y)*c($ganjil,$xganjil)."<br>";
                    $result[$x] = c($genap,$y)*c($ganjil,$xganjil);    
                }
            }
        }
        echo "Dengan demikian, peluang terambilnya $jumlahyangdiambil anggota tersebut berjumlah genap adalah :<br>";
        echo array_sum($result)."/".c($jumlahyangdiambil+$selisihnya+1, $jumlahyangdiambil)."<br>";
        echo "= ".array_sum($result)/c($jumlahyangdiambil+$selisihnya+1, $jumlahyangdiambil);
    }
} else { //jika jumlah yang diambil ganjil
    echo "Kita akan tuliskan beberapa kemungkinan :<br>";
       $result = []; 
       for ($x = 0; $x <= $ganjil; $x++) {
           $xganjil = $x * 2 + 1;
           for ($y = 0; $y <= $genap; $y++) {
              if ($xganjil + $y == $jumlahyangdiambil){
                    echo "Kemungkinan susunannya : $y genap + $xganjil ganjil, yaitu :<br>";
                    echo $genap."C".$y." x ".$ganjil."C".$xganjil."<br>";
                    echo "= [".caracawal($genap,$y)."] x [".caracawal($ganjil,$xganjil)."]<br>";
                    echo "= ".c($genap,$y)." x ".c($ganjil,$xganjil)."<br>";
                    echo "= ".c($genap,$y)*c($ganjil,$xganjil)."<br>";
                    $result[$x] = c($genap,$y)*c($ganjil,$xganjil); 
              }
           }
       }
       echo "Dengan demikian, peluang terambilnya $jumlahyangdiambil anggota tersebut berjumlah genap adalah :<br>";
        echo array_sum($result)."/".c($jumlahyangdiambil+$selisihnya+1, $jumlahyangdiambil)."<br>";
        echo "= ".array_sum($result)/c($jumlahyangdiambil+$selisihnya+1, $jumlahyangdiambil);
    
}
?>
