<?php

require_once 'identitas.php';

$identitas1 = new identitas ('Nenden','Bandung','XI RPL2','Jomblo');
echo "nama :".$identitas1->get_nama() . '<br>';
echo "tempatlahir :".$identitas1->get_tempatlahir() . '<br>';
echo "kelas :".$identitas1->get_kelas() . '<br>';
echo "status :".$identitas1->get_status() . '<br>'.'<br>';

$identitas1 = new identitas ('Astria','Jakarta','XI TKJ1','Single');
echo "nama :".$identitas1->get_nama() . '<br>';
echo "tempatlahir :".$identitas1->get_tempatlahir() . '<br>';
echo "kelas :".$identitas1->get_kelas() . '<br>';
echo "status :".$identitas1->get_status() . '<br>'.'<br>';

$identitas1 = new identitas ('Sandi','Garut','XII TKR1','Tunangan');
echo "nama :".$identitas1->get_nama() . '<br>';
echo "tempatlahir :".$identitas1->get_tempatlahir() . '<br>';
echo "kelas :".$identitas1->get_kelas() . '<br>';
echo "status :".$identitas1->get_status() . '<br>'.'<br>';

$identitas1 = new identitas ('Bagas','Lampung','X TSM3','Menikah');
echo "nama :".$identitas1->get_nama() . '<br>';
echo "tempatlahir :".$identitas1->get_tempatlahir() . '<br>';
echo "kelas :".$identitas1->get_kelas() . '<br>';
echo "status :".$identitas1->get_status() . '<br>'.'<br>';

$identitas1 = new identitas ('Leni','Bali','XI TKR2','Pacaran');
echo "nama :".$identitas1->get_nama() . '<br>';
echo "tempatlahir :".$identitas1->get_tempatlahir() . '<br>';
echo "kelas :".$identitas1->get_kelas() . '<br>';
echo "status :".$identitas1->get_status() . '<br>'.'<br>';

$identitas1 = new identitas ('Firman','Padang','XII TSM2','Putus');
echo "nama :".$identitas1->get_nama() . '<br>';
echo "tempatlahir :".$identitas1->get_tempatlahir() . '<br>';
echo "kelas :".$identitas1->get_kelas() . '<br>';
echo "status :".$identitas1->get_status() . '<br>'.'<br>';



?>