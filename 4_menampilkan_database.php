<!-- Memulai dokumen HTML -->
<html>

<!-- Kepala dokumen -->

<head>
    <title>Menampilkan data dari database</title>
</head>

<!-- Badan dokumen, yang akan ditampilkan didepan -->

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
            </tr>
            <tr>
                <th>Jam kunjungan</th>
            </tr>
            <tr>
                <th>Nama pengunjung</th>
            </tr>
            <tr>
                <th>Email</th>
            </tr>
            <tr>
                <th>Catatan</th>
            </tr>
        </thead>
        <tbody>
            <?php
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

            # Perintah SELECT untuk mendapatkan data dari database
            $sql = "SELECT id, jam_kunjungan, nama_pengunjung, email, catatan FROM data_pengunjung";
            $result = $conn->query($sql);

            # Apakah terdapat data lebih dari 1?
            if ($result->num_rows > 0) {
                # Tampilkan data satu per satu
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $jam_kunjungan = $row['jam_kunjungan'];
                    $nama_pengunjung = $row['nama_pengunjung'];
                    $email = $row['email'];
                    $catatan = $row['catatan'];

                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$jam_kunjungan</td>";
                    echo "<td>$nama_pengunjung</td>";
                    echo "<td>$email</td>";
                    echo "<td>$catatan</td>";
                    echo "</tr>";
                }
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>

</html>