<div class="z-0 flex w-full flex-col lg:w-3/4">
    <div class="flex h-full flex-col justify-stretch">
        <div class="h-15 flex items-center justify-between border-b border-slate-200 px-6 py-3 dark:border-slate-800">
            <div class="flex items-center">
                <div class="inline-flex h-9 w-9 flex-shrink-0 overflow-hidden rounded-full border-2 border-white dark:border-slate-800">
                    <img src="{{ asset('backend/assets/images/logos.png')}}" alt="Project Ai" />
                </div>
                <div class="ms-3">
                    <h4 class="line-clamp-1 text-xs font-bold text-slate-600 dark:text-slate-200"> ProjectAI </h4>
                    <div class="mt-0.5 text-[10px] text-slate-500 dark:text-slate-400"> Welcome </div>
                </div>
            </div>
            <button data-target="#convoAside" class="class-toggle -my-1 inline-flex h-8 w-8 items-center justify-center overflow-hidden rounded-full text-slate-400 transition-all hover:bg-slate-200 hover:text-slate-600 lg:hidden [&.active]:bg-slate-200 [&.active]:text-slate-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg><!-- bars-3 - outline - heroicons  -->
            </button>
        </div>
        <div class="h-full max-h-full flex-grow overflow-auto p-6 scrollbar-thin scrollbar-track-transparent scrollbar-thumb-slate-600 dark:scrollbar-track-slate-800">
            <div class="grid grid-cols-1 gap-4">
                <x-user-ask/>
                <x-ai-reply/>
               
               
               
             
                
            </div>
        </div>
        <div class="px-6 py-6">
            <div class="flex items-center gap-4">
                <input class="z-10 w-full rounded-md border-slate-200 bg-white text-sm/[1.125rem] text-slate-600 placeholder:text-slate-400 focus:border-slate-200 focus:shadow-none focus:outline-none disabled:bg-slate-100 disabled:text-slate-400 dark:border-slate-800 dark:bg-slate-950 dark:text-slate-200 placeholder:dark:text-slate-500" />
                <button class="inline-flex items-center justify-center rounded-md bg-blue-600 p-3 text-white transition-all hover:bg-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                    </svg><!-- paper-airplane - outline - heroicons  -->
                </button>
            </div>
        </div>
    </div>
</div>