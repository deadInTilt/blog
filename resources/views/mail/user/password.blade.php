<x-mail::message>
# Introduction

Добрый день!

Благодарим за регистрацию на нашем сайте.

Ваш пароль: {{ $password }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
