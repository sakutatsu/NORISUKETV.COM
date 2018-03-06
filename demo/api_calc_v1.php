<html>
<head>
<!-- NORISUKETV.COM API DEMO -->
<title>Arithmetic calculation & Percent API Demo | NORISUKETV.COM</title>
</head>
<body>
<?php
    $url ="//api.norisuketv.com/v1/calc?a=50&b=27";
 
    // APIをリクエスト
    error_reporting(0);
    try {
        $result = simplexml_load_file($url);
    } catch (Exception $e) {
        error_reporting(E_ALL);
        return(0);
    } 
    error_reporting(E_ALL);
 
    if(isset($result->Error)){ 
        // エラー表示
        echo $result->Error;
    } else {
        // 計算結果を表示
        if(isset($result->Addition)){ 
            echo "加算（和）：".$result->Addition."<br>¥n";
        }
        if(isset($result->Subtraction)){ 
            echo "減算（差）：".$result->Subtraction."<br>¥n";
        }
        if(isset($result->Multiplication)){ 
            echo "乗算（積）：".$result->Multiplication."<br>¥n";
        }
        if(isset($result->Division)){ 
            echo "除算（商）：".$result->Division."<br>¥n";
        }
        if(isset($result->Percent)){ 
            echo "（余り：".$result->Percent."）<br>¥n";
        }
    }
?>

<br><br><br>
<p style="font-size:10px;text-align:center;">このページは、<a href="https://norisuketv.com/">NORISUKETV.COM</a>のAPI呼び出しサンプルです。<br>
        Provided Server by Github.</p>
</body>
</html>
