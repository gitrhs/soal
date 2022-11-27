<?php
/*
Sebanyak 3 gram urea dilarutkan ke dalam 180 gram air pada suhu 20 derajat celcius. jika tekanan uap air murni pada suhu tersebut 17mmHg dan Mr urea = 60. hitunglah:
a. Tekanan uap larutan
b. penurunan tekanan uap

Dik:
massa urea = 3 gr
massa air = 180 gr
P° = 17 mmHg
Mr urea = 60
Mr air = 2 x 1 + 1 x 16 = 18
nt = massa urea/Mr urea = 3/60 = 0,05 mol
np = massa air/Mr air = 180/18 = 10 mol

*/
$massa_urea = rand(2, 20);
$massa_air = rand(100, 300);
$tekanan_uap_air = rand(10,30);
$mr_air = 18;
$nt = $massa_urea/60;
$np = $massa_air/18;
$yang_ditanya = rand(1,2);
$p = $tekanan_uap_air * ($np/($np + $nt));
$phasil = number_format((float)$p, 3, '.', '');
$segitiga_p = $tekanan_uap_air - $p;
$segitiga_p_hasil = number_format((float)$segitiga_p, 2, '.', '');
if ($yang_ditanya == 1){
    $soal = "Tekanan uap larutan";
    $hasil = $phasil;
}
else if ($yang_ditanya == 2){
    $soal = "penurunan tekanan uap";
    $hasil = $segitiga_p_hasil;
}
echo "Sebanyak $massa_urea gram urea dilarutkan ke dalam $massa_air gram air pada suhu 20 derajat celcius. jika tekanan uap air murni pada suhu tersebut $tekanan_uap_air mmHg dan Mr urea = 60. hitunglah $soal <br><br>";
echo "hasil = $hasil mmHg"

/*
Dit: a. tekanan uap larutan ; b. penurunan tekanan uap
Jawab:

a. 
P = P° . Xp
P = 17 . (np / (np+nt)
P = 17 . (10 / (10 + 0,05)
P = 17 . (10 / 10,05)
P = 16,9154 mmHg 

b.
ΔP = P° - P
ΔP = 17 - 16,9154 = 0,0846 mmHg
*/

?>
