<?php 
	

	class imgaccess{
		var $imgcat;
		var $imgnm;
		
		
		function setcat($category) 
		{
			
			$this->imgcat= $category;
		}
		
		function getimg()
		{
			
			require("db.php");
			$sql="select * from imagesinfo where imgcat='$this->imgcat'";
			$result=mysqli_query($con,$sql);
			

			while($row=mysqli_fetch_array($result))
			{
			 
			?>
			
			 <div class="row">
				<div class="col-md-4">
				  <div class="thumbnail">
					<a href="<?php echo $row['imgcat'].$row['imgname'];?>" target="_blank">
					  <img src="<?php echo $row['imgcat'].$row['imgname'];?>" alt="light" style="width:100%">
					</a>
				  </div>
				</div>
			   
			 <?php
			}
		}
	}
?>