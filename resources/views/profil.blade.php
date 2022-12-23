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
        <div class="px-6 py-4 lg:px-10">
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
                        <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Home</a>
                        <div class="dropdown dropdown-end">
                            <label tabindex="0" class="btn-ghost p-2 rounded-btn font-semibold text-gray-900 hover:text-gray-900">Menu</label>
                            <ul tabindex="0" class="menu dropdown-content p-2 shadow bg-base-100 rounded-box w-52 mt-4">
                                <li><a>Beasiswa</a></li>
                                <li><a>Magang</a></li>
                                <li><a>Artikel</a></li>
                                <li><a>Sertifikat</a></li>
                                <li><a>Konsultasi</a></li>
                                <li><a>Essay</a></li>
                                <li><a>CV</a></li>
                            </ul>
                        </div>
                        <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Premium</a>

                        <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Profil</a>
                    </div>
                    <div class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:justify-end">
                        <a href="#" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">Keluar</a>
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
                                    <a href="#" class="-mx-3 block rounded-lg py-2.5 px-3 text-base font-semibold leading-6 text-gray-900 hover:bg-gray-400/10">Masuk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main>
            <div style="background-color:#1D3557" class="hero min-h-screen">
                <div class="text-center">
                    <div class="avatar mb-5">
                        <div style="border-color:beige; border-width:2px" class="w-20 rounded-full">
                            <img src="https://i.pinimg.com/236x/7c/8a/c0/7c8ac0f68f92d37db376cd29abeefdb9.jpg" />
                        </div>
                    </div>
                    <h1 class="text-3xl font-bold text-white mb-5">Callista Thaleeta</h1>
                    <div class="card flex-shrink w-full max-w-sm shadow-2xl bg-base-100 mb-20">
                        <div class="p-5 space-y-3 w-96">
                            <button class="group mb-5 relative flex w-full bg-warning justify-center rounded-full border border-transparent py-2 px-4 text-sm font-medium text-white hover:bg-base-300 focus:outline-none focus:ring-2 focus:ring-base-200 focus:ring-offset-2">
                                Gabung Premium
                            </button>
                            <button class="group relative flex w-full bg-base-300 pl-10 rounded-full border border-transparent py-2 px-4 text-sm font-medium text-info-content hover:bg-base-300 focus:outline-none focus:ring-2 focus:ring-base-200 focus:ring-offset-2">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </span>
                                <span class="absolute inset-y-0 flex items-center pl-64">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </span>
                                Edit Profil
                            </button>
                            <button class="group relative flex w-full bg-base-300 pl-10 rounded-full border border-transparent py-2 px-4 text-sm font-medium text-info-content hover:bg-base-300 focus:outline-none focus:ring-2 focus:ring-base-200 focus:ring-offset-2">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                </span>
                                <span class="absolute inset-y-0 flex items-center pl-64">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </span>
                                Bookmark
                            </button>
                            <button class="group relative flex w-full bg-base-300 pl-10 rounded-full border border-transparent py-2 px-4 text-sm font-medium text-info-content hover:bg-base-300 focus:outline-none focus:ring-2 focus:ring-base-200 focus:ring-offset-2">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                </span>
                                <span class="absolute inset-y-0 flex items-center pl-64">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </span>
                                Riwayat Pemesanan
                            </button>
                            <button class="group relative flex w-full bg-base-300 pl-10 rounded-full border border-transparent py-2 px-4 text-sm font-medium text-info-content hover:bg-base-300 focus:outline-none focus:ring-2 focus:ring-base-200 focus:ring-offset-2">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
                                    </svg>
                                </span>
                                <span class="absolute inset-y-0 flex items-center pl-64">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </span>
                                Pengaturan Akun
                            </button>
                            <label for="my-modal-3" class="group relative flex w-full bg-base-300 pl-10 rounded-full border border-transparent py-2 px-4 text-sm font-medium text-info-content hover:bg-base-300 focus:outline-none focus:ring-2 focus:ring-base-200 focus:ring-offset-2">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                                    </svg>
                                </span>
                                <span class="absolute inset-y-0 flex items-center pl-64">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </span>
                                Review
                            </label>
                            <input type="checkbox" id="my-modal-3" class="modal-toggle" />
                            <div class="modal">
                                <div class="modal-box relative">
                                    <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2 font-sans">✕</label>
                                    <h3 class="text-lg font-bold">Berikan Review-mu!</h3>
                                    <p class="py-4">Ceritakan pengalamanmu selama menggunakan aplikasi AmbisYuk.</p>
                                    <textarea class="textarea textarea-accent w-full h-36" placeholder="Tulis review kamu disini"></textarea>
                                    <p class="py-4">Rating</p>
                                    <div class="rating mb-10 space-x-2">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-warning" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-warning" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-warning" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-warning" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-warning" />
                                    </div>
                                    <label for="my-modal-3" type="submit" style="background-color:#1D3557" class="btn w-36 px-10 flex text-primary-content rounded-full mx-auto">Kirim</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
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
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>