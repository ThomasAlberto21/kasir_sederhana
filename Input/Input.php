<?php

function inputNamaPembeli(string $nama_pembeli)
{
    echo "$nama_pembeli : ";
    $result_namaPembeli = fgets(STDIN);
    return trim($result_namaPembeli);
}


function inputNomorMenu(string $nomor_menu)
{
    echo "$nomor_menu : ";
    $result_nomorMenu = fgets(STDIN);
    return trim($result_nomorMenu);
}



function jumlahPesanan(string $jumlah_pesanan)
{
    echo "$jumlah_pesanan : ";
    $result_jumlahPesanan = fgets(STDIN);
    return trim($result_jumlahPesanan);
}


function uangPembeli(string $uang_pembeli)
{
    echo "$uang_pembeli ";
    $result_uangPembeli = fgets(STDIN);
    return trim($result_uangPembeli);
}

