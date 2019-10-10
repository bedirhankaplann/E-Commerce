<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel / E-Ticaret</title>
    <body>
        Merhaba {{ $name . ' ' . $surname }} <br>
        <hr>
        @php
            $age = 30;
        @endphp
        @if($name == 'Bedirhan')
            Sayın {{ $name . ' ' . $surname . ' ' . '(' . $age . ')'}}
        @else
            Kayıtlı Olmayan Kullanıcı
        @endif
        <hr>
        @switch($name)
            @case('Bedirhan')
                Hoşgeldin Bedirhan
                @break
            @case('Sümeyye')
                Hoşgeldin Sümeyye
                @break
            @default
                Hoşgeldin
        @endswitch
        <hr>
        @foreach($names as $name)
            {{$name . ($name !== end($names) ? ', ' : ' ')}}
        @endforeach
        <hr>
        {{--Yorum yaptım--}}
    @php $html = "<b>Test</b>"; @endphp
    {{ $html }}
        <hr>
    {!! $html !!}
    </body>
</html>
