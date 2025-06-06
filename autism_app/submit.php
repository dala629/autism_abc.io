<?php
session_start();
// 接收ABC量表数据并计算得分
$abc_answers = [];
$total_score = 0;
for ($i = 1; $i <= 57; $i++) {
    if (isset($_POST["q$i"])) {
        $abc_answers[] = intval($_POST["q$i"]);
        $total_score += intval($_POST["q$i"]);
    }
}
// 将得分和其他信息存入会话变量
$_SESSION['abc_score'] = $total_score;
$_SESSION['name'] = $_POST['name'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['age'] = $_POST['age'];
$_SESSION['reporter'] = $_POST['reporter'];
$_SESSION['relationship'] = $_POST['relationship'];

// 跳转到虚症实证问卷页面
header('Location: questionnaire.php');
exit;
?>