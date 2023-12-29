<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>留言列表</h1>
    <table>
        <tr>
            <th>編號</th>
            <th>姓名</th>
            <th>留言</th>
            <th>時間</th>
        </tr>
        @forelse($list as $val)
        <tr>
            <td>{{$val['id']}}</td>
            <td>{{$val['memName']}}</td>
            <td>{{$val['comment']}}</td>
            <td>{{$val['commentTime']}}</td>
        </tr>
        @empty
            <tr>
                <th>無數據</th>
            </tr>
        @endforelse
    </table>
</body>
</html>