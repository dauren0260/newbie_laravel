<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    標題123456
    <h2>我是index.blade.php</h2>
    @if($point>=90)
        優秀
    @elseif($point>=80)
        不錯    
    @else
        不及格
    @endif

    @isset($abc)
        $abc 存在
    @else   
        $abc 不存在
    @endisset

    @empty($abc)
        abc為空
    @endempty

    {{$point>=60?'及格':'不及格'}}
    {{$abc??'默認值'}}
</body>
</html>