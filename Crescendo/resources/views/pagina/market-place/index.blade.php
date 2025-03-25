<div class="static bg-cover bg-center h-screen  bg-[#66c6ba]">

    <div class=" h-screen w-screen p-4">

        <div class=" p-4 w-5/7 h-3/4 flex items-center justify-center mx-[50px] mt-28 bg-[#8bd4cb] rounded-[15px]">

            <div class=" h-full w-1/4 border border-black p-4 flex flex-col  rounded-[15px]">

                <h1 class="text-2xl font-bold">Filtros</h1>

                <input
                    class="  border border-black rounded-[5px] mt-[10px] pl-[5px] mb-[10px] bg-[#85b2bf]"
                    type="text" placeholder="Nome da musica">

                <h2 class="text-2xl font-bold mb-[10px]">Categoria</h2>

                <select id="Categorias"
                    class="bg-gray-50 border border-gray-300 text-[#8bd4cb] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                dark:bg-[#85b2bf] dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    <option class="text-black" selected>Escolha uma categoria</option>

                    <option class="text-black" value="">Rock</option>

                    <option class="text-black" value="">Pop</option>

                    <option class="text-black" value="">Rap</option>

                    <option class="text-black" value="">Fado</option>
                </select>
                <div>
                    <h3 class="text-2xl font-bold mb-[10px] mt-[10px]">Preços</h3>

                    <input class="w-1/5 ml-[50px] bg-[#85b2bf] " type="number" id="minValue" placeholder="0">

                    <label class=" ml-[20px] mr-[20px] font-bold text-1xl" for="">Ate</label>

                    <input class="w-1/5 bg-[#85b2bf] " type="number" id="maxValue" placeholder="200">
                </div>


                <h4 class="text-2xl font-bold mb-[10px] mt-[10px]">Duração</h4>


                <div class="flex items-center space-x-2">
                    <input class="w-1/3 bg-[#85b2bf] text-center" type="time" id="timeInput" placeholder="">
                    <button onclick="document.getElementById('timeInput').value = ''"
                        class="px-3 py-2 bg-[#85b2bf] text-black rounded border border-black ">
                        Limpar
                    </button>
                </div>
                <button
                    class="w-full border border-black rounded-[15px] mt-auto font-bold">Pesquisar</button>
            </div>

            <div
                class=" flex-row w-full h-full grid grid-cols-5 gap-16  px-16  border border-black p-4 rounded-[15px] ml-[10px] justify-center ">
                <div class="bg-[#85b2bf] rounded-[15px] w-[200px] h-[250px] ">
                    <div class="w-full h-2/3 border border-black rounded-tr-[15px] rounded-tl-[15px] overflow-hidden">
                        <img class="w-full h-full object-cover" src="/assets/img/271.jpg" alt="">
                    </div>

                </div>
                <div class="bg-[#85b2bf] rounded-[15px] w-[200px] h-[250px] "></div>
                <div class="bg-[#85b2bf] rounded-[15px] w-[200px] h-[250px] "></div>
                <div class="bg-[#85b2bf] rounded-[15px] w-[200px] h-[250px] "></div>
                <div class="bg-[#85b2bf] rounded-[15px] w-[200px] h-[250px] "></div>
            </div>
        </div>
    </div>
</div> 