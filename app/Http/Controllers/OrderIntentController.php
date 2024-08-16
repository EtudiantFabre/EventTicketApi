<?php

namespace App\Http\Controllers;

use App\Models\OrderIntent;
use Illuminate\Http\Request;

class OrderIntentController extends Controller
{
    public function list(Request $request)
    {
        // Récupération des intentions de commandes par lot de 5
        return response()->json(OrderIntent::paginate(5), 201);
    }


    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'order_intent_price' => 'required|numeric|min:0',
            'order_intent_type' => 'required|string|max:255',
            'user_email' => 'required|email|max:255',
            'user_phone' => 'required|string|max:20',
            'expiration_date' => 'required|date|after:today',
        ], [
            'order_intent_price.required' => 'Le prix de l\'intention de commande est requis.',
            'order_intent_price.numeric' => 'Le prix de l\'intention de commande doit être un nombre.',
            'order_intent_price.min' => 'Le prix de l\'intention de commande doit être supérieur ou égal à 0.',
            'order_intent_type.required' => 'Le type d\'intention de commande est requis.',
            'order_intent_type.string' => 'Le type d\'intention de commande doit être une chaîne de caractères.',
            'order_intent_type.max' => 'Le type d\'intention de commande ne doit pas dépasser 255 caractères.',
            'user_email.required' => 'L\'email de l\'utilisateur est requis.',
            'user_email.email' => 'L\'email de l\'utilisateur doit être une adresse email valide.',
            'user_email.max' => 'L\'email de l\'utilisateur ne doit pas dépasser 255 caractères.',
            'user_phone.required' => 'Le téléphone de l\'utilisateur est requis.',
            'user_phone.string' => 'Le téléphone de l\'utilisateur doit être une chaîne de caractères.',
            'user_phone.max' => 'Le téléphone de l\'utilisateur ne doit pas dépasser 20 caractères.',
            'expiration_date.required' => 'La date d\'expiration est requise.',
            'expiration_date.date' => 'La date d\'expiration doit être une date valide (Format : jj-mm-aaaa).',
            'expiration_date.after' => 'La date d\'expiration doit être une date future (Format : jj-mm-aaaa).',
        ]);
        $orderIntent = OrderIntent::create($validatedData);
        return response()->json($orderIntent, 201);
    }

    public function validateIntent($id)
    {
        $orderIntent = OrderIntent::findOrFail($id);
        // Logique de validation et génération de l'URL de téléchargement des tickets
        return response()->json(['url' => 'http://example.com/download/tickets/' . $id]);
    }
}
