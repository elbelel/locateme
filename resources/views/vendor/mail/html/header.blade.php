@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
<!-- @if (trim($slot) === 'Laravel') -->
<img src={{ asset('/images/Logo.png') }} width="100px" />
<!-- @else
{{ $slot }}
@endif -->
</a>
</td>
</tr>
