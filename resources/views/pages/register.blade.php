<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite('resources/css/app.css')
</head>
<body>
    <main class="flex h-screen">

        <div style="background-image: url('{{ asset('images/background-desktop-form.png') }}');" class="h-screen w-2/3">
        </div>

        <div class="h-screen px-12 w-1/3 flex items-center">

            <form action="" class="rounded-lg w-full p-4 mb-4">
                @csrf

                <h1 class="text-xl">Vytvořte si účet</h1>

                <div class="w-full mx-auto">
                    <input type="email" placeholder="E-mail" name="email"
                    class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 
                    ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 
                    focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
                </div>

                <div class="w-full mx-auto">
                    <input type="password" placeholder="Heslo" name="password"
                    class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 
                    ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 
                    focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
                </div>

                <div class="flex flex-col">
                    <a href="/login" class="text-blue-700 text-center hover:underline text-sm mb-2">Již máte účet? Přihlaste se</a>

                    <button type="submit" 
                    class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide bg-neutral-950 
                    hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline transition-colors 
                    duration-200 rounded-md text-white">
                        Zaregistrovat se
                    </button>
                </div>

            </form>
            
        </div>

        </div>

    </main>
</body>
</html>