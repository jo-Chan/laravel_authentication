<form action="{{ route('crushes.id.store', array('id'=>$crush->id)) }}">
    {{ csrf_field() }}

    <input type="text" name="quality" />
    <input type="submit" value="Add" />
</form>