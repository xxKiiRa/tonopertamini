document.getElementById('transaksiForm').addEventListener('submit', function(event) {
    var nama = document.getElementById('nama').value;
    var bensin = document.getElementById('bensin').value;
    var jumlah = document.getElementById('jumlah').value;
    var harga = document.getElementById('harga').value;

    if (nama === '' || bensin === '' || jumlah === '' || harga === '') {
        alert('Semua field harus diisi!');
        event.preventDefault();
    }
});
