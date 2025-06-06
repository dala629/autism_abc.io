<?php
session_start();

// 函数：获取ABC量表数据并进行相关处理
function getAbcData() {
    $abc_data = $_SESSION['abc_data'] ?? [];
    $patient_name = htmlspecialchars($abc_data['name'] ?? '');
    $age = htmlspecialchars($abc_data['age'] ?? '');
    $gender = htmlspecialchars($abc_data['gender'] ?? '');

    // 计算ABC总分
    $abc_score = 0;
    foreach ($abc_data as $key => $value) {
        if (strpos($key, 'q') === 0) {
            $abc_score += intval($value);
        }
    }

    return [
        'patient_name' => $patient_name,
        'age' => $age,
        'gender' => $gender,
        'abc_score' => $abc_score
    ];
}

// 函数：进行中医辨证分析
function tcmDiagnosisAnalysis() {
    $tcm_diagnosis = [];
    $tcm_scores = [];

    // 气虚证分析
    $qx_score = calculateScore(['qx_1', 'qx_2', 'qx_3']);
    if ($qx_score >= 2) {
        $tcm_diagnosis[] = '气虚证';
        $tcm_scores['气虚证'] = $qx_score;
    }

    // 血虚证分析
    $xx_score = calculateScore(['xx_1', 'xx_2', 'xx_3']);
    if ($xx_score >= 2) {
        $tcm_diagnosis[] = '血虚证';
        $tcm_scores['血虚证'] = $xx_score;
    }

    // 阴虚证分析
    $yx_score = calculateScore(['yx_1', 'yx_2', 'yx_3']);
    if ($yx_score >= 2) {
        $tcm_diagnosis[] = '阴虚证';
        $tcm_scores['阴虚证'] = $yx_score;
    }

    // 阳虚证分析
    $yxu_score = calculateScore(['yxu_1', 'yxu_2', 'yxu_3']);
    if ($yxu_score >= 2) {
        $tcm_diagnosis[] = '阳虚证';
        $tcm_scores['阳虚证'] = $yxu_score;
    }

    // 肝郁气滞证分析
    $gyqz_score = calculateScore(['gyqz_1', 'gyqz_2', 'gyqz_3', 'gyqz_4']);
    if ($gyqz_score >= 2) {
        $tcm_diagnosis[] = '肝郁气滞证';
        $tcm_scores['肝郁气滞证'] = $gyqz_score;
    }

    // 痰火扰心证分析
    $thrx_score = calculateScore(['thrx_1', 'thrx_2', 'thrx_3', 'thrx_4']);
    if ($thrx_score >= 2) {
        $tcm_diagnosis[] = '痰火扰心证';
        $tcm_scores['痰火扰心证'] = $thrx_score;
    }

    // 心肝火旺证分析
    $xgwh_score = calculateScore(['xgwh_1', 'xgwh_2', 'xgwh_3', 'xgwh_4']);
    if ($xgwh_score >= 2) {
        $tcm_diagnosis[] = '心肝火旺证';
        $tcm_scores['心肝火旺证'] = $xgwh_score;
    }

    // 胃肠积滞证分析
    $wczz_score = calculateScore(['wczz_1', 'wczz_2', 'wczz_3', 'wczz_4']);
    if ($wczz_score >= 2) {
        $tcm_diagnosis[] = '胃肠积滞证';
        $tcm_scores['胃肠积滞证'] = $wczz_score;
    }

    return [
        'tcm_diagnosis' => $tcm_diagnosis,
        'tcm_scores' => $tcm_scores
    ];
}

// 函数：计算某一证型的得分
function calculateScore($fields) {
    $score = 0;
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $score += intval($_POST[$field]);
        }
    }
    return $score;
}

// 函数：根据ABC量表得分确定等级和主要治疗方案
function determineLevelAndTherapy($abc_score) {
    if ($abc_score >= 104) {
        $level = '重度';
        $main_therapy = '行为疗法+音乐疗法+AR/VR训练';
    } elseif ($abc_score >= 68) {
        $level = '中度';
        $main_therapy = '行为疗法+音乐疗法';
    } else {
        $level = '轻度';
        $main_therapy = '音乐疗法';
    }

    return [
        'level' => $level,
       'main_therapy' => $main_therapy
    ];
}

