<div class="static bg-cover bg-center h-screen  ">

    @section('topbar')
    <livewire:Layout.Topbar />
    @endsection

    <div class="h-full w-full">

        <div class=" max-w-screen-xl flex items-center justify-between mx-auto relative    mt-28  rounded-[15px]">

            <section class="w-full  items-center">
                <div class="max-w-screen-xl flex items-center justify-between mx-auto relative ">
                    <!-- Start coding here -->
                    <div class="relative w-full bg-white shadow-md dark:bg-[#649dad] sm:rounded-lg ">
                        <div class="flex flex-col items-center w-full justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
                            <div class="w-full md:w-1/2">

                            </div>
                            <div class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">

                                <div class="flex items-center w-full space-x-3 md:w-auto">


                                    <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:text-white dark:focus:ring-gray-700 dark:bg-[#649dad] dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-[#649dad]" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 text-white" viewbox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                                        </svg>
                                         <p class="text-white">Filter</p>
                                        <svg class="-mr-1 ml-1.5 w-5 h-5 text-white" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-[#649dad]">
                                        <h6 class="mb-3 text-sm font-medium text-black dark:text-white">
                                            Category
                                        </h6>
                                        <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                                            <li class="flex items-center">
                                                <input id="apple" type="checkbox" value=""
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                                <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                                    Apple (56)
                                                </label>
                                            </li>
                                            <li class="flex items-center">
                                                <input id="fitbit" type="checkbox" value=""
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                                <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                                    Fitbit (56)
                                                </label>
                                            </li>
                                            <li class="flex items-center">
                                                <input id="dell" type="checkbox" value=""
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                                <label for="dell" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                                    Dell (56)
                                                </label>
                                            </li>
                                            <li class="flex items-center">
                                                <input id="asus" type="checkbox" value="" checked
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                                <label for="asus" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                                    Asus (97)
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class=" flex-row w-full h-screen grid grid-cols-3  gap-24 justify-between   mt-10  rounded-[15px]   ">

                    @for ($i=0; $i<6; $i++)
                        <livewire:pagina.market-place.componente.musica>

                        @endfor


                </div>
            </section>



        </div>
    </div>
</div>