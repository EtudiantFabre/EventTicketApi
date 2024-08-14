<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <title>Accès à l'API EventTicketApi</title>
</head>

<body class="antialiased">
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="max-w-lg w-full space-y-3 border border-gray-400 bg-white p-6 rounded-lg shadow-md">
            <h3 class="block font-sans text-gray-900 text-center text-xl tracking-tight font-bold line-highlight">Demande d'accès à
                EnventTicketApi</h3>

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <form action="{{ route('api.access.request') }}" method="POST">
                @csrf
                <div>
                    <label for="last_name" class="block text-sm font-sans text-gray-700">Nom:</label>
                    <input type="text" id="last_name" name="last_name"
                        class="py-2 px-3 mt-1 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                </div>

                <div class="mt-4">
                    <label for="first_name" class="block text-sm font-sans text-gray-700">Prénom:</label>
                    <input type="text" id="first_name" name="first_name"
                        class="py-2 px-3 mt-1 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
                </div>

                <div class="mt-4">
                    <label for="company" class="block text-sm font-sans text-gray-700">Entreprise:</label>
                    <input type="text" id="company" name="company"
                        class="py-2 px-3 mt-1 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div class="mt-4">
                    <label for="email" class="block text-sm font-sans text-gray-700">Email:</label>
                    <input type="email" id="email" name="email"
                        class="py-2 px-3 mt-1 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                </div>

                <div class="mt-4">
                    <label for="city" class="block text-sm font-sans text-gray-700">Ville:</label>
                    <input type="text" id="city" name="city"
                        class="py-2 px-3 mt-1 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                </div>

                <div class="mt-4">
                    <label for="address" class="block text-sm font-sans text-gray-700">Adresse:</label>
                    <input type="text" id="address" name="address"
                        class="py-2 px-3 mt-1 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                </div>

                <div class="mt-6">
                    <button type="submit"
                        class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Envoyer
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