// 函数：生成个性化方案
function generateRecommendation($main_therapy, $tcm_diagnosis, $tcm_scores) {
    $recommendation = "<div class='therapy-plan'>
        <h3>核心干预方案：{$main_therapy}</h3>
        <p>根据ABC量表评分和中医辨证结果，为您推荐以下综合干预方案：</p>";

    // 根据中医证型添加建议
    if (in_array('气虚证', $tcm_diagnosis)) {
        $recommendation .= "<div class='tcm-plan'>
            <h4>气虚证调理方案：</h4>
            <p><strong>证候评分：</strong>{$tcm_scores['气虚证']}/9</p>
            <p>• 药膳：黄芪山药粥、党参炖鸡汤</p>
            <p>• 针灸：主穴：足三里（健脾益气）、气海（补元气）、百会（升阳益脑）
配穴：脾俞（增强消化）、合谷（提升免疫力）</p>
            <p>• 推拿：顺时针揉按足三里3分钟，轻拍气海</p>
        </div>";
    }

    if (in_array('血虚证', $tcm_diagnosis)) {
        $recommendation .= "<div class='tcm-plan'>
            <h4>血虚证调理方案：</h4>
            <p><strong>证候评分：</strong>{$tcm_scores['血虚证']}/9</p>
            <p>• 药膳：四物汤煮蛋、红枣桂圆粥</p>
            <p>• 针灸：主穴：血海（补血调血）、三阴交（肝脾肾同调）、神门（安神定志）
配穴：肝俞（疏肝养血）、内关（改善心悸）</p>
            <p>• 推拿：从血海向膝眼方向推揉，配合点按</p>
        </div>";
    }

    if (in_array('阴虚证', $tcm_diagnosis)) {
        $recommendation .= "<div class='tcm-plan'>
            <h4>阴虚证调理方案：</h4>
            <p><strong>证候评分：</strong>{$tcm_scores['阴虚证']}/9</p>
            <p>• 药膳：百合银耳羹、麦冬石斛茶</p>
            <p>• 针灸：主穴：太溪（滋补肾阴）、照海（清热养阴）、涌泉（引火归元）
配穴：劳宫（清心火）、复溜（止盗汗）</p>
            <p>• 推拿：轻揉太溪穴2分钟，睡前推涌泉穴100次</p>
        </div>";
    }

    if (in_array('阳虚证', $tcm_diagnosis)) {
        $recommendation .= "<div class='tcm-plan'>
            <h4>阳虚证调理方案：</h4>
            <p><strong>证候评分：</strong>{$tcm_scores['阳虚证']}/9</p>
            <p>• 药膳：核桃韭菜粥、肉桂红糖姜茶</p>
            <p>• 针灸：主穴：命门（温补肾阳）、关元（培元固本）、肾俞（强健先天）
配穴：大椎（振奋阳气）、至阳（改善萎靡）</p>
            <p>• 推拿：搓热掌心后快速摩擦命门穴至发热</p>
        </div>";
    }
    if (in_array('肝气郁结证', $tcm_diagnosis)) {
        $recommendation .= "<div class='tcm - plan'>
            <h4>肝气郁结证调理方案：</h4>
            <p><strong>证候评分：</strong>{$tcm_scores['肝郁气滞证']}/8</p>
            <p>• 药膳：玫瑰陈皮茶、佛手粥</p>
            <p>• 针灸：主穴：太冲（疏肝理气）、肝俞（调肝养血）
配穴：膻中（宽胸理气）、四关穴（调节全身气机）</p>
            <p>• 推拿：清肝经：食指掌面从根向指尖直推100次；清心经：中指掌面向指尖推50次；揉板门：手掌大鱼际揉按2分钟（消食化积）</p>
        </div>";
    }

    if (in_array('痰热内扰证', $tcm_diagnosis)) {
        $recommendation .= "<div class='tcm - plan'>
            <h4>痰热内扰证调理方案：</h4>
            <p><strong>证候评分：</strong>{$tcm_scores['痰火扰心证']}/8</p>
            <p>• 药膳：冬瓜海带汤、竹茹粥</p>
            <p>• 针灸：主穴：丰隆（化痰祛湿）、内关（宁心安神）
配穴：大陵（清心安神）、中脘（和胃化痰）</p>
            <p>• 推拿：通用选穴：清肝经、清心经、揉板门；配穴：痰火重：丰隆穴揉按3分钟</p>
        </div>";
    }

    if (in_array('心肝火旺证', $tcm_diagnosis)) {
        $recommendation .= "<div class='tcm - plan'>
            <h4>心肝火旺证调理方案：</h4>
            <p><strong>证候评分：</strong>{$tcm_scores['心肝火旺证']}/8</p>
            <p>• 药膳：菊花决明子茶、百合莲子羹</p>
            <p>• 针灸：主穴：行间（清肝泻火）、劳宫（清心泻火）
配穴：太溪（滋阴降火）、耳尖（清热泻火）</p>
            <p>• 推拿：通用选穴：清肝经、清心经、揉板门；配穴：便秘：顺时针摩腹5分钟，推下七节骨100次</p>
        </div>";
    }

    if (in_array('饮食积滞证', $tcm_diagnosis)) {
        $recommendation .= "<div class='tcm - plan'>
            <h4>饮食积滞证调理方案：</h4>
            <p><strong>证候评分：</strong>{$tcm_scores['胃肠积滞证']}/8</p>
            <p>• 药膳：山楂麦芽饮、白萝卜粥</p>
            <p>• 针灸：主穴：足三里（健脾和胃）、天枢（调理肠道）
配穴：公孙（调理脾胃）、大肠俞（通腑导滞）</p>
            <p>• 推拿：通用选穴：清肝经、清心经、揉板门；配穴：便秘：顺时针摩腹5分钟，推下七节骨100次</p>
        </div>";
    }
    // 如果没有中医证型
    if (empty($tcm_diagnosis)) {
        $recommendation .= "<p>根据中医辨证，未发现明显虚实证候，建议以核心干预方案为主。</p>";
    }

    $recommendation .= "</div>";
    return $recommendation;
}

