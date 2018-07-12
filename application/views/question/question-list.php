
<div class="container" style="padding-top: 0px;">
    <div>
        <button class=" btn btn-success float-right" onclick="location.href='<?php echo base_url();?>question/askQuestion'">Ask Question</button>
    </div>
    <div class="page-header">
        <h3>ALL QUESTIONS</h3>      
    </div>
  <hr class="bg-dark">
<?php 
$currentDate = date('d-M-y');
foreach ($dataProvider as $key => $temp) { ?>
    <div>
        <div class="row col-12">
            <h5><a href='<?php echo base_url("question/question-detail/$temp->id")?>' class="question-hyperlink text-primary"><?php echo $temp->question_title?></a></h5>
        </div>
        <div class="row col-12">  
           <h5><small><?php echo $temp->question_description;?></small></h5>
           <hr>
           <div class="text-dark float-right" style="height: 0px;"> 
              <h6><p class="text-danger float-right"> Asked <?php echo $currentDate?></p></h6> 
              <h6><p class="text-danger float-right"><?php echo $temp->created_by?> </p></h6>
           </div> 
        </div>
        <hr class="bg-light">
    </div>
<?php } ?>
</div>


