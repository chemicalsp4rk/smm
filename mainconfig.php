<?php
date_default_timezone_set('Asia/Jakarta');
ini_set('memory_limit', '128M');

/* CONFIG */
$config['web'] = array(
    'maintenance' => 0, // 1 = yes, 0 = no
    'short_title' => 'Payment Otomatis',
    'title' => 'Smm Panel Indonesia Termurah - Terbaik',
    'meta' => array(
        'description' => 'Payment Otomatis - SMM Panel indonesia adalah sebuah website penyedia layanan sosial media terlengkap, termurah, dan berkualitas.',
        'keywords' => 'smm panel',
        'author' => 'Payment Otomatis  - SMM Panel indonesia'
    ),
    'base_url' => 'https://boostsmmindo.com/',
    'register_url' => 'https://boostsmmindo.com/auth/register.php'
);

$config['register'] = array(
    'price' => array(
        'member' => 50000,
        'reseller' => 300000,
    ),
    'bonus' => array(
        'member' => 50000,
        'reseller' => 300000,
    )
);

$config['db'] = array(
    'host' => 'localhost',
    'name' => '✨Matz - ZenixStore.id',
    'username' => 'zenix_91',
    'password' => 'Ramahardz1!'
);
/* END - CONFIG */

// SETTING DEPOSIT OTOMATIS
$url_payment = "https://paylink.co.id/api/live/create";
$apikey = "ax307qVdoXo5oMsf6i1jeY0OKuoCkvYq"; // ganti dengan apikey paylink.co.id kamu
$secret_key = "FtGSNcmGueMOxcEs0PAmf9jhvbxgidlFhRbII6ZgLmS8NsoNWy6P"; // ganti dengan secret_key paylink.co.id kamu
$url_callback = "https://boostsmmindo.com/cron/callback_payment.php"; // ganti namadomainkamu saja dan setting juga url callback di dashboard paylink.co.id pada menu merchant
$redirect_url = "https://boostsmmindo.com/deposit/history.php"; // ganti namadomainkamu saja


require 'lib/db.php';
require 'lib/model.php';
require 'lib/function.php';

session_start();
$model = new Model();