// 获取ABC量表数据
$abc_info = getAbcData();
$patient_name = $abc_info['patient_name'];
$age = $abc_info['age'];
$gender = $abc_info['gender'];
$abc_score = $abc_info['abc_score'];

// 进行中医辨证分析
$tcm_info = tcmDiagnosisAnalysis();
$tcm_diagnosis = $tcm_info['tcm_diagnosis'];
$tcm_scores = $tcm_info['tcm_scores'];

// 根据ABC量表得分确定等级和主要治疗方案
$level_therapy = determineLevelAndTherapy($abc_score);
$level = $level_therapy['level'];
$main_therapy = $level_therapy['main_therapy'];

// 生成个性化方案
$recommendation = generateRecommendation($main_therapy, $tcm_diagnosis, $tcm_scores);
?>
<!DOCTYPE html>
<html>
<head>
    <title>康复方案</title>
    <style>
        body { font-family: 'Microsoft YaHei'; max-width: 800px; margin: 0 auto; padding: 20px; }
       .result-card { background: #f9f9f9; padding: 20px; border-radius: 10px; margin-bottom: 20px; }
       .patient-info { background: #e8f4fc; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
       .therapy-plan { margin-bottom: 20px; }
       .tcm-plan { background: #f0f7ff; padding: 15px; border-radius: 5px; margin: 15px 0; }
        h2 { color: #2c3e50; border-bottom: 1px solid #ddd; padding-bottom: 10px; }
        h3 { color: #3498db; }
        h4 { color: #2980b9; }
       .btn { 
            background: #3498db; color: white; padding: 10px 15px; 
            border: none; border-radius: 4px; text-decoration: none; display: inline-block;
        }
       .btn:hover { background: #2980b9; }
    </style>
</head>
<body>
    <div class="result-card">
        <h2>个性化康复方案报告</h2>
        
        <div class="patient-info">
            <h3>患者基本信息</h3>
            <p><strong>姓名：</strong><?= $patient_name ?></p>
            <p><strong>年龄：</strong><?= $age ?></p>
            <p><strong>性别：</strong><?= $gender ?></p>
        </div>
        
        <div class="assessment-result">
            <h3>评估结果</h3>
            <p><strong>ABC量表总分：</strong><?= $abc_score ?> (<?= $level ?>)</p>
            <p><strong>中医辨证：</strong><?= empty($tcm_diagnosis)? '无明显证候' : implode('、', $tcm_diagnosis) ?></p>
        </div>
        
        <hr>
        
        <?= $recommendation ?>
        
        <a href="generate_pdf.php" class="btn">下载完整报告</a>
        <a href="abc_form.php" class="btn" style="background: #95a5a6;">重新评估</a>
    </div>
</body>
</html>