表示

<table>
    <tr><th>id</th><th>comapny_name</th><th>place</th><th>square</th><th>panels</th><th>capacity</th><th>start</th></tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->company_name}}</td>
        <td>{{$item->place}}</td>
        <td>{{$item->square}}</td>
        <td>{{$item->panels}}</td>
        <td>{{$item->capacity}}</td>
        <td>{{$item->start}}</td>
    </tr>
    @endforeach
</table>