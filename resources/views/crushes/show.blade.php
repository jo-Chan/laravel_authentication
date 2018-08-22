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
<br><br>

<label>Qualities: </label>

<ul>
    @foreach ( $crush -> qualities as $quality)
        <li>{{ $quality -> quality }} <a href="{{ route('crushes.id.destroy-quality', array( 'id' => $quality -> id))
        }}">Delete</a></li>
    @endforeach
</ul>

<br>
<form action="{{ route('crushes.id.quality', array( 'id' => $crush -> id)) }}">
    <input type="submit" value="Add Quality">
</form>

