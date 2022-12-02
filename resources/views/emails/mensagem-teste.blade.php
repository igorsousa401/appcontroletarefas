@component('mail::message')
# Introdução

Corpo da Mensagem.

- Opção 01
- Opção 02
- Opção 03

@component('mail::button', ['url' => ''])
Botão 01
@endcomponent

@component('mail::button', ['url' => ''])
Botão 02
@endcomponent


Obrigado,<br>
{{ config('app.name') }}
@endcomponent
