<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan PHP Dasar</title>
</head>
<body>
    <h1>Latihan PHP Dasar</h1>

    <p>Nama: {{ $nama }}</p>

    <p>Nilai:</p>
    <ul>
        @foreach ($nilai as $n)
            <li>{{ $n }}</li>
        @endforeach
    </ul>

    <p>Rata-rata: {{ number_format($rataRata, 2) }}</p>
    <p>Status: {{ $status }}</p>
</body>
</html>