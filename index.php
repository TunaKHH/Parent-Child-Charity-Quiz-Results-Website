<?php
$answerArr = [
    'lion' => [
        'imgUrl' => 'https://i.imgur.com/5URfXJw.jpg',
        'previewImgUrl' => 'https://i.imgur.com/lF2rvkf.jpg',
        'title' => '獅子王',
    ],
    'polar_bear' => [
        'imgUrl' => 'https://i.imgur.com/MSwAR8T.jpg',
        'previewImgUrl' => 'https://i.imgur.com/X9J8fzg.jpg',
        'title' => '北極熊',
    ],
    'camel' => [
        'imgUrl' => 'https://i.imgur.com/Xl512CL.jpg',
        'previewImgUrl' => 'https://i.imgur.com/QRki0Lx.jpg',
        'title' => '駱駝',
    ],
    'jellyfish' => [
        'imgUrl' => 'https://i.imgur.com/wJbZs3i.jpg',
        'previewImgUrl' => 'https://i.imgur.com/glTVTSh.jpg',
        'title' => '水母',
    ],
];
$answer = $answerArr[$_GET['animal']]; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="你的父母型態是...<?php echo $answer['title'] ?>">
    <meta property="og:description" content="你的父母型態是...<?php echo $answer['title'] ?>">
    <meta property="og:image" content="<?php echo $answer['previewImgUrl'] ?>">
    <meta property="og:image:url" content="<?php echo $answer['previewImgUrl'] ?>">
    <title>親子座談測驗結果</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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