<!DOCTYPE html>
<html>

<head>
    <title>Jadwal Data Tamu</title>
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
            <th>Nama tamu</th>
            <th>Tanggal dan waktu</th>
            <th>Asal Instansi</th>
            <th>No Telepon</th>
        </tr>
        <?php
        // koneksi database
        $koneksi = mysqli_connect("localhost", "root", "", "projek-pkl-pln");

        // menampilkan data
        $data = mysqli_query($koneksi, "select * from tamu");
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td style='text-align: center;'>
                    <?php echo $d['id'] ?>
                </td>
                <td>
                    <?php echo $d['nama_tamu']; ?>
                </td>
                <td>
                    <?php echo $d['tanggal_waktu']; ?>
                </td>
                <td>
                    <?php echo $d['asal_instansi']; ?>
                </td>
                <td>
                    <?php echo $d['no_telepon']; ?>
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