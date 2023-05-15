<!-- Memulai dokumen HTML -->
<html>

<!-- Kepala dokumen -->

<head>
    <title>Basic form</title>
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
            isset($_POST['email']) && # Cek apakah email masuk dan
            isset($_POST['password']) # Cek apakah password masuk
        ) {
            # Tampilkan data yang diterima dalam bentuk JSON
            echo json_encode($_POST, JSON_PRETTY_PRINT);
        }
        ?>
    </div>
    <div>
        <p>Link referensi:</p>
        <ol>
            <li><a href="https://www.w3schools.com/html/html_forms.asp" target="_blank" rel="noopener noreferrer">https://www.w3schools.com/html/html_forms.asp</a></li>
            <li><a href="https://www.w3schools.com/php/php_forms.asp" target="_blank" rel="noopener noreferrer">https://www.w3schools.com/php/php_forms.asp</a></li>
        </ol>
    </div>
</body>

</html>