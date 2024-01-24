<!DOCTYPE html>
<html>

<head>
    <title>Jadwal Rapat dan Kegiatan</title>
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
            <th>Tanggal</th>
            <th>Mulai</th>
            <th>Selesai</th>
            <th>Agenda</th>
            <th>Ruangan</th>
            <th>Bidang</th>
            <th>Jumlah Peserta</th>
            <th>Status Ruangan</th>
        </tr>
        <?php
        // koneksi database
        $koneksi = mysqli_connect("localhost", "root", "", "projek-pkl-pln");

        // menampilkan data
        $data = mysqli_query($koneksi, "select * from jadwal_rapat");
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td style='text-align: center;'>
                    <?php echo $d['id'] ?>
                </td>
                <td>
                    <?php echo $d['tanggal']; ?>
                </td>
                <td>
                    <?php echo $d['mulai']; ?>
                </td>
                <td>
                    <?php echo $d['selesai']; ?>
                </td>
                <td>
                    <?php echo $d['agenda']; ?>
                </td>
                <td>
                    <?php echo $d['ruangan']; ?>
                </td>
                <td>
                    <?php echo $d['bidang']; ?>
                </td>
                <td>
                    <?php echo $d['jumlah_peserta']; ?>
                </td>
                <td>
                    <?php echo $d['status_ruangan']; ?>
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