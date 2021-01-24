<div>
    <div>
        <h2>リンク先メモ編集画面</h2>
    </div>
    <div>
        @include('book/message')
        @if($target == 'store')
        <form action="/rink" method="post">
            @elseif($target == 'update')
            <form action="/rink/{{ $book->id }}" method="post">
                <input type="hidden" name="_method" value="PUT">
                @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">リンク先</label><br>
                    <input type="text" class="form-control" name="name" value="{{ $book->name }}">
                </div>
                <div class="form-group">
                    <label for="price">url</label><br>
                    <input type="text" class="form-control" name="price" value="{{ $book->price }}">
                </div>
                <div class="form-group">
                    <label for="author">コメント</label><br>
                    <input type="text" class="form-control" name="author" value="{{ $book->author }}">
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/">戻る</a>
            </form>
    </div>
</div>