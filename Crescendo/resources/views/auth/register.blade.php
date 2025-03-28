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

        /* tirar o butao de aumentar e diminuir no input numerico */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    @vite('resources/js/app.js')
</head>

<body class="flex flex-col   max-h-screen w-full" x-data="{ isSidebarExpanded: false }">

    <header>@yield('topbar')</header>
    <nav>@yield('sidebar')</nav>
    <main class="">
        <section class="bg-[#85b2bf]">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-8 h-8 mr-2" src="/assets/img/Symbol.png" alt="logo">
                    Crescendo
                </a>

                <div class="w-full bg-[#649dad] rounded-lg shadow  md:mt-0 sm:max-w-md xl:p-0 ">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Create an account
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div>
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#85b2bf] dark:border-gray-600 dark:placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Batata" required="">
                                @error('name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#85b2bf] dark:border-gray-600 dark:placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@company.com" required="">
                                @error('email')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#85b2bf] dark:border-gray-600 dark:placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                                @error('password')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="confirm-password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                                    password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder=" Confirm Password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#85b2bf] dark:border-gray-600 dark:placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                            </div>
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="terms" aria-describedby="terms" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-[#85b2bf] dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                        required="">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the
                                        <a class="font-medium text-primary-600 hover:underline dark:text-primary-500"
                                            href="#">Terms and Conditions</a></label>
                                </div>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#85b2bf] dark:focus:bg-[#649dad] dark:focus:bg-[#649dad]">Create
                                an account</button>
                            <p class="text-sm font-light text-black dark:black">
                                Already have an account? <a href="{{ route('login') }}"
                                    class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login
                                    here</a>
                            </p>
                            <p class="text-sm font-light text-black dark:black">
                                Want to become an Artist? <a href="{{ route('register-artist') }}"
                                    class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign Up here</a>
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
                    picker.setOptions({
                        language: "pt"
                    });
                }
            }
        }, 100);
    });
</script>

</html>