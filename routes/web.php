<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/kontak', function(){
	return view('kontak');
});

//router parameter
Route::get('/about/{id}',function($a){
	return'ini halaman saya '.$a. '<br>';

});

Route::get('/kantin/{r}/{i}/{d}',function($a,$b,$c){
	return'Saya Pesan '.$a. '<br>'
	      .'Minumnya  '.$b. '<br>'
	       .'Tambah Cemilan '.$c. '<br>';

});

//ROUTER OPTIONAL PARAMETER
Route::get('user/{name?}', function($name='jhon'){
	return'Nama Saya  ' .$name;
});
