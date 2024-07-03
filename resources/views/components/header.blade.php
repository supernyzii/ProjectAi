<div class="fixed start-0 top-0 isolate z-[1020] w-full border-b border-slate-200 bg-white px-3 py-4 dark:border-slate-800 dark:bg-slate-950 xl:py-3">
    <div class="container px-3">
        <div class="w-100 flex items-center justify-between">
            <div class="flex items-center gap-x-2">
                <div class="-ms-1.5 xl:hidden">
                    <button class="header-toggle inline-flex h-8 w-8 items-center justify-center overflow-hidden rounded-full text-slate-400 transition-all hover:bg-slate-200 hover:text-slate-600 hover:dark:bg-slate-800 hover:dark:text-slate-200 [&amp;.active]:bg-slate-200 [&amp;.active]:text-slate-600 [&amp;.active]:dark:bg-slate-800 [&amp;.active]:dark:text-slate-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg><!-- bars-3 - outline - heroicons -->
                    </button>
                </div>
                <a href="overview.html" class="flex-shrink-0">
                    <div class="flex items-center">
                        <img class="h-6 dark:hidden" src="{{ asset('backend/assets/images/logos.png')}}" alt="logo">
                        <img class="hidden h-6 dark:block" src="{{ asset('backend/assets/images/logos-white.png')}}" alt="logo">
                    </div>
                </a><!-- logo -->
            </div>
            <!-- header-brand -->
            <div class="main-header peer fixed start-0 top-0 z-[1020] flex h-screen w-64 flex-shrink-0 -translate-x-full flex-col border-e border-slate-200 bg-white py-4 dark:border-slate-800 dark:bg-slate-950 max-xl:overflow-auto max-xl:transition-all xl:static xl:h-auto xl:w-auto xl:!translate-x-0 xl:border-e-0 xl:py-0 xl:transition-none rtl:translate-x-full [&amp;.header-visible]:translate-x-0">
                <ul class="menu-head flex flex-col gap-x-6 px-4 xl:flex-row xl:items-center">
                    <li class="menu-item group relative">
                        <a href="#" class="menu-link flex items-center py-2 text-sm font-medium text-slate-700 group-hover:text-blue-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-100 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600 xl:py-3">
                            <span>Home</span>
                        </a>
                    </li>
                   
                    <li class="menu-item group relative">
                        <a href="#" class="menu-link flex items-center py-2 text-sm font-medium text-slate-700 group-hover:text-blue-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-100 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600 xl:py-3">
                            <span>share</span>
                        </a>
                    </li>
                   
                </ul>
            </div>
            <!-- header-main -->
            <div class="header-toggle pointer-events-none fixed inset-0 z-[1019] bg-slate-950 bg-opacity-50 opacity-0 peer-[.header-visible]:pointer-events-auto peer-[.header-visible]:opacity-100 xl:!opacity-0"></div>
            <!-- overlay -->
            <ul class="flex items-center gap-x-3 lg:gap-x-5">
                <li class="relative inline-flex">
                    <button class="theme-toggle inline-flex h-8 w-8 items-center justify-center overflow-hidden rounded-full text-slate-400 transition-all *:pointer-events-none hover:bg-slate-200 hover:text-slate-600 dark:bg-slate-800 dark:text-slate-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="hidden h-4 dark:block">
                            <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 0 1 .162.819A8.97 8.97 0 0 0 9 6a9 9 0 0 0 9 9 8.97 8.97 0 0 0 3.463-.69.75.75 0 0 1 .981.98 10.503 10.503 0 0 1-9.694 6.46c-5.799 0-10.5-4.7-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 0 1 .818.162Z" clip-rule="evenodd"></path>
                        </svg><!-- moon - solid - heroicons  -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 dark:hidden">
                            <path d="M12 2.25a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75ZM7.5 12a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM18.894 6.166a.75.75 0 0 0-1.06-1.06l-1.591 1.59a.75.75 0 1 0 1.06 1.061l1.591-1.59ZM21.75 12a.75.75 0 0 1-.75.75h-2.25a.75.75 0 0 1 0-1.5H21a.75.75 0 0 1 .75.75ZM17.834 18.894a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 1 0-1.061 1.06l1.59 1.591ZM12 18a.75.75 0 0 1 .75.75V21a.75.75 0 0 1-1.5 0v-2.25A.75.75 0 0 1 12 18ZM7.758 17.303a.75.75 0 0 0-1.061-1.06l-1.591 1.59a.75.75 0 0 0 1.06 1.061l1.591-1.59ZM6 12a.75.75 0 0 1-.75.75H3a.75.75 0 0 1 0-1.5h2.25A.75.75 0 0 1 6 12ZM6.697 7.757a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 0 0-1.061 1.06l1.59 1.591Z"></path>
                        </svg><!-- sun - solid - heroicons  -->
                    </button>
                </li>
                <!-- mode-switch -->
                <li class="relative inline-flex">
                    <button data-offset="0,8" data-placement="bottom-end" data-rtl-placement="bottom-start" class="dropdown-toggle peer inline-flex h-9 w-9 overflow-hidden rounded-full outline outline-2 outline-offset-2 outline-slate-300 *:pointer-events-none dark:outline-slate-700">
                        <img src="{{ asset('backend/assets/images/avatar/a.jpg')}}" alt="">
                    </button>
                    <div class="dropdown-menu invisible absolute end-0 top-10 w-48 opacity-0 transition-all duration-100 ease-out peer-[.show]:visible peer-[.show_.dropdown-wrap]:scale-100 peer-[.show]:opacity-100">
                        <div class="dropdown-wrap ransition-all origin-top-right scale-90 rounded-lg border border-slate-200 bg-white shadow-sm duration-100 ease-out dark:border-slate-800 dark:bg-slate-950">
                            <div class="flex items-center p-4">
                                <div class="inline-flex h-10 w-10 flex-shrink-0 overflow-hidden rounded-full outline outline-2 outline-offset-2 outline-slate-300 dark:outline-slate-700">
                                    <img src="{{ asset('backend/assets/images/avatar/a.jpg')}}" alt="">
                                </div>
                                <div class="ms-4">
                                    <h6 class="-mt-0.5 text-xs font-bold text-slate-700 dark:text-white"> Pasty Right</h6>
                                    
                                </div>
                            </div>
                            <ul class="border-t border-slate-200 py-2 dark:border-slate-800">
                               
                                <li>
                                    <a href="profile.html" class="flex px-4 py-2 text-xs font-bold text-slate-500 transition-all hover:text-blue-600 dark:text-slate-400 hover:dark:text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="me-2 w-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"></path>
                                        </svg><!-- user - outline - heroicons  -->
                                        <span>Profile</span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#" class="flex px-4 py-2 text-xs font-bold text-slate-500 transition-all hover:text-blue-600 dark:text-slate-400 hover:dark:text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="me-2 w-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1 0 12.728 0M12 3v9"></path>
                                        </svg>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- user-dropdown -->
            </ul>
            <!-- header-tools -->
        </div>
    </div>
    <!-- container -->
</div>