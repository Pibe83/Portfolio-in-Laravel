<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="css/animate.css">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center navbar sticky top-0 z-10 navbar bg-white">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="/">

                <span class="ml-3 text-xl">Portfolio</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">

                <a class="mr-5 hover:text-gray-900 text-bold fw-bold" href="/clients">Progetti</a>
                <a class="mr-5 hover:text-gray-900 text-bold fw-bold" href="/about">Contatti</a>
            </nav>

        </div>
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center text-center">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 text-center">VisitAniene

                    </h1>
                    <p class="mb-8 leading-relaxed presentazione tracking-in-contract">VisitAniene è il mio progetto finale presentato al termine del bootcamp in Epicode.<br>Visitaniene è un'applicazione web sviluppata in React che consente agli utenti di prenotarsi alle varie attività offerte dalla città di Subiaco e di controllare il meteo in tempo reale e del giorno successivo.<br>Il progetto Visitaniene è stato sviluppato utilizzando le seguenti tecnologie:

                        <br>React ⚛️
                        <br>React Bootstrap 🎨
                        <br>React Router 🔄
                        <br>OpenWeatherMap API per il meteo ☁️
                        <br>API proprietarie generate con JSON Server
                    </p>
                    <div class="flex justify-center">
                        <a href="https://progetto-finale-iota.vercel.app/" class="inline-flex text-white  border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600  text-lg button">Vai al Progetto</a>
                        <a href="https://github.com/Pibe83/progetto-finale" class="inline-flex text-white  border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600  text-lg button ml-3">Github</a>
                    </div>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 text-center">
                    <img class="object-cover object-center rounded" alt="anteprima progetto" src="/immages/screenshot visitaniene.png">
                </div>
            </div>
        </section>

        <section class="text-gray-600 body-font presentazione">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                    <img class="object-cover object-center rounded" alt="hero" src="/immages/linkedin.png">
                </div>
                <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center tracking-in-contract">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">LINKEDIN-CLONE
                        
                    </h1>
                    <p class="mb-8 leading-relaxed">Uno dei progetti di cui vado fiero. Il clone di LInkedin è stato fatto in team durante la settimana di buildweek del corso Epicode.</p>
                    <div class="flex justify-center">

                        <a href="https://github.com/Luigi-stack/LinkedIn-Build-week3" class="inline-flex text-white  border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600  text-lg button ml-3">Github</a>
                    </div>
                </div>
            </div>
        </section>



</body>

</html>