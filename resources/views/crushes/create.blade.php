@if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<form action="{{ $action }}" method="POST">
    {{ csrf_field() }}
    
    <label>First Name: </label>
    <input type="text" value="{{ $crush->first_name }}" name="first_name" />
    <br>
    <label>Last Name: </label>
    <input type="text" value="{{ $crush->last_name }}" name="last_name" />
    <br>
    <label>FB Profile Link: </label>
    <input type="text" value="{{ $crush->fb_profile_link }}" name="fb_profile_link" />
    <br>
    <label>Contact Number: </label>
    <input type="text" value="{{ $crush->contact_number }}" name="contact_number" />
    <br>
    
    <button type="submit">{{ $submit_text }}</button>
</form>