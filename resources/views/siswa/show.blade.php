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
                                <td><input type="number" class="form-control  mb-2"name="nis" value="{{ $siswa->nis }}" disabled></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>: </td>
                                <td><input type="text" class="form-control mb-2" name="nama"  value="{{ $siswa->nama }}" disabled></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>: </td>
                                   <td><input type="text" class="form-control  mb-2"name="nis" value="{{ $siswa->jenis_kelamin }}" disabled></td>     
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>: </td>
                                   <td><input type="text" class="form-control  mb-2"name="nis" value="{{ $siswa->kelas }}" disabled></td>    
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                               <td><a href="{{ route('siswa.index') }}"class="btn btn-primary">Back</a></td>
                            </tr>
                        </table>
                    </form>     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
