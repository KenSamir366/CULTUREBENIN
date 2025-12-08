<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        // Corrigé : utiliser nom_roles au lieu de name
        $roles = Role::withCount('users')  // Utilise la relation hasMany
                    ->orderBy('nom_roles')  // Champ correct de la migration
                    ->get();
        
        $stats = [
            'total_users' => User::count(),
            'admin_users' => User::whereHas('role', function($q) {
                // Utiliser nom_roles au lieu de name
                $q->where('nom_roles', 'like', '%admin%');
            })->count(),
            'active_roles' => $roles->count(),
        ];
        
        return view('roles.index', compact('roles', 'stats'));
    }
    
    public function create()
    {
        return view('roles.create');
    }
    
    public function store(Request $request)
    {
        // Validation et création
        $validated = $request->validate([
            'nom_roles' => 'required|string|max:255|unique:roles,nom_roles',
            'description' => 'nullable|string',
        ]);
        
        Role::create($validated);
        
        return redirect()->route('roles.index')
                         ->with('success', 'Rôle créé avec succès');
    }
    
    public function show(Role $role)
    {
        // Charger les utilisateurs de ce rôle
        $role->load('users');
        return view('roles.show', compact('role'));
    }
    
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }
    
    public function update(Request $request, Role $role)
    {
        // Validation et mise à jour
        $validated = $request->validate([
            'nom_roles' => 'required|string|max:255|unique:roles,nom_roles,' . $role->id,
            'description' => 'nullable|string',
        ]);
        
        $role->update($validated);
        
        return redirect()->route('roles.index')
                         ->with('success', 'Rôle mis à jour avec succès');
    }
    
    public function destroy(Role $role)
    {
        // Vérifier si des utilisateurs ont ce rôle
        if ($role->users()->count() > 0) {
            return redirect()->back()
                           ->with('error', 'Impossible de supprimer ce rôle, des utilisateurs y sont associés');
        }
        
        // Suppression (sauf pour les rôles admin)
        if (stripos($role->nom_roles, 'admin') !== false) {
            return redirect()->back()
                           ->with('error', 'Impossible de supprimer un rôle administrateur');
        }
        
        $role->delete();
        return redirect()->route('roles.index')
                         ->with('success', 'Rôle supprimé avec succès');
    }
}