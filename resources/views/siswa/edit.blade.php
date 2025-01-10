@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Ubah Data Siswa') }} </div>
                <div class="card-body">
                    <form action="{{ route('siswa.update', $siswa->id) }}"  method="post" enctype="multipart/form-data">
                        @csrf           
                        @method('PUT')
                    <table align="center" width="100%">
                            <tr>
                                <td>NIS</td>
                                <td>: </td>
                                <td><input type="number" class="form-control  mb-2"name="nis" value="{{ $siswa->nis }}"></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>: </td>
                                <td><input type="text" class="form-control mb-2" name="nama"  value="{{ $siswa->nama }}"></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>: </td>
                                <td>
                                    <input type="radio" name="jenis_kelamin" value="Perempuan" >Perempuan
                                    <input type="radio" name="jenis_kelamin" value="Laki-Laki" >Laki Laki
                                </td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>: </td>
                                <td>
                                    <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="kelas">
                                        <option selected>PILIH KELAS</option>
                                        <option value="XI RPL 1">XI RPL 1</option>
                                        <option value="XI RPL 2">XI RPL 2</option>
                                        <option value="XI RPL 3">XI RPL 3</option>
                                    </select>
                                </td>
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
