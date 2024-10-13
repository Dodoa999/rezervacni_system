<x-layouts.app>
    
    <main class="flex h-screen">

        <div style="background-image: url('{{ asset('images/background-desktop-form.png') }}');" class="h-screen w-2/3">
        </div>

        <div class="h-screen px-12 w-1/3 flex items-center">

            <form action="/login" method="post" class="rounded-lg w-full p-4 mb-4">
                @csrf

                <h1 class="text-xl">Přihlásit se</h1>

                <x-input type="text" name="name" placeholder="Jméno" />
                <x-input type="email" name="email" placeholder="Email" />
                <x-input type="password" name="password" placeholder="Heslo" />

                <div class="flex flex-col">
                    <a href="/register" class="text-blue-700 text-center hover:underline text-sm mb-2">Ještě nemáte účet? Zaregistrujte se</a>

                    <button type="submit" action="/dashboard" 
                        class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide bg-neutral-950 hover:bg-neutral-900 
                        focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline transition-colors duration-200 rounded-md 
                        text-white">
                        Přihlásit se
                    </button>
                </div>

            </form>
            
        </div>


    </main>

</x-layouts.app>