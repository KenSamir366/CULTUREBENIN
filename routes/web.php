<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContenuController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\LangueController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ParlerController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\TypecontenuController;
use App\Http\Controllers\TypemediaController;
use App\Http\Controllers\PaymentController;

// ----------------- PAGE D'ACCUEIL -----------------
Route::get('/', function(){
    return view('front.accueil');
});
Route::get('/dashboard', [PageController::class, 'index'])->name('dashboard');

// ----------------- UTILISATEURS WEB -----------------
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

// ----------------- CONTENUS WEB -----------------



// Routes Web (existent déjà)
Route::get('/contenus', [ContenuController::class, 'index'])->name('contenus.index');
Route::get('/contenus/create', [ContenuController::class, 'create'])->name('contenus.create');
Route::post('/contenus', [ContenuController::class, 'store'])->name('contenus.store');
Route::get('/contenus/{contenu}', [ContenuController::class, 'show'])->name('contenus.show');
Route::get('/contenus/{contenu}/edit', [ContenuController::class, 'edit'])->name('contenus.edit');
Route::put('/contenus/{contenu}', [ContenuController::class, 'update'])->name('contenus.update');
Route::delete('/contenus/{contenu}', [ContenuController::class, 'destroy'])->name('contenus.destroy');

// Routes API (modifiez-les comme suit)
Route::get('api/contenus', [ContenuController::class, 'indexApi']);
Route::get('api/contenus/{id}', [ContenuController::class, 'showApi']);
Route::post('api/contenus', [ContenuController::class, 'storeApi']);
Route::put('api/contenus/{id}', [ContenuController::class, 'updateApi']);
Route::delete('api/contenus/{id}', [ContenuController::class, 'destroyApi']);



// ----------------- MÉDIAS WEB -----------------
// ----------------- MÉDIAS WEB -----------------
Route::get('/medias', [MediaController::class, 'index'])->name('medias.index');
Route::get('/medias/create', [MediaController::class, 'create'])->name('medias.create');
Route::post('/medias', [MediaController::class, 'store'])->name('medias.store');
Route::get('/medias/{media}', [MediaController::class, 'show'])->name('medias.show');
Route::get('/medias/{media}/edit', [MediaController::class, 'edit'])->name('medias.edit');
Route::put('/medias/{media}', [MediaController::class, 'update'])->name('medias.update');
Route::delete('/medias/{media}', [MediaController::class, 'destroy'])->name('medias.destroy');

// ----------------- COMMENTAIRES WEB -----------------
Route::get('/commentaires', [CommentaireController::class, 'index'])->name('commentaires.index');

// ----------------- TYPES DE CONTENU WEB -----------------
Route::get('/typecontenus', [TypecontenuController::class, 'indexWeb'])->name('typecontenus.index');

// ----------------- TYPES DE MÉDIA WEB -----------------
Route::get('/typemedias', [TypemediaController::class, 'index'])->name('typemedias.index');

// ----------------- RÔLES WEB -----------------

    Route::get('/', [RoleController::class, 'index'])->name('index');
    Route::get('/create', [RoleController::class, 'create'])->name('create');
    Route::post('/', [RoleController::class, 'store'])->name('store');
    Route::get('/{role}', [RoleController::class, 'show'])->name('show');
    Route::get('/{role}/edit', [RoleController::class, 'edit'])->name('edit');
    Route::put('/{role}', [RoleController::class, 'update'])->name('update');
    Route::delete('/{role}', [RoleController::class, 'destroy'])->name('destroy');


// ----------------- LANGUES WEB -----------------
Route::get('/langues', [LangueController::class, 'index'])->name('langues.index');
Route::get('/langues/create', [LangueController::class, 'create'])->name('langues.create');
Route::post('/langues', [LangueController::class, 'store'])->name('langues.store');
Route::get('/langues/{id}', [LangueController::class, 'show'])->name('langues.show');
Route::get('/langues/{id}/edit', [LangueController::class, 'edit'])->name('langues.edit');
Route::put('/langues/{id}', [LangueController::class, 'update'])->name('langues.update');
Route::delete('/langues/{id}', [LangueController::class, 'destroy'])->name('langues.destroy');

// ----------------- RÉGIONS WEB -----------------
// ----------------- RÉGIONS WEB -----------------
// ----------------- RÉGIONS WEB -----------------

    Route::get('/', [RegionController::class, 'index'])->name('index');
    Route::get('/create', [RegionController::class, 'create'])->name('create');
    Route::post('/', [RegionController::class, 'store'])->name('store');
    Route::get('/{region}', [RegionController::class, 'show'])->name('show');
    Route::get('/{region}/edit', [RegionController::class, 'edit'])->name('edit');
    Route::put('/{region}', [RegionController::class, 'update'])->name('update');
    Route::delete('/{region}', [RegionController::class, 'destroy'])->name('destroy');



