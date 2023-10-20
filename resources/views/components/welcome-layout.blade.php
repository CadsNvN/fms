<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="shortcut icon" href="{{ asset('images/Torreslogo.ico')}}" type="image/x-icon">
        
        <title>Torres Escaro Funeral Service</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
      
      {{-- header --}}
      <x-header />

      {{-- main --}}
      <main>
          {{$slot}}
      </main>

      {{-- footer --}}
      <x-footer/>

      {{-- flash messages --}}
      <x-flash-messages/>
      <script src="../path/to/flowbite/dist/flowbite.js"></script>
    </body>
</html>


