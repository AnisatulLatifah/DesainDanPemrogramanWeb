<?php 
echo "<center>"; 
echo "<font size=4>";
echo "Penjualan Anisa's Dessert";
echo "<hr>";
echo "<table>";
$namakue=$_POST['namakue'];
if($namakue=="Donat")$harga=9500;
if($namakue=="CupCake")$harga=11000;
if($namakue=="Brownies")$harga=75000;
if($namakue=="Pancake")$harga=8000;
if($namakue=="Cake Biru")$harga=150000;
if($namakue=="Cheese Cake")$harga=45000;
if($namakue=="Dessert Box")$harga=75000;
if($namakue=="Dorayaki")$harga=10000;
if($namakue=="Lapis Legit")$harga=110000;
if($namakue=="Macaroon")$harga=12000;
if($namakue=="Pavlova")$harga=45000;


$jumlah=$_POST['jumlah'];
if($jumlah >= 5){
	$diskon = 0.05;
}else if($jumlah >=3 || $jumlah <5){
	$diskon = 0.07;
}else
	$diskon = 0;

$totalharga=$jumlah*$harga;
$diskon2=$totalharga*$diskon;
$totalbayar=$totalharga-$diskon2;

echo "<br>";
echo "Nama Kue: $namakue";
echo "<br>";
echo "Harga: ";
echo "Rp. ".number_format($harga,2,',',',');
echo "<br>";
echo "Jumlah: $jumlah ";
echo "<tr><td colspan=3></td><tr><hr>: ";
echo "<br>";
echo "Total Harga: ";
echo "Rp. ".number_format($totalharga,2,',',',');
echo "<br>";
echo "Diskon:";
echo "Rp. ".number_format($diskon2,2,',',',');
echo "<br>";
echo "Total Bayar: ";
echo "Rp. ".number_format($totalbayar,2,',',',');
?>
<br><br>
<?php echo "Nama Pembeli : " ?>
<?=isset($_POST['namapembeli']) ? $_POST['namapembeli'] : ''?>