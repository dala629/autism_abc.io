<?php
session_start();
// 存储ABC量表数据到session
$_SESSION['abc_data'] = $_POST;
?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <title>中医虚实症调研问卷</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-4">
  <form action="result.php" method="POST" id="diagnosisForm" class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4 text-center">中医虚实症调研问卷</h1>
    <input type="hidden" name="patient_name" value="<?= htmlspecialchars($_SESSION['abc_data']['name'] ?? '') ?>">

    <!-- 步骤内容区域 -->
    <div id="stepContainer">
     <!-- 步骤 1：气虚 -->
     <div class="step">
        <h2 class="text-xl font-semibold mb-4 text-blue-600">气虚(虚证)</h2>
        <div class="space-y-4">
          <div><label>1. 是否感觉身体乏力，不想说话？</label>
            <select name="qx_1" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>2. 是否存在呼吸短促，气不够用，且不自主出汗的现象？</label>
            <select name="qx_2" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>3. 平时容易感冒吗？</label>
            <select name="qx_3" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>4. 肌肉是否比较松软，缺乏紧实度？</label>
            <select name="qx_4" class="border rounded p-2 w-full">
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>5. 有无食欲缺乏、不想吃饭的问题？</label>
            <select name="qx_5" class="border rounded p-2 w-full">
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
        </div>
      </div>

      <!-- 步骤 2：血虚 -->
      <div class="step hidden">
        <h2 class="text-xl font-semibold mb-4 text-blue-600">血虚(虚证)</h2>
        <div class="space-y-4">
          <div><label>1. 面色看起来是否苍白？</label>
            <select name="xx_1" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>2. 有没有头晕眼花的症状？</label>
            <select name="xx_2" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>3. 是否有心悸失眠的困扰？</label>
            <select name="xx_3" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>4. 指甲颜色是否偏淡？</label>
            <select name="xx_4" class="border rounded p-2 w-full">
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>5. 有无肌肉无力的感觉？</label>
            <select name="xx_5" class="border rounded p-2 w-full">
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
        </div>
      </div>

      <!-- 步骤 3：阴虚 -->
      <div class="step hidden">
        <h2 class="text-xl font-semibold mb-4 text-blue-600">阴虚(虚证)</h2>
        <div class="space-y-4">
          <div><label>1. 是否感觉两手心、两脚心发热，同时伴有心胸烦热？</label>
            <select name="yx_1" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>2. 是否存在睡觉过程中出汗，醒来出汗停止的症状？</label>
            <select name="yx_2" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>3. 经常觉得口干咽燥吗？</label>
            <select name="yx_3" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>4. 舌头颜色是否偏红且舌苔较少？</label>
            <select name="yx_4" class="border rounded p-2 w-full">
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>5. 大便是否干燥、坚硬？</label>
            <select name="yx_5" class="border rounded p-2 w-full">
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
        </div>
      </div>

      <!-- 步骤 4：阳虚 -->
      <div class="step hidden">
        <h2 class="text-xl font-semibold mb-4 text-blue-600">阳虚(虚证)</h2>
        <div class="space-y-4">
          <div><label>1. 平时是否存在在温暖环境中感觉寒冷，同时四肢冰冷的情况？</label>
            <select name="yxu_1" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>2. 小便是否清澈且量多？</label>
            <select name="yxu_2" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>3. 舌头是否颜色淡、胖大且有齿痕？</label>
            <select name="yxu_3" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>4. 行动是否比较迟缓？</label>
            <select name="yxu_4" class="border rounded p-2 w-full">
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
        </div>
      </div>

      <!-- 步骤 5：肝郁气滞证 -->
      <div class="step hidden">
        <h2 class="text-xl font-semibold mb-4 text-blue-600">肝气郁结证(实证)</h2>
        <div class="space-y-4">
          <div><label>1. 是否情绪不稳定，容易激惹、哭闹或尖叫？</label>
            <select name="gyqz_1" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>2. 是否有频繁的刻板行为，比如反复拍手、转圈？</label>
            <select name="gyqz_2" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>3. 是否拒绝变化，抵触新环境？</label>
            <select name="gyqz_3" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>4. 舌质是否偏红，舌边是否有齿痕，脉象是否弦数？</label>
            <select name="gyqz_4" class="border rounded p-2 w-full">
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
        </div>
      </div>

      <!-- 步骤 6：痰火扰心证 -->
      <div class="step hidden">
        <h2 class="text-xl font-semibold mb-4 text-blue-600">痰火内扰证(实证)</h2>
        <div class="space-y-4">
          <div><label>1. 是否多动不安，注意力极度分散？</label>
            <select name="thrx_1" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>2. 是否烦躁尖叫，有攻击性行为，如抓咬、推搡？</label>
            <select name="thrx_2" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>3. 喉中是否有痰声？</label>
            <select name="thrx_3" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>4. 睡觉是否易惊醒？</label>
            <select name="thrx_4" class="border rounded p-2 w-full">
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>5. 舌质是否红，舌苔是否黄腻？</label>
            <select name="thrx_5" class="border rounded p-2 w-full">
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
        </div>
      </div>

      <!-- 步骤 7：心肝火旺证 -->
      <div class="step hidden">
        <h2 class="text-xl font-semibold mb-4 text-blue-600">心肝火旺证(实证)</h2>
        <div class="space-y-4">
          <div><label>1. 是否目光回避但眼神锐利？</label>
            <select name="xgwh_1" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>2. 是否触觉敏感，抗拒触摸？</label>
            <select name="xgwh_2" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>3. 是否有强迫性重复语言或发声？</label>
            <select name="xgwh_3" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>4. 是否便秘、尿黄，手足心热，舌尖是否红刺，脉象是否滑数？</label>
            <select name="xgwh_4" class="border rounded p-2 w-full">
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
        </div>
      </div>

      <!-- 步骤 8：胃肠积滞证 -->
      <div class="step hidden">
        <h2 class="text-xl font-semibold mb-4 text-blue-600">饮食积滞证(实证)</h2>
        <div class="space-y-4">
          <div><label>1. 是否挑食严重，偏好高糖、油炸食物？</label>
            <select name="wczz_1" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>2. 是否腹胀，口气酸臭，大便干结或黏腻？</label>
            <select name="wczz_2" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>3. 情绪波动是否与饮食相关，比如饱食后多动加重？</label>
            <select name="wczz_3" class="border rounded p-2 w-full" required>
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
          <div><label>4. 舌苔是否厚腻，脉象是否沉实？</label>
            <select name="wczz_4" class="border rounded p-2 w-full">
              <option value="">请选择</option>
              <option value="0">否</option>
              <option value="1">是</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <!-- 分页按钮 -->
    <div class="flex justify-between mt-6">
      <button type="button" onclick="prevStep()" class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">上一步</button>
      <button type="button" onclick="nextStep()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="nextBtn">下一步</button>
    </div>
  </form>

  <script>
    let currentStep = 0;
    const steps = document.querySelectorAll(".step");
    const nextBtn = document.getElementById("nextBtn");

    function showStep(index) {
      steps.forEach((step, i) => {
        step.classList.toggle("hidden", i !== index);
      });
      nextBtn.textContent = index === steps.length - 1 ? "提交" : "下一步";
    }

    function validateCurrentStep() {
      const currentStepFields = steps[currentStep].querySelectorAll("[required]");
      for (let field of currentStepFields) {
        if (!field.value) {
          alert("请完成当前步骤的所有必填项");
          return false;
        }
      }
      return true;
    }

    function nextStep() {
      if (!validateCurrentStep()) return;
      
      if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
      } else {
        document.getElementById("diagnosisForm").submit();
      }
    }

    function prevStep() {
      if (currentStep > 0) {
        currentStep--;
        showStep(currentStep);
      }
    }

    // 初始化
    showStep(currentStep);
  </script>
</body>
</html>