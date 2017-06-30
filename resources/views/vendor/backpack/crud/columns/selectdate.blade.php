{{-- single relationships (1-1, 1-n) --}}
<td>
    <?php
    if ($entry->{$column['entity']}) {
        echo Carbon\Carbon::parse($entry->{$column['entity']}->{$column['attribute']})->format('F j, Y');

    }
    ?>
</td>
