<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FitFlow</title>

    <x-fontsLoad />

    <x-globalStylesInclude />






    @yield('assets')

</head>
<body>
    <div class="page-content-wrapper">

        <x-msgPopup />

        <div class="page-main-content-wrapper d-f wrap ">
            <x-panel.menuBar />

            <x-panel.menuSidebar />

            <main class="d-f jc-c ai-c section-1000" id="main">

                <div class="section-1000 p-20 d-f jc-c">


                    @yield('content')


                </div>

            </main>
        </div>

    </div>
</body>
</html>
