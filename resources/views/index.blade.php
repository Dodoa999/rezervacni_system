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
                  <span class="block xl:inline">Jak to vlastně</span>
                  <span class="block text-indigo-600 xl:inline" data-primary="indigo-600">bude probíhat?</span>
                </h1>
                <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">It's never been easier to build beautiful websites that convey your message and tell your story.</p>
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
                :class="`flex items-center justify-between w-full p-4 text-left select-none group-hover:underline ${activeAccordion == id ? 'bg-red-600 text-black' : ''}`">
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
                    :class="{ 'text-sky-600 bg-sky-100': activeAccordion==id }" 
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
                    :class="{ 'text-sky-600 bg-sky-100': activeAccordion==id }" 
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
                    :class="{ 'text-sky-600 bg-sky-100': activeAccordion==id }" 
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
                    :class="{ 'text-sky-600 bg-sky-100': activeAccordion==id }" 
                    class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                    <span>Kde se létá?</span>
                    <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-0 opacity-70">
                        Javorový Vrch, Ondřejník - Skalka, Velký Javorník a Straník.                    </div>
                </div>
            </div>
    
        </div>
    </div>

<div class="flex justify-center space-x-8 mt-20 mb-10">
    <!-- První karta -->
    <div class="rounded-lg overflow-hidden border border-neutral-200/60 bg-white text-neutral-700 shadow-sm w-[380px]">
      <div class="relative">
        <img src="{{ asset('images/Vyhlidka.jpg.webp') }}" class="w-full h-auto" />
      </div>
      <div class="p-7">
        <h2 class="mb-2 text-lg font-bold leading-none tracking-tight">Product Name</h2>
        <p class="mb-5 text-neutral-500">This card element can be used to display a product, post, or any other type of data.</p>
        <button class="inline-flex items-center justify-center w-full h-10 px-4 py-2 text-sm font-medium text-white transition-colors rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none bg-neutral-950 hover:bg-neutral-950/90">View Product</button>
      </div>
    </div>
  
    <!-- Druhá karta -->
    <div class="rounded-lg overflow-hidden border border-neutral-200/60 bg-white text-neutral-700 shadow-sm w-[380px]">
      <div class="relative">
      <img src="{{ asset('images/termika1.jpg.webp') }}" class="w-full h-auto" />
      </div>
      <div class="p-7">
        <h2 class="mb-2 text-lg font-bold leading-none tracking-tight">Product Name</h2>
        <p class="mb-5 text-neutral-500">This card element can be used to display a product, post, or any other type of data.</p>
        <button class="inline-flex items-center justify-center w-full h-10 px-4 py-2 text-sm font-medium text-white transition-colors rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none bg-neutral-950 hover:bg-neutral-950/90">View Product</button>
      </div>
    </div>
  
    <!-- Třetí karta -->
    <div class="rounded-lg overflow-hidden border border-neutral-200/60 bg-white text-neutral-700 shadow-sm w-[380px]">
      <div class="relative">
      <img src="{{ asset('images/akro.jpg.webp') }}" class="w-full h-auto" />
      </div>
      <div class="p-7">
        <h2 class="mb-2 text-lg font-bold leading-none tracking-tight">Product Name</h2>
        <p class="mb-5 text-neutral-500">This card element can be used to display a product, post, or any other type of data.</p>
        <button class="inline-flex items-center justify-center w-full h-10 px-4 py-2 text-sm font-medium text-white transition-colors rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none bg-neutral-950 hover:bg-neutral-950/90">View Product</button>
      </div>
    </div>
  </div>

<section class="w-full px-8 py-16 bg-gray-100 xl:px-8 mt-16">
    <div class="max-w-5xl mx-auto">
        <div class="flex flex-col items-center md:flex-row">

            <div class="w-full space-y-5 md:w-3/5 md:pr-16">
                <p class="font-medium text-blue-500 uppercase" data-primary="blue-500">Building Businesses</p>
                <h2 class="text-2xl font-extrabold leading-none text-black sm:text-3xl md:text-5xl">
                    Changing The Way People Do Business.
                </h2>
                <p class="text-xl text-gray-600 md:pr-16">Learn how to engage with your visitors and teach them about your mission. We're revolutionizing the way customers and businesses interact.</p>
            </div>

            <div class="w-full mt-16 md:mt-0 md:w-2/5">
                <div class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                    <h3 class="mb-6 text-2xl font-medium text-center">Sign in to your Account</h3>
                    <input type="text" name="email" id="email" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" data-rounded="rounded-lg" data-primary="blue-500" placeholder="Email address">
                    <input type="password" name="password" id="password" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" data-rounded="rounded-lg" data-primary="blue-500" placeholder="Password">
                    <div class="block">
                        <button class="w-full px-3 py-4 font-medium text-white bg-blue-600 rounded-lg" data-primary="blue-600" data-rounded="rounded-lg">Log Me In</button>
                    </div>
                    <p class="w-full mt-4 text-sm text-center text-gray-500">Don't have an account? <a href="#_" class="text-blue-500 underline">Sign up here</a></p>
                </div>
            </div>

        </div>
    </div>
</section>


</x-layouts.app>