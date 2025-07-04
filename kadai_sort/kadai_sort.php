<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <P>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        function sort_2way(array $array, bool $order) {

            if ($order == true) {
                echo "昇順にソートします。<br>";

                // 昇順にソート
                sort($array);
                foreach ($array as $value) {
                    echo "{$value} <br>";
                } 
            } else {
                echo "降順にソートします。<br>";
                rsort($array);
                foreach ($array as $value) {
                    echo "{$value} <br>";
                }
            }
            };
            sort_2way($nums, true); // trueなら昇順、falseなら降順
            sort_2way($nums, false); // trueなら昇順、falseなら降順
        ?>
        
    </P>

</body>
</html>