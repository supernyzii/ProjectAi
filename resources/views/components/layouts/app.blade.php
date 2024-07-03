<!DOCTYPE html>
<html lang="zxx" id="pageroot">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Themeyn">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="icon" type="image/svg+xml" href="">
    <title>ProjectAi </title>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/appf64e.css')}}">
    @livewireStyles
</head>

<body class="min-w-[320px] bg-slate-100 dark:bg-slate-900">
    <div id="root">
        <div class="flex min-h-screen max-w-full flex-col overflow-x-hidden pt-[calc(theme(space.16)+theme(space.1))]" id="#pagecontent">
            <x-header/>
            <div class="relative px-3 py-10">
                <div class="container px-3">
                    <div class="flex-grow-1 relative isolate flex max-h-[calc(100vh-theme(space.52))] min-h-[calc(100vh-theme(space.52))] w-full overflow-hidden rounded-lg border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950">
                       <x-chat-aside/>
                       <x-chat-show/>
                      
                        
                    </div>
                    <!-- card -->
                </div>
                <!-- container -->
            </div>
            <x-footer/>
       
    </div>
</div>


    <script src="{{ asset('backend/assets/js/bundle-appf64e.js')}}"></script>
    <script src="{{ asset('backend/assets/js/scriptsf64e.js')}}"></script>
    @livewireScripts
</body>

</html>