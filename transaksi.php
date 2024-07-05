<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Tono Pom Bensin</h1>
        <nav>
            <ul>
            <li><a href="home.html">Form Transaksi</a></li>
            <li><a href="transaksi.php">Daftar Transaksi</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="tabelTransaksi">
            <h2>Daftar Transaksi</h2>
            <div class="isidaftar">
                <table>
                    <thead>
                        <tr>
                            <th>Nama Pelanggan</th>
                            <th>Jenis Bensin</th>
                            <th>Jumlah Liter</th>
                            <th>Harga per Liter</th>
                            <th>Total Harga</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'tampil_transaksi.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    <footer>
        <div class="container">
            <p>&copy; Saif Brilliantoro (2300018332).</p>
        </div>
    </footer>
    </main>
    <script src="scripts.js"></script>
</body>
</html>
