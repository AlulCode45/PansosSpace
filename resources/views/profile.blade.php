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
        <div class="w-[20%] h-screen border border-gray-300 p-5">
            <h1 class="font-icon font-semibold text-xl">PansosSpace</h1>
            <div class="main-menu mt-12">
                <div class="menu-list flex flex-col gap-4">
                    <div class="flex gap-3 items-center hover:bg-gray-100 py-3 px-2 rounded-md">
                        <svg fill="#000000" width="27px" height="27px" viewBox="0 0 24 24" version="1.2"
                            baseProfile="tiny" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 3s-6.186 5.34-9.643 8.232c-.203.184-.357.452-.357.768 0 .553.447 1 1 1h2v7c0 .553.447 1 1 1h3c.553 0 1-.448 1-1v-4h4v4c0 .552.447 1 1 1h3c.553 0 1-.447 1-1v-7h2c.553 0 1-.447 1-1 0-.316-.154-.584-.383-.768-3.433-2.892-9.617-8.232-9.617-8.232z" />
                        </svg>
                        <span class="font-bold">Home</span>
                    </div>
                    <div class="flex gap-3 items-center hover:bg-gray-100 py-3 px-2 rounded-md relative">
                        <span
                            class="bg-red-500 absolute w-4 h-4 text-center rounded-full text-white font-semibold text-xs left-5 top-2">
                            5
                        </span>
                        <svg fill="#000000" width="27px" height="27px" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z" />
                        </svg>
                        <span class="">Cari</span>
                    </div>
                    <div class="flex gap-3 items-center hover:bg-gray-100 py-3 px-2 rounded-md">
                        <svg fill="#000000" width="27px" height="27px" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12,23 C5.92486775,23 1,18.0751322 1,12 C1,5.92486775 5.92486775,1 12,1 C18.0751322,1 23,5.92486775 23,12 C23,18.0751322 18.0751322,23 12,23 Z M12,21 C16.9705627,21 21,16.9705627 21,12 C21,7.02943725 16.9705627,3 12,3 C7.02943725,3 3,7.02943725 3,12 C3,16.9705627 7.02943725,21 12,21 Z M17.5811388,6.41886117 L14.7905694,14.7905694 L6.41886117,17.5811388 L9.20943058,9.20943058 L17.5811388,6.41886117 Z M9.58113883,14.4188612 L13.2094306,13.2094306 L14.4188612,9.58113883 L10.7905694,10.7905694 L9.58113883,14.4188612 Z" />
                        </svg>
                        <span class="">Jelajahi</span>
                    </div>
                    <div class="flex gap-3 items-center hover:bg-gray-100 py-3 px-2 rounded-md">
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
                    <div class="flex gap-3 items-center hover:bg-gray-100 py-3 px-2 rounded-md">
                        <svg fill="#000000" width="27px" height="27px" viewBox="0 0 1024 1024"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M512 0C229.232 0 0 229.232 0 512c0 282.784 229.232 512 512 512 282.784 0 512-229.216 512-512C1024 229.232 794.784 0 512 0zm0 961.008c-247.024 0-448-201.984-448-449.01 0-247.024 200.976-448 448-448s448 200.977 448 448-200.976 449.01-448 449.01zM736 480H544V288c0-17.664-14.336-32-32-32s-32 14.336-32 32v192H288c-17.664 0-32 14.336-32 32s14.336 32 32 32h192v192c0 17.664 14.336 32 32 32s32-14.336 32-32V544h192c17.664 0 32-14.336 32-32s-14.336-32-32-32z" />
                        </svg>
                        <span class="">Reels</span>
                    </div>
                    <div class="flex gap-2 items-center px-2">
                        <img src="https://ui-avatars.com/api/?background=random&name=Muhammad%20Khoyron%20Ahlaqul%20Firdaus"
                            alt="" class="w-7 h-7 rounded-full">
                        <span class="">Muhammad Khoyron Ahlaqul Firdaus</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-screen overflow-y-auto py-5 px-24 scrollbar-hide">
            <div class="flex gap-3">
                <div class="w-4/12 flex justify-center items-center">
                    <img src="https://ui-avatars.com/api/?background=random&name=Muhammad%20Khoyron%20Ahlaqul%20Firdaus"
                        alt="" class="w-[200px] h-[200px] rounded-full">
                </div>
                <div class="w-8/12">
                    <div class="flex gap-2 items-center">
                        <h2 class="font-semibold text-xl me-5">alulcode404_</h2>
                        <button class="bg-gray-100 rounded-lg font-semibold px-3 py-2">Edit Profile</button>
                        <button class="bg-gray-100 rounded-lg font-semibold px-3 py-2">Tambah Postingan</button>
                        <button class="bg-gray-100 rounded-lg font-semibold px-3 py-2">Logout</button>
                    </div>
                    <div class="flex justify-between w-3/4 mt-5">
                        <div class="post">
                            <b>15</b>
                            <span>Kiriman</span>
                        </div>
                        <div class="post">
                            <b>1.014</b>
                            <span>Pengikut</span>
                        </div>
                        <div class="post">
                            <b>15</b>
                            <span>Diikuti</span>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex gap-3 mt-4">
                            <b>Muhammad Khoyron Ahlaqul Firdaus</b> <span class="text-gray-400">he/him</span>
                        </div>
                        <span class="text-gray-400">Fullstack Programmer</span>
                        <div aria-disabled="false" role="button" tabindex="0"
                            style="display: inline; cursor: pointer;">
                            <span class="text-sm" dir="auto">👨&zwj;💻 Fullstack Web
                                Developer<br>🏢 @17min.d<br>🧑&zwj;🎓 Student at
                                SMKN 4 BOJONEGORO<br>👤 18 Years Old<br>Sic Parvis Magna ~
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-10">
            <div class="grid grid-cols-3 gap-1">
                @for ($i = 0; $i <= 10; $i++)
                    <img src="https://placebeard.it/300x300?random={{ $i }}"
                        class="w-full transition-all duration-200 hover:brightness-50" alt="" />
                @endfor
            </div>
        </div>
    </div>

</body>

</html>
