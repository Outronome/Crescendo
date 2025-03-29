<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/logo.ico') }}">
    <title>{{ $title ?? 'Crescendo' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    @vite('resources/js/app.js')
</head>

<body class="flex flex-col   max-h-screen w-full bg-[#85b2bf]" x-data="{ isSidebarExpanded: false }">

    <header><livewire:layout.topbar></header>
    
    <main class="bg-[#85b2bf]">
        <section class="">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
               
                <form action="{{ route('login') }}" method="POST" 
                    class="w-full bg-[#649dad] rounded-lg shadow  md:mt-0 sm:max-w-md xl:p-0 ">
                    @csrf
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl dark:text-white">
                            Sign in to your account
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="#">
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-[#85b2bf] border border-gray-300 text-black rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@company.com" id="email" name="email" value="{{ old('email') }}"
                                    required>
                                @error('email')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" required placeholder="••••••••"
                                    class="bg-[#85b2bf] border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                                @error('password')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox"
                                            class="w-4 h-4 border border-gray-300 rounded bg-[#85b2bf] focus:ring-3 focus:ring-primary-300  dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                            required="">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500 dark:text-gray-300">Remember
                                            me</label>
                                    </div>
                                </div>
                                <a href="{{ route('password.request') }}"
                                    class="text-sm font-medium text-white hover:underline dark:text-primary-500">Forgot
                                    password?</a>
                            </div>
                            <button type="submit"
                                class="w-full  text-white bg-[#85b2bf] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign
                                in</button>
                            <p class="text-sm font-light text-white">
                                Don’t have an account yet? <a href="{{ route('register') }}"
                                    class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign
                                    up</a>
                            </p>
                        </form>
                    </div>
            </div>
            </div>
        </section>
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