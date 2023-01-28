<?php
$answerArr = [
    'NINJA' => [
        'imgUrl' => 'https://i.imgur.com/01NsPDl.png',
        'previewImgUrl' => 'https://i.imgur.com/01NsPDl.png',
        'title' => '忍者',
    ],
    'SNOWMAN' => [
        'imgUrl' => 'https://i.imgur.com/lNJjDQW.png',
        'previewImgUrl' => 'https://i.imgur.com/lNJjDQW.png',
        'title' => '雪寶',
    ],
    'MONKEY' => [
        'imgUrl' => 'https://i.imgur.com/smp1y9Q.png',
        'previewImgUrl' => 'https://i.imgur.com/smp1y9Q.png',
        'title' => '悟空',
    ],
    'AVATAR' => [
        'imgUrl' => 'https://i.imgur.com/ub6VTtO.png',
        'previewImgUrl' => 'https://i.imgur.com/ub6VTtO.png',
        'title' => '阿凡達',
    ],
];
$answer = $answerArr[$_GET['animal']]; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="你的情緒原型是...<?php echo $answer['title'] ?>">
    <meta property="og:description" content="你的情緒原型是...<?php echo $answer['title'] ?>">
    <meta property="og:image" content="<?php echo $answer['previewImgUrl'] ?>">
    <meta property="og:image:url" content="<?php echo $answer['previewImgUrl'] ?>">
    <title>情緒原型評測結果</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1ZH5RN8HBS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-1ZH5RN8HBS');
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <img src="<?php echo $answer['imgUrl'] ?>" alt="" class="img-fluid">

            </div>
            <div class="col-12">
                <div class="d-grid gap-2 mt-3">
                    <a href="https://page.line.me/?accountId=845ibhra" class="btn btn-lg" type="button" style="color:white;background-color: #1ec92f">點擊測驗 : 我的教養原型,是哪一種動物父母 ?</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>