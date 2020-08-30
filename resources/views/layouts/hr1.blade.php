<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="antialiased bg-gray-200">

    <div x-data="{ sidemenu: false }" class="h-screen flex overflow-hidden">

        <div class="md:hidden">
            <div  class="fixed inset-0 z-30 bg-gray-600 opacity-0 pointer-events-none transition-opacity ease-linear duration-300" :class="{'opacity-75 pointer-events-auto': sidemenu, 'opacity-0 pointer-events-none': !sidemenu}"></div>

            <!-- Small Screen Menu --> 
            <div class="fixed inset-y-0 left-0 flex flex-col z-40 max-w-xs w-full bg-white transform ease-in-out duration-300 -translate-x-full" :class="{'translate-x-0': sidemenu, '-translate-x-full': !sidemenu}">

                <!-- Brand Logo / Name -->
                <div class="flex items-center px-6 py-3 h-16">
                    <div class="text-2xl font-bold tracking-tight text-gray-800">Dashing Admin.</div>
                </div>

                <div class="px-4 py-2 flex-1 h-0 overflow-y-auto">
                    <ul>
                        <li>
                            <a href="#"
                                class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                    <rect x="4" y="4" width="6" height="6" rx="1" />
                                    <rect x="14" y="4" width="6" height="6" rx="1" />
                                    <rect x="4" y="14" width="6" height="6" rx="1" />
                                    <rect x="14" y="14" width="6" height="6" rx="1" />
                                </svg>
                                Dashboard
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                    <line x1="4" y1="19" x2="20" y2="19" />
                                    <polyline points="4 15 8 9 12 11 16 6 20 10" />
                                </svg>
                                Analytics
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                    <polyline points="14 3 14 8 19 8" />
                                    <path d="M17 21H7a2 2 0 0 1 -2 -2V5a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                    <line x1="9" y1="9" x2="10" y2="9" />
                                    <line x1="9" y1="13" x2="15" y2="13" />
                                    <line x1="9" y1="17" x2="15" y2="17" />
                                </svg>
                                Invoices
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-blue-700 hover:text-blue-600 hover:bg-gray-200 bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                    <circle cx="12" cy="12" r="9" />
                                    <polyline points="12 7 12 12 9 15" />
                                </svg>
                                Tracking
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                    <path
                                        d="M16 6h3a 1 1 0 011 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                                    <line x1="8" y1="8" x2="12" y2="8" />
                                    <line x1="8" y1="12" x2="12" y2="12" />
                                    <line x1="8" y1="16" x2="12" y2="16" />
                                </svg>
                                History
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                    <path
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                                Settings
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>


        <!-- Menu Above Medium Screen -->
        <div class="bg-white w-64 min-h-screen overflow-y-auto hidden md:block shadow relative z-30">

            <!-- Brand Logo / Name -->
            <div class="flex items-center px-6 py-3 h-16">
                <div class="text-2xl font-bold tracking-tight text-gray-800">Dashing Admin.</div>
            </div>

            <div class="px-4 py-2">
                <ul>
                    <li>
                        <a href="#"
                            class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                <rect x="4" y="4" width="6" height="6" rx="1" />
                                <rect x="14" y="4" width="6" height="6" rx="1" />
                                <rect x="4" y="14" width="6" height="6" rx="1" />
                                <rect x="14" y="14" width="6" height="6" rx="1" />
                            </svg>
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                <line x1="4" y1="19" x2="20" y2="19" />
                                <polyline points="4 15 8 9 12 11 16 6 20 10" />
                            </svg>
                            Analytics
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                <polyline points="14 3 14 8 19 8" />
                                <path d="M17 21H7a2 2 0 0 1 -2 -2V5a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                <line x1="9" y1="9" x2="10" y2="9" />
                                <line x1="9" y1="13" x2="15" y2="13" />
                                <line x1="9" y1="17" x2="15" y2="17" />
                            </svg>
                            Invoices
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-blue-600 hover:text-blue-600 hover:bg-gray-200 bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                <circle cx="12" cy="12" r="9" />
                                <polyline points="12 7 12 12 9 15" />
                            </svg>
                            Tracking
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                <path
                                    d="M16 6h3a 1 1 0 011 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                                <line x1="8" y1="8" x2="12" y2="8" />
                                <line x1="8" y1="12" x2="12" y2="12" />
                                <line x1="8" y1="16" x2="12" y2="16" />
                            </svg>
                            History
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                <path
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                            Settings
                        </a>
                    </li>
                </ul>

                <div class="bg-orange-200 mb-10 p-6 rounded-lg mt-16">
                    <h2 class="text-gray-800 text-lg leading-tight">Try <strong class="font-bold">Dashing Admin.</strong></h2>
                    <p class="text-gray-800 text-lg mb-4 leading-tight">Premium for free!</p>

                    <button class="shadow text-center w-full block bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline text-white font-semibold py-2 px-4 rounded-lg">
                        30 Days Free Trail    
                    </button>
                </div>
            </div>
        </div>

        <div class="flex-1 flex-col relative z-0 overflow-y-auto">
            <div class="px-4 md:px-8 py-2 h-16 flex justify-between items-center shadow-sm bg-white">
                <div class="flex items-center w-2/3">
                    <input class="bg-gray-200 focus:outline-none focus:shadow-outline focus:bg-white border border-transparent focus:border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal hidden md:block placeholder-gray-700 mr-10" type="text" placeholder="Search...">

                    <div class="p-2 rounded-full hover:bg-gray-200 cursor-pointer md:hidden" >
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <line x1="4" y1="6" x2="20" y2="6" />
                            <line x1="4" y1="12" x2="20" y2="12" />
                            <line x1="4" y1="18" x2="20" y2="18" />
                        </svg>
                    </div>
                    <div class="text-xl font-bold tracking-tight text-gray-800 md:hidden ml-2">Dashing Admin.</div>
                </div>
                <div class="flex items-center">
                     
                    <a href="#" class="text-gray-500 p-2 rounded-full hover:text-blue-600 hover:bg-gray-200 cursor-pointer mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                        </svg>                        
                    </a>
                     
                    <div class="relative" x-data="{ open: false }" x-cloak>
                        <div @click="open = !open"
                            class="cursor-pointer font-bold w-10 h-10 bg-blue-200 text-blue-600 flex items-center justify-center rounded-full">
                            DA
                        </div>

                        <div x-show.transition="open" @click.away="open = false"
                            class="absolute top-0 mt-12 right-0 w-48 bg-white py-2 shadow-md border border-gray-100 rounded-lg z-40">
                            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Edit
                                Profile</a>
                            <a href="#"
                                class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Account
                                Settings</a>
                            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Sign
                                Out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:max-w-6xl md:mx-auto px-4 py-8">
                @yield('content')
            </div>
            {{-- <div class="md:max-w-6xl md:mx-auto px-4 py-8">

                <div class="bg-red-200 text-red-700 px-6 py-4 rounded-lg relative mb-5" role="alert" x-data="{ open: true }" x-show.transition="open">
                    <div class="mr-4">
                        <strong class="font-bold">Account Due!</strong>
                        <span class="block sm:inline">Please renew your account to continue using our services.</span>
                    </div>

                    <span class="cursor-pointer absolute top-0 bottom-0 right-0 hover:bg-red-100 hover:text-red-600 w-10 h-10 rounded-full inline-flex items-center justify-center mt-2 mr-3" x-on:click="open = false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                          </svg>
                    </span>
                </div>

                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-bold text-gray-800">Dashboard</h2>
                 
                    <button class="shadow inline-flex items-center bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline text-white font-semibold py-2 px-4 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
                            Create Invoice            
                        </button>
                </div>

                <div class="bg-orange-200 mb-10 p-6 rounded-lg shadow">
                    <div class="md:flex">
                        <div class="md:w-1/2">
                            <h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-2 leading-tight">Power your business with Dashing Admin.</h2>
        
                            <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ipsam vero. Ut mollitia, cumque amet suscipit quas error minima maiores aperiam.</p>
        
                            <button class="shadow inline-flex items-center bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline text-white font-semibold py-2 px-4 rounded-lg">
                                Take a Tour
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 text-gray-300" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                    <circle cx="12" cy="12" r="9" />
                                    <line x1="16" y1="12" x2="8" y2="12" />
                                    <line x1="16" y1="12" x2="12" y2="16" />
                                    <line x1="16" y1="12" x2="12" y2="8" />
                                </svg>                        
                            </button>
                        </div>
                        <div class="md:w-1/2">
                             
                             <svg class="w-64 h-48 object-cover mx-auto" id="f61e7f2c-3df8-44b9-b514-d2b672d0e0d5" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1100.99998 666.0509"><title>dev_focus</title><circle cx="633.92942" cy="214.02012" r="36.39575" fill="#2f2e41"/><path d="M693.56939,295.60077a36.40082,36.40082,0,0,1,32.03938,53.66882,36.38708,36.38708,0,1,0-60.45438-39.98247A36.306,36.306,0,0,1,693.56939,295.60077Z" transform="translate(-49.50001 -116.97455)" fill="#2f2e41"/><circle cx="565.91872" cy="107.03051" r="106.9125" fill="#2f2e41"/><path d="M531.5098,157.67094A106.89328,106.89328,0,0,1,679.677,146.461c-.87424-.83106-1.73925-1.66885-2.64768-2.47643A106.91251,106.91251,0,0,0,534.96321,303.79182c.90844.80758,1.84178,1.56849,2.76952,2.33937A106.89337,106.89337,0,0,1,531.5098,157.67094Z" transform="translate(-49.50001 -116.97455)" fill="#2f2e41"/><circle cx="565.01268" cy="144.17807" r="68.8589" fill="#ffb8b8"/><path d="M565.58663,282.89754s9.06039,83.35551-5.43622,92.41589,83.35551,21.74492,83.35551,21.74492-14.49662-90.60382,21.74491-114.16081Z" transform="translate(-49.50001 -116.97455)" fill="#ffb8b8"/><path d="M652.5663,360.81682s26.98248-12.60018-11.87783-8.11216-72.38788-12.72672-72.38788-12.72672-11.77434-11.77849-13.58641.906,5.43623,36.24153-34.42945,39.86568-76.10721-7.2483-90.60382,19.93284-7.2483,144.9661-7.2483,144.9661,27.18114,97.85213,48.92606,112.34874,212.01292-5.43623,212.01292-5.43623L737.73388,554.709V440.54818s-7.2483-39.86568-57.98644-28.99322c0,0-32.61737-7.24831-30.8053-23.557S652.5663,360.81682,652.5663,360.81682Z" transform="translate(-49.50001 -116.97455)" fill="#d0cde1"/><path d="M478.55,727.24542c1.12-4.88,1.87-7.64,1.87-7.64l-.57995-3.97-5.97-40.54-2.51-17.1c21.74-9.06,27.18-50.74,27.18-50.74l.82-.49,3.71-2.22v-.01l13.32-7.99.27-.16,5.38,3.58,10.93,7.29c38.24,28.12,77.18,27.62,101.21,23.19,14.69-2.71,23.82-6.88,23.82-6.88l26.36-8.79.82-.27.81.12,15.46,2.34.28.05,1.28.19-3.58,24.75-5.19,35.97c13.71,7.26,25.9,20.9,36.56,37.71q3.54,5.58,6.86,11.61c2.88,5.2,5.63,10.61,8.25,16.15.32.66.63,1.33.94,2,1.01,2.17,2.01,4.36,2.98005,6.56H473.75c.36-2.21.72-4.32,1.07-6.35a1.54822,1.54822,0,0,0,.04-.21c.13-.68.25-1.34.36-2C476.44,736.79541,477.62,731.28546,478.55,727.24542Z" transform="translate(-49.50001 -116.97455)" fill="#2f2e41"/><path d="M467.73451,378.93759s19.93284,36.24152,12.68454,81.54343S502.164,618.13166,502.164,618.13166l21.74492-5.43623s-14.49661-94.228-10.87246-115.97289,3.62415-106.9125-14.49661-117.78495S467.73451,378.93759,467.73451,378.93759Z" transform="translate(-49.50001 -116.97455)" fill="#2f2e41"/><path d="M678.47286,416.59979l7.61685,200.62583,14.49661,9.06038s20.83888-220.16727,9.96642-220.16727H688.4302A9.97043,9.97043,0,0,0,678.47286,416.59979Z" transform="translate(-49.50001 -116.97455)" fill="#2f2e41"/><circle cx="462.63037" cy="487.56653" r="9.06038" fill="#4299e1"/><circle cx="643.838" cy="496.62692" r="9.06038" fill="#4299e1"/><polygon points="506.12 58.104 506.12 126.963 522.067 126.963 542.362 105.218 539.644 126.963 610.133 126.963 605.784 105.218 614.482 126.963 625.717 126.963 625.717 58.104 506.12 58.104" fill="#2f2e41"/><ellipse cx="495.24775" cy="129.68146" rx="5.43623" ry="9.96642" fill="#ffb8b8"/><ellipse cx="634.77762" cy="129.68146" rx="5.43623" ry="9.96642" fill="#ffb8b8"/><path d="M721.4252,612.69543s-82.44948-15.40265-87.8857,11.77849,91.50985,15.40265,91.50985,15.40265Z" transform="translate(-49.50001 -116.97455)" fill="#ffb8b8"/><path d="M719.61312,426.05157S917.12944,583.70221,880.88791,621.75581,706.92859,648.937,706.92859,648.937l9.06038-45.3019,79.73135-9.06038L755.85465,554.709l-36.24153,3.62415Z" transform="translate(-49.50001 -116.97455)" fill="#d0cde1"/><path d="M427.86884,688.80263l25.36906,19.93284s18.12077,56.17437,45.30191,39.86568S473.17074,674.306,473.17074,674.306l-30.80529-10.87246Z" transform="translate(-49.50001 -116.97455)" fill="#ffb8b8"/><path d="M453.2379,397.05835l-25.30065,7.61381s-175.83982,130.104-183.08812,166.34551S279.27858,627.192,279.27858,627.192l157.65064,74.29513,16.30868-43.48983-74.29513-38.05361s5.43623-10.87245-16.30868-12.68453S337.265,581.89013,337.265,581.89013s43.48983-67.04682,67.04682-52.55021,30.8053,25.36907,30.8053,25.36907Z" transform="translate(-49.50001 -116.97455)" fill="#d0cde1"/><path d="M814.1,733.45544v6.07a13.34008,13.34008,0,0,1-.91,4.87,13.68227,13.68227,0,0,1-.97,2,13.4373,13.4373,0,0,1-11.55,6.56H354.12a13.43736,13.43736,0,0,1-11.55-6.56,13.68842,13.68842,0,0,1-.97-2,13.34153,13.34153,0,0,1-.91-4.87v-6.07a13.42641,13.42641,0,0,1,13.43-13.43h25.74v-2.83a.55908.55908,0,0,1,.56-.56h13.43a.55908.55908,0,0,1,.56.56v2.83h8.39v-2.83a.55908.55908,0,0,1,.56-.56h13.43a.55908.55908,0,0,1,.56.56v2.83h8.4v-2.83a.55908.55908,0,0,1,.56-.56h13.43a.55908.55908,0,0,1,.56.56v2.83h8.39v-2.83a.55908.55908,0,0,1,.56-.56h13.43a.55908.55908,0,0,1,.56.56v2.83h8.39v-2.83a.55908.55908,0,0,1,.56-.56h13.43a.55908.55908,0,0,1,.56.56v2.83h8.4v-2.83a.55908.55908,0,0,1,.56-.56h13.43a.55908.55908,0,0,1,.56.56v2.83h8.39v-2.83a.55908.55908,0,0,1,.56-.56h105.2a.55908.55908,0,0,1,.56.56v2.83h8.4v-2.83a.55908.55908,0,0,1,.56-.56h13.43a.56552.56552,0,0,1,.56.56v2.83h8.39v-2.83a.55908.55908,0,0,1,.56-.56h13.43a.55908.55908,0,0,1,.56.56v2.83h8.39v-2.83a.55908.55908,0,0,1,.56-.56h13.43a.55908.55908,0,0,1,.56.56v2.83h8.4v-2.83a.55908.55908,0,0,1,.56-.56h13.43a.557.557,0,0,1,.55.56v2.83h8.4v-2.83a.55908.55908,0,0,1,.56-.56H738a.55908.55908,0,0,1,.56.56v2.83h8.39v-2.83a.55908.55908,0,0,1,.56-.56h13.43a.55908.55908,0,0,1,.56.56v2.83h39.17A13.42636,13.42636,0,0,1,814.1,733.45544Z" transform="translate(-49.50001 -116.97455)" fill="#3f3d56"/><rect x="161.44819" y="627.41618" width="732.99951" height="2" fill="#3f3d56"/><path d="M778.14246,477.82126H611.69957v-3.43053H536.22789v3.43053h-167.129a11.25861,11.25861,0,0,0-11.25861,11.25861v227.9115A11.25864,11.25864,0,0,0,369.09889,728.25H778.14246a11.25864,11.25864,0,0,0,11.25861-11.25865V489.07987A11.2586,11.2586,0,0,0,778.14246,477.82126Z" transform="translate(-49.50001 -116.97455)" fill="#3f3d56"/><circle cx="524.44819" cy="440.41618" r="25" fill="none" stroke="#d0cde1" stroke-miterlimit="10" stroke-width="2"/><circle cx="516.44819" cy="449.41618" r="25" fill="#d0cde1"/><rect x="26.02015" y="663.55077" width="189" height="2.26159" fill="#3f3d56"/><rect x="851.02015" y="663.55077" width="189" height="2.26159" fill="#3f3d56"/><path d="M185.63919,707.69176c-19.911,32.5064-13.06067,72.9409-13.06067,72.9409s39.1325-12.26879,59.04353-44.7752,13.06067-72.9409,13.06067-72.9409S205.55022,675.18536,185.63919,707.69176Z" transform="translate(-49.50001 -116.97455)" fill="#3f3d56"/><path d="M171.76594,780.90107l-1.13209-.17932c-.40938-.06491-41.158-6.81651-65.56214-36.01491-24.40427-29.19937-23.817-70.4997-23.809-70.91351l.02429-1.14573,1.13209.17932c.40939.06492,41.158,6.81651,65.56228,36.01588h0c24.40414,29.19841,23.81684,70.49874,23.80885,70.91255Z" transform="translate(-49.50001 -116.97455)" fill="#4299e1"/><path d="M173.37365,781.92912l-1.09375-.34277c-.39551-.124-39.7207-12.75586-59.59766-45.20605-19.87695-32.45118-13.26269-73.22266-13.19433-73.63086l.1914-1.12989,1.09375.34278c.39551.124,39.72071,12.75586,59.59766,45.207h0c19.87695,32.45019,13.2627,73.22168,13.19434,73.62988Zm-72.081-117.67773c-.90528,6.84277-4.51368,42.33594,13.09472,71.084,17.60938,28.74707,50.86719,41.65821,57.373,43.96192.90527-6.84278,4.51367-42.33594-13.09473-71.083h0C141.05627,679.46623,107.79846,666.5551,101.2926,664.25139Z" transform="translate(-49.50001 -116.97455)" fill="#3f3d56"/><circle cx="124.32091" cy="536.32762" r="22" fill="#3f3d56"/><polygon points="399.789 258.254 273.582 131.051 214 131.051 214 129.051 274.417 129.051 274.711 129.348 401.211 256.848 399.789 258.254" fill="#3f3d56"/><polygon points="696.211 254.254 822.417 127.051 882 127.051 882 125.051 821.582 125.051 821.289 125.348 694.789 252.848 696.211 254.254" fill="#3f3d56"/><rect x="0.00009" y="68.33964" width="145.99988" height="28.87712" fill="#d0cde1"/><rect x="0.00009" y="112.65108" width="145.99988" height="28.87712" fill="#d0cde1"/><rect x="0.00009" y="156.96251" width="145.99988" height="28.87712" fill="#d0cde1"/><rect x="0.0001" y="68.33965" width="60.39875" height="28.87712" opacity="0.15"/><rect y="112.65105" width="19.55356" height="28.87712" opacity="0.15"/><rect x="0.00009" y="156.96251" width="97.33325" height="28.87712" opacity="0.15"/><rect x="954.7761" y="74.82702" width="146.22388" height="13.02985" fill="#d0cde1"/><rect x="899.99998" y="73.14045" width="28.95522" height="28.95522" fill="#4299e1"/><rect x="899.99998" y="116.57329" width="28.95522" height="28.95522" fill="#4299e1"/><rect x="899.99998" y="160.00612" width="28.95522" height="28.95522" fill="#4299e1"/><path d="M986.45507,213.07037H955.5V182.1148h30.95508Zm-28.95508-2h26.95508V184.1148H957.5Z" transform="translate(-49.50001 -116.97455)" fill="#3f3d56"/><rect x="954.7761" y="118.25985" width="146.22388" height="13.02985" fill="#d0cde1"/><path d="M986.45507,256.503H955.5V225.54791h30.95508Zm-28.95508-2h26.95508V227.54791H957.5Z" transform="translate(-49.50001 -116.97455)" fill="#3f3d56"/><rect x="954.7761" y="161.69269" width="146.22388" height="13.02985" fill="#d0cde1"/><path d="M986.45507,299.93561H955.5V268.98053h30.95508Zm-28.95508-2h26.95508V270.98053H957.5Z" transform="translate(-49.50001 -116.97455)" fill="#3f3d56"/><circle cx="188.99998" cy="83.0509" r="16" fill="#4299e1"/><circle cx="188.99998" cy="131.0509" r="16" fill="#4299e1"/><circle cx="188.99998" cy="174.0509" r="16" fill="#4299e1"/><path d="M230.5,213.02545a17,17,0,1,1,17-17A17.019,17.019,0,0,1,230.5,213.02545Zm0-32a15,15,0,1,0,15,15A15.017,15.017,0,0,0,230.5,181.02545Z" transform="translate(-49.50001 -116.97455)" fill="#3f3d56"/><path d="M230.5,261.02545a17,17,0,1,1,17-17A17.019,17.019,0,0,1,230.5,261.02545Zm0-32a15,15,0,1,0,15,15A15.017,15.017,0,0,0,230.5,229.02545Z" transform="translate(-49.50001 -116.97455)" fill="#3f3d56"/><path d="M230.5,304.02545a17,17,0,1,1,17-17A17.019,17.019,0,0,1,230.5,304.02545Zm0-32a15,15,0,1,0,15,15A15.017,15.017,0,0,0,230.5,272.02545Z" transform="translate(-49.50001 -116.97455)" fill="#3f3d56"/><path d="M1038.5,713.02545h-2v-15a3.00328,3.00328,0,0,1,3-3h5a1.00067,1.00067,0,0,0,1-1v-10a1.00067,1.00067,0,0,0-1-1h-5a3.00328,3.00328,0,0,1-3-3v-5a1.00067,1.00067,0,0,0-1-1h-9a3.00328,3.00328,0,0,1-3-3v-1a1.00067,1.00067,0,0,0-1-1h-36a1.00067,1.00067,0,0,0-1,1v1a3.00328,3.00328,0,0,1-3,3h-9a1.00067,1.00067,0,0,0-1,1v5a3.00328,3.00328,0,0,1-3,3h-5a1.00067,1.00067,0,0,0-1,1v10a1.00067,1.00067,0,0,0,1,1h6a3.00328,3.00328,0,0,1,3,3v15h-2v-15a1.00067,1.00067,0,0,0-1-1h-6a3.00328,3.00328,0,0,1-3-3v-10a3.00328,3.00328,0,0,1,3-3h5a1.00067,1.00067,0,0,0,1-1v-5a3.00328,3.00328,0,0,1,3-3h9a1.00067,1.00067,0,0,0,1-1v-1a3.00328,3.00328,0,0,1,3-3h36a3.00328,3.00328,0,0,1,3,3v1a1.00067,1.00067,0,0,0,1,1h9a3.00328,3.00328,0,0,1,3,3v5a1.00067,1.00067,0,0,0,1,1h5a3.00328,3.00328,0,0,1,3,3v10a3.00328,3.00328,0,0,1-3,3h-5a1.00067,1.00067,0,0,0-1,1Z" transform="translate(-49.50001 -116.97455)" fill="#3f3d56"/><path d="M1035.5,783.02545h-61a3.00328,3.00328,0,0,1-3-3v-43h2v43a1.00067,1.00067,0,0,0,1,1h61a1.00067,1.00067,0,0,0,1-1v-43h2v43A3.00328,3.00328,0,0,1,1035.5,783.02545Z" transform="translate(-49.50001 -116.97455)" fill="#3f3d56"/><rect x="921.99998" y="603.0509" width="79" height="24" rx="2" fill="#4299e1"/><path d="M1042,738.02545H967a3.00328,3.00328,0,0,1-3-3v-20a3.00328,3.00328,0,0,1,3-3h75a3.00328,3.00328,0,0,1,3,3v20A3.00328,3.00328,0,0,1,1042,738.02545Zm-75-24a1.00067,1.00067,0,0,0-1,1v20a1.00067,1.00067,0,0,0,1,1h75a1.00067,1.00067,0,0,0,1-1v-20a1.00067,1.00067,0,0,0-1-1Z" transform="translate(-49.50001 -116.97455)" fill="#3f3d56"/><path d="M1002.5,660.02545v0a249.6283,249.6283,0,0,1-2.09463-54.11121L1002.5,576.02545h0c-11.54175,22.96553-8.93335,53.1922,0,83.99993Z" transform="translate(-49.50001 -116.97455)" fill="#d0cde1"/><path d="M1011.5,665.02545v0a183.49687,183.49687,0,0,1-1.00779-32.20905L1011.5,615.02545h0c-5.55309,13.67-4.29811,31.662,0,50Z" transform="translate(-49.50001 -116.97455)" fill="#d0cde1"/></svg>
                             
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-bold text-gray-800">Last Invoices</h2>

                    <a href="#" class="text-blue-600 hover:text-blue-500 font-medium">View all</a>
                </div>
                <div class="overflow-x-auto bg-white rounded-lg shadow">
                    <table class="w-full whitespace-no-wrap bg-white overflow-hidden table-striped">
                        <thead>
                            <tr class="text-left">
                                <th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Invoice</th>
                                <th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Name</th>
                                <th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Date</th>
                                <th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs text-right">Amount</th>
                                <th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Status</th>
                            </tr>
                        </thead> 
                        <tbody>
                            <tr class="focus-within:bg-gray-200 overflow-hidden">
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center">#IN12345</span>
                                </td> 
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center">ABC Company</span>
                                </td> 
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center">10 Sep 2018</span>
                                </td> 
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center justify-end">₹12,000.00</span>
                                </td> 
                                <td class="border-t">
                                    <span class="px-6 py-4 flex items-center">
                                        <span class="px-2 rounded-full text-sm uppercase tracking-wide font-semibold bg-green-200 text-green-800">Completed</span>
                                    </span>
                                </td>
                            </tr>

                            <tr class="focus-within:bg-gray-200 overflow-hidden">
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center">#IN12344</span>
                                </td> 
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center">XYZ Company</span>
                                </td> 
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center">8 Sep 2018</span>
                                </td> 
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center justify-end">₹10,000.00</span>
                                </td> 
                                <td class="border-t">
                                    <span class="px-6 py-4 flex items-center">
                                        <span class="px-2 rounded-full text-sm uppercase tracking-wide font-semibold bg-orange-200 text-orange-800">Pending</span>
                                    </span>
                                </td>
                            </tr>

                            <tr class="focus-within:bg-gray-200 overflow-hidden">
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center">#IN12343</span>
                                </td> 
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center">CAC Company</span>
                                </td> 
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center">7 Sep 2018</span>
                                </td> 
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center justify-end">₹10,000.00</span>
                                </td> 
                                <td class="border-t">
                                    <span class="px-6 py-4 flex items-center">
                                        <span class="px-2 rounded-full text-sm uppercase tracking-wide font-semibold bg-blue-200 text-blue-800">Processing</span>
                                    </span>
                                </td>
                            </tr>

                            <tr class="focus-within:bg-gray-200 overflow-hidden">
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center">#IN12345</span>
                                </td> 
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center">ABC Company</span>
                                </td> 
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center">10 Sep 2018</span>
                                </td> 
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center justify-end">₹12,000.00</span>
                                </td> 
                                <td class="border-t">
                                    <span class="px-6 py-4 flex items-center">
                                        <span class="px-2 rounded-full text-sm uppercase tracking-wide font-semibold bg-green-200 text-green-800">Completed</span>
                                    </span>
                                </td>
                            </tr>

                            <tr class="focus-within:bg-gray-200 overflow-hidden">
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center">#IN12344</span>
                                </td> 
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center">XYZ Company</span>
                                </td> 
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center">8 Sep 2018</span>
                                </td> 
                                <td class="border-t">
                                    <span class="text-gray-700 px-6 py-4 flex items-center justify-end">₹10,000.00</span>
                                </td> 
                                <td class="border-t">
                                    <span class="px-6 py-4 flex items-center">
                                        <span class="px-2 rounded-full text-sm uppercase tracking-wide font-semibold bg-orange-200 text-orange-800">Pending</span>
                                    </span>
                                </td>
                            </tr>
 
                        </tbody>
                    </table>
                </div>
                
                <div class="py-10 text-center">
                    <p class="text-gray-600">Created by <a class="text-blue-600 hover:text-blue-500 border-b-2 border-blue-200 hover:border-blue-300" href="https://twitter.com/mithicher">@mithicher</a>. Built with <a class="text-blue-600 hover:text-blue-500 border-b-2 border-blue-200 hover:border-blue-300" href="https://tailwindcss.com/">tailwindCSS</a> and <a href="https://github.com/alpinejs/alpine" class="text-blue-600 hover:text-blue-500 border-b-2 border-blue-200 hover:border-blue-300">AlpineJS</a>. Illustration from <a href="https://undraw.co/illustrations" class="text-blue-600 hover:text-blue-500 border-b-2 border-blue-200 hover:border-blue-300">https://undraw.co/illustrations</a>. SVG icons from <a href="https://github.com/tabler/tabler-icons" class="text-blue-600 hover:text-blue-500 border-b-2 border-blue-200 hover:border-blue-300">Tabler Icons</a>.</p>
                </div>
            </div> --}}
        </div>
    </div>
</body>
</html>