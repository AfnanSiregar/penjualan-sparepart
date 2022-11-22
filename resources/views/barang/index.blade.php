@extends('layouts.main')
@section('table')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Barang</h6>
    </div>
    <div class="table-responsive py-3 px-3">
        <div class="pb-3">
            <a class="btn btn-sm btn-success" href="{{ route('barang.create')}}">Tambah Barang</a>
        </div>
        <table class="table table-bordered text-center" width="100%" cellspacing="0" id="dataTable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KODE BARANG</th>
                    <th>NAMA BARANG</th>
                    <th>HARGA JUAL</th>
                    <th>HARGA BELI</th>
                    <th>SATUAN</th>
                    <th>KATEGORI</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1 @endphp
                @foreach($barang as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->kode_barang}}</td>
                    <td>{{$data->nama_barang}}</td>
                    <td>{{$data->harga_jual}}</td>
                    <td>{{$data->harga_beli}}</td>
                    <td>{{$data->satuan}}</td>
                    <td>{{$data->kategori}}</td>
                    <td>
                        <a href="{{route('barang.edit',$data->kode_barang)}}">EDIT</a>
                        <form action="{{route('barang.destroy', $data->kode_barang)}}" method="POST">
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