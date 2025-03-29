<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('assets/img/logo/logo.ico') }}">
        <title>{{ $title ?? 'Crescendo' }}</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
        @livewireStyles
        <style>
            ::-webkit-scrollbar-track {
                background-color: #F4F4F4;
            }
            ::-webkit-scrollbar {
                width: 6px;
                background: #F4F4F4;
            }
            ::-webkit-scrollbar-thumb {
                background: #dad7d7;
            }
            /* tirar o botao de aumentar e diminuir no input numerico */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button{
                -webkit-appearance: none;
                margin: 0;
            }
            
        </style>
        @vite('resources/js/app.js')
    </head>

    <body class="flex flex-col  max-h-screen w-full bg-[#85b2bf]" x-data="{ isSidebarExpanded: false }">
        
        <header>@yield('topbar')</header>
        <nav class="mb-16">@yield('sidebar')</nav>
        <main class="">
            @if( isset($slot) ) 
            {{ $slot }} 
            @endif
        </main>
        
        <footer>@yield('footer')</footer>
        @livewireScripts

        
    </body>
    <script>
      window.addEventListener("load", () => {
      setTimeout(() => {
          let locales = {
            pt: {
              days: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sabado"],
              daysShort: ["Dom", "Seg", "Ter", "Quar", "Quin", "Sex", "Sab"],
              daysMin: ["D", "S", "T", "Q", "Q", "S", "S"],
              months: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
              monthsShort: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
              today: "Hoje",
              clear: "Apagar",
              titleFormat: "MM y"
            }
          };
          let flowbitePickers = Object.values(FlowbiteInstances.getInstances("Datepicker")).map((instance) => {
              return instance.getDatepickerInstance();
          });
          for (const flowbitePicker of flowbitePickers) {
              for (const picker of flowbitePicker.datepickers || [flowbitePicker]) {
                  Object.assign(picker.constructor.locales, locales);
                  picker.setOptions({ language: "pt" });
              }
          }
      }, 100);
  });
    </script>

</html>