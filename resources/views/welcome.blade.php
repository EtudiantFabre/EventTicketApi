<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="webhook.svg" type="image/x-icon">

    <title>EventTicketApi</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="./node_modules/preline/dist/preline.js"></script>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="bg-black">
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content"
        class="relative min-h-screen max-w-3xl px-4 sm:px-6 lg:px-8 flex flex-col justify-center sm:items-center mx-auto size-full before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples-dark/squared-bg-element.svg')] before:bg-no-repeat before:bg-top before:size-full before:-z-[1] before:transform before:-translate-x-1/2">
        <div class="text-center py-8 px-4 sm:px-6 lg:px-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-webhook w-20 sm:w-28 h-auto mx-auto mb-4 sm:mb-8 text-white">
                <path d="M18 16.98h-5.99c-1.1 0-1.95.94-2.48 1.9A4 4 0 0 1 2 17c.01-.7.2-1.4.57-2" />
                <path d="m6 17 3.13-5.78c.53-.97.1-2.18-.5-3.1a4 4 0 1 1 6.89-4.06" />
                <path d="m12 6 3.13 5.73C15.66 12.7 16.9 13 18 13a4 4 0 0 1 0 8" />
            </svg>
            <h1 class="text-2xl text-white sm:text-4xl">
                Commencer à utiliser
            </h1>
            <h2 class="mt-1 sm:mt-3 text-4xl font-bold text-white sm:text-6xl">
                <span class="bg-clip-text bg-gradient-to-tr from-blue-600 to-purple-400 text-transparent">EventTicketApi</span>
            </h2>

            <form action="{{ route('api-access-request')}}">
                <div class="mt-8 space-y-4">
                    <div class="grid">
                        <button type="submit"
                            class="sm:p-4 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-white/10 text-white hover:bg-white/20 focus:outline-none focus:bg-white/20 disabled:opacity-50 disabled:pointer-events-none">
                            Faire une demande
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <footer class="absolute bottom-0 inset-x-0 text-center py-5">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-sm text-white/50">© 2024 EventTicketApi. Tout droits réservés <a
                    class="text-white font-medium hover:text-white/80 focus:outline-none focus:text-white/80"
                    href="https://www.youtube.com/@developpeurtaf?sub_confirmation=1">Developpeurtaf</a></p>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->
</body>

</html>
