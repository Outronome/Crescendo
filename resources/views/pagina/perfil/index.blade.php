<section class="py-8 antialiased md:py-8">
  @section('topbar')
    <livewire:Layout.Topbar />
  @endsection
  <div class="mx-auto max-w-screen-lg px-4 2xl:px-0">

    <div class="flex items-center justify-between py-4 border-t border-gray-200">
      <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Visão Geral</h2>
    </div>

    <div
      class="grid grid-cols-2 gap-6 border-b border-t border-gray-200 py-4 dark:border-gray-700 md:py-8 lg:grid-cols-4 xl:gap-16">
      <div>
        <svg class="mb-2 h-8 w-8 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
          width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
        </svg>
        <h3 class="mb-2 text-gray-500 dark:text-gray-400">Orders made</h3>
        <span class="flex items-center text-2xl font-bold text-gray-900 dark:text-white">24
          <span
            class="ms-2 inline-flex items-center rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300">
            <svg class="-ms-1 me-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 6v13m0-13 4 4m-4-4-4 4"></path>
            </svg>
            10.3%
          </span>
        </span>
        <p class="mt-2 flex items-center text-sm text-gray-500 dark:text-gray-400 sm:text-base">
          <svg class="me-1.5 h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          vs 20 last 3 months
        </p>
      </div>
      <div>
        <svg class="mb-2 h-8 w-8 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
          width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-width="2"
            d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
        </svg>
        <h3 class="mb-2 text-gray-500 dark:text-gray-400">Reviews added</h3>
        <span class="flex items-center text-2xl font-bold text-gray-900 dark:text-white">16
          <span
            class="ms-2 inline-flex items-center rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300">
            <svg class="-ms-1 me-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 6v13m0-13 4 4m-4-4-4 4"></path>
            </svg>
            8.6%
          </span>
        </span>
        <p class="mt-2 flex items-center text-sm text-gray-500 dark:text-gray-400 sm:text-base">
          <svg class="me-1.5 h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          vs 14 last 3 months
        </p>
      </div>
      <div>
        <svg class="mb-2 h-8 w-8 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
          width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
        </svg>
        <h3 class="mb-2 text-gray-500 dark:text-gray-400">Favorite products added</h3>
        <span class="flex items-center text-2xl font-bold text-gray-900 dark:text-white">8
          <span
            class="ms-2 inline-flex items-center rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">
            <svg class="-ms-1 me-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 6v13m0-13 4 4m-4-4-4 4"></path>
            </svg>
            12%
          </span>
        </span>
        <p class="mt-2 flex items-center text-sm text-gray-500 dark:text-gray-400 sm:text-base">
          <svg class="me-1.5 h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          vs 10 last 3 months
        </p>
      </div>

      </div>
    <div class="py-4 md:py-8">
      <div class="mb-4 grid gap-4 sm:grid-cols-2 sm:gap-8 lg:gap-16">
        <div class="space-y-4">
          <div class="flex space-x-4">
            <img class="h-16 w-16 rounded-lg"
              src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/helene-engels.png"
              alt="Helene avatar" />
            <div>
              <span
                class="mb-2 inline-block rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                PRO Account </span>
              <h2 class="flex items-center text-xl font-bold leading-none text-gray-900 dark:text-white sm:text-2xl">
                Helene Engels</h2>
            </div>
          </div>
          <dl class="">
            <dt class="font-semibold text-gray-900 dark:text-white">Email Address</dt>
            <dd class="text-gray-500 dark:text-gray-400">helene@example.com</dd>
          </dl>
          <dl>
            <dt class="font-semibold text-gray-900 dark:text-white">Home Address</dt>
            <dd class="flex items-center gap-1 text-gray-500 dark:text-gray-400">
              <svg class="hidden h-5 w-5 shrink-0 text-gray-400 dark:text-gray-500 lg:inline" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
              </svg>
              2 Miles Drive, NJ 071, New York, United States of America
            </dd>
          </dl>
          <dl>
            <dt class="font-semibold text-gray-900 dark:text-white">Delivery Address</dt>
            <dd class="flex items-center gap-1 text-gray-500 dark:text-gray-400">
              <svg class="hidden h-5 w-5 shrink-0 text-gray-400 dark:text-gray-500 lg:inline" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
              </svg>
              9th St. PATH Station, New York, United States of America
            </dd>
          </dl>
        </div>
        <div class="space-y-4">
          <dl>
            <dt class="font-semibold text-gray-900 dark:text-white">Phone Number</dt>
            <dd class="text-gray-500 dark:text-gray-400">+1234 567 890 / +12 345 678</dd>
          </dl>
          <dl>
            <dt class="font-semibold text-gray-900 dark:text-white">Favorite pick-up point</dt>
            <dd class="flex items-center gap-1 text-gray-500 dark:text-gray-400">
              <svg class="hidden h-5 w-5 shrink-0 text-gray-400 dark:text-gray-500 lg:inline" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M6 12c.263 0 .524-.06.767-.175a2 2 0 0 0 .65-.491c.186-.21.333-.46.433-.734.1-.274.15-.568.15-.864a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 12 9.736a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 16 9.736c0 .295.052.588.152.861s.248.521.434.73a2 2 0 0 0 .649.488 1.809 1.809 0 0 0 1.53 0 2.03 2.03 0 0 0 .65-.488c.185-.209.332-.457.433-.73.1-.273.152-.566.152-.861 0-.974-1.108-3.85-1.618-5.121A.983.983 0 0 0 17.466 4H6.456a.986.986 0 0 0-.93.645C5.045 5.962 4 8.905 4 9.736c.023.59.241 1.148.611 1.567.37.418.865.667 1.389.697Zm0 0c.328 0 .651-.091.94-.266A2.1 2.1 0 0 0 7.66 11h.681a2.1 2.1 0 0 0 .718.734c.29.175.613.266.942.266.328 0 .651-.091.94-.266.29-.174.537-.427.719-.734h.681a2.1 2.1 0 0 0 .719.734c.289.175.612.266.94.266.329 0 .652-.091.942-.266.29-.174.536-.427.718-.734h.681c.183.307.43.56.719.734.29.174.613.266.941.266a1.819 1.819 0 0 0 1.06-.351M6 12a1.766 1.766 0 0 1-1.163-.476M5 12v7a1 1 0 0 0 1 1h2v-5h3v5h7a1 1 0 0 0 1-1v-7m-5 3v2h2v-2h-2Z" />
              </svg>
              Herald Square, 2, New York, United States of America
            </dd>
          </dl>
          <dl>
            <dt class="font-semibold text-gray-900 dark:text-white">My Companies</dt>
            <dd class="text-gray-500 dark:text-gray-400">FLOWBITE LLC, Fiscal code: 18673557</dd>
          </dl>
          <dl>
            <dt class="mb-1 font-semibold text-gray-900 dark:text-white">Payment Methods</dt>
            <dd class="flex items-center space-x-4 text-gray-500 dark:text-gray-400">
              <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-700">
                <img class="h-4 w-auto dark:hidden"
                  src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/visa.svg" alt="" />
                <img class="hidden h-4 w-auto dark:flex"
                  src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/visa-dark.svg" alt="" />
              </div>
              <div>
                <div class="text-sm">
                  <p class="mb-0.5 font-medium text-gray-900 dark:text-white">Visa ending in 7658</p>
                  <p class="font-normal text-gray-500 dark:text-gray-400">Expiry 10/2024</p>
                </div>
              </div>
            </dd>
          </dl>
        </div>
      </div>
      <div class="w-full bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <div class="sm:hidden">
          <label for="tabs" class="sr-only">Select tab</label>
          <select id="tabs"
            class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            
            <option>Blog</option>
            <option>Ultimas Compras</option>
          </select>
        </div>
        <ul
          class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400 rtl:divide-x-reverse"
          id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
          
          <li class="w-full">
            <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about"
              aria-selected="false"
              class="text-white inline-block w-full p-4 bg-[#8bd4cb] hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Blog</button>
          </li>
          <li class="w-full">
            <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq"
              aria-selected="false"
              class="text-white inline-block w-full p-4 rounded-se-lg bg-[#8bd4cb] hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Ultimas
              Compras</button>
          </li>
        </ul>
        <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
          <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel"
            aria-labelledby="stats-tab">
            @for ($i = 0, $j = 5; $i < $j; $i++)
        <livewire:Pagina.Artista.Componente.Musica>
        @endfor
          </div>
          <div class="hidden p-4 bg-white rounded-lg md:p-4 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
      <div class="px-6">
        <div class="container flex justify-between mx-auto">
            <div class="w-full">
                <div class="mt-6">
                    <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                        <div class="flex items-center justify-between">
                            <span class="font-light text-gray-600">1 de junho de 2020</span>
                            <button id="editPostButton" class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Editar</button>
                        </div>
                        <div class="mt-2">
                            <h2 class="text-2xl font-bold text-gray-700 hover:underline">Crie sua nova ideia com o Laravel Framework.</h2>
                            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <button id="addCommentButton" class="text-blue-500 hover:underline">Adicionar Comentário</button>
                            <div>
                                <a href="#" class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                    <h1 class="font-bold text-gray-700 hover:underline">Alex John</h1>
                                </a></div>
                      </div>
                    </div>
                  </div>


                  <div id="editPostModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black bg-opacity-50">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-4">Editar Post</h2>
            <form id="editPostForm">
                <div class="mb-4">
                    <label for="postTitle" class="block text-gray-700 text-sm font-bold mb-2">Título</label>
                    <input type="text" id="postTitle" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="Crie sua nova ideia com o Laravel Framework.">
                </div>
                <div class="mb-6">
                    <label for="postDescription" class="block text-gray-700 text-sm font-bold mb-2">Descrição</label>
                    <textarea id="postDescription" name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Salvar</button>
                    <button type="button" id="cancelEdit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="addCommentModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black bg-opacity-50">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-4">Adicionar Comentário</h2>
            <form id="addCommentForm">
                <div class="mb-6">
                    <label for="commentText" class="block text-gray-700 text-sm font-bold mb-2">Escreva um comentário</label>
                    <textarea id="commentText" name="comment" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Postar</button>
                    <button type="button" id="cancelComment" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
                  
                  <div class="mt-8 ">
                    <div class="flex justify-end">
                      <a href="#"
                        class="px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md cursor-not-allowed">
                        previous
                      </a>

                      <a href="#"
                        class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                        1
                      </a>

                      <a href="#"
                        class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                        2
                      </a>

                      <a href="#"
                        class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                        3
                      </a>

                      <a href="#"
                        class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                        Next
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="hidden p-4 bg-white rounded-lg dark:bg-gray-800" id="faq" role="tabpanel"
            aria-labelledby="faq-tab">
            <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 md:p-8">
              <h3 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">Latest orders</h3>
              <div
                class="flex flex-wrap items-center gap-y-4 border-b border-gray-200 pb-4 dark:border-gray-700 md:pb-5">
                <dl class="w-1/2 sm:w-48">
                  <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Order ID:</dt>
                  <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                    <a href="#" class="hover:underline">#FWB12546798</a>
                  </dd>
                </dl>

                <dl class="w-1/2 sm:w-1/4 md:flex-1 lg:w-auto">
                  <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Date:</dt>
                  <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">11.12.2023</dd>
                </dl>

                <dl class="w-1/2 sm:w-1/5 md:flex-1 lg:w-auto">
                  <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Price:</dt>
                  <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">$499</dd>
                </dl>

                <dl class="w-1/2 sm:w-1/4 sm:flex-1 lg:w-auto">
                  <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Status:</dt>
                  <dd
                    class="me-2 mt-1.5 inline-flex shrink-0 items-center rounded bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300">
                    <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z">
                      </path>
                    </svg>
                    Em negociação
                  </dd>
                </dl>


              </div>
              <div
                class="flex flex-wrap items-center gap-y-4 border-b border-gray-200 py-4 pb-4 dark:border-gray-700 md:py-5">
                <dl class="w-1/2 sm:w-48">
                  <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Order ID:</dt>
                  <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                    <a href="#" class="hover:underline">#FWB12546777</a>
                  </dd>
                </dl>

                <dl class="w-1/2 sm:w-1/4 md:flex-1 lg:w-auto">
                  <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Date:</dt>
                  <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">10.11.2024</dd>
                </dl>

                <dl class="w-1/2 sm:w-1/5 md:flex-1 lg:w-auto">
                  <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Price:</dt>
                  <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">$3,287</dd>
                </dl>

                <dl class="w-1/2 sm:w-1/4 sm:flex-1 lg:w-auto">
                  <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Status:</dt>
                  <dd
                    class="mt-1.5 inline-flex items-center rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">
                    <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18 17.94 6M18 18 6.06 6"></path>
                    </svg>
                    Cancelled
                  </dd>
                </dl>
              </div>
              <div
                class="flex flex-wrap items-center gap-y-4 border-b border-gray-200 py-4 pb-4 dark:border-gray-700 md:py-5">
                <dl class="w-1/2 sm:w-48">
                  <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Order ID:</dt>
                  <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                    <a href="#" class="hover:underline">#FWB12546846</a>
                  </dd>
                </dl>

                <dl class="w-1/2 sm:w-1/4 md:flex-1 lg:w-auto">
                  <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Date:</dt>
                  <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">07.11.2024</dd>
                </dl>

                <dl class="w-1/2 sm:w-1/5 md:flex-1 lg:w-auto">
                  <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Price:</dt>
                  <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">$111</dd>
                </dl>

                <dl class="w-1/2 sm:w-1/4 sm:flex-1 lg:w-auto">
                  <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Status:</dt>
                  <dd
                    class="mt-1.5 inline-flex items-center rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300">
                    <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 11.917 9.724 16.5 19 7.5"></path>
                    </svg>
                    Completed
                  </dd>
                </dl>


              </div>
              <div class="flex flex-wrap items-center gap-y-4 pt-4 md:pt-5">
                <dl class="w-1/2 sm:w-48">
                  <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Order ID:</dt>
                  <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                    <a href="#" class="hover:underline">#FWB12546212</a>
                  </dd>
                </dl>

                <dl class="w-1/2 sm:w-1/4 md:flex-1 lg:w-auto">
                  <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Date:</dt>
                  <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">18.10.2024</dd>
                </dl>

                <dl class="w-1/2 sm:w-1/5 md:flex-1 lg:w-auto">
                  <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Price:</dt>
                  <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">$756</dd>
                </dl>

                <dl class="w-1/2 sm:w-1/4 sm:flex-1 lg:w-auto">
                  <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Status:</dt>
                  <dd
                    class="mt-1.5 inline-flex items-center rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300">
                    <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 11.917 9.724 16.5 19 7.5"></path>
                    </svg>
                    Completed
                  </dd>
                </dl>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Account Information Modal -->
  <div id="accountInformationModal2" tabindex="-1" aria-hidden="true"
    class="max-h-auto fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden antialiased md:inset-0">
    <div class="max-h-auto relative max-h-full w-full max-w-lg p-4">
      <!-- Modal content -->
      <div class="relative rounded-lg bg-white shadow ">
        <!-- Modal header -->
        <div class="flex items-center justify-between rounded-t border-b border-black p-4  md:p-5">
          <h3 class="text-lg font-semibold text-black ">Add Music</h3>
          <button type="button"
            class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-black hover:bg-gray-200 hover:text-gray-900 "
            data-modal-toggle="accountInformationModal2">
            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
        </div>
        <!-- Modal body -->
        <form class="p-4 md:p-5">
          <div class="mb-5 grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div class="col-span-2">
              <label for="pick-up-point-input" class="mb-2 block text-sm font-medium text-black ">
                Nome da musica</label>
              <input type="text" id="pick-up-point-input"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 "
                placeholder="Nome da musica" required />
            </div>
            <div class="col-span-2">
              <label for="pick-up-point-input" class="mb-2 block text-sm font-medium text-black ">
                Upload Foto</label>
              <input type="text" id="pick-up-point-input"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 "
                placeholder="Foto da musica" required />
            </div>

            <div class="col-span-2 sm:col-span-1">
              <label for="full_name_info_modal" class="mb-2 block text-sm font-medium text-black ">
                Preço </label>
              <input type="text" id="preco"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500"
                placeholder="Digite um preço" required />
            </div>

        
            

            <div class="col-span-2 sm:col-span-1">
              <div class="mb-2 flex items-center gap-2">
                <label for="select_country_input_billing_modal"
                  class="block text-sm font-medium text-gray-900 "> Estilo  </label>
              </div>
              <select id="select_country_input_billing_modal"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500">
                <option selected value="Rock">Rock</option>
                <option value="Pop">Pop</option>
                <option value="Reggae">Reggae</option>
                <option value="Trap">Trap</option>
                
              </select>
            </div>

            <div class="col-span-2 sm:col-span-1 ">
              <div class="mb-2 flex items-center gap-2 ">
                <label for="select_city_input_billing_modal"
                  class="block text-sm font-medium text-gray-900 "> Upload Musica </label>
              </div>
              <select id="musica_audio"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 ">
              </select>
            </div>

          </div>
          <div class="border-t border-gray-200 pt-4 dark:border-gray-700 md:pt-5">
            <button type="submit"
              class="me-2 inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save
              information</button>
            <button type="button" data-modal-toggle="accountInformationModal2"
              class="me-2 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>

    
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Modal de Edição
        const editPostButton = document.getElementById('editPostButton');
        const editPostModal = document.getElementById('editPostModal');
        const cancelEditButton = document.getElementById('cancelEdit');
        const editPostForm = document.getElementById('editPostForm');
        const postTitle = document.querySelector('.text-2xl.font-bold');
        const postDescription = document.querySelector('.mt-2.text-gray-600');

        editPostButton.addEventListener('click', function() {
            editPostModal.classList.remove('hidden');
        });

        cancelEditButton.addEventListener('click', function() {
            editPostModal.classList.add('hidden');
        });

        editPostForm.addEventListener('submit', function(event) {
            event.preventDefault();

            postTitle.textContent = document.getElementById('postTitle').value;
            postDescription.textContent = document.getElementById('postDescription').value;

            editPostModal.classList.add('hidden');
        });

        // Modal de Adicionar Comentário
        const addCommentButton = document.getElementById('addCommentButton');
        const addCommentModal = document.getElementById('addCommentModal');
        const cancelCommentButton = document.getElementById('cancelComment');
        const addCommentForm = document.getElementById('addCommentForm');

        addCommentButton.addEventListener('click', function() {
            addCommentModal.classList.remove('hidden');
        });

        cancelCommentButton.addEventListener('click', function() {
            addCommentModal.classList.add('hidden');
        });

        addCommentForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Aqui você pode adicionar a lógica para enviar o comentário para o servidor
            addCommentModal.classList.add('hidden');
        });
    });
</script>