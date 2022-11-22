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

                    <form action="{{route('penjualan.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>NO FAKTUR</label>
                            <input type="text" name="no_faktur" readonly value="{{ $kd }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>NAMA KONSUMEN</label>
                            <input type="text" name="nama_konsumen" placeholder="Masukkan Nama Konsumen" class="form-control" required>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label>TANGGAL FAKTUR</label>
                                <input type="text" onfocus="(this.type='date')" placeholder="Pilih Tanggal Faktur" name="tgl_faktur" class="form-control form-select-lg mb-3" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                            </div>
                            <div class="col-sm-6">
                                <label>KODE BARANG</label>
                                <select class="form-control select form-select-lg mb-3" id="select-barang" aria-label="form-select-lg" name="kode_barang" required>
                                    <option disabled selected>Pilih</option>
                                    @foreach($barang as $data)
                                    <option value="{{$data->kode_barang}}" id="{{ $data->kode_barang }}">{{$data->kode_barang}} - {{$data->nama_barang}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label>JUMLAH</label>
                                <input type="number" placeholder="Masukkan Jumlah" id="jumlah-barang" onkeyup="cek(this)" name="jumlah" class="form-control form-select-lg mb-3" required>
                            </div>
                            <div class="col-sm-6">
                                <label>HARGA SATUAN</label>
                                <p id="harga-satuan" class="form-control"></p>
                                <input type="hidden" name="harga_satuan" id="harga-satuan-cek">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>HARGA TOTAL</label>
                            <p id="harga-total" class="form-control mb-3"></p>
                            <input type="hidden" name="harga_total" id="harga-total-cek">
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
    <script src="{{ asset('SBAdmin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('SBAdmin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('SBAdmin/js/demo/datatables-demo.js') }}"></script>
    <script type="text/javascript">
        $("#select-barang").change(function() {
            var kode_barang = $(this).children("option:selected").attr("id");
            $.ajax({
                type: "GET",
                url: "get-barang/" + kode_barang,
                dataType: "json",
                success: function(response) {
                    $("#harga-satuan").html(response);
                    $("#harga-satuan-cek").val(response);
                }
            });
        });

        function cek(jumlah) {
            var harga = $("#harga-satuan-cek").val();
            var jumlah_bayar = harga * jumlah.value;
            console.log(jumlah_bayar);
            $("#harga-total").html(jumlah_bayar);
            $("#harga-total-cek").val(jumlah_bayar);
        }
        // const jumlah = document.getElementById('jumlah-barang');

        // jumlah.onkeyup('jumlah', cekJumlah);

        // function cekJumlah(e) {
        //     console.log(e);
        // }
        // function myFunction(jumlah) {
        //     alert(jumlah);
        // }
    </script>

</body>

</html>