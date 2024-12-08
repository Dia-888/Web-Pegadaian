<?php
function formatDate($tanggal) {
    $bulanIndo = array(
        1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    );

    $pecahkan = explode('-', $tanggal);
    
    return $pecahkan[2] . ' ' . $bulanIndo[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
