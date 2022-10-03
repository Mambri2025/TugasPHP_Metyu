<?php
require_once 'Dosen.php';
require_once 'Mahasiswa.php';

$d1 = new Dosen('Budi Santoso','Laki-Laki','111','S.Kom.,M.Kom.');
$d2 = new Dosen('Siti Aminah','Perempuan','112','S.T.,M.T.');
$m1 = new Mahasiswa('Sri Rezeki','Perempuan',5,'TI');
$m2 = new Mahasiswa('Sofwan','Laki-Laki',3,'SI');

$data = [$d1,$d2, $m1, $m2];
foreach($data as $d){
    echo $d->mencetak();
}