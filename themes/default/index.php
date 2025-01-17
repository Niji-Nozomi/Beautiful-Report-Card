<!DOCTYPE html>
<html lang="zh-CN">
	    <!--
							.__               
	____  __ __  _______  __|__|____    ____  
	/    \|  |  \/  _ \  \/  /  \__  \  /    \ 
	|   |  \  |  (  <_> >    <|  |/ __ \|   |  \
	|___|  /____/ \____/__/\_ \__(____  /___|  /
		\/                  \/       \/     \/ 
		
    -->
	<head>
		<meta charset="UTF-8">
		<title>学生电子成绩查询系统</title>
		<meta name="author" content="nuoxian">
		<meta name="viewport" content="user-scalable=0"/>
		<meta name="description" content="电子成绩查询系统，无需奔波，移动端即可查看自己的成绩，使用更加方便！">
		<meta name="keywords" content="学生成绩查询,电子成绩单,成绩,学生,成绩系统">
		<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
	</head>
<body>
<?php
if (!isset($_POST['start'])) {

?>

<div class="indexBox">
		<p class="indexTitle">成绩查询</p>
		<form class="indexBox-main" method="POST">
			<svg t="1625342887658"  class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1843" width="20" height="20"><path d="M512 65C265.146 65 65 265.146 65 512c0 246.853 200.147 447 447 447 246.854 0 447-200.147 447-447C959 265.146 758.854 65 512 65zM512 94.8c230.048 0 417.199 187.152 417.199 417.2 0 104.822-38.951 200.671-103.018 274.034-1.603-4.685-3.203-9.385-5.021-13.968-31.08-78.547-94.129-143.471-173.474-178.365-0.218-0.087-0.421-0.159-0.626-0.262 31.647-33.38 51.189-78.367 51.189-128.002 0-102.875-83.377-186.25-186.25-186.25-102.874 0-186.25 83.375-186.25 186.25 0 49.648 19.555 94.652 51.218 128.046-0.394 0.175-0.742 0.291-1.15 0.466-78.851 34.646-141.898 99.57-172.98 178.117-1.818 4.598-3.418 9.283-5.019 13.968C133.753 712.671 94.8 616.822 94.8 512 94.8 281.952 281.952 94.8 512 94.8zM616.314 581.697c-9.313 8.366-19.541 15.729-30.657 21.697-21.975 11.77-47.03 18.491-73.657 18.491-26.628 0-51.714-6.722-73.686-18.507-11.117-5.968-21.316-13.315-30.629-21.682-31.909-28.664-52.135-70.091-52.135-116.26 0-86.272 70.178-156.45 156.45-156.45s156.449 70.177 156.449 156.45C668.449 511.606 648.225 553.033 616.314 581.697zM221.101 810.653c1.062-3.885 2.095-7.813 3.302-11.494 26.963-82.721 92.5-151.082 176.909-184.185 30.965 22.96 69.174 36.714 110.688 36.714 41.5 0 79.693-13.735 110.644-36.686 83.799 32.349 149.858 100.999 176.968 184.156 1.193 3.666 2.226 7.594 3.288 11.494C727.687 883.933 625.06 929.199 512 929.199S296.313 883.933 221.101 810.653z" p-id="1844" fill="#ffffff"></path></svg>
			<span>考生号/准考证号</span>
			<input style="border-bottom: 1px solid white" maxlength="14" name="number" placeholder="填写您的考生号 / 准考证号" type="text">
		
			<div class="height">&nbsp;</div>

			<svg t="1625342809443" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2572" width="20" height="20"><path d="M954.762 222.221c-3.492-3.492-8.062-5.238-12.659-5.238L82.868 216.983c-4.569 0-9.138 1.746-12.63 5.238S65 230.282 65 234.852l0 554.283c0 4.583 1.746 9.152 5.238 12.645s8.061 5.238 12.63 5.238l859.234 0c4.598 0 9.167-1.746 12.659-5.238S960 793.718 960 789.135L960 234.852C960 230.282 958.254 225.713 954.762 222.221zM930.2 777.217 94.8 777.217 94.8 246.783l835.4 0L930.2 777.217z" p-id="2573" fill="#ffffff"></path><path d="M541.8 384l312.9 0 0 29.8-312.9 0 0-29.8Z" p-id="2574" fill="#ffffff"></path><path d="M541.8 482.199l208.601 0 0 29.801-208.601 0 0-29.801Z" p-id="2575" fill="#ffffff"></path><path d="M281.021 544.71c15.366 8.905 33.146 14.086 52.179 14.086 19.032 0 36.813-5.181 52.15-14.086 51.568 20.561 88.294 70.514 89.284 129.095l22.35 0c-0.931-63.427-37.89-117.992-91.262-144.445 19.556-18.96 31.779-45.472 31.779-74.864 0-57.606-46.708-104.3-104.3-104.3-57.621 0-104.3 46.693-104.3 104.3 0 29.393 12.194 55.904 31.779 74.864-53.401 26.453-90.36 81.019-91.262 144.445l22.35 0C192.756 615.224 229.482 565.271 281.021 544.71zM251.25 454.495c0-45.194 36.755-81.95 81.95-81.95 45.166 0 81.95 36.756 81.95 81.95 0 26.701-12.921 50.39-32.739 65.362-10.418 7.857-22.699 13.271-36.115 15.438-4.278 0.684-8.644 1.149-13.096 1.149-4.482 0-8.818-0.466-13.096-1.149-13.416-2.168-25.726-7.581-36.145-15.438C264.142 504.885 251.25 481.196 251.25 454.495z" p-id="2576" fill="#ffffff"></path></svg>
			<span>身份证号后六位</span>
			<input style="border-bottom: 1px solid white" maxlength="6" name="id" placeholder="填写您的身份证号码后六位" type="text">
		
			<div class="Button">
				<input class="Button" name="start" type="submit" value="查询"/>
			</div>

			<!-- 允许将此处div内容进行注释 -->
			<div class="copyright">
				<p>&copy;<script>document.write(new Date().getFullYear())</script> <a href="https://nuoxiana.cn" target="_blank">nuoxian</a>. All Rights Reserved.</p>
			</div>
		</form>
	</div>

<?php
	} else {
		include "./../../config.php";

		$number_api = $_POST['number']; // 获取post过来的内容并存入变量
		$id_api = $_POST['id']; // 获取post过来的内容并存入变量
		// 过滤数组
		$illegal = array('or 1 = 1','||','alert','<','>','<?php','#','`',' '); //过滤的部分内容

		function filter($str, $array_illegal) {
			foreach ($array_illegal as $value) {
				if (strstr($str, $value) !== false) {
					die ("<script>alert('含有敏感词或字符，请重新输入！');location='./'</script>");
					return true;
				}
			}
			return false;
		}

		filter($number_api, $illegal);
		filter($id_api, $illegal);

		if(empty($number_api)) {
			die ("<script>alert('请输入 考生号/准考证号 后再试！');location='./';</script>");
		} elseif(empty($id_api)) {
			die ("<script>alert('请输入 身份证号后六位 后再试！');location='./';</script>");
		} else {
			$link = @mysqli_connect($host,$username,$password,$dbname,$port);

			if (!$link) {
				die ("<script>alert('数据库连接失败，请检查配置文件！');location='./';</script>");
			}
		}
		
		if($link) {
			$result = mysqli_query($link,"select * from $SQLtable where number = '$number_api'"); // number 为 数据库表名
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			if($row['id'] == $id_api && $row['number'] == $number_api) {
				$number = $row["number"];
				$name = $row["name"];
				$text1 = $row["custom_text1"];
				$text2 = $row["custom_text2"];
				$text3 = $row["custom_text3"];
				$text4 = $row["custom_text4"];
				$text5 = $row["custom_text5"];
				$text6 = $row["custom_text6"];
				$text7 = $row["custom_text7"];
				$text8 = $row["custom_text8"];
				$text9 = $row["custom_text9"];
			} else {
				die ("<script>alert('查询的学生信息不存在！');location='./';</script>");
			}
			
			mysqli_close($link);
		}

		echo "<div class=\"indexBox\">\n";
		echo "	<p class=\"indexTitle\">成绩查询结果(<svg t=\"1625342449766\" class=\"iconget\" viewBox=\"0 0 1024 1024\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" p-id=\"1977\" width=\"30\" height=\"30\"><path d=\"M512 76.8c-236.8 0-435.2 192-435.2 435.2s192 435.2 435.2 435.2 435.2-192 435.2-435.2S748.8 76.8 512 76.8z m249.6 320L480 704c-12.8 12.8-38.4 12.8-51.2 0L288 556.8c-12.8-12.8-12.8-38.4 0-51.2 12.8-12.8 38.4-12.8 51.2 0l115.2 115.2L704 339.2c12.8-12.8 38.4-12.8 51.2 0 25.6 12.8 25.6 38.4 6.4 57.6z\" fill=\"#68D279\" p-id=\"1978\"></path><path d=\"M710.4 339.2l-256 281.6-115.2-115.2c-12.8-12.8-38.4-12.8-51.2 0-12.8 12.8-12.8 38.4 0 51.2l147.2 140.8c12.8 12.8 38.4 12.8 51.2 0L768 390.4c12.8-12.8 12.8-38.4 0-51.2-19.2-12.8-44.8-12.8-57.6 0z\" fill=\"#FFFFFF\" p-id=\"1979\"></path></svg>)</p>\n";
		echo "	<table border=\"0\" align=\"center\">\n";
		echo "		<tbody>\n";
		echo "			<tr>\n";
		echo "				<td>$Custom_text1</td>\n";
		echo "				<td>$Custom_text2</td>\n";
		echo "				<td>$Custom_text3</td>\n";
		echo "				<td>$Custom_text4</td>\n";
		echo "				<td>$Custom_text5</td>\n";
		echo "				<td>$Custom_text6</td>\n";
		echo "				<td>$Custom_text7</td>\n";
		echo "				<td>$Custom_text8</td>\n";
		echo "				<td>$Custom_text9</td>\n";
		echo "				<td>$Custom_text10</td>\n";
		echo "				<td>$Custom_text11</td>\n";
		echo "			</tr>\n";
		echo "			<tr>\n";
		echo "				<td>$number</td>\n";
		echo "				<td>$name</td>\n";
		echo "				<td>$text1</td>\n";
		echo "				<td>$text2</td>\n";
		echo "				<td>$text3</td>\n";
		echo "				<td>$text4</td>\n";
		echo "				<td>$text5</td>\n";
		echo "				<td>$text6</td>\n";
		echo "				<td>$text7</td>\n";
		echo "				<td>$text8</td>\n";
		echo "				<td>$text9</td>\n";
		echo "			</tr>\n";
		echo "		</tbody>\n";
		echo "	</table>\n";
		echo "</div>\n";
	}
?>
</body>
</html>