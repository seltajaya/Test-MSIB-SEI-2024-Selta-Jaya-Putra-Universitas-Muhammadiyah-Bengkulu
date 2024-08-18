<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Main View</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to bottom, #FF0000, #430000);
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .container {
            background: #ffffff;
            color: #000;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h1,
        h2 {
            color: #430000;
        }

        .btn-primary {
            background-color: #FF0000;
            border: none;
        }

        .btn-primary:hover {
            background-color: #cc0000;
        }

        .btn-warning {
            background-color: #FFC107;
            border: none;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .table thead th {
            background-color: #430000;
            color: #ffffff;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
        }

        .btn-action {
            margin-right: 5px;
        }

        .btn-group {
            display: flex;
            gap: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Data Lokasi dan Proyek</h1>

        <!-- Lokasi Table -->
        <h2>Lokasi</h2>
        <a href="<?php echo site_url('lokasicontroller/create'); ?>" class="btn btn-primary mb-3">Tambah Lokasi</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Lokasi</th>
                    <th>Negara</th>
                    <th>Provinsi</th>
                    <th>Kota</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($lokasi)): ?>
                    <?php foreach ($lokasi as $item): ?>
                        <tr>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['namaLokasi']; ?></td>
                            <td><?php echo $item['negara']; ?></td>
                            <td><?php echo $item['provinsi']; ?></td>
                            <td><?php echo $item['kota']; ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="<?php echo site_url('lokasicontroller/edit/' . $item['id']); ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?php echo site_url('lokasicontroller/delete/' . $item['id']); ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">No data available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <!-- Proyek Table -->
        <h2>Proyek</h2>
        <a href="<?php echo site_url('proyekcontroller/create'); ?>" class="btn btn-primary mb-3">Tambah Proyek</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Proyek</th>
                    <th>Client</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Pimpinan Proyek</th>
                    <th>Keterangan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($proyek)): ?>
                    <?php foreach ($proyek as $item): ?>
                        <tr>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['namaProyek']; ?></td>
                            <td><?php echo $item['client']; ?></td>
                            <td><?php echo $item['tglMulai']; ?></td>
                            <td><?php echo $item['tglSelesai']; ?></td>
                            <td><?php echo $item['pimpinanProyek']; ?></td>
                            <td><?php echo $item['keterangan']; ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="<?php echo site_url('proyekcontroller/edit/' . $item['id']); ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?php echo site_url('proyekcontroller/delete/' . $item['id']); ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8">No data available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>