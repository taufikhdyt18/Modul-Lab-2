<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Fisika</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f0f0;
        }
        .calculator {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        input {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 200px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 10px;
            padding: 10px;
            background-color: #e8f5e9;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Kalkulator Rumus Fisika</h1>

    <div class="calculator">
        <h2>Hukum Newton F = m × a</h2>
        <div class="input-group">
            <label>Massa (kg):</label><br>
            <input type="number" id="massa" placeholder="Masukkan massa">
        </div>
        <div class="input-group">
            <label>Percepatan (m/s²):</label><br>
            <input type="number" id="percepatan" placeholder="Masukkan percepatan">
        </div>
        <button onclick="hitungGaya()">Hitung Gaya</button>
        <div id="hasilGaya" class="result"></div>
    </div>

    <div class="calculator">
        <h2>Energi Kinetik E = ½ × m × v²</h2>
        <div class="input-group">
            <label>Massa (kg):</label><br>
            <input type="number" id="massaKinetik" placeholder="Masukkan massa">
        </div>
        <div class="input-group">
            <label>Kecepatan (m/s):</label><br>
            <input type="number" id="kecepatan" placeholder="Masukkan kecepatan">
        </div>
        <button onclick="hitungEnergiKinetik()">Hitung Energi Kinetik</button>
        <div id="hasilEnergiKinetik" class="result"></div>
    </div>

    <div class="calculator">
        <h2>Energi Potensial E = m × g × h</h2>
        <div class="input-group">
            <label>Massa (kg):</label><br>
            <input type="number" id="massaPotensial" placeholder="Masukkan massa">
        </div>
        <div class="input-group">
            <label>Ketinggian (m):</label><br>
            <input type="number" id="ketinggian" placeholder="Masukkan ketinggian">
        </div>
        <button onclick="hitungEnergiPotensial()">Hitung Energi Potensial</button>
        <div id="hasilEnergiPotensial" class="result"></div>
    </div>

    <script>
        const g = 9.81; // Percepatan gravitasi

        function hitungGaya() {
            const massa = parseFloat(document.getElementById('massa').value);
            const percepatan = parseFloat(document.getElementById('percepatan').value);
            
            if (isNaN(massa) || isNaN(percepatan)) {
                document.getElementById('hasilGaya').innerHTML = 'Mohon masukkan angka yang valid';
                return;
            }
            
            const gaya = massa * percepatan;
            document.getElementById('hasilGaya').innerHTML = `Gaya = ${gaya.toFixed(2)} Newton`;
        }

        function hitungEnergiKinetik() {
            const massa = parseFloat(document.getElementById('massaKinetik').value);
            const kecepatan = parseFloat(document.getElementById('kecepatan').value);
            
            if (isNaN(massa) || isNaN(kecepatan)) {
                document.getElementById('hasilEnergiKinetik').innerHTML = 'Mohon masukkan angka yang valid';
                return;
            }
            
            const energiKinetik = 0.5 * massa * Math.pow(kecepatan, 2);
            document.getElementById('hasilEnergiKinetik').innerHTML = `Energi Kinetik = ${energiKinetik.toFixed(2)} Joule`;
        }

        function hitungEnergiPotensial() {
            const massa = parseFloat(document.getElementById('massaPotensial').value);
            const ketinggian = parseFloat(document.getElementById('ketinggian').value);
            
            if (isNaN(massa) || isNaN(ketinggian)) {
                document.getElementById('hasilEnergiPotensial').innerHTML = 'Mohon masukkan angka yang valid';
                return;
            }
            
            const energiPotensial = massa * g * ketinggian;
            document.getElementById('hasilEnergiPotensial').innerHTML = `Energi Potensial = ${energiPotensial.toFixed(2)} Joule`;
        }
    </script>
</body>
</html>