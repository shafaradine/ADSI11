<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.45.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <title>AmbisYuk! Aplikasi Beasiswa dan Magang</title>
</head>

<body>
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
                    <div class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:justify-center lg:gap-x-12 lg-mx-auto">
                        <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Product</a>

                        <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Features</a>

                        <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">About Us</a>
                    </div>
                    <div class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:justify-end">
                        <a href="#" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">Daftar</a>
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
                                    <a href="#" class="-mx-3 block rounded-lg py-2.5 px-3 text-base font-semibold leading-6 text-gray-900 hover:bg-gray-400/10">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main>
            <div class="relative mt-5 px-6 lg:px-8">
                <div class="flex min-h-full items-center justify-center pt-12 pb-16 px-4 sm:px-6 lg:px-8">
                    <div class="w-full max-w-md space-y-8">
                        <div>
                            <img class="mx-auto h-48 w-auto" src={{ asset('/img/register.png') }}>
                            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900 font-sans">AYO BUAT AKUN KAMU!</h2>
                        </div>
                        <form class="mt-8 space-y-6" action="#" method="POST">
                            <input type="hidden" name="remember" value="true">
                            <div class="-space-y-px rounded-md shadow-sm">
                                <div class="mb-2">
                                    <label class="label">
                                        <span class="label-text">Nama</span>
                                    </label>
                                    <input id="nama" name="name" type="text" autocomplete="nama" required class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="nama panjang">
                                </div>
                                <div class="mb-2">
                                    <label class="label">
                                        <span class="label-text">No Handphone</span>
                                    </label>
                                    <input id="number" name="phone" type="tel" autocomplete="number" required class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="nomor handphone aktif">
                                </div>
                                <div class="mb-2">
                                    <label class="label">
                                        <span class="label-text">Tanggal Lahir</span>
                                    </label>
                                    <input id="birthday" name="birth" type="date" autocomplete="birthday" required class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="DD-MM-YYYY">
                                </div>
                                <div class="mb-2">
                                    <label class="label">
                                        <span class="label-text">Jenis Kelamin</span>
                                    </label>
                                    <div class="flex space-x-24">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox1">Laki-Laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox2">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label class="label">
                                        <span class="label-text">Email</span>
                                    </label>
                                    <div class="flex space-x-4">
                                        <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="example@gmail.com">
                                        <label style="background-color:#1D3557" for="my-modal-6" class="flex w-48 justify-center rounded-md border border-transparent py-2 px-4 text-sm font-medium text-white hover:bg-base-300 focus:outline-none focus:ring-2 focus:ring-base-200 focus:ring-offset-2">Verifikasi Akun</label>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label class="label">
                                        <span class="label-text">Kata Sandi</span>
                                    </label>
                                    <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="kata sandi baru">
                                </div>
                                <div>
                                    <label class="label">
                                        <span class="label-text">Konfirmasi Kata Sandi</span>
                                    </label>
                                    <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="masukkan ulang kata sandi">
                                </div>
                            </div>
                            <div>
                                <button type="submit" style="background-color:#1D3557" class="flex w-full justify-center rounded-md border border-transparent py-2 px-4 text-sm font-medium text-white hover:bg-base-300 focus:outline-none focus:ring-2 focus:ring-base-200 focus:ring-offset-2">
                                    Daftar
                                </button>
                            </div>
                            <input type="checkbox" id="my-modal-6" class="modal-toggle" />
                            <div class="modal modal-bottom sm:modal-middle">
                                <div class="modal-box">
                                    <h3 class="font-bold text-lg">Verifikasi akun kamu!</h3>
                                    <p class="pt-4 pb-8">Masukkan kode yang kami kirim
                                        ke akun <b>example@gmail.com</b></p>
                                    <div class="flex space-x-2 justify-center px-10">
                                        <input type="text" class="input input-bordered w-1/6" />
                                        <input type="text" class="input input-bordered w-1/6" />
                                        <input type="text" class="input input-bordered w-1/6" />
                                        <input type="text" class="input input-bordered w-1/6" />
                                    </div>
                                    <div class="pb-6 pt-6">
                                        <p>Tidak dapat kode?</p>
                                        <a href="#">
                                            <p style="color:#81B29A"><b>Kirim ulang kode</b></p>
                                        </a>
                                    </div>
                                    <div class="space-x-4 flex justify-end">
                                        <label for="my-modal-6" class="btn">Batalkan</label>
                                        <label for="my-modal-6" class="btn">Verifikasi</label>
                                    </div>
                                </div>
                            </div>

                            <div class="flex text-sm justify-center mx-auto space-x-2">
                                <p>Sudah memiliki akun?</p>
                                <a href="#" style="color:#81B29A">
                                    <p><b>Masuk</b></p>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="text-center mx-auto text-xs">Dengan masuk atau mendaftar, saya menyutujui <br>
                    <b style="color:#81B29A">Syarat dan Ketentuan</b> serta <b style="color:#81B29A">Kebijakan Privasi</b>
                </p>
            </div>
        </main>
    </div>

    <!-- footer -->
    <footer class="footer footer-center mt-10 p-10 bg-base-200 text-base-content rounded">
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
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>