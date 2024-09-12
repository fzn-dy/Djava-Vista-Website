<nav class="navbar">
    <section class="w-full h-[100vh] bg-header bg-cover bg-no-repeat bg-center bg-color1 bg-blend-multiply bg-opacity-60" >
        
        <section class="w-full flex flex-wrap justify-center ">
            <header 
            class="w-[85%]  xl:w-[73%]  container hidden lg:flex justify-between h-[60px]  items-center py-[45px] border-b-[1px] border-white border-opacity-40">

            <figure class="w-[140px]">
               <img src="{{ asset('assets/logo-djavavista.png') }}" alt="" class="w-[70%]">
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
                        href="{{ route('paket-wisata') }}">Paket Wisata</a></li>
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

    <section class="w-full flex justify-center mt-[180px]">
        <div class="w-[700px] md:w-[900px] container h-auto  ">
            <p class="w-full text-center uppercase text-white tracking-widest [word-spacing:8px] mb-4">Lets travel with us</p>
            <h1 class="w-full text-center text-white text-5xl md:text-7xl font-secondary uppercase tracking-widest">Explore Indonesia With <span class="travol">Djava Vista</span></h1>
        </div>
    </section>
    
    <section class="w-full justify-center mt-[80px] hidden lg:flex relative">
            <div class=" bg-white bg-opacity-40 container absolute w-[1000px] xl:w-[1200px] h-[100px] flex justify-center items-center backdrop-blur-lg">
                    <div class="w-[950px] xl:w-[1100px]  container h-auto absolute m-[10px]  ">
                            <form action="" class="flex font-primary"> 
                                    <input type="text" placeholder="where to?" class="py-[15px] ps-5 w-[25%] outline-none focus:outline-none">
                                    <select name="" id="" class="w-[25%] py-[15px] bg-white  ps-5" id="target">
                                            <option value="dest" selected   class="bg-color1 text-white">Destination</option>
                                            <option value="it" class="text-stone-600" >Italy</option>
                                            <option value="fr" class="text-stone-600">France</option>
                                            <option value="mal" class="text-stone-600" >Maldives</option>
                                            <option value="gr" class="text-stone-600" >Greece</option>
                                            <option value="ca" class="text-stone-600" >Canada</option>
                                            <option value="du" class="text-stone-600"> Dubai</option>
                                    </select>
                                    <select name="" id="" class="w-[25%] py-[15px] bg-white  ps-5" id="target">
                                            <option value="du" selected   class="bg-color1 text-white">Deuration</option>
                                            <option value="it" class="text-stone-600" >1 Day Tour</option>
                                            <option value="fr" class="text-stone-600">2-4 Days Tour</option>
                                            <option value="mal" class="text-stone-600" >5-7 Days Tour</option>
                                            <option value="gr" class="text-stone-600" >7+ Days Tour</option>
                                    </select> 
                                <a href="" role="button" class="bg-color1 w-[25%] text-white flex items-center justify-center text-[18px] hover:bg-color3 transition-all duration-500" ><i class="bi bi-search me-2"></i>Find Now</a>
                            </form>
                    </div>
            </div>

            
    </section>


    <!-- https://gist.github.com/sevalenciaca/de3ce331ff168b3b71176e715f4f83f2 -->



        
</nav>

        