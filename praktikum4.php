<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4 || 105218032</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <style>
        body {
            background: #2bb6ae;
        }

        h1 {
            font-family: 'Bebas Neue';
            text-align: center;
            letter-spacing: 4px;


        }

        th {
            background: #ff9999;
        }

        table {
            border-radius: 5px;
        }

        .num {
            background: #ffcccc;
        }

        .tcon {
            background: #ffe6e6;
        }
    </style>
</head>

<body>
    <div id="header">
        <h1>
            KOPITAGRAM
        </h1>
    </div>
    <div id="content">

        <?php

        class pegawai
        {
            private $nama;
            private $ttl;
            private $jk;

            function __construct($nama, $ttl, $jk)
            {
                $this->nama = $nama;
                $this->ttl = $ttl;
                $this->jk = $jk;
            }
            function get_nama()
            {
                return $this->nama;
            }
            function get_ttl()
            {
                return $this->ttl;
            }
            function get_jk()
            {
                return $this->jk;
            }
        }

        class pt extends pegawai
        {
            private $lk;
            private $stat;
            private $gaji;

            public function set_lk($lk)
            {
                if ($lk == 'Junior') {
                    $this->gaji = 2000000 / 2;
                } elseif ($lk == 'Amateur') {
                    $this->gaji = 3500000 / 2;
                } else {
                    $this->gaji = 5000000 / 2;
                }

                $this->lk = $lk;
            }

            public function get_lk()
            {
                return $this->lk;
            }

            public function set_stat($stat)
            {
                $this->stat = $stat;
            }

            public function get_stat()
            {
                return $this->stat;
            }

            public function get_gaji()
            {
                return $this->gaji;
            }
        }
        class ft extends pegawai
        {
            private $lk;
            private $stat;
            private $gaji;

            public function set_lk($lk)
            {
                if ($lk == 'Junior') {
                    $this->gaji = 2000000;
                } elseif ($lk == 'Amateur') {
                    $this->gaji = 3500000;
                } else {
                    $this->gaji = 5000000;
                }

                $this->lk = $lk;
            }

            public function get_lk()
            {
                return $this->lk;
            }

            public function set_stat($stat)
            {
                $this->stat = $stat;
            }

            public function get_stat()
            {
                return $this->stat;
            }

            public function get_gaji()
            {
                return $this->gaji;
            }
        }

        $sakti = new ft('Sakti', 'Jakarta, 6 Agustus 2000', 'Laki-laki');
        $sakti->set_lk('Senior');
        $sakti->set_stat('Fulltime');
        $farhan = new ft('Farhan', 'Jakarta, 21 September 2000', 'Laki-laki');
        $farhan->set_lk('Amateur');
        $farhan->set_stat('Parttime');
        $deo = new ft('Deo', 'Depok, 1 Desember 2000', 'Laki-laki');
        $deo->set_lk('Junior');
        $deo->set_stat('Fulltime');
        $jeha = new ft('Jeha', 'Jakarta, 12 Juli 2000', 'Laki-laki');
        $jeha->set_lk('Junior');
        $jeha->set_stat('Parttime');
        $sara = new ft('Sara', 'Pematangsiantar, 26 Januari 2000', 'Perempuan');
        $sara->set_lk('Senior');
        $sara->set_stat('Parttime');
        $regita = new ft('Regita', 'Pringsewu, 23 Juli 2001', 'Perempuan');
        $regita->set_lk('Junior');
        $regita->set_stat('Parttime');

        $karyawan = array($sakti, $farhan, $deo, $jeha, $sara, $regita);

        ?>
        <table align="center" border="5">
            <tr>
                <th>
                    No
                </th>
                <th>
                    Nama
                </th>
                <th>
                    Tempat Tanggal Lahir
                </th>
                <th>
                    Jenis Kelamin
                </th>
                <th>
                    Level Karyawan
                </th>
                <th>
                    Status
                </th>
                <th>
                    Gaji Karyawan
                </th>
            </tr>
            <?php
            foreach ($karyawan as $index => $value) {
            ?>
                <tr>
                    <td class="num">
                        <?= $index + 1; ?>
                    </td>
                    <td class="tcon">
                        <?= $value->get_nama(); ?>
                    </td>
                    <td class="tcon">
                        <?= $value->get_ttl(); ?>
                    </td>
                    <td class="tcon">
                        <?= $value->get_jk(); ?>
                    </td>
                    <td class="tcon">
                        <?= $value->get_lk(); ?>
                    </td>
                    <td class="tcon">
                        <?= $value->get_stat(); ?>
                    </td>
                    <td class="tcon">
                        <?= $value->get_gaji(); ?>
                    </td>
                </tr>
            <?php

            }
            ?>
        </table>
    </div>


</body>

</html>