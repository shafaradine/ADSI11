<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.45.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>AmbisYuk! Aplikasi Beasiswa dan Magang</title>
</head>

<body>
    <!-- HERO -->
    <div class="isolate bg-white">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
            <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                <defs>
                    <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#B1C9BD"></stop>
                        <stop offset="1" stop-color="#B1C9BD"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="px-6 pt-6 lg:px-8">
            <div>
                <nav class="flex h-9 items-center justify-between" aria-label="Global">
                    <div class="flex lg:min-w-0 lg:flex-1" aria-label="Global">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <p class="text-lg"><b>Ambis Yuk!</b></p>
                        </a>
                    </div>
                    <div class="flex lg:hidden">
                        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Open main menu</span>
                            <!-- Heroicon name: outline/bars-3 -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:justify-center lg:gap-x-12">
                        <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Product</a>

                        <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Features</a>

                        <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">About Us</a>
                    </div>
                    <div class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:justify-end">
                        <a href="#" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">Log in</a>
                    </div>
                </nav>
                <!-- Mobile menu, show/hide based on menu open state. -->
                <div role="dialog" aria-modal="true">
                    <div focus="true" class="inset-0 z-10 overflow-y-auto px-6 py-6 lg:hidden">
                        <div class="flex h-9 items-center justify-between">
                            <div class="flex">
                                <a href="#" class="-m-1.5 p-1.5">
                                    <p class="text-lg"><b>Ambis Yuk!</b></p>
                                </a>
                            </div>
                            <div class="flex">
                                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                                    <span class="sr-only">Close menu</span>
                                    <!-- Heroicon name: outline/x-mark -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-gray-500/10">
                                <div class="space-y-2 py-6">
                                    <a href="#" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Product</a>

                                    <a href="#" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Features</a>

                                    <a href="#" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">About Us</a>
                                </div>
                                <div class="py-6">
                                    <a href="#" class="-mx-3 block rounded-lg py-2.5 px-3 text-base font-semibold leading-6 text-gray-900 hover:bg-gray-400/10">Log in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main>
            <div class="relative px-6 lg:px-8">
                <div class="mx-auto max-w-3xl pt-20 pb-32 sm:pt-48 sm:pb-40">
                    <div>
                        <div>
                            <h1 class="text-2xl font-bold text-info-content tracking-tight sm:text-center sm:text-4xl">DAPATKAN INFORMASI <br>
                                MENGENAI PENDIDIKAN DAN PEKERJAAN</h1>
                            <p class="mt-6 text-lg leading-8 text-gray-600 sm:text-center">Raihlah beasiswa yang anda inginkan seperti lebih dari 5k pengguna lain</p>
                            <div class="mt-8 flex gap-x-4 sm:justify-center">
                                <a href="#library" class="inline-block rounded-lg bg-info-content px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-base-300 hover:bg-info-content-700 hover:ring-info-content-700">
                                    Get started
                                    <span class="text-indigo-200" aria-hidden="true">&rarr;</span>
                                </a>
                            </div>
                        </div>
                        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                            <svg class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                                <defs>
                                    <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#9089FC"></stop>
                                        <stop offset="1" stop-color="#FF80B5"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!--CONTENT-->
    <div class="lg:px-10 sm:px-2 lg:py-10 sm-py-4 ">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
            <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                <defs>
                    <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#B1C9BD"></stop>
                        <stop offset="1" stop-color="#B1C9BD"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-2 justify-items-center">
            <div class="m-auto text-center">
                <p class="text-2xl font-bold pb-5 font-serif hover:subpixel-antialiased">LEBIH DARI 3000+++ <br>
                    LOWONGAN MAGANG TERBUKA
                </p>
            </div>
            <div class="object-center pb-10">
                <img style="width:420px; max-width:100%" src="https://img.freepik.com/free-vector/organic-flat-people-business-training-illustration_23-2148902090.jpg?w=826&t=st=1671398949~exp=1671399549~hmac=f28eaf18ca40210040cd5dc347264c304fec9db7ede0125e34ae7efb28656f80">
            </div>
            <div class="object-center">
                <img style="width:420px; max-width:100%" src="https://img.freepik.com/premium-vector/illustration-vector-graphic-cartoon-character-global-education_516790-1061.jpg?w=740">
            </div>
            <div class="m-auto text-center">
                <p class="text-2xl font-bold font-serif hover:subpixel-antialiased">LEBIH DARI 5000+++ <br>
                    KESEMPATAN BEASISWA TERSEDIA
                </p>
            </div>
        </div>
    </div>

    <svg class="pt-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#1D3557" fill-opacity="1" d="M0,64L34.3,90.7C68.6,117,137,171,206,202.7C274.3,235,343,245,411,240C480,235,549,213,617,192C685.7,171,754,149,823,165.3C891.4,181,960,235,1029,224C1097.1,213,1166,139,1234,106.7C1302.9,75,1371,85,1406,90.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
    </svg>

    <!--menu-->
    <div id="library" class="library px-20">
        <p class="text-3xl pb-10 text-center"><b>LIBRARY<b></p>
        <div class="grid lg:grid-cols-4 sm:grid-cols-1 gap-8 justify-items-center pb-10 mx-auto">
            <div class="card card-side bg-base-100 shadow-xl border h-36 w-full">
                <figure><img class="h-full w-60" src={{ asset('/img/a.jpg') }}></figure>
                <div class="card justify-center px-3">
                    <h2 class="card-title">BEASISWA</h2>
                    <p class="font-normal">Daftar ke 5000+ program beasiswa dalam dan luar negeri
                    </p>
                </div>
            </div>
            <div class="card card-side bg-base-100 shadow-xl border h-36 w-full">
                <figure><img class="h-full w-60" src={{ asset('/img/b.jpg') }}></figure>
                <div class="card justify-center px-3">
                    <h2 class="card-title">MAGANG</h2>
                    <p class="font-normal">Daftar ke 3000+ magang yang cocok dengan skill kamu
                    </p>
                </div>
            </div>
            <div class="card card-side bg-base-100 shadow-xl border h-36 w-full">
                <figure><img class="h-full w-60" src={{ asset('/img/c.jpg') }}></figure>
                <div class="card justify-center px-3">
                    <h2 class="card-title">ARTIKEL</h2>
                    <p class="font-normal">200+ artikel yang bisa menambah wawasanmu.
                    </p>
                </div>
            </div>
            <div class="card card-side bg-base-100 shadow-xl border h-36 w-full">
                <figure><img class="h-full w-60" src={{ asset('/img/d.jpg') }}></figure>
                <div class="card justify-center px-3">
                    <h2 class="card-title">SERTIFIKAT</h2>
                    <p class="font-normal">Simpan semua sertifikatmu dalam satu tempat.
                    </p>
                </div>
            </div>
        </div>
        <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-4 justify-items-center mx-auto">
            <div class="card card-side bg-base-100 shadow-xl border h-36 w-full">
                <figure><img class="h-full w-60" src={{ asset('/img/e.jpg') }}></figure>
                <div class="card justify-center px-3">
                    <h2 class="card-title">KONSULTASI</h2>
                    <p class="font-normal">Konsultasi tentang apapun yang menunjang preastasi kamu</p>
                </div>
            </div>
            <div class="card card-side bg-base-100 shadow-xl border h-36 w-full">
                <figure><img class="h-full w-60" src={{ asset('/img/f.jpg') }}></figure>
                <div class="card justify-center px-3">
                    <h2 class="card-title">ESSAY</h2>
                    <p class="font-normal">Review dari mentor berpengalaman yang membantumu untuk memperbaiki essay</p>
                </div>
            </div>
            <div class="card card-side bg-base-100 shadow-xl border h-36 w-full">
                <figure><img class="h-full w-60" src={{ asset('/img/g.jpg') }}></figure>
                <div class="card justify-center px-3">
                    <h2 class="card-title">CV</h2>
                    <p class="font-normal">Review dari HR profesional yang membantumu untuk memperbagus CV</p>
                </div>
            </div>
        </div>
    </div>

    <svg class="pt-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#1D3557" fill-opacity="1" d="M0,64L16,80C32,96,64,128,96,122.7C128,117,160,75,192,85.3C224,96,256,160,288,160C320,160,352,96,384,101.3C416,107,448,181,480,218.7C512,256,544,256,576,234.7C608,213,640,171,672,165.3C704,160,736,192,768,224C800,256,832,288,864,288C896,288,928,256,960,213.3C992,171,1024,117,1056,117.3C1088,117,1120,171,1152,170.7C1184,171,1216,117,1248,106.7C1280,96,1312,128,1344,122.7C1376,117,1408,75,1424,53.3L1440,32L1440,320L1424,320C1408,320,1376,320,1344,320C1312,320,1280,320,1248,320C1216,320,1184,320,1152,320C1120,320,1088,320,1056,320C1024,320,992,320,960,320C928,320,896,320,864,320C832,320,800,320,768,320C736,320,704,320,672,320C640,320,608,320,576,320C544,320,512,320,480,320C448,320,416,320,384,320C352,320,320,320,288,320C256,320,224,320,192,320C160,320,128,320,96,320C64,320,32,320,16,320L0,320Z"></path>
    </svg>

    <!-- SUDUT REVIEW -->
    <div class="review px-20 py-10 mx-auto">
        <p class="text-3xl pb-10 text-center"><b>KATA MEREKA<b></p>
        <div class="grid grid-cols-3 gap-4">
            <div class="card w-full bg-base-100 shadow-xl border ">
                <div class="avatar mx-auto mt-10">
                    <div class="w-12 rounded-full ring ring-success-content ring-offset-base-100 ring-offset-2">
                        <img src={{ asset('/img/RA.jpg') }} />
                    </div>
                </div>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">Nathalia Clarissa</h2>
                    <p>keren, membantu, good job!</p>
                    <div class="rating">
                        <input name="rating-1" class="mask mask-star-2 bg-warning" />
                        <input name="rating-1" class="mask mask-star-2 bg-warning" />
                        <input name="rating-1" class="mask mask-star-2 bg-warning" />
                        <input name="rating-1" class="mask mask-star-2 bg-warning" />
                        <input name="rating-1" class="mask mask-star-2 bg-base-300" />
                    </div>
                </div>
            </div>
            <div class="card w-full bg-base-100 shadow-xl border ">
                <div class="avatar mx-auto mt-10">
                    <div class="w-12 rounded-full ring ring-success-content ring-offset-base-100 ring-offset-2">
                        <img src={{ asset('/img/RC.jpg') }} />
                    </div>
                </div>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">Erlis Rizqiyani</h2>
                    <p>terimakasihhh ambisyuk, aku bisa keterima magang</p>
                    <div class="rating">
                        <input name="rating-2" class="mask mask-star-2 bg-warning" />
                        <input name="rating-2" class="mask mask-star-2 bg-warning" />
                        <input name="rating-2" class="mask mask-star-2 bg-warning" />
                        <input name="rating-2" class="mask mask-star-2 bg-warning" />
                        <input name="rating-2" class="mask mask-star-2 bg-warning" />
                    </div>
                </div>
            </div>
            <div class="card w-full bg-base-100 shadow-xl border ">
                <div class="avatar mx-auto mt-10">
                    <div class="w-12 rounded-full ring ring-success-content ring-offset-base-100 ring-offset-2">
                        <img src={{ asset('/img/RB.jpg') }} />
                    </div>
                </div>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">Shafa Faradina</h2>
                    <p>ambisyuk jaya jaya jaya</p>
                    <div class="rating">
                        <input name="rating-3" class="mask mask-star-2 bg-warning" />
                        <input name="rating-3" class="mask mask-star-2 bg-warning" />
                        <input name="rating-3" class="mask mask-star-2 bg-warning" />
                        <input name="rating-3" class="mask mask-star-2 bg-base-300" />
                        <input name="rating-3" class="mask mask-star-2 bg-base-300" />
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
        <div class="grid grid-flow-col gap-4">
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Help</a>
            <a class="link link-hover">Privacy</a>
        </div>
        <div>
            <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                    </svg></a>
            </div>
        </div>
        <div>
            <p>Copyright © 2022 - All right reserved by AmbisYuk Co.</p>
        </div>
    </footer>

</body>

</html>