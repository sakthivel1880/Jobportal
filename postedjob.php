<?php include ('include/header1.php');
        
	  include('dbconfig.php');
	
?>

<style>
	#unified-inputs.input-group { width: 100%; }
#unified-inputs.input-group  select { width: 40% !important; }
#unified-inputs.input-group  input { width: 60% !important; }
#unified-inputs.input-group select:last-of-type  { border-left: 0; }
	</style>

			<div class="clearfix"></div>
			
			<!-- Header Title Start -->
			<section class="inner-header-title blank">
				<div class="container">

				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Header Title End -->
			
			<!-- General Detail Start -->
			<div class="section detail-desc">
				<div class="container">
					<div class="ur-detail-wrap create-kit padd-bot-0">
					
						<div class="row">
							
						</div><br><br>
					        <h3 style="text-align:center;">POSTED JOBS</h3>
                            <br><br>
                            <!-- <div id="tick"></div> -->
						<div class="row bottom-mrg">
                        <?php 
                         $sql="SELECT * FROM `job_post` where jobp_rpid=$pid AND active_status='0' ";
                         $result=mysqli_query($conn,$sql);
                         for($i=0;$row=mysqli_fetch_assoc($result); $i++){
                             ?>
                        
                            <form class="add-feild" style="border: 1px solid #3671ca; padding:15px;">
                            <span class="postid" style="display:none;"><?php echo $row['jobp_id']; ?> </span>
                            <div class="col-md-12 col-sm-6">
						    	<div class="input-group">
							<a href="javascript:void(0);" style="float:right;" class="edit" id="edit">&nbsp &nbsp &nbsp<i class="ti-pencil"></i></a>
                            <a href="javascript:void(0);" style="float:right;" class="delete" id="delete"><i class="ti-trash"></i></a>
							</div>
						    </div>
                            
                            <div class="col-md-3 col-sm-6">
									<div class="input-group">
									<label>Job Title</label>
                                    </div>
                                    </div>
                                
                                <div class="col-md-9 col-sm-6">
									<div class="input-group">
                                    <input type="text" id="keyword" class="form-control title" style="display:none;" value="<?php if($row['jobp_titlename']==""){ echo "Not Mentioned"; } else { echo $row['jobp_titlename']; } ?>" >
                                    <div id="keyword_name"></div>
                                    <p class="demotitle" style="color:#3671ca;"><strong><?php if($row['jobp_titlename']==""){ echo "Not Mentioned"; } else { echo $row['jobp_titlename']; } ?></strong></p>
									</div>
                                </div>
                                <div class="col-md-3 col-sm-6">
									<div class="input-group">
									<label>Job Type</label>
                                    </div>
                                    </div>
                                
                                <div class="col-md-9 col-sm-6">
									<div class="input-group">
                                    <select type="select" class="form-control type" name="type" style="display:none" value="<?php if($row['jobp_type']==""){ echo "Not Mentioned"; } else { echo $row['jobp_type']; } ?>" required>
									<option value="<?php if($row['jobp_type']==""){ echo "Not Mentioned"; } else { echo $row['jobp_type']; } ?>"><?php if($row['jobp_type']==""){ echo "Not Mentioned"; } else { echo $row['jobp_type']; } ?></option>
									<option value="Full Time">Full Time</option>
									<option value="Part Time">Part Time</option>
									<option value="Internship">Internship</option>	
									<option value="Work From Home">Work From Home</option>
									</select>
                                    <p class="demotype"><?php if($row['jobp_type']==""){ echo "Not Mentioned"; } else { echo $row['jobp_type']; } ?></p>
									</div>
                                </div>
                                <div class="col-md-3 col-sm-6">
									<div class="input-group">
									<label> Duties</label>
                                    </div>
                                    </div>
                                
                                <div class="col-md-9 col-sm-6">
									<div class="input-group">
                                    <textarea type="text" class="form-control duties" name="duties" style="display:none"  value=""  required><?php if($row['jobp_duties']==""){ echo "Not Mentioned"; } else { echo $row['jobp_duties']; } ?></textarea>
                                    <p class="demoduties"><?php if($row['jobp_duties']==""){ echo "Not Mentioned"; } else { echo $row['jobp_duties']; } ?></p>
									</div>
                                </div>
                                <div class="col-md-3 col-sm-6">
									<div class="input-group">
									<label> Responsibilities</label>
                                    </div>
                                    </div>
                                
                                <div class="col-md-9 col-sm-6">
									<div class="input-group">
                                    <textarea type="text" class="form-control res" name="responsibilities" style="display:none" value=""  required><?php if($row['jobp_responsibilities']==""){ echo "Not Mentioned"; } else { echo $row['jobp_responsibilities']; } ?></textarea>
                                    <p class="demores"><?php if($row['jobp_responsibilities']==""){ echo "Not Mentioned"; } else { echo $row['jobp_responsibilities']; } ?></p>
									</div>
                                </div>
                                <div class="col-md-3 col-sm-6">
									<div class="input-group">
									<label> Description</label>
                                    </div>
                                    </div>
                                
                                <div class="col-md-9 col-sm-6">
									<div class="input-group">
                                    <textarea type="text" class="form-control desc" name="description"  style="display:none" value="" required><?php if($row['jobp_description']==""){ echo "Not Mentioned"; } else { echo $row['jobp_description']; } ?></textarea>
                                    <p class="demodesc"><?php if($row['jobp_description']==""){ echo "Not Mentioned"; } else { echo $row['jobp_description']; } ?></p>
									</div>
                                </div>
                                <div class="col-md-3 col-sm-6">
									<div class="input-group">
									<label> Location</label>
                                    </div>
                                    </div>
                                
                                <div class="col-md-9 col-sm-6">
									<div class="input-group">
                                    <input type="text"  class="form-control location" id="search" style="display:none" value="<?php if($row['jobp_location']==""){ echo "Not Mentioned"; } else { echo $row['jobp_location']; } ?>"  required>
                                    <div id="search_name"></div> 
                                    <p class="demolocation"><?php if($row['jobp_location']==""){ echo "Not Mentioned"; } else { echo $row['jobp_location']; } ?></p>
									</div>
                                </div>
                                <div class="col-md-3 col-sm-6">
									<div class="input-group">
									<label> Skills</label>
                                    </div>
                                    </div>
                                
                                <div class="col-md-9 col-sm-6">
									<div class="input-group">
                                    <input type="text" name="skills" class="form-control skills" style="display:none" value="<?php if($row['jobp_skills']==""){ echo "Not Mentioned"; } else { echo $row['jobp_skills']; } ?>" required>
                                    <p class="demoskills"><?php if($row['jobp_skills']==""){ echo "Not Mentioned"; } else { echo $row['jobp_skills']; } ?></p>
									</div>
                                </div>

                                <div class="col-md-3 col-sm-6">
									<div class="input-group">
									<label> Salary</label>
                                    </div>
                                    </div>
                                
                                <div class="col-md-4 col-sm-6">
									<div class="input-group" id="unified-inputs">
                                    
                                    <input type="text" name="minsal" class="form-control minsal" style="display:none" value="<?php if($row['jobp_minsal']==""){ echo "Not Mentioned"; } else { echo $row['jobp_minsal']; } ?>" required>
                                    <select  name="minsal_rs" class="form-control minsal_rs" style="display:none;" required>

										<?php
										
										echo "<option value=".$row['jobp_cur_code'].">".$row['jobp_cur_code']."</option>";

										$sql1="SELECT * FROM `currency_type` ";
										$res1=mysqli_query($conn,$sql1);
				
								while($row3 = mysqli_fetch_array($res1))
								{
								echo 	"<option value=".$row3['cur_code'].">".$row3['cur_code']. "&nbsp&nbsp(".$row3['cur_name'].")"."</option>";
									
								}
										?>
										</select>
                                        <p class="demominsal"><?php if($row['jobp_minsal']==""){ echo "Not Mentioned"; } else { echo $row['jobp_minsal'] ."&nbsp". $row['jobp_cur_code']; } ?>&nbsp&nbsp/&nbsp&nbsp Minimum</p>
										
                                   
									</div>
                                </div> 
                                <div class="col-md-1 col-sm-6">
									<div class="input-group">
                                        <i class="ti-arrows-horizontal"></i>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
									<div class="input-group">
                                    <input type="text" name="maxsal" class="form-control maxsal" style="display:none" value="<?php if($row['jobp_maxsal']==""){ echo "Not Mentioned"; } else { echo $row['jobp_maxsal']; } ?>" required>
                                    <p class="demomaxsal"><?php if($row['jobp_maxsal']==""){ echo "Not Mentioned"; } else { echo $row['jobp_maxsal'] ."&nbsp". $row['jobp_cur_code']; } ?>&nbsp&nbsp/&nbsp&nbsp Maximum</p>
                                </div>
                                </div>
                         
                                <div class="col-md-3 col-sm-6">
									<div class="input-group">
									<label> Hirepersons</label>
                                    </div>
                                    </div>
                                <div class="col-md-9 col-sm-6">
									<div class="input-group">
                                        <input type="text" name="hirepersons" class="form-control hire" style="display:none" value="<?php if($row['jobp_hirepersons']==""){ echo "Not Mentioned"; } else { echo $row['jobp_hirepersons']; } ?>"  required>
                                        <p class="demohire"><?php if($row['jobp_hirepersons']==""){ echo "Not Mentioned"; } else { echo $row['jobp_hirepersons']; } ?></p>
									</div>
                                </div>
                                <div class="col-md-3 col-sm-6">
									<div class="input-group">
									<label> Exprience</label>
                                    </div>
                                    </div>
                                    <div class="col-md-9 col-sm-6">
									<div class="input-group">
									<select name="exprience" value='<?php if($row['jobp_exprience']==""){ echo "Not Mentioned"; } else { echo $row['jobp_exprience']; } ?>' class="form-control yrs" style="display:none;">
                                        <option value="<?php if($row['jobp_exprience']==""){ echo "Not Mentioned"; } else { echo $row['jobp_exprience']; } ?>"><?php if($row['jobp_exprience']==""){ echo "Not Mentioned"; } else { echo $row['jobp_exprience']; } ?></option>
                                    <?php
                                for ($i=0; $i<=24; $i++)
                                {
                                    ?>
                                        <option value="<?php echo $i;?> yrs" ><?php echo $i;?>&nbspyrs</option>
                                    <?php
                                }
                            ?>
                                <option value="25+ years">25+ yrs</option>
                                </select>
                                <p class="demoyrs"><?php if($row['jobp_exprience']==""){ echo "Not Mentioned"; } else { echo $row['jobp_exprience']; } ?></p>
									</div>
                                </div>
                                <div class="col-md-3 col-sm-6">
									<div class="input-group">
									<label> Link</label>
                                    </div>
                                    </div>
                                    <div class="col-md-9 col-sm-6">
									<div class="input-group">
                                        <input type="text" name="link" class="form-control link" value="<?php if($row['jobp_link']==""){ echo "Not Mentioned"; } else { echo $row['jobp_link']; } ?>" style="display:none;" required>
                                        <p class="demolink"><?php if($row['jobp_link']==""){ echo "Not Mentioned"; } else { echo $row['jobp_link']; } ?></p>
									</div>
                                </div>
                                <div class="col-md-3 col-sm-6">
									<div class="input-group">
									<label> Ref-email</label>
                                    </div>
                                    </div>
                                    <div class="col-md-9 col-sm-6">
									<div class="input-group">
                                        <input type="email" name="refmail" class="form-control refmail" value="<?php if($row['jobp_refmail']==""){ echo "Not Mentioned"; } else { echo $row['jobp_refmail']; } ?>" style="display:none;" required>
                                        <p class="demorefmail"><?php if($row['jobp_refmail']==""){ echo "Not Mentioned"; } else { echo $row['jobp_refmail']; } ?></p>
									</div>
                                </div>
                                <div class="col-md-12 col-sm-6">
								<div class="input-group" style="text-align:center;">
                                <input type="button"  style="display:none" class="save btn btn-success" value="Save">
								<input type="button"  style="display:none" class="cancel  btn btn-danger" value="Cancel">
									</div></div>
 
								
                            </form>
                         <?php } ?>
                            
						</div>
					
					
					</div>
				</div>
			</div>
            
            
            <script type="text/javascript" 
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
                        
                        $(document).ready(function() {

                            $(".edit").click(function(){
                            $(this).parent().parent().siblings().children().children("p").hide();
                            $(this).parent().parent().siblings().children().children("input").show();
                            $(this).siblings("a.delete").hide();
                            $(this).parent().parent().siblings().children().children("textarea").show();
                            $(this).parent().parent().siblings().children().children("select").show();
                             this.style.display = 'none'

                        }); 

                        $(".cancel").click(function(){
                            $(this).parent().parent().siblings().children().children("p").show();
                            $(this).parent().parent().siblings().children().children("a").show();
                            $(this).parent().parent().siblings().children().children("input").hide();
                            $(this).parent().parent().siblings().children().children("textarea").hide();
                            $(this).parent().parent().siblings().children().children("select").hide();
                            $(this).siblings("input.save").hide();
                             this.style.display = 'none'

                        }); 
                        $(".save").click(function(){
                            var pid="<?php echo $pid; ?>";
                            var postid=$(this).parent().parent().siblings("span").text();
                            var title=$(this).parent().parent().siblings().children().children("input.title").val();
                            var type=$(this).parent().parent().siblings().children().children("select.type").val();
                            var duties=$(this).parent().parent().siblings().children().children("textarea.duties").val();
                            var res=$(this).parent().parent().siblings().children().children("textarea.res").val();
                            var desc=$(this).parent().parent().siblings().children().children("textarea.desc").val();
                            var location=$(this).parent().parent().siblings().children().children("input.location").val();
                            var skills=$(this).parent().parent().siblings().children().children("input.skills").val();
                            var maxsal=$(this).parent().parent().siblings().children().children("input.maxsal").val();
                            var minsal_rs=$(this).parent().parent().siblings().children().children("select.minsal_rs").val();
                            var minsal=$(this).parent().parent().siblings().children().children("input.minsal").val();
                            var hire=$(this).parent().parent().siblings().children().children("input.hire").val();
                            var yrs=$(this).parent().parent().siblings().children().children("select.yrs").val();
                            var link=$(this).parent().parent().siblings().children().children("input.link").val();
                            var refmail=$(this).parent().parent().siblings().children().children("input.refmail").val();
                            // console.log(minsal_rs);
                            $.ajax({
                                url:'include/job_update.php',
                                method:'POST',
                                data:{pid:pid,postid:postid,title:title,type:type,duties:duties,res:res,desc:desc,location:location,skills:skills,maxsal:maxsal,minsal_rs:minsal_rs,minsal:minsal,hire:hire,yrs:yrs,link:link,refmail:refmail
                                },
                                success:function(response){
                                $("#tick").html(response);
                                $(".save").parent().parent().siblings().children().children("p").show();
                                $(".save").parent().parent().siblings().children().children("a").show();
                                $(".save").parent().parent().siblings().children().children("input").hide();
                                $(".save").parent().parent().siblings().children().children("textarea").hide();
                                $(".save").parent().parent().siblings().children().children("select").hide();
                                $(".save").siblings("input.cancel").hide();
                                $(".save").hide();

                                }
                            });

                            var title=$(this).parent().parent().siblings().children().children("input.title").val();
                            $(this).parent().parent().siblings().children().children("p.demotitle").text(title);
                            var type=$(this).parent().parent().siblings().children().children("select.type").val();
                            $(this).parent().parent().siblings().children().children("p.demotype").text(type);
                            var duties=$(this).parent().parent().siblings().children().children("textarea.duties").val();
                            $(this).parent().parent().siblings().children().children("p.demoduties").text(duties);
                            var res=$(this).parent().parent().siblings().children().children("textarea.res").val();
                            $(this).parent().parent().siblings().children().children("p.demores").text(res);
                            var desc=$(this).parent().parent().siblings().children().children("textarea.desc").val();
                            $(this).parent().parent().siblings().children().children("p.demodesc").text(desc);
                            var location=$(this).parent().parent().siblings().children().children("input.location").val();
                            $(this).parent().parent().siblings().children().children("p.demolocation").text(location);
                            var skills=$(this).parent().parent().siblings().children().children("input.skills").val();
                            $(this).parent().parent().siblings().children().children("p.demoskills").text(skills);
                            var minsal_rs=$(this).parent().parent().siblings().children().children("select.minsal_rs").val();
                            var maxsal=$(this).parent().parent().siblings().children().children("input.maxsal").val();
                            $(this).parent().parent().siblings().children().children("p.demomaxsal").text(maxsal+" "+minsal_rs+"/ maximum");
                            var minsal=$(this).parent().parent().siblings().children().children("input.minsal").val();
                            $(this).parent().parent().siblings().children().children("p.demominsal").text(minsal+" "+minsal_rs+"/ minimum");
                            var hire=$(this).parent().parent().siblings().children().children("input.hire").val();
                            $(this).parent().parent().siblings().children().children("p.demohire").text(hire);
                            var yrs=$(this).parent().parent().siblings().children().children("select.yrs").val();
                            $(this).parent().parent().siblings().children().children("p.demoyrs").text(yrs);
                            var link=$(this).parent().parent().siblings().children().children("input.link").val();
                            $(this).parent().parent().siblings().children().children("p.demolink").text(link);
                            var refmail=$(this).parent().parent().siblings().children().children("input.refmail").val();
                            $(this).parent().parent().siblings().children().children("p.demorefmail").text(refmail);

                        });


                        });

                        $(".delete").click(function(){
                           var pid="<?php echo $pid; ?>";
                           var postid=$(this).parent().parent().siblings("span").text();
                           $.ajax({
                               url:'include/job_status.php',
                               method:'POST',
                               data:{postid:postid,pid:pid},
                               success:function(response){
                                $("#tick").html(response);
                                
                               }
                           });
                           $(this).parent().parent().siblings().parent("form").hide();
                           
                        });

                            </script>

                              <!-- This is For Keyword Auto Search -->
            <SCRIPT LANGUAGE="JavaScript" src="js/jquery.js"></SCRIPT>
 <SCRIPT LANGUAGE="JavaScript" src="js/keywordauto.js"></SCRIPT>

<!-- This is For Location Auto Search -->
 
 <SCRIPT LANGUAGE="JavaScript" src="js/locajob.js"></SCRIPT>
		

	            <!--footer-->
	       <?php include 'include/footer.php'; ?>