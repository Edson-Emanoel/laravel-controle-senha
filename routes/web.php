<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    // testar a conexão

try{
    DB::connection()->getPdo();
    echo "Conexão com banco de dados Success!  ";
}catch(Exception $e){
    echo "Não conectou Error!";
};

    echo "QueuSystem";
});

Route::get('/test', function() {
    return view('teste');
});
