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
                        <td><input type="text" class="form-control  mb-2" name="nama_lengkap" value="{{ $ppdb->nama_lengkap}}"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: </td>
                        <td>
                            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                            <input type="radio" name="jenis_kelamin" value="Laki-Laki" >Laki Laki
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>: </td>
                        <td>
                            <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="agama" value="{{ $ppdb->nama_lengkap}} >
                                <option selected>PILIH AGAMA</option>
                                <option value="ISLAM">ISLAM</option>
                                <option value="KRISTEN">KRISTEN</option>
                                <option value="KATOLIK">KATOLIK</option>
                                <option value="KONGHUCU">KONGHUCU</option>
                                <option value="BUDHA">BUDHA</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: </td>
                        <td><input type="textarea" class="form-control  mb-2" name="alamat" value="{{ $ppdb->alamat}}"></td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>: </td>
                        <td><input type="number" class="form-control  mb-2" name="telepon" value="{{ $ppdb->telepon}}" ></td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>: </td>
                        <td><input type="text" class="form-control  mb-2" name="asal_sekolah" value="{{ $ppdb->asal_sekolah}}" ></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button type="submit" class="btn btn-primary float-end" name="save">Save</button></td>
                    </tr>
                </table>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
