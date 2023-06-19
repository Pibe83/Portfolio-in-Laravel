<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Portfolio</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="css/animate.css">


  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
  <header class="text-gray-600 body-font">
  <div class="container mx-auto bg-white flex flex-wrap p-5 flex-col md:flex-row items-center sticky top-0 z-10 navbar">
  <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="/">
    <span class="ml-3 text-xl">Portfolio</span>
  </a>
  <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center mt-4 md:mt-0">
    <a class="mr-5 hover:text-gray-900" href="/clients">Progetti</a>
    <a class="mr-5 hover:text-gray-900" href="/about">Contattami</a>
  </nav>
  
</div>

    <section class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-col md:flex-row items-center">
    <div class="md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center tracking-in-contract">
      <h1 class="title-font sm:text-4xl text-3xl font-medium text-gray-900 tracking-in-contract">David Scattone
        <br class="hidden lg:inline-block">FRONTEND DEVELOPER
      </h1>
      <div class="flex flex-col md:flex-row mt-4">
        <a href="https://drive.google.com/file/d/1wcjJe-aaPg-nG6UEp08hHAQ-b2qgzfaL/view?usp=sharing" class="text-white py-2 px-4 hover:bg-indigo-600 button mb-2 md:mb-0 md:mr-2" target="_blank">Curriculum Vitae</a>
        <a href="https://github.com/Pibe83" class="text-white py-2 px-4 hover:bg-indigo-600 button-github" target="_blank">Github</a>
      </div>
    </div>
    <div class="md:w-1/2 w-full">
      <img class="object-cover object-center rounded" alt="hero" src="/immages/Pibe-2.jpg">
    </div>
  </div>
</section>


    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20 presentazione">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900 text-shadow-drop-tr">CHI SONO</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Mi chiamo David, ho 40 anni e vivo in provincia di Roma.Dopo aver deciso di cambiare radicalmente la mia vita professionale, ho scoperto le "Career Accelerator Platform" e mi sono formato con EPICODE.
            Grazie a oltre 450 ore di studio intensivo, di cui il 70% dedicato alla pratica, ho acquisito solide competenze direttamente dai professionisti del settore.
          </p>
          <h1 class="text-center text-2xl font-medium mt-5 text-shadow-drop-tr">LE MIE SKILLS</h1>
        </div>

        <div class="flex flex-wrap justify-center icone">
  <img class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 mr-5 mb-5" src="/immages/tris.png" alt="Image 1">
  <img class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 loghi2" src="/immages/tris3.png" alt="Image 2">
  
</div>
<!--DROPDOWN-->

<div class="relative text-center">
  <button id="dropdownButton" class=" hover:bg-blue-600 text-white font-bold py-2 px-4  focus:outline-none focus:shadow-outline button">
    Certificazioni
  </button>
  <div id="dropdownMenu" class="absolute hidden bg-white rounded-lg shadow-md mt-2 w-full">
    <ul class="divide-y divide-gray-200 flex flex-wrap justify-center">
      <li class="px-4 py-2 flex items-center">
        <img class="w-8 h-8 rounded-full mr-2" src="path/to/image1.jpg" alt="Immagine 1">
        <span class="text-center">Immagine 1</span>
      </li>
      <li class="px-4 py-2 flex items-center">
        <img class="w-8 h-8 rounded-full mr-2" src="path/to/image2.jpg" alt="Immagine 2">
        <span>Immagine 2</span>
      </li>
      <li class="px-4 py-2 flex items-center">
        <img class="w-8 h-8 rounded-full mr-2" src="path/to/image1.jpg" alt="Immagine 1">
        <span class="text-center">Immagine 1</span>
      </li>
      <li class="px-4 py-2 flex items-center">
        <img class="w-8 h-8 rounded-full mr-2" src="path/to/image1.jpg" alt="Immagine 1">
        <span class="text-center">Immagine 1</span>
      </li>
      <li class="px-4 py-2 flex items-center">
        <img class="w-8 h-8 rounded-full mr-2" src="path/to/image1.jpg" alt="Immagine 1">
        <span class="text-center">Immagine 1</span>
      </li>
      <li class="px-4 py-2 flex items-center">
        <img class="w-8 h-8 rounded-full mr-2" src="path/to/image1.jpg" alt="Immagine 1">
        <span class="text-center">Immagine 1</span>
      </li>
      <!-- Aggiungi ulteriori elementi li per ogni immagine -->
    </ul>
  </div>
</div>

<script>
  const dropdownButton = document.getElementById('dropdownButton');
  const dropdownMenu = document.getElementById('dropdownMenu');

  dropdownButton.addEventListener('click', function() {
    dropdownMenu.classList.toggle('hidden');
  });
</script>



<!--FOOTER-->

  
  </header>
</body>

</html>