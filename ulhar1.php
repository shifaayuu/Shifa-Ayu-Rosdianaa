<?php
    function pesertaDidik($nomor, $kondisiTerminasi, $Th1, $Th2, $Tb1, $Tb2, $Sk1, $Th3, $Sk2 ){
        for($nomor; $nomor <= $kondisiTerminasi; $nomor++){
            if($nomor == $Th1 || $nomor == $Th2 || $nomor == $Th3){
                echo "Peserta Didik No Absen $nomor Tidak Hadir <br />";
            }else if($nomor == $Tb1 || $nomor == $Tb2){
                echo "Peserta Didik No Absen $nomor Terlambat <br />";
            }else if($nomor == $Sk1 || $nomor == $Sk2){
                echo "Peserta Didik No Absen $nomor Sakit <br />";
            }else{
                echo "Peserta Didik No Absen $nomor Hadir <br />";
            }
        }
    }
    echo pesertaDidik(1, 15, 2, 3, 6, 8, 9, 10, 13);
    ?>