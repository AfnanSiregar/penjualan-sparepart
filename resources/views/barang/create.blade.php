<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Create New Data</title>
    <link href="{{ asset('SBAdmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('SBAdmin/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <section class="ftco-section p-md-5 text-light">
            <div class="wrap">
                <div class="p-4 p-md-5 bg-dark">
                    <form action="{{route('barang.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>KODE BARANG</label>
                            <input type="text" name="kode_barang" readonly value="{{ $kd }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>NAMA BARANG</label>
                            <input type="text" name="nama_barang" placeholder="Masukkan Nama Barang" class="form-control" required>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label>HARGA JUAL</label>
                                <input type="number" placeholder="Masukkan Harga Jual" name="harga_jual" class="form-control mb-3" required>
                            </div>
                            <div class="col-sm-6">
                                <label>HARGA BELI</label>
                                <input type="number" placeholder="Masukkan Harga Beli" name="harga_beli" class="form-control mb-3" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>SATUAN</label>
                            <select name="satuan" class="form-control">
                                <option value="DUS">DUS</option>
                                <option value="PCS">PCS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>KATEGORI</label>
                            <input type="text" name="kategori" placeholder="Masukkan Kategori" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-success">SIMPAN</button>
                        <input type="button" value="Kembali" class="btn btn-danger" onclick="history.back()">
                    </form>
                </div>
            </div>
        </section>

    </div>

    <script src="{{ asset('SBAdmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('SBAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('SBAdmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('SBAdmin/js/sb-admin-2.min.js') }}"></script>
</body>

</html>