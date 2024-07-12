<!doctype html>
<html>
<head>
<title>PROJECT ULANGAN - KELOMPOK 3</title>
<link rel="stylesheet" href="styles.css">
</head>
<body class="content">
<form method="POST" action=" ">
<h1>KALKULATOR BANGUN DATAR</h1>
<br>
<hr>
<br>
<pre>
PILIH BANGUN DATAR  	    : <select name="bangun">
<option value="pilih" selected>-PILIH-</option>
<option value="lingkaran">Lingkaran</option>
<option value="segitiga">Segitiga</option>
<option value="persegipanjang">Persegi Panjang</option>
</select>
<br>
INPUT NILAI-1 (p/r/a)   	: <input type="number" name="n1" required>
<br>
INPUT NILAI-2 (l/phi/t) 	: <input type="float" name="n2" required>
<h5><i>						    *nilai phi wajib input disini jika ada</h5></i>
<br><br>
Yang Dihitung:
<br>
<input type="radio" name="pil" value="ls" required> Luas
<br>
<input type="radio" name="pil" value="kl" required> Keliling
<br>
<input type="submit" value="KIRIM" name="hitung" class="cta">       <input type="reset" value="BATAL" class="cta">
<br>
</pre>
</form>
<hr>
<footer>
<marquee>
<h2><b>-KALKULATOR DENGAN PHP-</h2></b>
</marquee>
<br><br><br>
</footer>
</body>  
</html>
 
<pre>
<h1>HASIL HITUNG BANGUN DATAR</h1><hr>
<?php
if(isset($_POST["hitung"]))
 
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$p=$_POST["pil"];
$b=$_POST["bangun"];

if ($b=="segitiga" and $p=="ls")
{$h=0.5*$n1*$n2;
echo "Bangun Datar dipilih	: SEGITIGA<br>
Nilai 1 (p/r/a)		        : $n1 <br>
Nilai 2 (l/ph/t)	        : $n2 <br>
Luas Segitiga		        : $h";}

 
else if ($b=="segitiga" and $p=="kl")
{$h=(sqrt($n1*$n1)+sqrt($n2*$n2));
echo "Bangun Datar dipilih	: SEGITIGA<br>
Nilai 1 (p/r/a)		        : $n1 <br>
Nilai 2 (l/ph/t)	        : $n2 <br>
Keliling Segitiga	        : $h";}


else if ($b=="lingkaran" and $p=="ls")
{$h=3.14*$n1*$n1;
echo "Bangun Datar dipilih	: LINGKARAN<br>
Nilai 1 (p/r/a)		        : $n1 <br>
Nilai 2 (l/ph/t)	        : $n2 <br>
Luas Lingkaran		        : $h";}
 
else if ($b=="lingkaran" and $p=="kl")
{$h=2*3.14*$n1;
echo "Bangun Datar dipilih	: LINGKARAN<br>
Nilai 1 (p/r/a)		        : $n1 <br>
Nilai 2 (l/ph/t)	        : $n2 <br>
Keliling Lingkaran	        : $h";}

 
else if ($b=="persegipanjang" and $p=="ls")
{$h=$n1*$n2;
echo "Bangun Datar dipilih	: PERSEGI PANJANG<br>
Nilai 1 (p/r/a)		        : $n1 <br>
Nilai 2 (l/ph/t)		    : $n2 <br>
Luas Persegi Panjang	    : $h";}
 
else
{$h=2*($n1+$n2);
echo "Bangun Datar dipilih	: PERSEGI PANJANG<br>
Nilai 1 (p/r/a)		        : $n1 <br>
Nilai 2 (l/ph/t)		    : $n2 <br>
Keliling Persegi Panjang	: $h";}
?>
<br>
<hr>
<footer>
<marquee>
<h2><b>-KALKULATOR DENGAN PHP-</h2></b>
<marquee>
</footer
</pre>