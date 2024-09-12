<nav class="navbar">
    <section class="w-full h-[100vh]  bg-header  bg-cover bg-no-repeat bg-center bg-color1 bg-blend-multiply bg-opacity-60" >
        <section class="w-full flex flex-wrap justify-center ">
            <header 
            class="w-[85%]  xl:w-[73%]  container hidden lg:flex justify-between h-[60px]  items-center py-[45px] border-b-[1px] border-white border-opacity-40">
            <figure class="w-[140px]">
               <img src="" alt="" class="w-[100%]">
            </figure>
            <nav class="h-[100%] md:w-[70%]">
                <ul class="h-[100%] flex items-center gap-8 justify-end">
                    <li class="list-none  "><a class="decoration-none text-white hover:text-color3 transition-all duration-500"
                            href="{{ route('home') }}">Home</a></li>
                    <li class="list-none"><a class="decoration-none text-white  hover:text-color3 transition-all duration-500"
                            href="{{ route('paket-wisata') }}">Paket Wisata</a></li>
                    <li class="list-none "><a class="decoration-none text-white  hover:text-color3 transition-all duration-500"
                            href="{{ route('paket-outbound') }}">Paket Outbound</a></li>
                    <li class="list-none"><a class="decoration-none text-white  hover:text-color3 transition-all duration-500"
                            href="{{ route('sewa-kendaraan') }}">Sewa Kendaraan</a></li>
                    <li class="list-none "><a class="decoration-none text-white  hover:text-color3 transition-all duration-500"
                            href="{{ route('custom-trip') }}">Custom Trip </a></li>
                    <li class="list-none"><a class="decoration-none text-white  hover:text-color3 transition-all duration-500"
                            href="">Contact</a></li>
                </ul>
            </nav>
        </header>
    </section>

    <header class="w-[95%] sm:w-[70%] md:w-[80%] container flex h-[60px] justify-between  items-center  lg:hidden  py-[45px] relative border-b-[1px] border-white border-opacity-40 ">
        <figure class="w-[140px]">
            <img src="" alt="" class="w-[100%]">
        </figure>
        <div class=" w-1/2 h-full flex justify-end items-center ">
            <i class="bi bi-list text-3xl text-white cursor-pointer ham-menu-icon"></i>
        </div>
        <nav class="menu hidden h-[400px] w-full absolute bg-white left-0 top-[90px]   z-30 ">
            <ul class="h-full w-full flex flex-col  justify-center ms-6">
                <li class="list-none my-3"><a
                        class="decoration-none text-color2 flex hover:text-color4  transition-all duration-600"
                        href="">Home</a></li>
                <li class="list-none my-3"><a
                        class="decoration-none text-color2 flex  hover:text-color4  transition-all duration-600"
                        href="">Paket Wisata</a></li>
                <li class="list-none my-3"><a
                        class="decoration-none text-color2 flex  hover:text-color4 transition-all duration-600"
                        href="">Paket Outbound</a></li>
                <li class="list-none my-3"><a
                        class="decoration-none text-color2 flex  hover:text-color4 transition-all duration-600"
                        href="">Sewa Kendaraan</a></li>
                <li class="list-none my-3"><a
                        class="decoration-none text-color2 flex   hover:text-color4  transition-all duration-600"
                        href="">Blog</a></li>
                <li class="list-none my-3"><a
                        class="decoration-none text-color2 flex  hover:text-color4  transition-all duration-600"
                        href="">Gallery</a></li>
                <li class="list-none my-3"><a
                        class="decoration-none text-color2 flex   hover:text-color4 transition-all duration-600"
                        href="">Contact</a></li>
            </ul>
        </nav>
    </header>
</nav>