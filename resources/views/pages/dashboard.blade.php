<x-layouts.app>

    <div class="flex items-center w-full justify-between mb-6">
        <div>
            <h1 class="text-2xl text-gray-500">Celkový počet rezervací {{ $reservations->count() }}</h1>
        </div>
    </div>

    <div class="flex gap-4">

        <div class="w-2/3">
            <div class="grid grid-cols-3 gap-2">
                @foreach ($reservations as $reservation)
                    <x-tile title="{{ $reservation->type_flight }}" description="{{ $reservation->reserved_at }}">
                        <x-modal title="Jste si jistý touto akcí?" action="Smazat">
                            
                            <form action="/reservation_delete" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $reservation->id }}" name="id">

                                <button type="submit" class="bg-red-500 rounded-lg px-4 py-2 text-white font-semibold">
                                    Opravdu smazat
                                </button>
                            </form>

                        </x-modal>
                    </x-tile>
                @endforeach
            </div>

            <x-modal title="Vytvořit nový záznám" action="Vytvořit nový záznam">
                <form action="/dashboard" method="POST" class="rounded-lg w-full *:mb-4">
                    @csrf
                    <x-input type="text" name="type_flight" placeholder="Typ letu" />

                    <x-input type="date" name="reserved_at" placeholder="Kdy se poletí?" />

                    <x-buttons.primary type="submit">Vytvořit</x-buttons.primary>
                </form>
            </x-modal>
        </div>
    </div>

</x-layouts.app>
