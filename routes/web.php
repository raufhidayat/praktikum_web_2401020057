<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/latihan-php', function () {
    // Variabel dan tipe data
    $nama = 'Rauf Hidayat';
    $nilai = [60, 70, 65];
    // Fungsi anonim untuk menghitung rata-rata
    $hitungRataRata = function (array $data) {
        $total = 0;
        foreach ($data as $n) {
            $total += $n;
        }
        return $total / count($data);
    };

    $rataRata = $hitungRataRata($nilai);

    // Percabangan if-else
    if ($rataRata >= 75) {
        $status = 'Lulus';
    } else {
        $status = 'Perlu Perbaikan';
    }

    // Kirim data ke view
    return view('latihan-php', [
        'nama' => $nama,
        'nilai' => $nilai,
        'rataRata' => $rataRata,
        'status' => $status,
    ]);
});
