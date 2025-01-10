<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswasConttroller;
use App\Http\Controllers\PpdbsController;
use App\Models\Barang;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return 'WELCOMEEEEEEEEEEEEE';
});     

Route::get('/home', function(){
    return 'HOMEEEEEEEEEEEEEEEE';
});

Route::get('/contact', function(){
    return 'KONTAKKKKKKKKKKKKKKKKKK';
});


Route::get('/tes/{a}/{b}/{c}/{d}/{e}', function($nama, $tl, $jk, $agama, $alamat){
    return 
        'Nama : '. $nama . 
        '<br>Tempat Lahir : '. $tl.
        '<br>Jenis Kelamin : '. $jk.
        '<br>Agama : '. $agama.
        '<br>Alamat : '. $alamat;
});

Route::get('/hitung/{b1}/{b2}', function ($b1, $b2) {
    $hasil = $b1 + $b2;
    return
        'Bilangan 1 : ' . $b1.
        '<br>Bilangan 2 : '. $b2.
        '<br>Hasil : ' . $hasil;
});

Route::get('/latihan1/{nama2}/{telpon2}/{jenisbarang2}/{namabarang2}/{jumlah2}/{pembayaran2}', function($nama, $telp, $jb, $nb, $jumlah, $pembayaran){

        if($jb=="handphone"){
            if($nb=="samsung"){
                $harga = 5000000;
            }elseif ($nb == "poco") {
                $harga = 3000000;
            }elseif ($nb == "iphone") {
                $harga = 3000000;
            }else{
                echo "belum milih";
            }
        }elseif($jb=="laptop"){
            if($nb=="lenovo"){
                $harga = 4000000;
            }elseif($nb=="acer"){
                $harga = 8000000;
            }elseif($nb=="macbook"){
                    $harga = 20000000;
            }else{
                echo "belum milih";
            }
        }elseif($jb=="tv"){
            if($nb=="toshiba"){
                $harga = 5000000;
            }elseif($nb=="samsung"){
                $harga = 8000000;
            }elseif($nb=="lg"){
                $harga = 10000000;
            }else{
                echo"Belum Milih";
            }
        }

        if($pembayaran=="transfer"){
            $potongan = 50000;
        }elseif($pembayaran=="cash"){
            $potongan = 0;
        }else{
            echo "gadapet potongan";
        }

        $total = $harga * $jumlah;  

       if ($total > 10000000) {
        $cahsback = 500000;
        } else {
            $cahsback = 0;
        }

    $totalp = $total - $cahsback - $potongan;



    return
        'Nama Pembeli : ' .$nama.
        '<br>Telepon : '. $telp.
        '<br>-------------------------------------------------------------------------------------------'.
        '<br>Jenis Barang : '. $jb.
        '<br>Nama Barang : ' .$nb.
        '<br>Harga : ' .$harga.
        '<br>Jumlah : ' .$jumlah.
        '<br>-------------------------------------------------------------------------------------------'.
        '<br>TOTAL : ' .$total.
        '<br>Cashback : '.$cahsback.
        '<br>Pembayaran : '.$pembayaran.
        '<br>Potongan : ' . $potongan.
        '<br>-------------------------------------------------------------------------------------------'.
        '<br>Total Pembayaran : ' .$totalp;
        ;
});

// Route::get('/siswa', function(){

//     $data_siswa = ['regita', 'hana', 'dhea', 'abel', 'kiki'];

//     return view('tampil', compact('data_siswa'));

// });

Route::get('/post',[PostController::class,'menampilkan']);
Route::get('/barang',[PostController::class,'menampilkan2']);



// berdasarkan id
// Route::get('/post', function () {
//     $post = Post::where('id', 1)->get();
//     return view('tampil_post', compact('post'));

// });

// berdasarkan kata
// Route::get('/post', function () {
//     $post = Post::where('title', 'LIKE', '%tips %')->get();
//     return view('tampil_post', compact('post'));

// });



// Route::get('/barang', function () {

//     $barang = Barang::all();
//     return view('tampil_barang', compact('barang'));

// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// CRUD
Route::resource('siswa', SiswasConttroller::class);

Route::resource('ppdb', PpdbsController::class);
