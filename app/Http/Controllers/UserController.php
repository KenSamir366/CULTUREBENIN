<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();  // ou paginate()

    $stats = [
        'admins'   => User::where('role_id', 1)->count(),
        'actifs'   => User::where('statut', 'actif')->count(),
        'nouveaux' => User::where('created_at', '>=', now()->subDays(7))->count(),
    ];

    return view('users.index', compact('users', 'stats'));
    }
    
    public function create()
    {
        return view('users.create');
    }
    
    public function store(Request $request)
    {
        // Validation et création
    }
    
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
    
    public function update(Request $request, User $user)
    {
        // Validation et mise à jour
    }
    
    public function destroy(User $user)
    {
        // Suppression
    }
}