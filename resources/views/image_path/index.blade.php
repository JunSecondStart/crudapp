<table>
    <tr><th>Data</th></tr>
    <tr><th>image1</th><th>image2</th><th>id</th><th>comapny_name</th><th>place</th><th>square</th><th>panels</th><th>capacity</th><th>start</th></tr>
    @foreach ($company_items as $company_item)
    <tr>
        @foreach ($image_items as $image_item)
            <td><img src="{{asset($image_item->image_path1)}}"　width="250" height="250"></td>
            <td><img src="{{asset($image_item->image_path2)}}"　width="250" height="250"></td>
        @endforeach
        <td>{{$company_item->id}}</td>
        <td>{{$company_item->company_name}}</td>
        <td>{{$company_item->place}}</td>
        <td>{{$company_item->square}}</td>
        <td>{{$company_item->panels}}</td>
        <td>{{$company_item->capacity}}</td>
        <td>{{$company_item->start}}</td>
    </tr>
    @endforeach
</table>