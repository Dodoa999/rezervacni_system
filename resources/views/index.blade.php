<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite('resources/css/app.css')
     @vite('resources/js/app.js')
</head>

<body>
            
            <section  style="background-image: url('{{ asset('images/background-desktop.png') }}');" class=" bg-cover bg-center h-[720px] w-full px-6 pb-12 antialiased">
                <div class="mx-auto max-w-7xl relative z-10">

                    <nav class="relative z-50 h-24 select-none" x-data="{ showMenu: false }">
                        <div class="container relative flex flex-wrap items-center justify-between h-24 mx-auto overflow-hidden font-medium border-b border-gray-200 
                        md:overflow-visible lg:justify-center sm:px-4 md:px-2 lg:px-0">
                            <div class="flex items-center justify-start w-1/4 h-full pr-4">
                                <a href="#_" class="flex items-center py-4 space-x-2 font-extrabold text-gray-900 md:py-0">
                                    <span class="flex items-center justify-center w-8 h-8 text-white bg-gray-900 rounded-full">
                                        <svg class="w-auto h-5 -translate-y-px" viewBox="0 0 69 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m31.2 12.2-3.9 12.3-13.4.5-13.4.5 10.7 7.7L21.8 41l-3.9 12.1c-2.2 6.7-3.8 
                                        12.4-3.6 12.5.2.2 5-3 10.6-7.1 5.7-4.1 10.9-7.2 11.5-6.8.6.4 5.3 3.8 10.5 7.5 5.2 3.8 9.6 6.6 9.8 6.4.2-.2
                                        -1.4-5.8-3.6-12.5l-3.9-12.2 8.5-6.2c14.7-10.6 14.8-9.6-.4-9.7H44.2L40 12.5C37.7 5.6 35.7 0 35.5 0c-.3 0-2.2 5.5-4.3 12.2Z" 
                                        fill="currentColor"/></svg>
                                    </span>
                                    <span>LOGO</span>
                                </a>
                            </div>
                            <div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute 
                            lg:text-base md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex fixed': showMenu, 'hidden': !showMenu }">
                                <div class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative 
                                md:flex md:flex-row">
                                    <a href="#_" class="inline-flex items-center block w-auto h-16 px-6 text-xl font-black leading-none text-gray-900 md:hidden">
                                        <svg class="w-auto h-5" viewBox="0 0 355 99" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs>
                                            <path d="M119.1 87V66.4h19.8c34.3 0 34.2-49.5 0-49.5-11 0-22 .1-33 .1v70h13.2zm19.8-32.7h-19.8V29.5h19.8c16.8 0 16.9 24.8 0 
                                            24.8zm32.6-30.5c0 9.5 14.4 9.5 14.4 0s-14.4-9.5-14.4 0zM184.8 87V37.5h-12.2V87h12.2zm22.8 0V61.8c0-7.5 5.1-13.8 12.6-13.8 7.8 0 
                                            11.9 5.7 11.9 13.2V87h12.2V61.1c0-15.5-9.3-24.2-20.9-24.2-6.2 0-11.2 2.5-16.2 7.4l-.8-6.7h-10.9V87h12.1zm72.1 1.3c7.5 0 16-2.6 
                                            21.2-8l-7.8-7.7c-2.8 2.9-8.7 4.6-13.2 4.6-8.6 0-13.9-4.4-14.7-10.5h38.5c1.9-20.3-8.4-30.5-24.9-30.5-16 0-26.2 10.8-26.2 25.8 0 
                                            15.8 10.1 26.3 27.1 26.3zM292 56.6h-26.6c1.8-6.4 7.2-9.6 13.8-9.6 7 0 12 3.2 12.8 9.6zm41.2 32.1c14.1 0 21.2-7.5 21.2-16.2 
                                            0-13.1-11.8-15.2-21.1-15.8-6.3-.4-9.2-2.2-9.2-5.4 0-3.1 3.2-4.9 9-4.9 4.7 0 8.7 1.1 12.2 4.4l6.8-8c-5.7-5-11.5-6.5-19.2-6.5-9 
                                            0-20.8 4-20.8 15.4 0 11.2 11.1 14.6 20.4 15.3 7 .4 9.8 1.8 9.8 5.2 0 3.6-4.3 6-8.9 5.9-5.5-.1-13.5-3-17-6.9l-6 8.7c7.2 7.5 15 
                                            8.8 22.8 8.8z" id="a"></path></defs><g fill="none" fill-rule="evenodd"><g fill="currentColor">
                                                <path d="M19.742 49h28.516L68 83H0l19.742-34z"></path><path d="M26 69h14v30H26V69zM4 50L33.127 0 63 50H4z"></path></g>
                                                <g fill-rule="nonzero"><use fill="currentColor" xlink:href="#a"></use><use fill="currentColor" xlink:href="#a"></use></g></g></svg>
                                    </a>
                                    <div class="flex flex-col items-start justify-center w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center">
                                        <a href="" class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-black md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Domů</a>
                                        <a href="/rezervation" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-black lg:mx-3 md:text-center">Rezervace letu</a>
                                        <a href="#_" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-black lg:mx-3 md:text-center">FAQ</a>
                                        <a href="#_" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-black lg:mx-3 md:text-center">Kontakt</a>
                                    </div>
                                    <div class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                                        <a href="/login" class="w-full px-6 py-2 mr-0 text-gray-700 md:px-3 md:mr-2 lg:mr-3 md:w-auto">Přihlášení</a>
                                        <a href="/register" class="inline-flex items-center w-full px-5 px-6 py-3 text-sm font-medium leading-4 text-white bg-gray-800 md:w-auto md:rounded-full hover:bg-gray-700 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-gray-700">Registrace</a>
                                    </div>
                                </div>
                            </div>
                            <div @click="showMenu = !showMenu" class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100">
                                <svg class="w-6 h-6 text-gray-700" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 6h16M4 12h16M4 18h16"></path></svg>
                                <svg class="w-6 h-6 text-gray-700" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            </div>
                        </div>
                    </nav>
    
                    <div class="flex items-center justify-start px-6">
                        <div class="container max-w-none w-1/2 py-32 text-left">
                          <h1 class="text-3xl font-bold leading-10 tracking-tight text-gray-900 sm:text-4xl md:text-7xl lg:text-8xl">
                           Nezapomenutelný <br> let nad krajinou
                          </h1>
                          <div class="mt-5 text-gray-400 md:mt-8 md:max-w-lg md:text-xl">
                                Rezervujte si svůj tandem paraglidingový let.
                          </div>
                          <div class="flex flex-col items-start mt-8 space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                            <span class="relative inline-flex w-full md:w-auto">
                              <a href="/login" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-white bg-gray-800 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                                Rezervace
                              </a>
                            </span>
                            <span class="relative inline-flex w-full md:w-auto">
                              <a href="#_" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-gray-800 bg-gray-100 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200">
                                Více info
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


     
    <section class=" px-2 py-32 bg-white md:px-0">
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




<section class="bg-[#0284c7]">
    <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
        <nav class="flex flex-wrap justify-center -mx-5 -my-2">
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    About
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Blog
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Team
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Pricing
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Contact
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Terms
                </a>
            </div>
        </nav>
        <div class="flex justify-center mt-8 space-x-6">
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Instagram</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">GitHub</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Dribbble</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <p class="mt-8 text-base leading-6 text-center text-gray-400">
            &copy; 2021 SomeCompany, Inc. All rights reserved.
        </p>
    </div>
</section>

</body>

</html>