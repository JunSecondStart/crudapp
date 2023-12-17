<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/company_index.css') }}">
    </head>
    <body>
        <section class="card-space">
        @foreach ($items as $item)
                    @if ($item->imagePaths != null)
                    <div class="card" style="width: 18rem;">
                        @foreach ($item-> imagePaths as $obj)
                        <img src="{{asset($obj->image_path1)}}" class="card-img-top" alt="card_image" width="250" height="250">
                        @endforeach
                        <div class="card-body">
                            <h5 class="card-title">{{$item->id}}:{{$item->company_name}}</h5>
                            <p class="card-text">explain</p>
                            <a href="#" class="btn btn-primary">link</a>
                        </div>
                    </div>
                    @endif
        @endforeach
        </section>        

        <section>
            <h2>Read</h2>
            <h5>-MysqlにInsertされている各データの読み込み＋App上に保存されている画像の表示（画像へアクセスするパスをDB内に保存）-</h5>
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
                    <td>
                        @if ($item->imagePaths != null)
                        <table width="100%">
                            @foreach ($item-> imagePaths as $obj)
                            <td><img src="{{asset($obj->image_path1)}}"　width="250" height="250"></td>
                            <td><img src="{{asset($obj->image_path2)}}"　width="250" height="250"></td>
                            @endforeach
                        </table>
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
        </section>

    </body>
</html>