<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ТУРИСТ-PRO</title>
</head>

<body>
    <x-responsive-nav-link :href="route('register')" :active="request()->routeIs('dashboard')">
        {{ __('Регистрация') }}
    </x-responsive-nav-link>
    <br>
    <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('dashboard')">
        {{ __('Вход') }}
    </x-responsive-nav-link>
</body>

</html>