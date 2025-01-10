@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('PENDAFTARAN PPDB SMK ASSALAAM') }}</div>
                <form action="{{ route('ppdb.update', $ppdb->id) }}"  method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="card-body">
                <table class="table">
                   <tr>
                        <td>Nama Lengkap</td>
                        <td>: </td>
                        <td><input type="text" class="form-control  mb-2" name="nama_lengkap" value="{{ $ppdb->nama_lengkap}}" disabled></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: </td>
                        <td>
                            <input type="text" class="form-control  mb-2" name="jenis_kelamin" value="{{ $ppdb->jenis_kelamin}}" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>: </td>
                        <td>
                            <input type="text" class="form-control  mb-2" name="agama" value="{{ $ppdb->agama}}" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: </td>
                        <td><input type="textarea" class="form-control  mb-2" name="alamat" value="{{ $ppdb->alamat}}" disabled></td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>: </td>
                        <td><input type="number" class="form-control  mb-2" name="telepon" value="{{ $ppdb->telepon}}"disabled ></td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>: </td>
                        <td><input type="text" class="form-control  mb-2" name="asal_sekolah" value="{{ $ppdb->asal_sekolah}}" disabled></td>
                    </tr>
                     <tr>
                         <td></td>
                        <td></td>
                        <td><a href="{{ route('ppdb.index') }}"class="btn btn-primary">Back</a></td>
                    </tr>
                </table>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
