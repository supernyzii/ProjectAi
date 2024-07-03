<div id="convoAside" class="peer absolute z-20 flex h-full w-72 -translate-x-full flex-col border-e border-slate-200 bg-white duration-300 dark:border-slate-800 dark:bg-slate-950 max-lg:transition-all lg:static lg:h-auto lg:w-1/4 lg:!translate-x-0 rtl:translate-x-full [&.active]:translate-x-0">
    <div class="flex h-16 items-center border-b border-slate-200 px-6 py-4 dark:border-slate-800">
        <h3 class="text-lg font-bold text-slate-700 dark:text-white"> last conversations </h3>
    </div>
    <div class="h-full max-h-full flex-grow overflow-auto p-6 scrollbar-thin scrollbar-track-transparent scrollbar-thumb-slate-600 dark:scrollbar-track-slate-800">
        <div class="grid grid-cols-1 gap-5">
            <div class="active relative isolate flex cursor-pointer items-center before:absolute before:-inset-2 before:-z-10 before:rounded-md before:transition-all before:duration-300 before:content-[''] hover:before:bg-slate-50 hover:before:dark:bg-slate-800 [&.active]:before:bg-slate-100 [&.active]:before:dark:bg-slate-800">
                <div class="ms-4">
                    <h4 class="line-clamp-1 text-sm text-slate-600 dark:text-slate-200"> Hi, ProjectAI. What&#39;s your name? </h4>
                    <div class="mt-1 text-xs text-slate-500 dark:text-slate-400"> 12 min ago </div>
                </div>
            </div>
           
        </div>
    </div>
    <div class="mt-auto px-6 pb-6 pt-4">
        <a href="#" class="inline-flex w-full items-center justify-center gap-3 rounded-md bg-blue-600 px-5 py-2 text-sm font-medium text-white transition-all hover:bg-blue-800">
            <div class="h-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-full">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                </svg><!-- chat-bubble-bottom-center - outline - heroicons  -->
            </div>
            <span>Why go with us</span>
        </a>
    </div>
</div>
<!-- chat-aside -->
<div data-target="#convoAside" class="class-toggle absolute inset-0 z-10 hidden bg-slate-950 bg-opacity-20 peer-[.active]:block lg:!hidden"></div>
<!-- chat-aside-overlay -->