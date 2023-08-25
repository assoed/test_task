{{--<pre>{{var_dump($dadata)}}</pre>--}}
<link   href="{{ asset('css/styles.css') }}" rel="stylesheet">
<script   src="{{ asset('js/test_task.js') }}"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Данные по ИНН</title>
</head>
<body>

    <div class="container">
        <div class="input-block">
        <p style="font-size: 22px; font-weight: bold">Данные по ИНН</p>

            <form id="text-form" action="{{route('idExample')}}">
                @csrf
                <label for="input-text">Введите ИНН:</label>
                <input type="text" id="INN-input" name="INN-input">
                <button type="submit">Отправить</button>
            </form>
        </div>
        <div class="output-block" id="output-block"></div>
    </div>


</body>
