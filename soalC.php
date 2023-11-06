<?php
        // B
        $baju_bayi = "Baju Bayi (1x35500)";
        $diapers = "Diapers (3x51000)";
        $bedak = "Bedak(1x15.000)";
        $minyak_telon = "Minyak telon (2x30000)";
        $total_pembelian = 263500;

        if ($total_pembelian >= 200000) {
            $diskon = $total_pembelian * 0.2;
        } else if ($total_pembelian >= 150000) {
            $diskon = $total_pembelian * 0.1;
        } else {
            $diskon = 0;
        }

        $total_pembayaran = $total_pembelian - $diskon;

        echo "Tanggal Transaksi : 06 November 2023";
        echo "<br> </br>";
        echo "Produk : " ."<br>" .  $baju_bayi . "<br>" . $diapers . "<br>" . $bedak ."<br>". $minyak_telon ."<br>";
        echo"</br>";
        echo "Total pembelian: ".$total_pembelian;
        echo "<br>";
        echo "Diskon: ".$diskon;
        echo "<br>";
        echo "Total pembayaran: ".$total_pembayaran;
        echo"<br> </br>";
        echo "=================================";
        ?>