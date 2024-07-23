<x-app>
    <header>
        <h1>確認</h1>
    </header>
    <main>
        <div>下記の内容で投稿しますがよろしいですか?</div>
        <table>
            <tbody>
                <tr><th>名前</th><td>{{ $post['name'] }}</td></tr>
                <tr><th>投稿内容</th><td>{{ $post['content'] }}</td></tr>
            </tbody>
        </table>
        <form action="{{ route('store') }}" method="post">
            @csrf
            <input type="hidden" name="name" value="{{ $post['name'] }}">
            <input type="hidden" name="content" value="{{ $post['content'] }}">
            <button type="submit">投稿</button>
        </form>
    </main>
</x-app>
