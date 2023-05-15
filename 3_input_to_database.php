<!-- Memulai dokumen HTML -->
<html>

<!-- Kepala dokumen -->

<head>
    <title>Memasukan ke database</title>
</head>

<!-- Badan dokumen, yang akan ditampilkan didepan -->

<body>
    <!-- Deklarasi formulir dokumen -->
    <form method="POST">
        <div>
            <label for="inputEmail">Email</label>
            <input type="text" name="email" id="inputEmail">
        </div>
        <div>
            <label for="inputPass">Nama pengunjung</label>
            <input type="text" name="nama_pengunjung" id="inputPass">
        </div>
        <div>
            <label for="inputCatatan">Catatan</label>
            <input type="text" name="catatan" id="inputCatatan">
        </div>
        <button type="submit">Kirim data</button> 
        <button type="button">Tombol ini tidak mengkirimkan data</button>
    </form>
    <div>
        <?php # Pemrosesan server
        # Cek jika ada data masuk
        if (
            isset($_POST['email']) && # Cek apakah data email masuk dan
            isset($_POST['nama_pengunjung']) # Cek apakah data nama_pengunjung masuk
        ) {
            $servername = "localhost";      // Target server database
            $username = "root";             // Akses username database
            $password = "";                 // Akses password database
            $dbname = "museum_sonobudoyo";  // Database yang digunakan

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Gagal menghubungi database");
            }

            # Buat variabel
            $email = $_POST['email'];
            $nama_pengunjung = $_POST['nama_pengunjung'];
            # Membuat variabel catatan jika ada catatan diisi data yang diinput, jika tidak ada diisi kosong
            $catatan = isset($_POST['catatan']) ? $_POST['catatan'] : "";

            # Perintah ke database
            # Perintah insert digukanakan untuk memasukan data ke database
            $sql = "INSERT INTO data_pengunjung (email,nama_pengunjung,catatan) VALUES ('$email','$nama_pengunjung','$catatan')";
            if ($conn->query($sql) === TRUE) {
                echo "Berhasil memasukan data ke database";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        ?>
    </div>
    <div>
        <p>Link referensi:</p>
        <ol>
            <li><a href="https://www.w3schools.com/php/php_mysql_insert.asp" target="_blank" rel="noopener noreferrer">https://www.w3schools.com/php/php_mysql_insert.asp</a></li>
            <li><a href="https://www.w3schools.com/php/php_forms.asp" target="_blank" rel="noopener noreferrer">https://www.w3schools.com/php/php_forms.asp</a></li>
        </ol>
    </div>
</body>

</html>