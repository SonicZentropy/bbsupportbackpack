{{-- regular object attribute --}}
<td>{{ str_limit(strip_tags(Carbon\Carbon::parse($entry->{$column['name']})->format('F j, Y')), 80, "[...]") }}</td>

