<x-app>
    <main>
        <div>
            <form action="{{ route('update', ['article' => $article->id]) }}" method="post">
                @csrf
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">投稿編集</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><label for="name">名前</label></th>
                            <td><input type="text" name="name" id="name" value="{{ $article->name }}" required></td>
                        </tr>
                        <tr>
                            <th><label for="content">投稿内容</label></th>
                            <td><textarea name="content" id="content" rows="4" required>{{ $article->content }}</textarea></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit">更新</button>
            </form>
        </div>
    </main>
    <footer>
        <hr>
        <div>(b・ω・)b</div>
    </footer>
</x-app>