// ----------------- PARLERS WEB -----------------

    Route::get('/', [ParlerController::class, 'index'])->name('index');
    Route::get('/create', [ParlerController::class, 'create'])->name('create');
    Route::post('/', [ParlerController::class, 'store'])->name('store');
    Route::get('/{parler}', [ParlerController::class, 'show'])->name('show');
    Route::get('/{parler}/edit', [ParlerController::class, 'edit'])->name('edit');
    Route::put('/{parler}', [ParlerController::class, 'update'])->name('update');
    Route::delete('/{parler}', [ParlerController::class, 'destroy'])->name('destroy');


// ----------------- API ROUTES -----------------
Route::get('api/contenus', [ContenuController::class, 'index']);
Route::get('api/contenus/{id}', [ContenuController::class, 'show']);
Route::post('api/contenus', [ContenuController::class, 'store']);
Route::put('api/contenus/{id}', [ContenuController::class, 'update']);
Route::delete('api/contenus/{id}', [ContenuController::class, 'destroy']);

Route::get('api/users', [UserController::class, 'index']);
Route::get('api/users/{id}', [UserController::class, 'show']);
Route::post('api/users', [UserController::class, 'store']);
Route::put('api/users/{id}', [UserController::class, 'update']);
Route::delete('api/users/{id}', [UserController::class, 'destroy']);

Route::get('api/medias', [MediaController::class, 'index']);
Route::get('api/medias/{id}', [MediaController::class, 'show']);
Route::post('api/medias', [MediaController::class, 'store']);
Route::put('api/medias/{id}', [MediaController::class, 'update']);
Route::delete('api/medias/{id}', [MediaController::class, 'destroy']);

Route::get('api/commentaires', [CommentaireController::class, 'index']);
Route::get('api/commentaires/{id}', [CommentaireController::class, 'show']);
Route::post('api/commentaires', [CommentaireController::class, 'store']);
Route::put('api/commentaires/{id}', [CommentaireController::class, 'update']);
Route::delete('api/commentaires/{id}', [CommentaireController::class, 'destroy']);

Route::get('api/typecontenus', [TypecontenuController::class, 'index']);
Route::get('api/typecontenus/{id}', [TypecontenuController::class, 'show']);
Route::post('api/typecontenus', [TypecontenuController::class, 'store']);
Route::put('api/typecontenus/{id}', [TypecontenuController::class, 'update']);
Route::delete('api/typecontenus/{id}', [TypecontenuController::class, 'destroy']);

Route::get('api/typemedias', [TypemediaController::class, 'index']);
Route::get('api/typemedias/{id}', [TypemediaController::class, 'show']);
Route::post('api/typemedias', [TypemediaController::class, 'store']);
Route::put('api/typemedias/{id}', [TypemediaController::class, 'update']);
Route::delete('api/typemedias/{id}', [TypemediaController::class, 'destroy']);

Route::get('api/roles', [RoleController::class, 'index']);
Route::get('api/roles/{id}', [RoleController::class, 'show']);
Route::post('api/roles', [RoleController::class, 'store']);
Route::put('api/roles/{id}', [RoleController::class, 'update']);
Route::delete('api/roles/{id}', [RoleController::class, 'destroy']);

Route::get('api/langues', [LangueController::class, 'index']);
Route::get('api/langues/{id}', [LangueController::class, 'show']);
Route::post('api/langues', [LangueController::class, 'store']);
Route::put('api/langues/{id}', [LangueController::class, 'update']);
Route::delete('api/langues/{id}', [LangueController::class, 'destroy']);

Route::get('api/regions', [RegionController::class, 'index']);
Route::get('api/regions/{id}', [RegionController::class, 'show']);
Route::post('api/regions', [RegionController::class, 'store']);
Route::put('api/regions/{id}', [RegionController::class, 'update']);
Route::delete('api/regions/{id}', [RegionController::class, 'destroy']);

Route::get('api/parlers', [ParlerController::class, 'index']);
Route::get('api/parlers/{id}', [ParlerController::class, 'show']);
Route::post('api/parlers', [ParlerController::class, 'store']);
Route::put('api/parlers/{id}', [ParlerController::class, 'update']);
Route::delete('api/parlers/{id}', [ParlerController::class, 'destroy']);

// ----------------- ROUTES D'AUTHENTIFICATION -----------------
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/logout', function () {
    auth()->logout();
    return redirect('/');
})->name('logout');
?>

