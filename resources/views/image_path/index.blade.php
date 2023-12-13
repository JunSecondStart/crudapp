@php
 $name = 'your name';
@endphp

<div>{{ $name }}</div>

表示

<table>
    <tr><th>Data</th></tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->getData()}}</td>
        <td>{{$item->image_path1}}</td>
        <td><img src="{{asset('storage/works_043_im01.jpg')}}"></td>
    </tr>
    @endforeach
</table>
