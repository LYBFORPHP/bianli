<?php
	
	
		
	readFileName('./temp');
	function readFileName($dirPath){
	static	$a = 0;
		if(!is_dir($dirPath)) return false;

		$dirPath = str_replace('\\','/',$dirPath);

		
		$dirPath = rtrim($dirPath ,'/') . '/'; 
		
		$source =opendir($dirPath);
		
		while(false !== ( $fileName = readdir($source) ) ){
		
			if($fileName == '.' || $fileName == '..') continue;
			
			
			if(is_dir($dirPath . $fileName)){
				$var = __FUNCTION__;

				$var($dirPath . $fileName);

				
					
			}else{

				$filectime = filectime($dirPath . $fileName);
				$name = basename($dirPath . $fileName);
				$size = filesize($dirPath . $fileName);
				if($a<1){
				echo "<table border='1' width='500'>";	
				echo "<td>文件路径</td>";
				echo "<td>文件大小</td>";
				echo "<td>文件名</td>";
				echo "<td>创建时间</td>";
				echo "<td>管理</td>";
			}
			list($name,)
				// echo "<tr>";
				// echo "<td>";
				// echo iconv('gbk','utf-8',$dirPath . $fileName);
				// echo "</td>";	
				// echo "<td>";
				// echo $size;
				// echo "</td>";
				// echo "<td>";
				// echo $name;
				// echo "</td>";
				// echo "<td>";
				// echo $filectime;
				// echo "</td>";
				// echo "<td>";
				// echo "<a href='#'>删除</a>";
				// echo "</td>";
				// echo "</tr>";
				// $a++;
				
			}
		}
		echo "</table>";

		closedir($source);
		
	}
	
