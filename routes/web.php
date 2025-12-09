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

// ----------------- ROUTE DE SANTÉ -----------------
Route::get('/health', function() {
    return response()->json(['status' => 'healthy', 'timestamp' => now()]);
});

// ----------------- PAGE D'ACCUEIL -----------------
Route::get('/', function(){
    return view('front.accueil');
});
Route::get('/dashboard', [PageController::class, 'index'])->name('dashboard');

// ----------------- UTILISATEURS WEB -----------------
Route::prefix('users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/', [UserController::class, 'store'])->name('store');
    Route::get('/{user}', [UserController::class, 'show'])->name('show');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/{user}', [UserController::class, 'update'])->name('update');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');
});

// ----------------- CONTENUS WEB -----------------
Route::prefix('contenus')->name('contenus.')->group(function () {
    Route::get('/', [ContenuController::class, 'index'])->name('index');
    Route::get('/create', [ContenuController::class, 'create'])->name('create');
    Route::post('/', [ContenuController::class, 'store'])->name('store');
    Route::get('/{contenu}', [ContenuController::class, 'show'])->name('show');
    Route::get('/{contenu}/edit', [ContenuController::class, 'edit'])->name('edit');
    Route::put('/{contenu}', [ContenuController::class, 'update'])->name('update');
    Route::delete('/{contenu}', [ContenuController::class, 'destroy'])->name('destroy');
});

// ----------------- MÉDIAS WEB -----------------
Route::prefix('medias')->name('medias.')->group(function () {
    Route::get('/', [MediaController::class, 'index'])->name('index');
    Route::get('/create', [MediaController::class, 'create'])->name('create');
    Route::post('/', [MediaController::class, 'store'])->name('store');
    Route::get('/{media}', [MediaController::class, 'show'])->name('show');
    Route::get('/{media}/edit', [MediaController::class, 'edit'])->name('edit');
    Route::put('/{media}', [MediaController::class, 'update'])->name('update');
    Route::delete('/{media}', [MediaController::class, 'destroy'])->name('destroy');
});

// ----------------- COMMENTAIRES WEB -----------------
Route::get('/commentaires', [CommentaireController::class, 'index'])->name('commentaires.index');

// ----------------- TYPES DE CONTENU -----------------
Route::get('/typecontenus', [TypecontenuController::class, 'indexWeb'])->name('typecontenus.index');

// ----------------- TYPES DE MÉDIA -----------------
Route::get('/typemedias', [TypemediaController::class, 'index'])->name('typemedias.index');

// ----------------- RÔLES WEB -----------------
Route::prefix('roles')->name('roles.')->group(function () {
    Route::get('/', [RoleController::class, 'index'])->name('index');
    Route::get('/create', [RoleController::class, 'create'])->name('create');
    Route::post('/', [RoleController::class, 'store'])->name('store');
    Route::get('/{role}', [RoleController::class, 'show'])->name('show');
    Route::get('/{role}/edit', [RoleController::class, 'edit'])->name('edit');
    Route::put('/{role}', [RoleController::class, 'update'])->name('update');
    Route::delete('/{role}', [RoleController::class, 'destroy'])->name('destroy');
});

// ----------------- LANGUES WEB -----------------
Route::prefix('langues')->name('langues.')->group(function () {
    Route::get('/', [LangueController::class, 'index'])->name('index');
    Route::get('/create', [LangueController::class, 'create'])->name('create');
    Route::post('/', [LangueController::class, 'store'])->name('store');
    Route::get('/{id}', [LangueController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [LangueController::class, 'edit'])->name('edit');
    Route::put('/{id}', [LangueController::class, 'update'])->name('update');
    Route::delete('/{id}', [LangueController::class, 'destroy'])->name('destroy');
});

// ----------------- RÉGIONS WEB -----------------
Route::prefix('regions')->name('regions.')->group(function () {
    Route::get('/', [RegionController::class, 'index'])->name('index');
    Route::get('/create', [RegionController::class, 'create'])->name('create');
    Route::post('/', [RegionController::class, 'store'])->name('store');
    Route::get('/{region}', [RegionController::class, 'show'])->name('show');
    Route::get('/{region}/edit', [RegionController::class, 'edit'])->name('edit');
    Route::put('/{region}', [RegionController::class, 'update'])->name('update');
    Route::delete('/{region}', [RegionController::class, 'destroy'])->name('destroy');
});

// ----------------- PARLERS WEB -----------------
Route::prefix('parlers')->name('parlers.')->group(function () {
    Route::get('/', [ParlerController::class, 'index'])->name('index');
    Route::get('/create', [ParlerController::class, 'create'])->name('create');
    Route::post('/', [ParlerController::class, 'store'])->name('store');
    Route::get('/{parler}', [ParlerController::class, 'show'])->name('show');
    Route::get('/{parler}/edit', [ParlerController::class, 'edit'])->name('edit');
    Route::put('/{parler}', [ParlerController::class, 'update'])->name('update');
    Route::delete('/{parler}', [ParlerController::class, 'destroy'])->name('destroy');
});

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

// ----------------- ROUTES API -----------------
$apiResources = [
    'users' => UserController::class,
    'contenus' => ContenuController::class,
    'medias' => MediaController::class,
    'commentaires' => CommentaireController::class,
    'typecontenus' => TypecontenuController::class,
    'typemedias' => TypemediaController::class,
    'roles' => RoleController::class,
    'langues' => LangueController::class,
    'regions' => RegionController::class,
    'parlers' => ParlerController::class
];

foreach ($apiResources as $uri => $controller) {
    Route::get("api/$uri", [$controller, 'index']);
    Route::get("api/$uri/{id}", [$controller, 'show']);
    Route::post("api/$uri", [$controller, 'store']);
    Route::put("api/$uri/{id}", [$controller, 'update']);
    Route::delete("api/$uri/{id}", [$controller, 'destroy']);
}

?>
