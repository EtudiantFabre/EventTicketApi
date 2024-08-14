<?php

namespace App\Http\Controllers;

use App\Models\OrderIntent;
use Illuminate\Http\Request;

class OrderIntentController extends Controller
{
    public function store(Request $request)
    {
        $orderIntent = OrderIntent::create($request->all());
        return response()->json($orderIntent, 201);
    }

    public function validateIntent($id)
    {
        $orderIntent = OrderIntent::findOrFail($id);
        // Logique de validation et génération de l'URL de téléchargement des tickets
        return response()->json(['url' => 'http://example.com/download/tickets/' . $id]);
    }
}
