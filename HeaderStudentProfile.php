<style type="text/css">
	.nametitle{
		font-size: 30px;
		font-weight: bold;
	}
	.timlinesidebar{
		margin-left:7%;margin-right:7%;
	}
	.borderleft{
		border-left: 2px solid black
	}
</style>
<div class="row">
	<div class="col-md-8">
        <div class="row">
        	<div class="col-md-4">
	<img src="<?=base_url()?>assets/img/profile-studen.png" alt="Profile Picture" style="border-radius: 100%;margin-bottom: 60px" width=200>
			</div>
			<div class="col-md-8">
			<p class="nametitle"><?=$Result['Student'][0]['STUDENTNAME']."  ".$Result['Student'][0]['STUDENTSURNAME'];?></p>
			<p class="nametitle"><?=$Result['Student'][0]['STUDENTNAMEENG']."  ".$Result['Student'][0]['STUDENTSURNAMEENG'];?></p>
			</div>
	    </div>
	</div>
	<div class="col-md-4" style="border-left: 2px solid black"> 
		<header class="clearfix ">

				<div style="margin-left: 20px">
					<div><?=$Result['Student'][0]['STUDENTCODE'];?></div>
				 	<div><?=$Result['Student'][0]['FACULTYNAME']."   ".$Result['Student'][0]['DEPARTMENTNAME'];?></div>
				 	<div><?=$Result['Student'][0]['LEVELNAME'];?></div>
				 	<div>ปีที่เข้าศึกษา : <?=$Result['Student'][0]['ADMITDATE'];?></div>
				 	
				</div>
			</header>

		</div>
	</div>
<div class="row">
			<div class="col-md-8" >
				<div class="col-md-4 col-sm-4" id="transcript_btn">
					<div class="sidebar-minified timlinesidebar" >
					<i class="active">1</i>
					</div>
					<span>ผลการศึกษา</span>
				</div><?//?=print_r($Result); ?>
				<div class="col-md-4 col-sm-4" id="ceqe_btn">
					<div class="sidebar-minified timlinesidebar" >
					<i class="active">2</i>
					</div>
					<span>
						<?php echo 'ขอสอบวัดคุณสมบัติ' ;?>
					</span>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="sidebar-minified active timlinesidebar" >
						<i >3</i>
					</div>
					<span><?php echo 'ยื่นหัวข้อวิทยานิพนธ์' ;?></span>
				</div>

			</div>
			<div class="col-md-4 borderleft" id="progress">fgdfgd</div>
		</div>