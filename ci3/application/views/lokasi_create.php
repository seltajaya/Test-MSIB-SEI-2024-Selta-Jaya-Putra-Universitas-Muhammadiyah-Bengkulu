<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lokasi</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #FF0000, #430000);
            /* Gradient background from red to dark red */
            color: #000;
            /* Set text color to black for contrast */
            padding: 20px;
        }

        .container {
            max-width: 600px;
            background: #fff;
            /* White background for the form container */
            padding: 20px;
            border-radius: 10px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Subtle shadow for better visibility */
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .btn-back {
            margin-top: 10px;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
        }

        .btn-group .btn {
            margin: 0 10px;
        }

        .alert {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 style="text-align: center;">Tambah Lokasi</h1>
        <form action="<?php echo site_url('lokasicontroller/create'); ?>" method="post">
            <div class="form-group">
                <label for="namaLokasi">Nama Lokasi:</label>
                <input type="text" class="form-control" id="namaLokasi" name="namaLokasi" required>
            </div>

            <div class="form-group">
                <label for="negara">Negara:</label>
                <input type="text" class="form-control" id="negara" name="negara" required>
            </div>

            <div class="form-group">
                <label for="provinsi">Provinsi:</label>
                <input type="text" class="form-control" id="provinsi" name="provinsi" required>
            </div>

            <div class="form-group">
                <label for="kota">Kota:</label>
                <input type="text" class="form-control" id="kota" name="kota" required>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo site_url(''); ?>" class="btn btn-secondary btn-back">Kembali</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>