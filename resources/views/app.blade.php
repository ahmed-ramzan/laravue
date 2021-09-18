<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div id="app">
    <div class="container">
        <header class="py-6">
            <h1 class="text-gray-500">LaraVue</h1>
        </header>

        <main class="d-flex">
            <aside>
                <ul>
                    <li><router-link active-class="font-bold" to="/">Logo</router-link></li>
                    <li><router-link active-class="font-bold" to="logo-symbol">Logo Symbol</router-link></li>
                    <li><router-link active-class="font-bold" to="colors">Colors</router-link></li>
                    <li><router-link active-class="font-bold" to="typography">Typography</router-link></li>

                    <li><router-link active-class="font-bold" to="mascot">Mascot</router-link></li>
                    <li><router-link active-class="font-bold" to="illustrations">Illustrations</router-link></li>
                    <li><router-link active-class="font-bold" to="loaders-and-animations">Loaders And Animations</router-link></li>
                    <li><router-link active-class="font-bold" to="wallpapers">Wallpapers</router-link></li>
                </ul>
            </aside>

            <div class="ml-5">
                <router-view></router-view>
            </div>
        </main>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
