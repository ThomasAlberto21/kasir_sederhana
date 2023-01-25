<?php

require_once "./Input/Input.php";

echo "=============APLIKASI KASIR SEDERHANA=============" . PHP_EOL;
$nama_pembeli = inputNamaPembeli("Masukkan Nama Pembeli");
echo "Nama Pembeli \t: $nama_pembeli" . PHP_EOL;


function menuMakanan()
{
    global $kembalian;
    global $total_harga;
    global $nama_menu;

    while (true) {
        echo "=============== Menu Makanan ===============" . PHP_EOL;
        echo "1. Nasi Goreng - Rp 15000" . PHP_EOL;
        echo "2. Soto - Rp 9000" . PHP_EOL;
        echo "3. Mie Ayam - Rp 11000" . PHP_EOL;

        echo "===========================" . PHP_EOL;

        $nomor_menu = inputNomorMenu("Masukkan Nomor Menu \t") . PHP_EOL;
        $jumlahPesan = jumlahPesanan("Masukkan Jumlah Pesanan ") . PHP_EOL;

        echo "===========================" . PHP_EOL;

        if ($nomor_menu == 1) {
            $nama_menu = "Nasi Goreng" . PHP_EOL;
            $total_harga = 15000 * $jumlahPesan . PHP_EOL;
            break;
        } else if ($nomor_menu == 2) {
            $nama_menu = "Soto" . PHP_EOL;
            $total_harga = 9000 * $jumlahPesan . PHP_EOL;
            break;
        } else if ($nomor_menu == 3) {
            $nama_menu = "Mie Ayam" . PHP_EOL;
            $total_harga = 11000 * $jumlahPesan . PHP_EOL;
            break;
        } else {
            echo "Nomor menu yang anda masukkan tidak ada" . PHP_EOL;
            menuMakanan();
        }
    }



    echo trim("Menu Makanan \t \t : $nama_menu") . PHP_EOL;
    echo trim("Total yang harus dibayar : Rp.$total_harga") . PHP_EOL;

    $uang_pembeli = uangPembeli("Masukkan Uang Pembeli \t Rp.") . PHP_EOL;
    echo trim("Uang Pembeli \t \t : Rp.$uang_pembeli") . PHP_EOL;


    if ($uang_pembeli >= $total_harga) {
        $kembalian = $uang_pembeli - $total_harga . PHP_EOL;
        echo trim("Kembaliannya adalah \t : Rp.$kembalian") . PHP_EOL;
    } else if ($uang_pembeli < $total_harga) {
        echo "Maaf uang anda kurang" . PHP_EOL;
    }
}





menuMakanan();
