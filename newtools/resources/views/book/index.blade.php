@extends('book/layout')
@section('content')

<body>
    <div>

        <div>
            <h1>リンク先メモ</h1>
        </div>

        <div>
            <table>
                <tr>
                    <th class="text-center">
                        編集
                    </th>
                    <th class="text-center">リンク先</th>
                    <th class="text-center">url</th>
                    <th class="text-center">コメント</th>
                    <th class="text-center">created_at</th>
                    <th class="text-center">update_at</th>
                    <th class="text-center">削除</th>
                </tr>
                @foreach($books as $book)
                <tr>
                    <td>
                        <a href="/rink/{{ $book->id }}/edit">編集</a>
                        <!--{{ $book->id }}-->
                    </td>
                    <td><a href="{{ $book->price }}">{{ $book->name }}</a></td>
                    <td>{{ $book->price }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->created_at->format('Y/m/d')  }}</td>
                    <td>{{ $book->updated_at->format('Y/m/d')  }}</td>
                    <td>
                        <form action="/rink/{{ $book->id }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" style="width:100%;height:100%">
                                <font size="1">削除</font>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <div><a href="/rink/create">新規作成</a></div>
        </div>
    </div>


</body>

@endsection