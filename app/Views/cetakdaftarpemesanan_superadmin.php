<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76"
    href="<?php echo base_url('material_dashboard/assets/img/LogoPln.png'); ?>">
  <link rel="icon" type="image/png" href="<?php echo base_url('material_dashboard/assets/img/LogoPln.png'); ?>">
    <title>Data daftar pemesanan</title>
</head>

<body>
    <style type="text/css">
        body {
            font-family: sans-serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        a {
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }

        .tengah {
            text-align: center;
        }
    </style>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Driver</th>
            <th>Nomor Polisi</th>
            <th>Tanggal berangkat</th>
            <th>Tanggal kedatangan</th>
            <th>Asal</th>
            <th>Tujuan</th>
            <th>Keperluan</th>
            <th>status</th>
        </tr>
        <?php
        // koneksi database
        $koneksi = mysqli_connect("localhost", "root", "", "fiks-projek-pkl");

        // menampilkan data
        $data = mysqli_query($koneksi, "select * from daftar_pemesanan");
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td style='text-align: center;'>
                    <?php echo $d['id'] ?>
                </td>
                <td>
                    <?php echo $d['nama_driver']; ?>
                </td>
                <td>
                    <?php echo $d['nomor_polisi']; ?>
                </td>
                <td>
                    <?php echo $d['tanggal_berangkat']; ?>
                </td>
                <td>
                    <?php echo $d['tanggal_kedatangan']; ?>
                </td>
                <td>
                    <?php echo $d['asal']; ?>
                </td>
                <td>
                    <?php echo $d['tujuan']; ?>
                </td>
                <td>
                    <?php echo $d['keperluan']; ?>
                </td>
                <td>
                    <?php echo $d['status']; ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>