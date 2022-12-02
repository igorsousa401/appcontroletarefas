@component('mail::message')
# {{$tarefa}}

Data Limite de Conclusão: {{$data_limite_conclusao}}

@component('mail::button', ['url' => $url])
Clique aqui para a abrir a Tarefa
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
