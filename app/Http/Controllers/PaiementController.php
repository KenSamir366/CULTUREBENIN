<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function index()
    {
        // Afficher le formulaire de paiement
        return view('paiement.formulaire');
    }
    
    public function traiterPaiement(Request $request)
    {
        $request->validate([
            'montant' => 'required|numeric|min:100', // 100 centimes = 1 XOF
            'email' => 'required|email',
            'nom' => 'required|string',
            'telephone' => 'required|string',
        ]);
        
        try {
            // 1. Initialiser FedaPay directement
            \FedaPay\FedaPay::setApiKey(env('FEDAPAY_SECRET_KEY'));
            \FedaPay\FedaPay::setEnvironment('live'); // ou 'sandbox' pour test
            
            // 2. Créer un client
            $client = \FedaPay\Customer::create([
                'firstname' => $request->nom,
                'lastname' => '',
                'email' => $request->email,
                'phone_number' => [
                    'number' => $request->telephone,
                    'country' => 'ci'
                ]
            ]);
            
            // 3. Créer la transaction
            $transaction = \FedaPay\Transaction::create([
                'description' => 'Paiement Culture Benin',
                'amount' => $request->montant, // En centimes (500 = 5 XOF)
                'currency' => ['iso' => 'XOF'],
                'customer' => $client,
                'callback_url' => url('/paiement/retour'), // Après paiement
            ]);
            
            // 4. Générer le lien de paiement
            $token = $transaction->generateToken();
            
            // 5. Rediriger vers FedaPay
            return redirect()->away($token->url);
            
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur de paiement: ' . $e->getMessage());
        }
    }
    
    public function retour(Request $request)
    {
        // Page de retour après paiement
        $status = $request->input('status', 'unknown');
        
        if ($status === 'approved') {
            return view('paiement.success', [
                'transaction_id' => $request->input('transaction_id')
            ]);
        }
        
        return view('paiement.cancel');
    }
}