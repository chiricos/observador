@if( Session::get('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
@endif
@if( Session::get('message_error'))
    <div class="alert alert-danger">
        {{ Session::get('message_error') }}
    </div>
@endif