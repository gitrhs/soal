<?php
/*
 Sebuah tv dinyalakan rata-rata 6 jam sehari. Tv tersebut dihubungkan pada tegangan 220 volt dan memerlukan arus 2,5 Ampere. Berapa energi listrik yang harus dibayar dalam satu hari, jika harga energi listrik setiap Kwh sebesar Rp 150,00 ?

    t  =  Rata - rata pemakaian tiap hari = 6 jam
    V = Tegangan / Beda Potensial = 220 Volt
    I   =  Kuat arus = 2,5 A
    Tarif Listrik tiap Kwh = Rp.150,00
        Biaya yang harus dibayarkan = ....
*/
$t = rand(1,23); //rata-rata pemakaian tiap harinya (jam)
$v = rand(100,900); //tegangan (volt)
$i = rand(1,90)/10; //kuat arus (A)
$tarif_listrik_tiap_kwh = rand(100,5000); //tarif per kwh
$tarif = (number_format($tarif_listrik_tiap_kwh));
$hari = rand(1,60);

//pertanyaan:
echo "Sebuah tv dinyalakan rata-rata $t jam sehari. Tv tersebut dihubungkan pada tegangan $v volt dan memerlukan arus $i Ampere. Berapa energi listrik yang harus dibayar dalam $hari hari, jika harga energi listrik setiap Kwh sebesar Rp $tarif ? <br><br>";
//step 1:
/*
    Langkah pertama, Hitung pemakaian Energi dari persamaan :

W = P x t

Sedangkan P didapat dari nilai V x I

sehingga kita gunakan persamaan :

W = V x I x t

W = 220 x 2,5 x 6

W = 3.300 wh

Perhatika satuan lagi ;

Satuan yang kita hitung masih dalah wh (watt hours) kita perlu mengkonversikannya ke Kwh (Kilo watt hours), maka nilai wh yang kita peroleh dibagi 1.000 (Konversi wh ke Kwh dibagi 1.000)

W = 3,3 Kwh
*/
//rumus: w = p*t
$p = $v * $i;
$w = $p * $t; //masih berbentuk wh... rubah ke kwh
$w = $w/1000;

/*
Langkah Kedua, Nilai energi (W) yang kita dapatkan dikali dengan tarif listrik per Kwh :

Biaya = 3,3 x 150 = 495

Jadi harga listrik yang digunakan dalam sehari adalah Rp.495.00

Lalu ada pertanyaan lagi ini, bagaimana jika kita mencari biaya pemakaian selama 1 bulan?

Mudah saja, kita tinggal kalikan biaya pemakaian selama 1 hari tersebut dengan jumlah hari selama 1 bulan,

Misalnya kita hitung biaya pemakaian listrik soal diatas selama 1 bulan (30 hari) :

maka  biaya 1 hari dikalikan 30 :

495 x 30 = 14.850

Jadi biaya pemakain energi listrik selama 1 bulan pada soal diatas adalah Rp.14.850,00
*/
$biaya = $w * $tarif_listrik_tiap_kwh;
$hasil = $biaya * $hari;
$hasil = (number_format($hasil));
echo "hasil = Rp $hasil";
?>
