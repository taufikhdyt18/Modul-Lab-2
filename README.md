## Modul 2
| Laboratorium | Modul 2
|-------|---------
| **NIM**   | 312310576
| **Nama** | Taufik Hidayat
| **Kelas** | TI.23.A6


#### Latihan 1

![image](img/code.png)


**Hasil**


![image](img/ss1.png)
 
**Penjelasan:**

- HTML dapat dijalankan langsung di browser tanpa memerlukan server karena browser mampu membaca file HTML lokal. Jika tag <body> dihapus, browser tetap menampilkan konten karena secara otomatis memperbaiki struktur yang tidak lengkap. Namun, disarankan tetap menggunakan tag <body> agar struktur dokumen sesuai dengan standar HTML.

#### Latihan 2

![image](img/code2.png)


**Penjelasan:**

- Ya, Tentu berubah dikarenakan h1 memiliki fungsi untung membuat font dari suatu huruf menjadi besar.

####  Latihan 3

![image](img/code3.png)

**Penjelasan:**

- Perbedaannya terletak pada visibilitas data di URL. POST lebih aman untuk data sensitif, sementara GET cocok untuk pengambilan data sederhana.
 
#### Latihan 4

![image](img/code4.png) 

**Penjelasan:**

- Form di Lat2_2 mengirim data melalui metode POST ke proses02.php saat tombol ditekan. Di proses02.php, data diperiksa dengan isset, lalu nilai input ditampilkan. Jika input kosong, hasilnya tetap ditampilkan tanpa nilai.

#### Latihan 5

![image](img/code5.png) 

**Penjelasan:**

- Setelah atribut required dihapus, form dapat dikirim meskipun input kosong, dan hasilnya menampilkan nama kosong di proses02.php. Fungsi required adalah memastikan input tidak boleh kosong sebelum form dikirim, dengan validasi langsung di browser.


#### Latihan 6


![image](img/code6.png) 
 
**a)**	Jalankan kode Lat2_2, dan kemudian amati yang terjadi ! Apakah ada perbedaan daripada sebelumnya ? Berilah penjelasan kenapa itu bisa terjadi ? 

**b)** Menurut kalian dalam latihan 6 ini cara penulisan CSS apa yang dipakai ? 

**c)**	Rubahlah cara penulisan CSS ini dalam tipe linked style sheet !

- a.	Ketika kode dijalankan, elemen-elemen HTML seperti <'h1> dan <'p> memiliki gaya (warna, font, ukuran, dsb.) yang diatur oleh CSS yang ditulis di dalam <style> pada bagian <head>. Tidak ada perbedaan kecuali Anda telah memodifikasi CSS atau strukturnya sebelumnya.
- 
- Penjelasan:

Gaya diatur melalui CSS internal (embedded style). CSS ini memengaruhi elemen yang didefinisikan di dalam dokumen HTML yang sama, sehingga browser langsung membaca dan menerapkannya selama rendering.

- b.	Dalam latihan 6 ini, tipe penulisan CSS yang digunakan adalah Internal CSS (atau Embedded CSS), karena deklarasi gaya ditulis langsung di dalam tag <style> pada bagian <head> dari file HTML.

- c.	Ubah CSS menjadi Linked Style Sheet

![image](img/code6a.png) 


![image](img/code6css.png) 
 
 
#### Latihan 7


![image](img/code7.png) 
 
**Penjelasan:**

- Ketika kode dijalankan, hasil operasi penjumlahan variabel x dan y (yaitu 5 + 2 = 7) ditampilkan di elemen dengan ID demo pada halaman. Baris 13 menggunakan document.getElementById("demo").innerHTML = z; untuk menampilkan nilai z (hasil operasi) ke dalam elemen <p> yang memiliki ID demo. Tanpa baris ini, hasil operasi tidak akan muncul di halaman, karena tidak ada instruksi untuk menampilkan output.

 
#### Latihan 8

 
![image](img/code8.png) 

**Penjelasan:**

- a.	Saat kode dijalankan melalui server, hasilnya akan berjalan dengan baik karena browser menginterpretasi file HTML dan mengeksekusi JavaScript di dalamnya untuk mengonversi suhu antara Celcius dan Fahrenheit secara langsung saat pengguna mengetik angka.

- b.	Ketika dijalankan tanpa server (misalnya hanya dengan membuka file HTML secara lokal), hasilnya tetap sama karena JavaScript dijalankan di sisi klien (browser). Tidak ada perbedaan fungsi, kecuali beberapa fitur JavaScript tertentu 
yang memerlukan server (misalnya, pengambilan data melalui HTTP).

- c.	JavaScript bekerja sebagai bahasa pemrograman sisi klien yang memungkinkan interaktivitas pada halaman web, seperti memproses input pengguna dan memperbarui konten tanpa perlu memuat ulang halaman.
 
Latihan 9
 
```
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
```

#### Hasil

![image](img/code8.png)




























Latihan 10

 
