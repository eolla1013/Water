<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#  website: http://ogp.me/ns/website#">
    <meta charset="utf-8">
    <title>MIZUDERU.INFO</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="keywords" content="熊本地震,給水,みずでる,水道">
    <meta http-equiv="content-style-type" content="text/css">
    <meta http-equiv="content-script-type" content="text/javascript">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/list.css">
    <!-- OGP -->
    <meta property="og:type" content="website">
    <meta property="og:description" content="熊本県内の給水情報です。新しく情報を登録したいときは、画面上の「投稿する」をクリックします。そうすると画面が切り替わります。 ここで選択肢から「水が出ない」「水が出る」「水の提供可能」の３つからどれか選んで地図状にその位置をクリックすることで地点の設定ができます。 スマホなど現在地を取得できる機器であれば「現在地を設定」で今の位置を設定できます。 最後に「投稿」ボタンを押せが地図上にその情報が表示されます。">
    <meta property="og:title" content="熊本地震：熊本給水マップ Wartermap">
    <meta property="og:url" content="http://mizuderu.info/">
    <meta property="og:image" content="http://mizuderu.info/Watermap.png">
    <meta property="og:site_name" content="Watermap KUMAMOTO">
    <meta property="og:locale" content="ja_JP" />
    <meta property="fb:admins" content="661927574">
    <!-- OGP -->
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="container">
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>時間</th>
            <th>場所</th>
<!--            <th>住所</th>-->
            <th>ステータス</th>
            <th>コメント</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($arr as $a){
            $flg_str = "";
            if ($a["flg"] == 0) {
                $flg_str = '<img src="no.png" > 水が出ない';
            } elseif ($a["flg"] == 1) {
                $flg_str = '<img src="ok.png" > 水が出る';
            } elseif ($a["flg"] == 2) {
                $flg_str = '<img src="go.png" > 水の提供可能';
            }

            echo "<tr>";
            echo "<td>" . $a["Id"] . "</td>";
            echo "<td>" . $a["time"] . "</td>";
            echo "<td>" . $a["locate"] . "</td>";
//            echo "<td>" . $a["locate"] . "</td>";
            echo "<td>" . $flg_str . "</td>";
            echo "<td>" . $a["comment"] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<!-- Set up your HTML -->
<div id="breaking_news" class="owl-carousel"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
</body>

</html>