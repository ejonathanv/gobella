<x-mail::message>
# Hello Go Bella Team.

You have a new subscriber. Here are the details:

Name: {{ $subscriber->name }}
Email: {{ $subscriber->email }}

Have a great day!,<br>
{{ config('app.name') }}
</x-mail::message>
