
<section class=  "static bg-cover bg-center h-screen " 
    style = "background-image: url('{{ asset('/assets/img/FotoBG.jpg') }}');">
    @section('topbar')
    <livewire:Layout.Topbar />
  @endsection
   <nav class="absolute top-0 left-0 w-full px-8 py-4 bg-transparent flex justify-between items-center">
        <div class="text-white text-2xl font-bold">Crescendo</div>
       @if(!Auth::check())
        <div class="flex space-x-4">
            <a href="{{ route('login') }}" class="px-4 py-2 bg-indigo-600 rounded-lg text-white hover:bg-indigo-500">Login</a>
            <a href="{{ route('register') }}" class="px-4 py-2 bg-indigo-600 rounded-lg text-white hover:bg-indigo-500">Sign Up</a>
        </div>
        @endif
        @if(Auth::check())
        <div class="flex space-x-4">
           <form action="{{ route('logout') }}" method="POST">
           @csrf
            <button class="px-4 py-2 bg-indigo-600 rounded-lg text-white hover:bg-indigo-500">Logout</button>
            </form>
        </div>
        @endif
    </nav>
    @yield('content')
    <div class="flex items-center justify-center h-screen grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-9xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-white mb-7 select-none font-gothic  " >Crescendo</h1>
            <p class="max-w-2xl mt-16 text-6xl font-bold dark:text-white lg:mb-8 md:text-lg lg:text-xl text-white m-2 select-none ">Amplifying independent artists. Selling music. Reaching the world.</p>
        </div>                 
    </div>
    <div class= "static h-screen " style = "background-image: url('{{ asset('/assets/img/300.jpg') }}');">
        <h1 class="flex items-center justify-center pt-24 max-w-2xl text-7xl font-bold text-white">About Us</h1>
        <p class="flex  justify-center pt-32  font-bold text-2xl pl-48 leading-10 pr-16 text-justify text-white">At Crescendo, we believe that every artist deserves a stage. Our platform is dedicated 
            to empowering independent musicians by providing a space to sell their music, reach new audiences, and grow their careers. <br>
                We bridge the gap between emerging talent and the world, offering an easy-to-use marketplace where artists can showcase their work and connect with fans who appreciate authentic, 
                independent music. <br> Join us in shaping the future of music where creativity thrives, and artists get the recognition they deserve.
            Let’s amplify your sound.
        </p>
        
    </div>
    <div class="static  h-full " style = "background-image: url('{{ asset('/assets/img/HabibiBG.jpg') }}');">
        <h1 class="flex items-center justify-center pt-24 max-w-2xl text-7xl pl-20 font-bold text-white">Our mission</h1>
        <p class="flex  justify-center pt-32  font-bold text-2xl pl-48 leading-10  text-justify text-white">At Crescendo, our mission is simple: to empower independent artists by providing them with a platform <br> where they can share their music, reach global audiences, and grow their careers.  <br> 
            Our platform is dedicated to breaking down barriers and creating a space for emerging talent to thrive in the ever-evolving music industry. <br>
            By amplifying voices and promoting authentic music, we aim to build a community where artists are celebrated for their creativity and passion. <br> We’re here to help you take your music to the next level because your sound deserves to be heard.</p>
            
            
    </div>

    </div>

    </div>

    
</section>
