<x-layouts.app>
    
    <main class="flex h-max">

        <div style="background-image: url('{{ asset('images/background-desktop-form.png') }}');" class="h-screen w-2/3">
        </div>

        <div class="h-screen px-12 w-1/3 flex items-center">

            <form action="/login" method="post" class="rounded-xl w-full p-4 mb-4">
                @csrf
            <div class="bg-white p-4 rounded-xl my-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5m.002-2.25h.005v.006H12v-.006Zm-.001 4.5h.006v.006h-.006v-.005Zm-2.25.001h.005v.006H9.75v-.006Zm-2.25 0h.005v.005h-.006v-.005Zm6.75-2.247h.005v.005h-.005v-.005Zm0 2.247h.006v.006h-.006v-.006Zm2.25-2.248h.006V15H16.5v-.005Z" />
                </svg>

                <h1 class="text-2xl py-2">Plánujte a spravujte své tandemové lety pohodlně na jednom místě!</h1>
            </div>

                <x-input type="text" name="name" placeholder="Jméno" />
                <x-input type="email" name="email" placeholder="Email" />
                <x-input type="password" name="password" placeholder="Heslo" />

                <div class="flex flex-col">
                    <a href="/register" class="text-blue-700 text-center hover:underline text-sm mb-2 py-2">Ještě nemáte účet? Zaregistrujte se</a>

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