<style type="text/css">
	.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 5px 0;}
</style> 

<div class="col-lg-12" id="transfee">	
			<?php if(!empty($result)){ ?>
			<div class="classtopic">
				<ul class="classlist ">				
					<li><a class="" data-original-title="<?php echo $this->lang->line('print')?>" data-toggle="tooltip" id="print" onclick="printDiv()" ><i class="fa fa-print"></i></a></li>
					<li> <a data-original-title="<?php echo $this->lang->line('download_excel')?>" data-toggle="tooltip" class="" id="btnExport" onclick="fnExcelReport();"> <i class="fa fa-file-excel-o"></i> </a>
					</li>			
				</ul>

				<table class="table table-bordered pt15 mb0" id="headerTable">
					<tr class="hide" id="visible">
						<td colspan="2"><center><b><?php echo $this->lang->line('lesson_plan'); ?></b></center></td>
					</tr>					<tr>
						<th><?php echo $this->lang->line('class')?> : </th>
						<td><?php echo $result['cname']."(".$result['sname'].")";?></td>
					</tr>
					<?php if($result['attachment']!=''){

						?>
					<tr>
						<th><?php echo $this->lang->line('download_attachment')?> : </th>
						<td><a data-original-title="<?php echo $this->lang->line('download_attachment')?>" data-toggle="tooltip" href="<?php echo base_url()?>user/syllabus/download/<?php echo $result['attachment']?>"><i class="fa fa-file-text-o"></i></a></td>
					</tr>
						<?php
					}
					if($result['lacture_youtube_url']!='')
					{
						?>
					<tr>
						<th>Video Link: </th>
						<td>
						<!-- <a tyle="margin-left:5px;" data-original-title="<?php echo $this->lang->line('youtube_link')?>" data-toggle="tooltip" onclick="run_video('<?php echo $result['lacture_youtube_url']?>')" ><i class="fa fa-youtube"> Youtube</i></a> -->
						<a tyle="margin-left:5px;" data-original-title="<?php echo $this->lang->line('youtube_link')?>" data-toggle="tooltip" target="#" href="<?=base_url()?>students/video/load/<?=$result['id']?>"><i class="fa fa-youtube"> Youtube</i></a>
						</td>
					</tr>
					<?php 
					}
					if($result['lacture_video']!='')
					{ ?>
					<tr>
						<th>Video</th>
						<td>
						<!-- <p><a style='margin-left:5px;'data-toggle="tooltip" data-original-title="<?php echo $this->lang->line('download_video')?>" href="<?php echo base_url()?>user/syllabus/lacture_video_download/<?php echo $result['lacture_video']?>"><i class="fa fa-file-video-o">  <?php echo $this->lang->line('download_video')?> </i></a> </p> -->
						<!-- <p><a style="margin-left:0px;" data-original-title="Open video" data-toggle="tooltip" target="#" href="<?=base_url()?>students/video/load/<?=$result['lacture_video']?>" ><i class="fa fa-play"> Play Video</i></a></p> -->
						<p><a style="margin-left:0px;" data-original-title="Open video" data-toggle="tooltip" target="#" href="<?=base_url()?>students/video/load/<?=$result['id']?>" ><i class="fa fa-play"> Play Video</i></a></p>
						</td>
					</tr>
					<?php }?>

					<tr>	
						<th><?php echo $this->lang->line('subject')?> :</th>
						<td><?php echo $result['subname']; if($result['scode']!=''){ echo " (".$result['scode'].")";}  ?></td>
					</tr>	
					<tr>
						<th><?php echo $this->lang->line('date')?>: </th>
						<td><?php echo date($this->customlib->getSchoolDateFormat(),strtotime($result['date'])); ?> <?php echo $result['time_from']." ".$this->lang->line('to')." ".$result['time_to']?></td>
					</tr>
					<tr>
						<th><?php echo $this->lang->line('lesson'); ?>:</th>
						<td><?php echo $result['lessonname']?></td>
					</tr>

					<tr>
						<th><?php echo $this->lang->line('topic')?>:</th>
						<td><?php echo $result['topic_name']?></td>
					</tr>

					<tr>
						<th><?php echo $this->lang->line('sub_topic');?>:</th>
						<td><?php echo $result['sub_topic']?></td>
					</tr>
					<tr>
						<td colspan=2><b><?php echo $this->lang->line('general_objectives') ?></b><br><?php echo $result['general_objectives']?></td>
					</tr>
					<tr>
						<td colspan=2><b><?php echo $this->lang->line('teaching_method') ?></b><br><?php echo $result['teaching_method']?></td>
					</tr>
					<tr>
						<td colspan=2><b><?php echo $this->lang->line('previous_knowledge') ?></b><br><?php echo $result['previous_knowledge']?></td>
					</tr>
					<tr>
						<td colspan=2><b><?php echo $this->lang->line('comprehensive_questions') ?></b><br><?php echo $result['comprehensive_questions']?></td>
					</tr>
					<tr>
						<td colspan=2><b><?php echo $this->lang->line('presentation') ?></b><br><?php echo $result['presentation'];?></td>
					</tr>
						
					
				
				
				
				</table>
				<!-- <p class="ptt10"><b><?php //echo $this->lang->line('class')?> : <?php //echo $result['cname']."(".$result['sname'].")";?></b> <?php //echo $this->lang->line('subject')?> :<?php //echo $result['subname']." (".$result['scode'].")"; ?></p>
				<p><b><?php //echo $this->lang->line('date')?>: <?php //echo date($this->customlib->getSchoolDateFormat(),strtotime($result['date'])); ?></b> <?php //echo $result['time_from']." ".$this->lang->line('to')." ".$result['time_to']?></p>
				<p><b><?php //echo $this->lang->line('lesson'); ?>:</b><?php //echo $result['lessonname']?> <b><?php //echo $this->lang->line('topic')?>:</b> <?php //echo $result['topic_name']?> <b><?php //echo $this->lang->line('sub_topic');?>: <?php //echo $result['sub_topic']?></b></p> -->
				
			</div><!--./classtopic-->
		<?php }else{
			?>
			<div class="classtopic"><br>
				<div class="alert alert-danger"><?php echo $this->lang->line('no_record_found')?></div>
			</div>
			<?php
		} ?>
		</div><!--./col-lg-12-->
		
		
	</div>
		</div>
	