<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Portofolio Yasin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" /> 
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <section class = "background">
        <div>
            <header>
                <div class="mx-auto flex py-12 lg:px-24 md:px-16 sm:px-8 px-8  items-center justify-between lg:justify-start">
                    
                    <!-- Ubah Warna saat Mouse Tiba-->
                    <nav
                    class="navigation-header-2-3 lg:mr-auto hidden lg:flex flex-col text-base justify-center z-50 fixed top-8 left-3 right-3 p-8 rounded-md shadow-md bg-white lg:flex lg:flex-row lg:relative lg:top-0 lg:shadow-none bg-popup-header-2-3 lg:bg-transparent lg:p-0 lg:items-center items-start":
                    class="{'flex': open, 'hidden': !open}"
                    >
                        <a class="header-choice" id = "aktif">Home</a>
                        <a href="asked.html" class="header-choice">Ask Me</a>
                        <a href="About Me.html" class="header-choice">About Me</a>
                        <a href="My Project.html" class="header-choice">My Project</a>
                        <a class="header-choice">Contact Me</a>
                    </nav>

                    <div class="hidden lg:inline-flex">
                        <h3 >Mau tahu lebih banyak?</h3>
                        <button class="inline-flex text-white text-lg leading-7 py-3 px-8 rounded-xl focus:outline-none box-shadow-header-2-3  font-semibold"
                        id = "button-sign-up">
                            <a href="BuatAkun.html">Join</a>
                        </button>
                    </div>

                </div>
            </header>

            <div>
                <div class="mx-auto flex pt-12 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8  lg:flex-row flex-col">
                    <!-- Left Column -->
                    <div class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                        <h1 class="lg:block hidden title-font sm:text-5xl lg:text-6xl text-4xl mb-8 font-semibold sm:leading-tight "
                        style="color: #CBCBD2; line-height: 1.2;">Welcome To My <br> Portofolio Website
                        </h1>

                        <div class="inline-block items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2  sm:space-x-3 space-x-0">
                            <button class=" inline-flex font-semibold text-white  text-base py-4 px-6 rounded-xl mb-4 lg:mb-0 md:mb-0 focus:outline-none box-shadow-header-2-3"
                                    id = "button-sign-up">Lihat CV
                            </button>

                            <button class="btn-outline-header-2-3 font-normal text-black  text-base py-4 px-6 rounded-xl focus:outline-none bg-transparent rounded hover:border-transparent" 
                            style="font-family: 'Poppins', sans-serif;">
                                <div class="flex items-center">                   
                                   <a href="https://www.youtube.com/channel/UCrltjHIPBWuEqAouRx8z0ow", target="_blank"> Watch My Youtube Channel </a>
                                </div>
                            </button>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2 text-center justify-center flex pr-0"> 
                        <!-- Gambar -->
                        <img id="hero-header-2-3" src="img/yasin-image.png" alt="">            
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="h-full pt-20 pb-12 lg:px-24 md:px-16 sm:px-8 px-4" style="background-color: #141432">
        <footer class="h-full" style="font-family: 'Poppins', sans-serif;">
            <div class="border-color-footer-2-3 mx-auto">
              <div class="">              
                <hr style="border-color: #2E2E5A;">
              </div>
                <div class="container mx-auto flex  pt-12 flex-col lg:flex-row items-center space-y-5 lg:space-y-0">
                  <div class="flex title-font font-medium items-center text-gray-900 mb-4 lg:mb-0 md:mb-0 space-x-5" style="cursor: pointer;">
                    <div>
                        <a href="https://www.facebook.com/", target="_blank"> <img src="img/facebook.png" alt="facebook"> </a> 
                    </div>
                    
                    <div>
                        <a href="https://twitter.com/yasinalfiyahya", target="_blank"><img src="img/twitter.png" alt="twitter"></a>
                        
                    </div>

                    <div>
                        <a href="https://github.com/yasinAlfiYahya", target="_blank"><img src="img/github.png" alt="github"></a>
                    </div>

                    <div>
                        <a href="https://www.instagram.com/", target="_blank"><img src="img/instagram.png" alt="instagram"></a>
                    </div>
                  </div>

                  <nav class="mx-auto flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5 footer-link-footer-2-3">Terms of Service</a>
                    <span class="mr-5">|</span>
                    <a class="mr-5 footer-link-footer-2-3">Privacy Policy</a>
                    <span class="mr-5">|</span>
                    <a class="mr-5 footer-link-footer-2-3">Licenses</a>
                  </nav>

                  <nav class="flex lg:flex-row flex-col items-center text-base justify-center">
                    <p>Copyright ??2021  Yasin Alfi Yahya</p>
                  </nav>
                  
                </div>
            </div>
          </footer>
      </section>
    
</body>
</html>
