<?php
	//统计某个文件大小
	function dirSize($path){
		$dir_size=0;//文件的总大小
		if($dir_handle=opendir($path)){
			while ($filename=readdir($dir_handle)) {
				if($filename!="."&& $filename!="..")
				{
					$subfile=$path."/".$filename;
					//判断是否为文件夹
					if(is_dir($subfile)){
						$dir_size+=dirSize($subfile);
						
					}
					//判断是否为文件
					if(is_file($subfile)){
						$dir_size+=filesize($subfile);
					}
				}
			}
		}
		closedir($dir_handle);
		mkdir("D:\\courseware.homework\\PHP");
		return $dir_size;
	}
	

	/*复制文件夹
	function copyfile($path1,$path2){

		//mkdir("D:\courseware.homework\PHP");
		//$newfile=mkdir("D:\\courseware.homework\\PHP");
		if(file_exists($path2)){
			mkdir($path2);
		}
		if($dir_handle=opendir($path1)){
			while ($filename=readdir($dir_handle))
			 {
				if($filename!="."&& $filename!="..")
				{
					$subfile=$path1."/".$filename;
					$newfile=$path2."/".$filename;
					//判断是否为文件夹
					if(is_dir($subfile)){
						copyfile($subfile,$newfile);
						
					}
					//判断是否为文件
					if(is_file($subfile)){

						copy($subfile,$newfile);
					}
				}
			}
		}
		closedir($dir_handle);
		//return $dir_size;
	}
	copyfile("C:\\AppServ\\www\\study","D:\\courseware.homework\\PHP\\copy");*/
	$size=dirSize("C:\\AppServ\\www\\study");
	echo $size;
	//copy(原路径，目标路径);
    //mkdir(路径);//创建文件夹
?>