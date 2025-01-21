<?php
// Data pegawai dalam array asosiatif
$pegawai = [
    [
        'nama' => 'Budi Santoso',
        'jabatan' => 'Kepala Keuangan',
        'gaji_pokok' => 12000000,
        'tunjangan' => 3500000
    ],
    [
        'nama' => 'Sarah Wijaya',
        'jabatan' => 'Senior Akuntan',
        'gaji_pokok' => 9500000,
        'tunjangan' => 2800000
    ],
    [
        'nama' => 'Rudi Hermawan',
        'jabatan' => 'Analis Keuangan',
        'gaji_pokok' => 8500000,
        'tunjangan' => 2500000
    ],
    [
        'nama' => 'Diana Putri',
        'jabatan' => 'Staff Pajak',
        'gaji_pokok' => 7500000,
        'tunjangan' => 2000000
    ],
    [
        'nama' => 'Ahmad Rahman',
        'jabatan' => 'Staff Administrasi',
        'gaji_pokok' => 6500000,
        'tunjangan' => 1800000
    ]
];

// Fungsi untuk memformat angka ke format rupiah
function formatRupiah($angka) {
    return 'Rp' . number_format($angka, 0, ',', '.');
}

// Mulai output HTML
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Gaji Pegawai Startup DEF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            background-color: #007bff;
            color: white;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            margin-bottom: 20px;
        }

        .pegawai-card {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }

        .info-label {
            font-weight: bold;
            color: #555;
        }

        .info-value {
            color: #333;
        }

        .summary {
            background-color: #e9ecef;
            padding: 20px;
            border-radius: 5px;
            margin-top: 30px;
        }

        .summary h2 {
            color: #007bff;
            margin-top: 0;
        }

        .highlight {
            color: #28a745;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>LAPORAN GAJI PEGAWAI STARTUP DEF</h1>
        </div>

        <?php
        $total_seluruh_gaji = 0;
        $gaji_tertinggi = 0;
        $pegawai_gaji_tertinggi = '';

        foreach ($pegawai as $p):
            $gaji_total = $p['gaji_pokok'] + $p['tunjangan'];
            $total_seluruh_gaji += $gaji_total;
            
            if ($gaji_total > $gaji_tertinggi) {
                $gaji_tertinggi = $gaji_total;
                $pegawai_gaji_tertinggi = $p['nama'];
            }
        ?>
            <div class="pegawai-card">
                <div class="info-row">
                    <span class="info-label">Nama Pegawai:</span>
                    <span class="info-value"><?php echo $p['nama']; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Jabatan:</span>
                    <span class="info-value"><?php echo $p['jabatan']; ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Gaji Pokok:</span>
                    <span class="info-value"><?php echo formatRupiah($p['gaji_pokok']); ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Tunjangan:</span>
                    <span class="info-value"><?php echo formatRupiah($p['tunjangan']); ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Gaji Total:</span>
                    <span class="info-value highlight"><?php echo formatRupiah($gaji_total); ?></span>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="summary">
            <h2>RINGKASAN LAPORAN</h2>
            <div class="info-row">
                <span class="info-label">Total Seluruh Gaji:</span>
                <span class="info-value highlight"><?php echo formatRupiah($total_seluruh_gaji); ?></span>
            </div>
            <div class="info-row">
                <span class="info-label">Pegawai dengan Gaji Tertinggi:</span>
                <span class="info-value"><?php echo $pegawai_gaji_tertinggi; ?></span>
            </div>
            <div class="info-row">
                <span class="info-label">Jumlah Gaji Tertinggi:</span>
                <span class="info-value highlight"><?php echo formatRupiah($gaji_tertinggi); ?></span>
            </div>
        </div>
    </div>
</body>
</html>