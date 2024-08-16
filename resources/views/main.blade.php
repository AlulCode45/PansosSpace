<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@400..700&family=Playwrite+RO:wght@100..400&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body>

    <div class="flex">
        <div class="w-3/12 h-screen border border-gray-300 p-5">
            <h1 class="font-icon font-semibold text-xl">PansosSpace</h1>
            <div class="main-menu mt-12">
                <div class="menu-list flex flex-col gap-7">
                    <div class="flex gap-3 items-center">
                        <svg fill="#000000" width="27px" height="27px" viewBox="0 0 24 24" version="1.2"
                            baseProfile="tiny" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 3s-6.186 5.34-9.643 8.232c-.203.184-.357.452-.357.768 0 .553.447 1 1 1h2v7c0 .553.447 1 1 1h3c.553 0 1-.448 1-1v-4h4v4c0 .552.447 1 1 1h3c.553 0 1-.447 1-1v-7h2c.553 0 1-.447 1-1 0-.316-.154-.584-.383-.768-3.433-2.892-9.617-8.232-9.617-8.232z" />
                        </svg>
                        <span class="font-bold">Home</span>
                    </div>
                    <div class="flex gap-3 items-center">
                        <svg fill="#000000" width="27px" height="27px" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z" />
                        </svg>
                        <span class="">Cari</span>
                    </div>
                    <div class="flex gap-3 items-center">
                        <svg fill="#000000" width="27px" height="27px" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12,23 C5.92486775,23 1,18.0751322 1,12 C1,5.92486775 5.92486775,1 12,1 C18.0751322,1 23,5.92486775 23,12 C23,18.0751322 18.0751322,23 12,23 Z M12,21 C16.9705627,21 21,16.9705627 21,12 C21,7.02943725 16.9705627,3 12,3 C7.02943725,3 3,7.02943725 3,12 C3,16.9705627 7.02943725,21 12,21 Z M17.5811388,6.41886117 L14.7905694,14.7905694 L6.41886117,17.5811388 L9.20943058,9.20943058 L17.5811388,6.41886117 Z M9.58113883,14.4188612 L13.2094306,13.2094306 L14.4188612,9.58113883 L10.7905694,10.7905694 L9.58113883,14.4188612 Z" />
                        </svg>
                        <span class="">Jelajahi</span>
                    </div>
                    <div class="flex gap-3 items-center">
                        <svg width="27px" height="27px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.94414 8.28418C3.31747 6.62497 4.60448 5.31882 6.26653 4.91238C8.53218 4.35834 10.9252 4.36467 13.1909 4.91871C14.832 5.32005 16.1361 6.59343 16.549 8.22135L16.574 8.31991C17.1868 10.7356 17.1868 13.2644 16.574 15.6801L16.549 15.7787C16.1361 17.4066 14.832 18.68 13.1909 19.0813C10.9252 19.6353 8.53218 19.6417 6.26653 19.0876C4.60449 18.6812 3.31747 17.375 2.94414 15.7158L2.8825 15.4419C2.3725 13.1752 2.3725 10.8248 2.8825 8.55815L2.94414 8.28418Z"
                                stroke="#000" stroke-width="1.5" />
                            <path
                                d="M16.6633 15.3084L16.8603 15.3736C16.9115 15.3905 16.9614 15.4111 17.0097 15.4351L18.6936 16.2713C19.9829 16.9117 21.5 15.9804 21.5 14.5485L21.5 9.81013C21.5 8.29729 19.8246 7.37498 18.533 8.17679L17.0474 9.09908C16.9742 9.14452 16.9064 9.19808 16.8453 9.25871L16.7904 9.31325C17.1526 11.2977 17.1102 13.3366 16.6633 15.3084Z"
                                stroke="#000" stroke-width="1.5" />
                        </svg>
                        <span class="">Reels</span>
                    </div>
                    <div class="flex gap-3 items-center">
                        <svg fill="#000000" width="27px" height="27px" viewBox="0 0 1024 1024"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M512 0C229.232 0 0 229.232 0 512c0 282.784 229.232 512 512 512 282.784 0 512-229.216 512-512C1024 229.232 794.784 0 512 0zm0 961.008c-247.024 0-448-201.984-448-449.01 0-247.024 200.976-448 448-448s448 200.977 448 448-200.976 449.01-448 449.01zM736 480H544V288c0-17.664-14.336-32-32-32s-32 14.336-32 32v192H288c-17.664 0-32 14.336-32 32s14.336 32 32 32h192v192c0 17.664 14.336 32 32 32s32-14.336 32-32V544h192c17.664 0 32-14.336 32-32s-14.336-32-32-32z" />
                        </svg>
                        <span class="">Reels</span>
                    </div>
                    <div class="flex gap-2 items-center">
                        <img src="https://ui-avatars.com/api/?background=random&name=Muhammad%20Khoyron%20Ahlaqul%20Firdaus"
                            alt="" class="w-7 h-7 rounded-full">
                        <span class="">Muhammad Khoyron Ahlaqul Firdaus</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-6/12 h-screen overflow-y-auto py-5 px-3 scrollbar-hide">
            <div class="w-full overflow-x-auto scrollbar-hide flex gap-3">
                <img src="https://placebeard.it/100x100?random=1" alt=""
                    class="w-20 h-20 rounded-full border-2 border-gray-300 p-1" loading="lazy">
                <img src="https://placebeard.it/100x100?random=2" alt=""
                    class="w-20 h-20 rounded-full border-2 border-gray-300 p-1" loading="lazy">
                <img src="https://placebeard.it/100x100?random=3" alt=""
                    class="w-20 h-20 rounded-full border-2 border-gray-300 p-1" loading="lazy">
                <img src="https://placebeard.it/100x100?random=4" alt=""
                    class="w-20 h-20 rounded-full border-2 border-gray-300 p-1" loading="lazy">
                <img src="https://placebeard.it/100x100?random=5" alt=""
                    class="w-20 h-20 rounded-full border-2 border-gray-300 p-1" loading="lazy">
                <img src="https://placebeard.it/100x100?random=6" alt=""
                    class="w-20 h-20 rounded-full border-2 border-gray-300 p-1" loading="lazy">
                <img src="https://placebeard.it/100x100?random=7" alt=""
                    class="w-20 h-20 rounded-full border-2 border-gray-300 p-1" loading="lazy">
                <img src="https://placebeard.it/100x100?random=8" alt=""
                    class="w-20 h-20 rounded-full border-2 border-gray-300 p-1" loading="lazy">
                <img src="https://placebeard.it/100x100?random=9" alt=""
                    class="w-20 h-20 rounded-full border-2 border-gray-300 p-1" loading="lazy">
            </div>

            <section class="mt-10 px-10">
                @for ($i = 0; $i < 10; $i++)
                    <article class="my-7">
                        <div class="header">
                            <div class="flex justify-between">
                                <div class="flex gap-2 items-center">
                                    <img src="https://placebeard.it/100x100?random={{ $i }}" alt=""
                                        class="w-10 h-10 rounded-full">
                                    <div class="user">
                                        <span class="block text-sm font-bold">@alulcode404_</span>
                                        <small class="text-gray-500 line-clamp-1">Muhammad Khoyron Ahlaqul
                                            Firdaus</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image mt-3">
                            <img src="https://placebeard.it/300x300?random={{ $i }}" alt=""
                                class="w-full" loading="lazy">
                        </div>
                        <div class="action flex justify-between mt-3">
                            <div class="postAction flex gap-3">
                                <svg fill="#000000" width="25px" height="25px" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.5,4.609A5.811,5.811,0,0,0,16,2.5a5.75,5.75,0,0,0-4,1.455A5.75,5.75,0,0,0,8,2.5,5.811,5.811,0,0,0,3.5,4.609c-.953,1.156-1.95,3.249-1.289,6.66,1.055,5.447,8.966,9.917,9.3,10.1a1,1,0,0,0,.974,0c.336-.187,8.247-4.657,9.3-10.1C22.45,7.858,21.453,5.765,20.5,4.609Zm-.674,6.28C19.08,14.74,13.658,18.322,12,19.34c-2.336-1.41-7.142-4.95-7.821-8.451-.513-2.646.189-4.183.869-5.007A3.819,3.819,0,0,1,8,4.5a3.493,3.493,0,0,1,3.115,1.469,1.005,1.005,0,0,0,1.76.011A3.489,3.489,0,0,1,16,4.5a3.819,3.819,0,0,1,2.959,1.382C19.637,6.706,20.339,8.243,19.826,10.889Z" />
                                </svg>
                                <svg fill="#000000" width="25px" height="25px" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z" />
                                </svg>
                                <svg fill="#000000" width="25px" height="25px" viewBox="0 0 24 24"
                                    id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.707,11.293l-8-8A.99991.99991,0,0,0,12,4V7.54492A11.01525,11.01525,0,0,0,2,18.5V20a1,1,0,0,0,1.78418.62061,11.45625,11.45625,0,0,1,7.88672-4.04932c.0498-.00635.1748-.01611.3291-.02588V20a.99991.99991,0,0,0,1.707.707l8-8A.99962.99962,0,0,0,21.707,11.293ZM14,17.58594V15.5a.99974.99974,0,0,0-1-1c-.25488,0-1.2959.04932-1.56152.085A14.00507,14.00507,0,0,0,4.05176,17.5332,9.01266,9.01266,0,0,1,13,9.5a.99974.99974,0,0,0,1-1V6.41406L19.58594,12Z" />
                                </svg>
                            </div>
                            <div class="mark">
                                <svg fill="#000000" height="25px" width="25px" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                    <path
                                        d="M410.9,0H85.1C72.3,0,61.8,10.4,61.8,23.3V512L248,325.8L434.2,512V23.3C434.2,10.4,423.8,0,410.9,0z" />
                                </svg>
                            </div>

                        </div>
                        <div class="content-body mt-3">
                            <div class="likes flex gap-3">
                                <div class="flex">
                                    <img src="https://placebeard.it/100x100?random=7" alt=""
                                        class="w-5 h-5 rounded-full" loading="lazy">
                                    <img src="https://placebeard.it/100x100?random=8" alt=""
                                        class="w-5 h-5 rounded-full -ms-2" loading="lazy">
                                    <img src="https://placebeard.it/100x100?random=9" alt=""
                                        class="w-5 h-5 rounded-full -ms-2" loading="lazy">
                                </div>
                                <small class="font-semibold">74.293 suka</small>
                            </div>
                            <div class="body mt-2">
                                <p>
                                    <b>@alulcode404_</b>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
                                    doloremque ad sunt rem voluptatem rerum ipsam ipsum dolorem necessitatibus
                                    temporibus,
                                    eligendi ex architecto facere velit consectetur, quae, inventore excepturi
                                    laudantium?
                                </p>
                            </div>
                        </div>
                    </article>
                @endfor
            </section>
        </div>
        <div class="w-3/12 h-screen border border-gray-300 p-5 overflow-y-auto scrollbar-hide">
            <div class="flex gap-2 items-center">
                <img src="https://ui-avatars.com/api/?background=random&name=Muhammad%20Khoyron%20Ahlaqul%20Firdaus"
                    alt="" class="w-10 h-10 rounded-full">
                <div class="user">
                    <span class="block text-sm font-bold">@alulcode404_</span>
                    <small class="text-gray-500 line-clamp-1">Muhammad Khoyron Ahlaqul Firdaus</small>
                </div>
            </div>
            <div class="flex justify-between items-center mt-7">
                <p class="font-semibold text-sm text-gray-400">Disarankan untuk Anda</p>
                <a href="" class="font-bold text-sm">Lihat Semua</a>
            </div>
            <div class="recommendation mt-3 flex flex-col gap-3">
                <div class="flex gap-2 items-center">
                    <img src="https://placebeard.it/100x100?random=12" alt="" class="w-10 h-10 rounded-full">
                    <div class="user">
                        <span class="block text-sm font-bold">@alulcode404_</span>
                        <small class="text-gray-500 line-clamp-1">Muhammad Khoyron Ahlaqul Firdaus</small>
                    </div>
                </div>
                <div class="flex gap-2 items-center">
                    <img src="https://placebeard.it/100x100?random=13" alt="" class="w-10 h-10 rounded-full">
                    <div class="user">
                        <span class="block text-sm font-bold">@alulcode404_</span>
                        <small class="text-gray-500 line-clamp-1">Muhammad Khoyron Ahlaqul Firdaus</small>
                    </div>
                </div>
                <div class="flex gap-2 items-center">
                    <img src="https://placebeard.it/100x100?random=14" alt="" class="w-10 h-10 rounded-full">
                    <div class="user">
                        <span class="block text-sm font-bold">@alulcode404_</span>
                        <small class="text-gray-500 line-clamp-1">Muhammad Khoyron Ahlaqul Firdaus</small>
                    </div>
                </div>
                <div class="flex gap-2 items-center">
                    <img src="https://placebeard.it/100x100?random=15" alt="" class="w-10 h-10 rounded-full">
                    <div class="user">
                        <span class="block text-sm font-bold">@alulcode404_</span>
                        <small class="text-gray-500 line-clamp-1">Muhammad Khoyron Ahlaqul Firdaus</small>
                    </div>
                </div>
                <div class="flex gap-2 items-center">
                    <img src="https://placebeard.it/100x100?random=16" alt="" class="w-10 h-10 rounded-full">
                    <div class="user">
                        <span class="block text-sm font-bold">@alulcode404_</span>
                        <small class="text-gray-500 line-clamp-1">Muhammad Khoyron Ahlaqul Firdaus</small>
                    </div>
                </div>
            </div>
            <p class="form-text text-muted text-xs mt-5 text-gray-400">
                Tentang
                Bantuan
                Pers
                API
                Pekerjaan
                Privasi
                Ketentuan
                Lokasi
                Bahasa
                Verifikasi Meta
            </p>
            <footer class="text-xs text-gray-400 mt-3">Copyright &copy; 2024 - PansosSpace</footer>
        </div>
    </div>

</body>

</html>
