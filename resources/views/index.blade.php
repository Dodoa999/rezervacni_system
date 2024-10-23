<x-layouts.app>
            
            <section  style="background-image: url('{{ asset('images/background-desktop.png') }}');" class=" bg-cover bg-center h-[720px] w-full px-6 pb-12 antialiased">
                <div class="mx-auto max-w-7xl relative z-10">

    
                    <div class="flex items-center justify-start px-6">
                        <div class="container max-w-none w-1/2 py-32 text-left">
                          <h1 class="text-2xl font-bold leading-10 tracking-tight text-gray-900 sm:text-2xl md:text-7xl lg:text-7xl">
                           Nezapomenutelný let nad krajinou
                          </h1>
                          <div class="mt-5 text-gray-900 md:mt-8 md:max-w-lg md:text-xl">
                                Rezervujte si svůj tandem paraglidingový let.
                          </div>
                          <div class="flex flex-col items-start mt-8 space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                            <span class="relative inline-flex w-full md:w-auto">
                              <a href="/login" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-white bg-gray-800 border
                               border-transparent rounded-lg xl:px-10 md:w-auto hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                                Rezervace
                              </a>
                            </span>
                          </div>
                        </div>
                      </div>

                </div>
            </section>

            <section class="mt-16">
                <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-14 drop-shadow-2xl">
                  
                    <div class="bg-gray-800 rounded-lg p-6 text-center text-white flex flex-col items-center">
                       
                        <div class="flex items-center mb-4">
                          
                            <div class="mr-2">
                                <img src="{{asset('/images/shield-4.png')}}" alt="Bezpečnost" class="h-12 w-12 mr-16">
                            </div>
                         
                            <h3 class="text-xl font-semibold mr-10">Bezpečnost</h3>
                        </div>
                       
                        <p class="text-sm text-left">Certifikovaní instruktoři a moderní vybavení zaručují bezpečnost.</p>
                    </div>
            
                    
                    <div class="bg-gray-800 rounded-lg p-6 text-center text-white flex flex-col items-center">
                       
                        <div class="flex items-center mb-4">
                           
                            <div class="mr-2">
                            <img src="{{ asset('images/support-4.png') }}" alt="Přístup" class="h-12 w-12 mr-6">
                            </div>
                           
                            <h3 class="text-xl font-semibold mr-16">Přístup</h3>
                        </div>
                        
                        <p class="text-sm text-left">Přátelský a profesionální tým se postará o vaše pohodlí.</p>
                    </div>
            
                    
                    <div class="bg-gray-800 rounded-lg p-6 text-center text-white flex flex-col items-center">
                        
                        <div class="flex items-center mb-4">
                            
                            <div class="mr-2">
                                <img src="{{ asset('images/eye-2.png') }}" alt="Panorama" class="h-12 w-12 mr-4">
                            </div>
                            
                            <h3 class="text-xl font-semibold mr-12">Panorama</h3>
                        </div>
                       
                        <p class="text-sm text-left">Zažijete jedinečné výhledy na krajinu z ptačí perspektivy.</p>
                    </div>
            
                    
                    <div class="bg-gray-800 rounded-lg p-6 text-center text-white flex flex-col items-center">
                        
                        <div class="flex items-center mb-4">
                          
                            <div class="mr-2">
                                <img src="{{ asset('images/heart-beat.png') }}" alt="Adrenalin" class="h-12 w-12 mr-6">
                            </div>
                           
                            <h3 class="text-xl font-semibold mr-16">Adrenalin</h3>
                        </div>
                        
                        <p class="text-sm text-left">Zážitek, který ve vás zanechá nezapomenutelné vzpomínky.</p>
                    </div>
                </div>
            </section>


     
    <section class=" px-2 py-32 md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
          <div class="flex flex-wrap items-center sm:-mx-3">
            <div class="w-full md:w-1/2 md:px-3">
              <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                  <span class="block xl:inline">Jak to probíhá?</span>
                  <span class="block text-gray-800 xl:inline" data-primary="gray-800"></span>
                </h1>
                <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl"></p>
              </div>
            </div>
            <div class="w-full md:w-1/2">
              <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                    <video autoplay muted loop class=" object-cover rounded-lg">
                        <source src="{{ asset('videos/Video na web1.mp4') }}" type="video/mp4">
                    </video>
                </div>
                </div>
            </div>
          </div>
        </div>
      </section>
      


      <div class="container mx-auto my-16 px-4">
        <h2 class="text-5xl font-bold text-gray-800 mb-6 text-center ">Časté otázky</h2> 
    
        <div x-data="{ 
            activeAccordion: '', 
            setActiveAccordion(id) { 
                this.activeAccordion = (this.activeAccordion == id) ? '' : id 
            } 
        }" class="relative mx-auto overflow-hidden text-sm font-normal bg-white border border-gray-200 divide-y divide-gray-200 rounded-md w-full md:w-1/2">
        
        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" 
                :class="`flex items-center justify-between w-full p-4 text-left select-none group-hover:underline ${activeAccordion == id ? 'bg-gray-900 text-white' : ''}`">
                <span>Není to nebezpečné?</span>
                <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-cloak>
                <div class="p-4 pt-0 opacity-70">
                    Padák prochází každý rok technickou kontrolou. Konstrukčně se tandemový padák řadí mezi ty nejbezpečnější. Nutno dodat, že tandem řídí zkušení tandem piloti, kteří nalétali stovky hodin ve vzduchu.
                </div>
            </div>
        </div>
    
            <!-- Druhá otázka -->
            <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)" 
                    :class="{ 'bg-gray-900 text-white': activeAccordion==id }" 
                    class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                    <span>Jakou má letenka platnost?</span>
                    <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-0 opacity-70">
                        Platnost poukazu je 24 měsíců od zakoupení.
                    </div>
                </div>
            </div>
    
            <!-- Třetí otázka -->
            <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)" 
                    :class="{ 'bg-gray-900 text-white': activeAccordion==id }" 
                    class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                    <span>Co když mám strach z výšek?</span>
                    <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-0 opacity-70">
                        S touto obavou se setkáváme často, ale jakmile se dostanete do vzduchu, začnete vnímat více vjemů najednou (rychlost, krajina, vzduch, volnost, komunikace s pilotem) a zjistíte, že na nějaké obavy nemáte v hlavě místo. V případě, že by strach z probíhajícího letu přece jen vytěsnil ten nádherný pocit volnosti, není problém na přání pasažéra, let ukončit a přistát.
                    </div>
                </div>
            </div>

            <!-- čtvrtá otázka -->
            <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)" 
                    :class="{ 'bg-gray-900 text-white': activeAccordion==id }" 
                    class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                    <span>Je let něčím omezen? (váha, věk, kondice)</span>
                    <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-0 opacity-70">
                        Věkové rozmezí není, kondici pasažér nepotřebuje, jelikož při startu je potřebný pouze krátký rozběh. V případě váhy (od 110 kg) je vždy volen individuální přístup.                    </div>
                </div>
            </div>

            <!-- pátá otázka -->
            <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)" 
                    :class="{ 'bg-gray-900 text-white': activeAccordion==id }" 
                    class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                    <span>Kde se létá?</span>
                    <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-0 opacity-70">
                        Javorový Vrch, Ondřejník - Skalka, Velký Javorník a Straník.                    
                    </div>
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