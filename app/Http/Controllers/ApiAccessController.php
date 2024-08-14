<?php

namespace App\Http\Controllers;

use App\Mail\ApiAccessMail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class ApiAccessController extends Controller
{
    public function showForm()
    {
        return view('api_access_request');
    }

    public function handleForm(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $password = Str::random(10);
        $user = User::create([
            'name' => $validated['first_name'] . ' ' . $validated['last_name'], // Ajout du champ 'name'
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'company' => $validated['company'],
            'email' => $validated['email'],
            'city' => $validated['city'],
            'address' => $validated['address'],
            'password' => Hash::make($password),
        ]);

        Mail::to($user->email)->send(new ApiAccessMail($user, $password));

        return redirect()->back()->with('success', 'Demande envoyée avec succès. Veuillez vérifier votre email pour les identifiants.');
    }
}
