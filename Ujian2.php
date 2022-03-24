<table border='2' align='center' width='600px' cellpadding='25px' bgcolor=#9FE2BF margin>
                                
<td>
    <h1 align='center'> <b> KALKULATOR GEO - NATMORT</b></h1>
</td>
</table>
                      
<table border='2' align='center' width='600px' cellpadding='25px' cellspacing='1px' bgcolor=#9FE2BF>
<tr>
<td style='font-size: 20'>
<?php
    
if(isset($_POST['Hitung'])){
$ht=$_POST['ht'];
$K=$_POST['K'];
$B=$_POST['B'];
$D=$_POST['D'];
$P=$_POST['P'];
    
echo"<h2 align='center'> Hasil Perhitungan $ht </h2>
Hasil perhitungan $ht di kota <u>$K </u> yaitu :
<br> 
Jumlah penduduk untuk natalitas : <b>$B</b> 
<br>
Jumlah kematian untuk mortalitas : <b>$D</b> 
<br>
Penduduk pada pertengahan tahun: <b> $P </b>"; 
    
$hasil=$B/$P*1000;
if ($ht=='Natalitas'){
echo "Angka Kelahiran Kasar (CBR) adalah <b> $hasil </b> <br>";
} 
$hasil2=$D/$P*1000;
else if ($ht=='Mortalitas'){
echo "Angka Kematian Kasar (CDR) adalah <b> $hasil2 </b> <br>";
}
    
echo
"<marquee behavior='alternate' bgcolor='white' width='900'> - Vanya Frisca Sitanggang/XII IPS 3/25 - </marquee>;

?>
</td>
</tr>
</table>