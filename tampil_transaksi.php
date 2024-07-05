<?php
if (file_exists('transaksi.txt')) {
    $file = fopen('transaksi.txt','r');
    while ($line = fgets($file)) {
        $data = explode('|', trim($line));
        echo "<tr>";
        foreach ($data as $item) {
            echo "<td>$item</td>";
        }
        echo "</tr>";
    }   
    fclose($file);
} else {
    echo "<tr><td colspan='6'>Tidak ada transaksi yang tercatat.</td></tr>";
}
?>
