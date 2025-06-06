<?php
session_start(); // 开启session
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>ABC量表评估</title>
    <style>
        body { font-family: 'Microsoft YaHei'; max-width: 800px; margin: 0 auto; padding: 20px; }
       .form-group { margin-bottom: 15px; }
       .question { margin: 15px 0; padding: 10px; background: #f5f5f5; border-radius: 5px; }
        h1 { color: #2c3e50; text-align: center; }
       .btn { background: #3498db; color: white; padding: 10px 15px; border: none; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>孤独症行为评定量表 (ABC量表)</h1>
    <form method="post" action="questionnaire.php">
        
        <!-- 基本信息 -->
        <div class="form-group">
            <label>患儿姓名：</label>
            <input type="text" name="name" required>
        </div>
        
        <div class="form-group">
            <label>年龄：</label>
            <input type="number" name="age" required>
        </div>
        
        <div class="form-group">
            <label>性别：</label>
            <select name="gender" required>
                <option value="">请选择</option>
                <option value="男">男</option>
                <option value="女">女</option>
            </select>
        </div>
        
        <!-- ABC量表问题示例（实际需包含57项） -->
        <div class="question">
            <p>1. 喜欢长时间自身旋转</p>
            <label><input type="radio" name="q1" value="4" required> 是</label>
            <label><input type="radio" name="q1" value="0"> 否</label>
        </div>
        
        <div class="question">
            <p>2. 学会做一件简单的事，但是很快就"忘记"</p>
            <label><input type="radio" name="q2" value="2" required> 是</label>
            <label><input type="radio" name="q2" value="0"> 否</label>
        </div>

        <div class="question">
            <p>3. 当抱着他时，感到他肌肉松弛(即他不紧贴着抱他的人)</p>
            <label><input type="radio" name="q3" value="2" required> 是</label>
            <label><input type="radio" name="q3" value="0"> 否</label>
        </div>

        <div class="question">
            <p>4. 以姿势、手势表示所渴望得到的东西(而不倾向用语言表示)</p>
            <label><input type="radio" name="q4" value="2" required> 是</label>
            <label><input type="radio" name="q4" value="0"> 否</label>
        </div>

        <div class="question">
            <p>5. 常用脚尖走路</p>
            <label><input type="radio" name="q5" value="2" required> 是</label>
            <label><input type="radio" name="q5" value="0"> 否</label>
        </div>

        <div class="question">
            <p>6. 用咬人、撞人、踢人等来伤害他人</p>
            <label><input type="radio" name="q6" value="2" required> 是</label>
            <label><input type="radio" name="q6" value="0"> 否</label>
        </div>

        <div class="question">
            <p>7. 不断地重复短句</p>
            <label><input type="radio" name="q7" value="2" required> 是</label>
            <label><input type="radio" name="q7" value="0"> 否</label>
        </div>

        <div class="question">
            <p>8. 游戏时不模仿其他儿童</p>
            <label><input type="radio" name="q8" value="2" required> 是</label>
            <label><input type="radio" name="q8" value="0"> 否</label>
        </div>

        <div class="question">
            <p>9. 当强光直接照射眼睛时常常不眨眼</p>
            <label><input type="radio" name="q9" value="2" required> 是</label>
            <label><input type="radio" name="q9" value="0"> 否</label>
        </div>

        <div class="question">
            <p>10. 以撞头、咬手等行为来自伤</p>
            <label><input type="radio" name="q10" value="4" required> 是</label>
            <label><input type="radio" name="q10" value="0"> 否</label>
        </div>

        <div class="question">
            <p>11. 想要什么东西不能等待(一想要什么就马上要得到什么)</p>
            <label><input type="radio" name="q11" value="2" required> 是</label>
            <label><input type="radio" name="q11" value="0"> 否</label>
        </div>

        <div class="question">
            <p>12. 不能指出5个以上物体的名称</p>
            <label><input type="radio" name="q12" value="2" required> 是</label>
            <label><input type="radio" name="q12" value="0"> 否</label>
        </div>

        <div class="question">
            <p>13. 不能发展任何友谊(不会和小朋友来往交朋友)</p>
            <label><input type="radio" name="q13" value="2" required> 是</label>
            <label><input type="radio" name="q13" value="0"> 否</label>
        </div>

        <div class="question">
            <p>14. 有许多声音的时候常常盖着耳朵</p>
            <label><input type="radio" name="q14" value="4" required> 是</label>
            <label><input type="radio" name="q14" value="0"> 否</label>
        </div>

        <div class="question">
            <p>15. 经常旋转碰撞物体</p>
            <label><input type="radio" name="q15" value="4" required> 是</label>
            <label><input type="radio" name="q15" value="0"> 否</label>
        </div>

        <div class="question">
            <p>16. 在训练大小便方面有困难(不会控制住小便)</p>
            <label><input type="radio" name="q16" value="1" required> 是</label>
            <label><input type="radio" name="q16" value="0"> 否</label>
        </div>

        <div class="question">
            <p>17. 一天只能提出5个以内的要求</p>
            <label><input type="radio" name="q17" value="2" required> 是</label>
            <label><input type="radio" name="q17" value="0"> 否</label>
        </div>

        <div class="question">
            <p>18. 经常受到惊吓或非常焦虑、不安</p>
            <label><input type="radio" name="q18" value="2" required> 是</label>
            <label><input type="radio" name="q18" value="0"> 否</label>
        </div>

        <div class="question">
            <p>19. 在正常光线下斜眼、闭眼、皱眉</p>
            <label><input type="radio" name="q19" value="3" required> 是</label>
            <label><input type="radio" name="q19" value="0"> 否</label>
        </div>

        <div class="question">
            <p>20. 不是经常帮助的话，不会自己给自己穿衣</p>
            <label><input type="radio" name="q20" value="1" required> 是</label>
            <label><input type="radio" name="q20" value="0"> 否</label>
        </div>

        <div class="question">
            <p>21. 一遍一遍重复一些声音或词</p>
            <label><input type="radio" name="q21" value="2" required> 是</label>
            <label><input type="radio" name="q21" value="0"> 否</label>
        </div>

        <div class="question">
            <p>22. 瞪着眼看人，好象要“看穿”似的</p>
            <label><input type="radio" name="q22" value="4" required> 是</label>
            <label><input type="radio" name="q22" value="0"> 否</label>
        </div>

        <div class="question">
            <p>23. 重复别人的问话和回答</p>
            <label><input type="radio" name="q23" value="2" required> 是</label>
            <label><input type="radio" name="q23" value="0"> 否</label>
        </div>

        <div class="question">
            <p>24. 经常不能意识所处的环境，并且可能对危险情况不在意</p>
            <label><input type="radio" name="q24" value="2" required> 是</label>
            <label><input type="radio" name="q24" value="0"> 否</label>
        </div>

        <div class="question">
            <p>25. 特别喜欢摆弄并着迷于单调的东西或游戏、活动等(如来回的走或跑、没完没了地蹦、跳、拍敲)</p>
            <label><input type="radio" name="q25" value="4" required> 是</label>
            <label><input type="radio" name="q25" value="0"> 否</label>
        </div>

        <div class="question">
            <p>26. 对周围东西喜欢触摸、嗅和/或尝</p>
            <label><input type="radio" name="q26" value="2" required> 是</label>
            <label><input type="radio" name="q26" value="0"> 否</label>
        </div>

        <div class="question">
            <p>27. 对生人常无视觉反应(对来人不看)</p>
            <label><input type="radio" name="q27" value="3" required> 是</label>
            <label><input type="radio" name="q27" value="0"> 否</label>
        </div>

        <div class="question">
            <p>28. 纠缠在一些复杂的仪式行为上，就像缠在魔圈子内(如走路一定要走一定的路线，饭前或睡前或干什么以前一定要把什么东西摆在什么样地方或做什么动作，否则就不睡，不吃等)</p>
            <label><input type="radio" name="q28" value="4" required> 是</label>
            <label><input type="radio" name="q28" value="0"> 否</label>
        </div>

        <div class="question">
            <p>29. 经常毁坏东西(如玩具、家里的一切用具很快就弄破了)</p>
            <label><input type="radio" name="q29" value="2" required> 是</label>
            <label><input type="radio" name="q29" value="0"> 否</label>
        </div>

        <div class="question">
            <p>30. 在二岁半以前就发现该儿童发育延迟</p>
            <label><input type="radio" name="q30" value="1" required> 是</label>
            <label><input type="radio" name="q30" value="0"> 否</label>
        </div>

        <div class="question">
            <p>31. 在日常生活中至今仅会用15个但又不超过30个短句来进行交往</p>
            <label><input type="radio" name="q31" value="2" required> 是</label>
            <label><input type="radio" name="q31" value="0"> 否</label>
        </div>

        <div class="question">
            <p>32. 长期凝视一个地方 (呆呆地看一处)</p>
            <label><input type="radio" name="q32" value="4" required> 是</label>
            <label><input type="radio" name="q32" value="0"> 否</label>
        </div>

        <div class="question">
            <p>33. 对环境和日常生活规律的改变表示强烈的抗拒</p>
            <label><input type="radio" name="q33" value="2" required> 是</label>
            <label><input type="radio" name="q33" value="0"> 否</label>
        </div>

        <div class="question">
            <p>34. 对某些物品或事物表现出过度的专注和执着</p>
            <label><input type="radio" name="q34" value="4" required> 是</label>
            <label><input type="radio" name="q34" value="0"> 否</label>
        </div>

        <div class="question">
            <p>35. 很少用眼神与他人交流，即使有也很短暂</p>
            <label><input type="radio" name="q35" value="3" required> 是</label>
            <label><input type="radio" name="q35" value="0"> 否</label>
        </div>

        <div class="question">
            <p>36. 对某些声音、气味、质地等感官刺激表现出异常的敏感或迟钝</p>
            <label><input type="radio" name="q36" value="4" required> 是</label>
            <label><input type="radio" name="q36" value="0"> 否</label>
        </div>

        <div class="question">
            <p>37. 语言发展迟缓，说话晚或表达能力有限</p>
            <label><input type="radio" name="q37" value="2" required> 是</label>
            <label><input type="radio" name="q37" value="0"> 否</label>
        </div>

        <div class="question">
            <p>38. 常常做出一些刻板的动作，如摇晃身体、拍手等</p>
            <label><input type="radio" name="q38" value="2" required> 是</label>
            <label><input type="radio" name="q38" value="0"> 否</label>
        </div>

        <div class="question">
            <p>39. 对疼痛的感觉似乎不敏感或反应异常</p>
            <label><input type="radio" name="q39" value="2" required> 是</label>
            <label><input type="radio" name="q39" value="0"> 否</label>
        </div>

        <div class="question">
            <p>40. 很难与他人建立正常的情感联系和互动</p>
            <label><input type="radio" name="q40" value="2" required> 是</label>
            <label><input type="radio" name="q40" value="0"> 否</label>
        </div>

        <div class="question">
            <p>41. 对新的玩具、游戏或活动缺乏兴趣</p>
            <label><input type="radio" name="q41" value="2" required> 是</label>
            <label><input type="radio" name="q41" value="0"> 否</label>
        </div>

        <div class="question">
            <p>42. 不喜欢被拥抱或身体接触，表现得很抗拒</p>
            <label><input type="radio" name="q42" value="2" required> 是</label>
            <label><input type="radio" name="q42" value="0"> 否</label>
        </div>

        <div class="question">
            <p>43. 对危险的情况缺乏应有的恐惧反应</p>
            <label><input type="radio" name="q43" value="2" required> 是</label>
            <label><input type="radio" name="q43" value="0"> 否</label>
        </div>

        <div class="question">
            <p>44. 经常莫名其妙地笑或发出声音</p>
            <label><input type="radio" name="q44" value="2" required> 是</label>
            <label><input type="radio" name="q44" value="0"> 否</label>
        </div>

        <div class="question">
            <p>45. 对常规的活动或任务表现出极度的不耐烦</p>
            <label><input type="radio" name="q45" value="2" required> 是</label>
            <label><input type="radio" name="q45" value="0"> 否</label>
        </div>

        <div class="question">
            <p>46. 对自己的名字没有反应，好像没听见一样</p>
            <label><input type="radio" name="q46" value="3" required> 是</label>
            <label><input type="radio" name="q46" value="0"> 否</label>
        </div>

        <div class="question">
            <p>47. 不能和他人一起玩合作性的游戏</p>
            <label><input type="radio" name="q47" value="2" required> 是</label>
            <label><input type="radio" name="q47" value="0"> 否</label>
        </div>

        <div class="question">
            <p>48. 对物体的排列顺序非常在意，稍有改变就会烦躁不安</p>
            <label><input type="radio" name="q48" value="4" required> 是</label>
            <label><input type="radio" name="q48" value="0"> 否</label>
        </div>

        <div class="question">
            <p>49. 经常在不该笑的时候笑，或者在不该哭的时候哭</p>
            <label><input type="radio" name="q49" value="2" required> 是</label>
            <label><input type="radio" name="q49" value="0"> 否</label>
        </div>

        <div class="question">
            <p>50. 特别喜欢圆形的东西，如轮子、盘子等</p>
            <label><input type="radio" name="q50" value="4" required> 是</label>
            <label><input type="radio" name="q50" value="0"> 否</label>
        </div>

        <div class="question">
            <p>51. 对电视、收音机等发出的声音特别着迷</p>
            <label><input type="radio" name="q51" value="2" required> 是</label>
            <label><input type="radio" name="q51" value="0"> 否</label>
        </div>

        <div class="question">
            <p>52. 很难安静地坐着，总是动来动去</p>
            <label><input type="radio" name="q52" value="2" required> 是</label>
            <label><input type="radio" name="q52" value="0"> 否</label>
        </div>

        <div class="question">
            <p>53. 不喜欢改变自己的饮食习惯，只吃有限的几种食物</p>
            <label><input type="radio" name="q53" value="2" required> 是</label>
            <label><input type="radio" name="q53" value="0"> 否</label>
        </div>

        <div class="question">
            <p>54. 对某些颜色、形状或图案表现出过度的关注</p>
            <label><input type="radio" name="q54" value="4" required> 是</label>
            <label><input type="radio" name="q54" value="0"> 否</label>
        </div>

        <div class="question">
            <p>55. 很少主动与他人分享自己的快乐、兴趣或成就</p>
            <label><input type="radio" name="q55" value="2" required> 是</label>
            <label><input type="radio" name="q55" value="0"> 否</label>
        </div>

        <div class="question">
            <p>56. 当别人和他说话时，常常不回应或答非所问</p>
            <label><input type="radio" name="q56" value="2" required> 是</label>
            <label><input type="radio" name="q56" value="0"> 否</label>
        </div>

        <div class="question">
            <p>57. 对周围的人或事物似乎漠不关心</p>
            <label><input type="radio" name="q57" value="2" required> 是</label>
            <label><input type="radio" name="q57" value="0"> 否</label>
        </div>
        
        <button type="submit" class="btn">下一步 → 中医辨证问卷</button>
    </form>
</body>
</html> 