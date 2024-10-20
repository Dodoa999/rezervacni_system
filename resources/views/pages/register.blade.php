<x-layouts.app>

    <main class="flex h-screen">

        <div style="background-image: url('{{ asset('images/background-desktop-form.png') }}');" class="h-screen w-2/3">
        </div>

        <div class="h-screen px-12 w-1/3 flex items-center">

            <form action="/register" method="POST" class="rounded-lg w-full p-4 mb-4">
                @csrf
            
            <div class="bg-white p-4 rounded-xl my-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
            </svg>


                <h1 class="text-2xl py-2">Začněte plánovat a spravovat své tandemové lety pohodlně na jednom místě!</h1>
            </div>

                <x-input type="text" name="name" placeholder="Jméno" />
                <x-input type="email" name="email" placeholder="Email" />
                <x-input type="password" name="password" placeholder="Heslo" />

                <div class="flex flex-col">
                    <a href="/login" class="text-blue-700 text-center hover:underline text-sm mb-2 py-2">Již máte účet? Přihlaste se</a>

                    <button type="submit" action="/dashboard" 
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

</x-layouts.app>