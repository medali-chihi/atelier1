
<?php


use Illuminate\Support\Facades\Route;

Route::get('/etudiant', function () {
    $nom ='medali chihi';
    return view('etudiant',compact('nom'));
});
?>
