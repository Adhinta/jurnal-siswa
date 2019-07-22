<?php

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

/* 
Route::get('home', function () {
    return view('home');
});
*/

Route::prefix('admin')->group(function () {
	Auth::routes();
	Route::get('/','dashboardCont@viewdashboard')->name('dashboard');
	Route::get('/dashboard','dashboardCont@viewdashboard')->name('dashboard');
 
	Route::prefix('pengguna')->group(function () {
    	Route::get('/','penggunaCont@viewpengguna');
		Route::get('msg/{msg}','penggunaCont@viewpenggunaWithMsg');
		Route::get('viewDeletepengguna/{id}','penggunaCont@viewDeletepengguna');
		Route::get('prosesDeletepengguna/{id}','penggunaCont@prosesDeletepengguna');
		Route::get('viewTambahpengguna','penggunaCont@viewTambahpengguna');
		Route::post('prosesTambahpengguna','penggunaCont@prosesTambahpengguna');
	});

	Route::prefix('peminjamantkj')->group(function () {
    	Route::get('/','peminjamantkjCont@viewpeminjamantkj');
		Route::get('msg/{msg}','peminjamantkjCont@viewpeminjamantkjWithMsg');
		Route::get('viewTambahpeminjamantkj','peminjamantkjCont@viewTambahpeminjamantkj');
		Route::get('viewDetailpeminjamantkj/{id}','peminjamantkjCont@viewDetailpeminjamantkj');
		Route::get('viewEditpeminjamantkj/{id}','peminjamantkjCont@viewEditpeminjamantkj');
		Route::get('viewDeletepeminjamantkj/{id}','peminjamantkjCont@viewDeletepeminjamantkj');
		Route::post('prosesTambahpeminjamantkj','peminjamantkjCont@prosesTambahpeminjamantkj');
		Route::post('prosesEditpeminjamantkj','peminjamantkjCont@prosesEditpeminjamantkj');
		Route::get('prosesDeletepeminjamantkj/{id}','peminjamantkjCont@prosesDeletepeminjamantkj');
	});
	
	
	Route::prefix('prestasisiswa')->group(function () {
    	Route::get('/','prestasisiswaCont@viewprestasisiswa');
		Route::get('msg/{msg}','prestasisiswaCont@viewprestasisiswaWithMsg');
		Route::get('viewTambahprestasisiswa','prestasisiswaCont@viewTambahprestasisiswa'); 
		Route::get('viewDetailprestasisiswa/{id_jurnal}','prestasisiswaCont@viewDetailprestasisiswa');
		Route::get('viewEditprestasisiswa/{id_jurnal}','prestasisiswaCont@viewEditprestasisiswa');
		Route::get('viewDeleteprestasisiswa/{id_jurnal}','prestasisiswaCont@viewDeleteprestasisiswa');
		Route::post('prosesTambahprestasisiswa','prestasisiswaCont@prosesTambahprestasisiswa');
		Route::post('prosesEditprestasisiswa','prestasisiswaCont@prosesEditprestasisiswa');
		Route::get('prosesDeleteprestasisiswa/{id_jurnal}','prestasisiswaCont@prosesDeleteprestasisiswa');
	});


	Route::prefix('asettkj')->group(function () {
    	Route::get('/','asettkjCont@viewasettkj');
		Route::get('msg/{msg}','asettkjCont@viewasettkjWithMsg');
		Route::get('viewTambahasettkj','asettkjCont@viewTambahasettkj');
		Route::get('viewDetailasettkj/{id_tkj}','asettkjCont@viewDetailasettkj');
		Route::get('viewEditasettkj/{id_tkj}','asettkjCont@viewEditasettkj');
		Route::get('viewDeleteasettkj/{id_tkj}','asettkjCont@viewDeleteasettkj');
		Route::post('prosesTambahasettkj','asettkjCont@prosesTambahasettkj');
		Route::post('prosesEditasettkj','asettkjCont@prosesEditasettkj');
		Route::get('prosesDeleteasettkj/{id_tkj}','asettkjCont@prosesDeleteasettkj');
	});
	
	
    Route::prefix('daftarlomba')->group(function () {
    	Route::get('/','daftarlombaCont@viewdaftarlomba');
		Route::get('msg/{msg}','daftarlombaCont@viewdaftarlombaWithMsg');
		Route::get('viewTambahdaftarlomba','daftarlombaCont@viewTambahdaftarlomba');
		Route::get('viewDetaildaftarlomba/{id_guru}','daftarlombaCont@viewDetaildaftarlomba');
		Route::get('viewEditdaftarlomba/{id_guru}','daftarlombaCont@viewEditdaftarlomba');
		Route::get('viewDeletedaftarlomba/{id_guru}','daftarlombaCont@viewDeletedaftarlomba');
		Route::post('prosesTambahdaftarlomba','daftarlombaCont@prosesTambahdaftarlomba');
		Route::post('prosesEditdaftarlomba','daftarlombaCont@prosesEditdaftarlomba');
		Route::get('prosesDeletedaftarlomba/{id_guru}','daftarlombaCont@prosesDeletedaftarlomba');
    });

});


Route::get('/','anggotaCont@viewBeranda');
Route::prefix('anggota')->group(function () {
	Route::get('/','anggotaCont@viewBeranda');
	Route::get('artikel','anggotaCont@viewArtikel');
	Route::get('artikel/msg/{msg}','anggotaCont@viewArtikelWithMsg');
	Route::post('artikel/cari','anggotaCont@prosesCari');
	Route::get('artikel/konfirmasi/{id}','anggotaCont@viewKonfirmasi');
	Route::post('artikel/prosesKonfirmasi','anggotaCont@prosesKonfirmasi');
	Route::get('peserta','anggotaCont@viewPeserta');
	Route::get('peserta/daftar','anggotaCont@viewTambahPeserta');
	Route::post('peserta/prosesTambahPeserta','anggotaCont@prosesTambahPeserta');
	Route::get('peserta/msg/{msg}','anggotaCont@viewPesertaWithMsg');
 
});


//Route::get('/admin', 'HomeController@index')->name('home');
