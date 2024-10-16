<?php

$buku = [
    [
        'judul' => 'Belajar PHP Untuk pemula',
        'penulis' => 'majun',
        'tahun' => '2020'
    ],
    [
        'judul' => 'Panduan CSS Modern',
        'penulis' => 'Google',
        'tahun' => '2020'
    ],
    [
        'judul' => 'HTML5 DAN CSS3',
        'penulis' => 'W3 SCHOOL',
        'tahun' => '2019'
    ],
];
?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Daftar buku</title>
</head>
<body>
    <h1>Daftar buku</h1>
    <table> 
        <thead>
            <tr>
                <th>judul</th>
                <th>penulis</th>
                <th>tahun</th>
            </tr>
        <thead>
            <?php foreach ($buku as $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['judul']); ?></td>
                    <td><?php echo htmlspecialchars($item['penulis']); ?></td>
                    <td><?php echo htmlspecialchars($item['tahun']); ?></td>
                </tr>
                <?php endforeach; ?>    
        </tbody>
    </table>
</body>
</html>