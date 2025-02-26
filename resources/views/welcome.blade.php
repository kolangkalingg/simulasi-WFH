<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        /* Background Gradient */
        body {
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            min-height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Alternatif Background dengan Gambar */
        /*
        body {
            background: url('https://via.placeholder.com/1920x1080') no-repeat center center/cover;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        */

        /* Styling untuk Container */
        .container {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 90%;
            max-width: 1200px;
        }

        /* Styling untuk Tabel */
        .table {
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table thead th {
            background-color: #f8f9fa;
            color: #333;
        }

        /* Styling untuk Tombol */
        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        /* Styling untuk Modal */
        .modal-content {
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            border-radius: 10px;
        }

        .modal-header {
            background-color: #007bff;
            color: #fff;
            border-bottom: none;
        }

        .modal-footer {
            border-top: none;
        }

        /* Styling untuk Sorting Table */
        .table-sortable>thead>tr>th.sort {
            cursor: pointer;
            position: relative;
        }

        .table-sortable>thead>tr>th.sort:after {
            content: ' ';
            position: absolute;
            height: 0;
            width: 0;
            right: 10px;
            top: 16px;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #ccc;
            border-bottom: 0px solid transparent;
        }

        .table-sortable>thead>tr>th.sort.asc:after {
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 0px solid transparent;
            border-bottom: 5px solid #333;
        }

        .table-sortable>thead>tr>th.sort.desc:after {
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #333;
            border-bottom: 5px solid transparent;
        }

        .table-sortable>thead>tr>th:hover:after {
            border-top: 5px solid #888;
        }
    </style>
</head>
<body>
    <div class="container">
        @livewire('counter')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>