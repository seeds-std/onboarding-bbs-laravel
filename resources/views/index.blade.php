<x-app>
    <header>
        <h1>オンボーディング掲示板</h1>
    </header>
    <main>
        <ul>
            @foreach($articles as $article)
                <li>
                    <div>
                        {{ $article->id }}:&nbsp;{{ $article->name }}&nbsp;{{ $article->updated_at->format('Y-m-d H:i:s') }}
                    </div>
                    <div>{!! nl2br(e($article->content)) !!}</div>
                    <div style="display: inline-flex;">
                        <a href="{{ route('edit', ['article' => $article->id]) }}" class="button">編集</a>
                        &nbsp;
                        <a href="{{ route('delete_confirm', ['article' => $article->id]) }}">削除</a>
                    </div>
                </li>
                <br/>
            @endforeach
        </ul>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <form action="{{ route('post') }}" method="POST">
                @csrf
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">新規投稿</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><label for="name">名前</label></th>
                            <td><input type="text" name="name" id="name" required></td>
                        </tr>
                        <tr>
                            <th><label for="content">投稿内容</label></th>
                            <td><textarea name="content" id="content" rows="4" required></textarea></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit">投稿</button>
            </form>
        </div>
    </main>
    <footer>
        <hr>
        <div>(b・ω・)b</div>
    </footer>
</x-app>
