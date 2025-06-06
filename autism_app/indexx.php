<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ABC量表评估</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    * {
      margin: 0; padding: 0; box-sizing: border-box;
      font-family: 'PingFang SC', 'Microsoft YaHei', sans-serif;
    }
    body, html {
      height: 100%; width: 100%;
      background: #000;
    }
    .container {
      position: relative;
      width: 100%;
      height: 100vh;
      background-image: url('微信图片_20250606190510.jpg');
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 5%;
    }
    .container::before {
      content: "";
      position: absolute; top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0,0,0,0.25);
      z-index: 1;
      pointer-events: none;
    }
    .text-block {
      position: relative;
      color: white;
      max-width: 500px;
      z-index: 2;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.7);
      margin-right: 20px;
    }
    .text-block h1 {
      font-size: 3rem;
      margin-bottom: 10px;
      font-weight: bold;
    }
    .text-block p {
      font-size: 1.3rem;
      margin-bottom: 10px;
      line-height: 1.6;
    }
    .text-block p.sub {
      font-size: 1rem;
      color: #d0e8ffcc;
      margin-bottom: 30px;
    }
    .text-block a {
      display: inline-block;
      padding: 14px 36px;
      background: linear-gradient(135deg, #6bc1ff, #4470ef);
      color: white;
      text-decoration: none;
      border-radius: 30px;
      font-size: 1.2rem;
      font-weight: bold;
      box-shadow: 0 6px 12px rgba(0,0,0,0.3);
      transition: 0.3s;
      user-select: none;
    }
    .text-block a:hover {
      background: linear-gradient(135deg, #4470ef, #6bc1ff);
      box-shadow: 0 8px 16px rgba(0,0,0,0.5);
      transform: translateY(-3px);
    }
    .card-panel {
      position: relative;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 48px;
      width: 460px;
      z-index: 2;
      margin-left: -20px;
    }
    .card {
      background: rgba(255,255,255,0.2);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      color: white;
      font-size: 1.3rem;
      font-weight: 600;
      text-align: center;
      padding: 28px 20px;
      border-radius: 20px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
      transition: all 0.3s ease;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 12px;
      user-select: none;
    }
    .card i {
      font-size: 32px;
      color: #add8e6;
      transition: color 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      background: rgba(255,255,255,0.3);
      color: #e0f7ff;
      box-shadow: 0 12px 20px rgba(0,0,0,0.3);
    }
    .card:hover i {
      color: #74b9ff;
    }
    .usage-info {
      position: absolute;
      bottom: 10px;
      right: 5%;
      color: rgba(255,255,255,0.8);
      font-size: 0.9rem;
      z-index: 3;
      user-select: none;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.7);
    }
    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        padding: 10%;
      }
      .text-block {
        margin-bottom: 40px;
        max-width: 100%;
        margin-right: 0;
      }
      .card-panel {
        grid-template-columns: 1fr;
        width: 100%;
        gap: 48px;
        margin-left: 0;
      }
      .usage-info {
        position: static;
        margin-top: 20px;
        text-align: left;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="text-block">
      <h1>ABC量表评估</h1>
      <p>专业的孤独症行为评定量表，涵盖五大维度，共57项评估指标</p>
      <p class="sub">全面覆盖沟通、感官、社交行为五大维度，助力科学评估</p>
      <a href="adc_form.php">立即开始评估</a> <!-- ✅ 修改后的跳转链接 -->
    </div>
    <div class="card-panel">
      <div class="card" onclick="location.href='adc_form.php'">
        <i class="fas fa-chart-line"></i>
        ABC量表评估
      </div>
      <div class="card" onclick="location.href='questionnaire.php'">
        <i class="fas fa-stethoscope"></i>
        中医辨证问卷
      </div>
      <div class="card" onclick="location.href='child_development.html'">
        <i class="fas fa-baby"></i>
        儿童基本信息
      </div>
      <div class="card" onclick="location.href='parent_questionnaire.html'">
        <i class="fas fa-users"></i>
        家长观察问卷
      </div>
    </div>
  </div>
</body>
</html>
