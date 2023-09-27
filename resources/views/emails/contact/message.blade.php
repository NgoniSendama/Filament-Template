<x-mail::message>
# Introduction
You have received new message from {{ $contact->first_name }} {{$contact->last_name}}
<div>

    {{ $contact->message }}


</div>
Here are their contact details {{$contact->phone}}, {{$contact->email}}.
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
