<?php
include "db/koneksi.php";
// $th=data("Y");
	$sql="SELECT * FROM produk_hukum_old";
	$hub=mysqli_query($conn,$sql);
	while ( $data=mysqli_fetch_array($hub)) {
		echo "        <div class='container' >
            <div class='row'>
            <div class='col-sm-12 block' style='background-color:#E6E6FA; color: black; '>
            <p>Tentang :  " . $data['tentang'] ."</p>
            </br>
            <p>Download : </p>
            </div>
            </div>
        </div></br>";
	}
?>