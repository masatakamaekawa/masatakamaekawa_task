<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>task show</title>
</head>

<body>
    <h1>タスク詳細</h1>
    <p>
        <b>タイトル：</b>
    </p>
    <p>
        <b>内容：</b>
    </p>
    <div class="button-group">
        <!-- 商品のidを元に編集ページへ遷移する -->
        <button onclick="location.href='/tasks/{{ $task->id }}/edit'">編集する</button>
        <button onclick="location.href='/tasks'">一覧へ戻る</button>
        <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    </div>
</body>

</html>
