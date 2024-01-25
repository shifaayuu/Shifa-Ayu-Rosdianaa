<?php
    function ReservasiHotel($nama, $noWA, $alamat, $tipeKamar, $hargaMalem, $lamaMenginap, $discount, $totalHarga, $status){
        echo "===Program Reservasi Hotel Sederhana=== <br />";
        echo "Nama Pemesan = $nama <br />";
        echo "Nomor WhatsApp = $noWA <br />";
        echo "Alamat = $alamat <br />";
        echo "Tipe Kamar = $tipekamar <br />";

        //25%=0.75


        //if($tipeKamar == "Deluxe" && $lamaMenginap <4){
            //$lamaAsli = 5;
            //$biaya = 
       // }

        echo "Harga Per Malam = Rp ".number_format($hargaMalem)." <br />";
        echo "Lama Menginap = Rp ".number_format($lamaMenginap)." <br />";
        echo "Total Harga = Rp ".number_format($totalHarga)." <br />";
        echo "Status = $status <br />";

        if($status == "Waiting"){
            echo "status : <span style = 'color : yellow'> $status </span>";
        }else if($status == "Checkin"){
            echo "status : <span style = 'color : green'> $status </span>";
        }else if($status == "Check Out"){
            echo "status : <span style = 'color : red'> $status </span>";
        }
    }

    echo ReservasiHotel("Shifa Ayu Rosdiana", "0895379096630", "JL Pintu Air V No 10 BLK", "Deluxe", 200, 5, 1000000, "Waiting");