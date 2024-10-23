<x-layouts.app>
<div class="max-w-screen-xl mx-auto py-10">
    <div class="flex items-center w-full justify-between mb-6">
        <div>
            <h1 class="text-2xl text-gray-500">Celkový počet vašich rezervací je {{ $reservations->count() }} </h1>
        </div>

        <x-modal title="Vytvořit nový záznam">
            <x-slot name="trigger">
                <x-buttons.primary>Nová rezervace</x-buttons.primary>
            </x-slot>

            <form action="/dashboard" method="POST" class="rounded-lg">
                @csrf
                <div class="relative z-20 w-[17rem]">
                    <x-select name="type_flight"/>
                    </div>
                    <div class="relative z-10">
                    <x-date_picker name="reserved_at"/>
                    </div>
                    <div class="flex justify-end">
                    <x-buttons.primary type="submit">Vytvořit</x-buttons.primary>
                </div>
            </form>
        </x-modal>

    
    </div>

    <div class="flex gap-4">

        <div class="w-2/3">
            <div class="grid grid-cols-3 gap-2">
                @foreach ($reservations as $reservation)
                    <x-tile title="{{ $reservation->type_flight }}" description="{{ $reservation->reserved_at }}">
                        
                <div class="space-y-2">
                    <x-modal title="Opravdu?">
                        <x-slot name="trigger">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>

                        </x-slot>

                        <form action="/reservation_delete" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $reservation->id }}" name="id">

                            <button type="submit" class="bg-red-700 rounded-lg px-4 py-2 text-white font-semibold">
                               Smazat
                            </button>
                        </form>
                    </x-modal>

                    <x-modal title="Upravit záznam" action="Upravit">
                        <x-slot name="trigger">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                        </x-slot>

                        <form action="/reservation_update" method="POST" class="rounded-lg">
                            @csrf
                            <input type="hidden" value="{{ $reservation->id }}" name="id">
                                    <div class="relative z-20 w-[17rem]">
                                <x-select name="type_flight"/>
                                </div>
                                <div class="relative z-10">
                                <x-date_picker name="reserved_at"/>
                                </div>
                                <div class="flex justify-end">
                                <x-buttons.primary type="submit">Upravit</x-buttons.primary>
                            </div>
                        </form>
                    </x-modal>
                </div>
                    </x-tile>
                @endforeach
            </div>
        </div>

    </div>
</div>

<div><h2 class="text-5xl font-bold text-gray-800 mb-6 text-center pt-32">Nabídka tandemů</h2> </div>
<div class="flex justify-center space-x-8 mt-10 mb-40">
    <!-- První karta -->
    <div class="rounded-lg overflow-hidden border border-neutral-200/60 bg-white text-neutral-700 shadow-sm w-[380px]">
      <div class="relative">
        <img src="{{ asset('images/Vyhlidka.jpg.webp') }}" class="w-full h-auto" />
      </div>
      <div class="flex justify-center p-7">
        <h2 class="mb-2 text-lg font-bold leading-none tracking-tight">Vyhlídkový let</h2>
      </div>
    </div>
  
    <!-- Druhá karta -->
    <div class="rounded-lg overflow-hidden border border-neutral-200/60 bg-white text-neutral-700 shadow-sm w-[380px]">
      <div class="relative">
      <img src="{{ asset('images/termika1.jpg.webp') }}" class="w-full h-auto" />
      </div>
      <div class="flex justify-center p-7">
        <h2 class="mb-2 text-lg font-bold leading-none tracking-tight">Termický let</h2>
        </div>
    </div>
  
    <!-- Třetí karta -->
    <div class="rounded-lg overflow-hidden border border-neutral-200/60 bg-white text-neutral-700 shadow-sm w-[380px]">
      <div class="relative">
      <img src="{{ asset('images/akro.jpg.webp') }}" class="w-full h-auto" />
      </div>
      <div class="flex justify-center p-7">
        <h2 class="mb-2 text-lg font-bold leading-none tracking-tight">Akrobatický let</h2>
        </div>
    </div>
  </div>

</x-layouts.app>
