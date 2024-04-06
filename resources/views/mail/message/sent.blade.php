<x-mail::message>
# Introduction

Hi, {{ $message->name }} <br>

Your message has been sent:

>   Subject: {{ $message->subject }} <br>

>   Message: {{ $message->body }} <br>

<x-mail::button :url="config('app.url')">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
