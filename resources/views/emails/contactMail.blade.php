{{-- <div>

    <p> Hello, S.I.NEPH , you have a new message.</p>
    <b>Firstname and Name</b> {{$contact['nom']}}<br>
    <b>Email</b>   {{$contact['email']}}<br>
    <b>Message</b> {{$contact['message']}}<br>
    <b>
        <a href="https://www.afran2021.org/">Afran2021</a> <br>
    </b>


</div> --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <link href="{{ asset('css/style.css') }}" rel="stylesheet">
         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <title>-i-transmission | Message  </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=kanit:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body class="antialiased">
        <section class="text-gray-900 mt-5 xl:w-2/3 lg:w-2/3 mx-auto rounded-lg mb-4 shadow-2xl border-double border-secondary-100">
            <div class="bg-primary-100 py-4 rounded-t-lg">
                <div class="flex mx-auto justify-between w-full max-w-sm">
                    <div>
                        <img src="{{asset('images/LOGOSINEPH.png')}}" class=" w-16 h-auto ">
                    </div>
                    <div>
                        <img src="{{asset('images/apna.png')}}" class=" w-16 h-auto">
                    </div>
                    <div>
                        <img src="{{asset('images/logoafran.png')}}" class=" w-16 h-auto">
                    </div>
                </div>
                <h1 class="m-0 text-3xl font-bold leading-tight text-center text-primary-300 border-solid sm:text-4xl md:text-4xl mt-8">
                    i-transmission
                </h1>
                <div class="flex py-4 w-full mx-auto">
                    <div class="flex-1 h-1.5 bg-green-400"></div>
                    <div class="flex-1 h-1.5 bg-red-500"></div>
                    <div class="flex-1 h-1.5 bg-yellow-400"></div>
                    <div class="flex-1 h-1.5 bg-indigo-500"></div>
                    <div class="flex-1 h-1.5 bg-pink-400"></div>
                </div>
            </div>
            <div class="flex mx-auto w-full px-12 py-4 text-center bg-gray-50">
                <h3 class="text-3xl text-center font-medium uppercase my-2 justify-center justify-items-end mx-auto"> Bureau de distributions,
                    Ventes de Pièces de Transmissions Industrielles et Automobiles </h3>
            </div>
            <hr>
            <div class="mx-auto w-full py-1 px-6 bg-gray-50 text-gray-700">

                <div class="flex w-full p-5">
                    <div class="w-full flex">
                        Hello, i-transmission , vous avez un nouveau message.
                    </div>
                </div>

                <div class=" flex w-full p-5 mx-auto">
                    <div class="w-full">
                        <div class="px-1 py-2 text-left">Votre nom :</div>
                        <div class="px-1 py-2 font-bold text-left">{{$contact['name']}}</div>
                    </div>
                </div>

                <div class=" flex w-full p-5 text-center">
                    <div class="w-full">
                        <div class="px-1 py-2">E-mail :</div>
                        <div class="px-1 py-2 font-bold"> {{$contact['email']}}</div>
                    </div>
                </div>

                <div class=" flex w-full p-5 text-center">
                    <div class="w-full">
                        <div class="px-1 py-2">Message :</div>
                        <div class="px-1 py-2 font-bold"> {{$contact['description']}}</div>
                    </div>
                </div>


                <hr>

                <div class="w-full p-5">

                    <div class="w-full py-6 mx-auto text-center font-bold">
                        <a href="http://127.0.0.1:8000/accueil">i-transmissions</a>
                    </div>
                </div>

                <div class="items-center text-center  bg-primary-100 mb-4">
                    <p class="text-xs text-gray-600">&copy; {{ date('Y') }} i-transmissions -
                        {{ __('Tous droits réservés') }}.
                    </p>
                </div>
            </div>


        </section>


        <!-- AlpineJS Library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>
    </body>
</html>
