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
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
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

                <div class="font-medium normal-case text-2xl px-10 py-5">ESSAY</div>

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
            <div class="px-20 pb-10">
                <div class="grid grid-cols-5 gap-16">
                    <div class="col-span-3">
                        <p class="text-xl font-bold mb-5">APA ITU ESSAY BEASISWA?</p>
                        <div style="border-color:#81B29A" class="card w-full bg-base-200 shadow-xl border mb-5">
                            <div class="card-body">
                                <p style="text-align:justify">Essay beasiswa adalah salah satu berkas dokumen yang dipenuhi oleh calon awardee dan bersifat wajib ketika melakukan seleksi administrasi. Esai berisi narasi tentang topik tertentu yang biasanya sudah disiapkan oleh panitia seleksi dan kandidat diminta untuk menjabarkan sesuai dengan tema yang ditentukan.</p>
                            </div>
                        </div>
                        <div style="background-color:#81B29A" class="card w-full shadow-xl border border-base-300 text-primary-content">
                            <div class="card-body">
                                <p style="text-align:justify">Nah! Berutung di Layanan Premium AmbisYuk, kamu bisa mendapatkan feedback & review dari mentormu agar essaimu bisah lebih baik loh! Yuk, submit essaimu sekarang!</p>
                            </div>
                        </div>
                        <div class="flex justify-center mt-10">
                            <button class="btn rounded-full w-48 bg-info-content mt-5">Menulis Essay Baru</button>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <p class="text-xl font-bold mb-5">STATUS ESSAY</p>
                        <div style="border-color:#81B29A" class="card w-full shadow-xl border mb-5 text-neutral">
                            <div class="p-5">
                                <h2 class="card-title mb-3">Study Plan untuk GKS 2023</h2>
                                <div class="flex space-x-2 mb-3">
                                    <div style="background-color:#81B29A" class="px-2 py-1 border-none rounded-lg text-neutral text-xs font-medium">Essaimu sudah selesai direview, Nih!</div>
                                    <a href="#">
                                        <div style="border-color:#81B29A" class="px-2 py-1 bg-primary-content border rounded-lg font-medium text-neutral text-xs">Cek isi essay</div>
                                    </a>
                                </div>
                                <p class="font-lg text-xs">Estimasi Essai Selesai di Review : 27 Desember 2022 </p>
                            </div>
                        </div>
                        <div class="card w-full shadow-xl border border-error mb-5 text-neutral">
                            <div class="p-5">
                                <h2 class="card-title mb-3">Personal Statement untuk GKS 2023</h2>
                                <div class="flex space-x-2 mb-3">
                                    <div class="px-2 py-1 bg-error border-none rounded-lg text-neutral text-xs font-medium">Sedang di-review mentor! Mohon tunggu ya.</div>
                                    <a href="#">
                                        <div class="px-2 py-1 border-error bg-primary-content border rounded-lg font-medium text-neutral text-xs">Cek isi essay</div>
                                    </a>
                                </div>
                                <p class="font-lg text-xs">Estimasi Essai Selesai di Review : 27 Desember 2022 </p>
                            </div>
                        </div>
                        <div class="card w-full shadow-xl border border-base-300 mb-5 text-neutral">
                            <div class="p-5">
                                <h2 class="card-title mb-3">Weslyenan University Essay</h2>
                                <div class="flex space-x-2 mb-3">
                                    <div class="px-2 py-1 bg-base-300 border-none rounded-lg text-neutral text-xs font-medium">Tunggu sebentar yaa, essaymu akan segera dicek!</div>
                                    <a href="#">
                                        <div class="px-2 py-1 border-base-300 bg-primary-content border rounded-lg font-medium text-neutral text-xs">Cek isi essay</div>
                                    </a>
                                </div>
                                <p class="font-lg text-xs">Estimasi Essai Selesai di Review : 10 Januari 2023 </p>
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
            <p>Copyright ?? 2022 - All right reserved by AmbisYuk Co.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>