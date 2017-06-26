@if (count($errors) > 0)
    <!-- form error list -->
    <div class="alert alert-danger">
        <strong>WOOPS Something Evil This Way Comes</strong>

        <br/><br/>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>
    </div>
@endif