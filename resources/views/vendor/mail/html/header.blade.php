<tr>
<td class="header">
<a href="app_controle_tarefas.test/img/logo.png" style="display: inline-block;">
@if (trim($slot) === 'Controle de Tarefas')
<img src="{{asset('img/logo.png')}}" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
