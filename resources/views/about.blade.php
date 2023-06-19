<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dynamic Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="css/animate.css">
</head>

<body class="presentazione">
  <div class="container mx-auto bg-white flex flex-wrap p-5 flex-col md:flex-row items-center sticky top-0 z-10 navbar">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="/">
      <span class="ml-3 text-xl">Portfolio</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center mt-4 md:mt-0">
      <a class="mr-5 hover:text-gray-900" href="/clients">Progetti</a>
      <a class="mr-5 hover:text-gray-900" href="/about">Contattami</a>
    </nav>

  </div>
  <!-- Contatti-->
  <div class="container mx-auto">


    <ul class="bg-white shadow rounded-lg divide-y divide-gray-200 tracking-in-contract">
      <li class="px-4 py-3">
        <div class="flex items-center">
          <div class="w-10 h-10 bg-gray-400 rounded-full mr-4"></div>
          <div>
            <p class="font-bold">Contatti</p>
            <p class="text-gray-500">Email: davidscattone10@gmail.com</p>
            <p class="text-gray-500">Telefono: 3891698113</p>
            <a href="https://www.linkedin.com/in/david-scattone/">
              <span>Linkedin</span>
            </a>

          </div>
          <!--Form-->
          <form id="activity-form" class="max-w-md mx-auto">
            <span class="presentazione fw-bold">Fissa un'appuntamento</span>
            <div class=" mt-5">

              <label for="nome" class="block text-gray-700 font-bold mb-2">Nome:</label>
              <input type="text" id="nome" name="nome" class="w-1 px-2 py-2 border rounded" required>
            </div>
            <div class="mb-4">
              <label for="cognome" class="block text-gray-700 font-bold mb-2">Cognome:</label>
              <input type="text" id="cognome" name="cognome" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
              <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
              <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
              <label for="telefono" class="block text-gray-700 font-bold mb-2">Telefono:</label>
              <input type="tel" id="telefono" name="telefono" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
              <label for="data_prenotazione" class="block text-gray-700 font-bold mb-2">Data prenotazione:</label>
              <input type="date" id="data_prenotazione" name="data_prenotazione" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
              <label for="numero_partecipanti" class="block text-gray-700 font-bold mb-2">Numero partecipanti:</label>
              <input type="number" id="numero_partecipanti" name="numero_partecipanti" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
              <label for="richieste_speciali" class="block text-gray-700 font-bold mb-2">Richieste speciali:</label>
              <textarea id="richieste_speciali" name="richieste_speciali" class="w-full px-3 py-2 border rounded" rows="4"></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="hover:bg-blue-700 text-white font-bold py-2 px-4 button">Invia</button>
            </div>
          </form>

          <div id="modal" class="hidden fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
            <div class="bg-white rounded-lg p-6">
              <h2 class="text-xl font-bold mb-4">Dettagli Prenotazione</h2>
              <div id="modal-content"></div>
              <div class="text-center">
                <button id="close-modal" class=" hover:bg-blue-700 text-white font-bold py-2 px-4  button">Chiudi</button>
              </div>
            </div>
          </div>

          <script>
            function submitForm(event) {
              event.preventDefault();

              const nome = document.getElementById('nome').value;
              const cognome = document.getElementById('cognome').value;
              const email = document.getElementById('email').value;
              const telefono = document.getElementById('telefono').value;
              const dataPrenotazione = document.getElementById('data_prenotazione').value;
              const numeroPartecipanti = document.getElementById('numero_partecipanti').value;
              const richiesteSpeciali = document.getElementById('richieste_speciali').value;

              const formData = {
                nome: nome,
                cognome: cognome,
                email: email,
                telefono: telefono,
                data_prenotazione: dataPrenotazione,
                numero_partecipanti: numeroPartecipanti,
                richieste_speciali: richiesteSpeciali,
              };

              fetch('https://jsonserver-api.herokuapp.com/activities', {
                  method: 'POST',
                  headers: {
                    'Content-Type': 'application/json',
                  },
                  body: JSON.stringify(formData),
                })
                .then(response => response.json())
                .then(data => {
                  console.log('Risposta API:', data);
                  showReservationDetails(data);
                })
                .catch(error => {
                  console.error('Errore API:', error);
                  alert('Si è verificato un errore durante l\'invio del form.');
                });
            }

            function showReservationDetails(reservation) {
              const modal = document.getElementById('modal');
              const modalContent = document.getElementById('modal-content');

              modalContent.innerHTML = `
        <p><strong>Nome:</strong> ${reservation.nome}</p>
        <p><strong>Cognome:</strong> ${reservation.cognome}</p>
        <p><strong>Email:</strong> ${reservation.email}</p>
        <p><strong>Telefono:</strong> ${reservation.telefono}</p>
        <p><strong>Data prenotazione:</strong> ${reservation.data_prenotazione}</p>
        <p><strong>Numero partecipanti:</strong> ${reservation.numero_partecipanti}</p>
        <p><strong>Richieste speciali:</strong> ${reservation.richieste_speciali}</p>
      `;

              modal.classList.remove('hidden');
            }

            function closeModal() {
              const modal = document.getElementById('modal');
              modal.classList.add('hidden');
            }

            const form = document.getElementById('activity-form');
            form.addEventListener('submit', submitForm);

            const closeModalButton = document.getElementById('close-modal');
            closeModalButton.addEventListener('click', closeModal);
          </script>
</body>

</html>