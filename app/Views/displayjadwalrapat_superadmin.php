<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwalrapat</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: sans-serif;
        }

        body {
            background-image: url('<?php echo base_url('material_dashboard/assets/img/plndepan3.jpeg'); ?>');
            background-size: cover;
            background-color: rgba(0, 0, 50, 0.7);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            position: relative;
            /* Tambahkan posisi relatif */
        }

        .meeting-details {
            background: rgba(0, 0, 0, 0.4);
            padding: 20px;
            border-radius: 14px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 80%;
        }

        .meeting-details .left-column,
        .meeting-details .right-column {
            flex: 1;
            width: 100%;
            padding: 8px;
        }

        .meeting-details .left-column table,
        .meeting-details .right-column table {
            width: 100%;
        }

        .meeting-details h2 {
            text-align: center;
            margin-top: 0;
        }

        .meeting-details table th,
        .meeting-details table td {
            border: 0.1px solid white;
            padding: 10px;
            text-align: left;
            /* border-radius: 8px; */
        }

        .meeting-details table th {
            background-color: rgba(255, 255, 255, 0.1);
            /* border-radius: 8px; */
        }

        .meeting-details .left-column table th,
        .meeting-details .left-column table td {
            vertical-align: top;
            border-radius: 10px;
        }

        .fullscreen-button {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.0);
            border: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            z-index: 999;
            font-size: 10px;
        }
    </style>
    <link rel="icon" type="image/png" href="<?php echo base_url('material_dashboard/assets/img/LogoPln.png'); ?>">
</head>

<body>

<div class="meeting-details">
    <h2>Jadwal Rapat dan agenda</h2>
    <div class="left-column">
        <table>
            <tr>
                <th id="current-time" colspan="2" style="font-size: 24px;"></th>
            </tr>
            <tr>
                <th id="current-date" colspan="2"></th>
            </tr>
        </table>
    </div>
    <div class="right-column">
        <table>
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Agenda</th>
                    <th>Ruangan</th>
                    <th>Bidang</th>
                    <th>Jumlah Peserta</th>
                    <th>Vendor</th>
                    <th>Status Ruangan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jadwal_rapat as $rapat): ?>
                    <tr>
                        <td><?= date('d-m-Y', strtotime($rapat['tanggal'])); ?></td>
                        <td><?= date('H:i', strtotime($rapat['mulai'])); ?></td>
                        <td><?= date('H:i', strtotime($rapat['selesai'])); ?></td>
                        <td><?= $rapat['agenda']; ?></td>
                        <td><?= $rapat['ruangan']; ?></td>
                        <td><?= $rapat['bidang']; ?></td>
                        <td><?= $rapat['jumlah_peserta']; ?></td>
                        <td><?= $rapat['vendor']; ?></td>
                        <td><?= $rapat['status_ruangan']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div>
        <button class="fullscreen-button" onclick="toggleFullScreen()">Full Screen</button>
    </div>
    </div>
    
</div>

    
    <script>
        // Full layar
        function toggleFullScreen() {
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen();
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
            }
        }

        //waktu
        function updateCurrentDateTime() {
            const currentDateElement = document.getElementById('current-date');
            const currentTimeElement = document.getElementById('current-time');
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            const now = new Date();
            const dayOfWeek = days[now.getDay()];
            const dayOfMonth = now.getDate();
            const month = months[now.getMonth()];
            const year = now.getFullYear();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            currentDateElement.textContent = `${dayOfWeek}, ${dayOfMonth} ${month} ${year}`;
            currentTimeElement.textContent = `${hours}:${minutes}:${seconds}`;
        }

        // tambah detik
        updateCurrentDateTime();
        setInterval(updateCurrentDateTime, 1000);
    </script>
</body>

</html>