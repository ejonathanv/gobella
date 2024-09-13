@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('landing-page/go-bella-wellness-logo.svg') }}" alt="Go Bella Wellness Logo" style="width: 140px; height: auto;">
@else
<img src="{{ asset('landing-page/go-bella-wellness-logo.svg') }}" alt="Go Bella Wellness Logo" style="width: 140px; height: auto;">
@endif
</a>
</td>
</tr>
