<select name="state" id="state">

    <option value="0">--Select a state--</option>
    @foreach($fetch as $key => $value)

    <option value="{{$value['id']}}">{{$value['state_name']}}</option>
    @endforeach
</select>