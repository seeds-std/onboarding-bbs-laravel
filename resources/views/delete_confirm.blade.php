<x-app>
    <header>
        <h1>確認</h1>
    </header>
    <main>
        <div>下記の内容を削除しますがよろしいですか?</div>
        <table>
            <tbody>
            <tr><th>名前</th><td>{{ $article->name }}</td></tr>
            <tr><th>投稿内容</th><td>{!! nl2br(e($article->content)) !!}</td></tr>
            </tbody>
        </table>
        <form action="{{ route('delete', ['article' => $article->id]) }}" method="post">
            @csrf
            <button type="submit">削除</button>
        </form>
    </main>
    <footer>
        <hr>
        <div>(　・ω・)ノ⌒■</div>
    </footer>
</x-app>
