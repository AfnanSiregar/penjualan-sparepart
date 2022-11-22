@extends('layouts.main')
@section('table')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Penjualan</h6>
    </div>
    <div class="table-responsive py-3 px-3">
        <div class="pb-3">
            <a class="btn btn-sm btn-success" href="{{ route('penjualan.create')}}">Tambah Transaksi</a>
        </div>
        <table class="table table-bordered text-center" width="100%" cellspacing="0" id="dataTable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TANGGAL FAKTUR</th>
                    <th>NO FAKTUR</th>
                    <th>NAMA KONSUMEN</th>
                    <th>KODE BARANG</th>
                    <th>JUMLAH</th>
                    <th>HARGA SATUAN</th>
                    <th>HARGA TOTAL</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1 @endphp
                @foreach($penjualan as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->tgl_faktur}}</td>
                    <td>{{$data->no_faktur}}</td>
                    <td>{{$data->nama_konsumen}}</td>
                    <td>{{$data->kode_barang}}</td>
                    <td>{{$data->jumlah}}</td>
                    <td>{{$data->harga_satuan}}</td>
                    <td>{{$data->harga_total}}</td>
                    <td>
                        <a href="{{route('penjualan.edit',$data->no_faktur)}}">EDIT</a>
                        <form action="{{route('penjualan.destroy', $data->no_faktur)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-link text-danger" value="HAPUS">
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection