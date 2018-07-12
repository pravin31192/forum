<div class="container" style="padding-top: 0px;">
<div>
    <button class=" btn btn-success float-right" onclick="location.href='<?php echo base_url();?>question/questionList'">Go Back to QuestionList</button>
       
</div>
<div class="page-header">
        <h3>SEARCH RESULTS</h3>      
</div>
<hr class="bg-secondary">
<?php 
$currentDate = date('d-M-y');
if($dataProvider){
    echo '<div class="text-danger"><h5><b>'.sizeof($dataProvider).' '."Records Found</b></h5></div><hr>";
foreach ($dataProvider as $key => $temp) { ?>
    <div >
        <div class="row col-12">
            <h5><a href='<?php echo base_url("question/question-detail/$temp->id")?>' class="text-primary"><?php echo $temp->question_title?></a></h5>
        </div>
        <div class="row col-12">  
           <h4><small><?php echo $temp->question_description;?></small></h4>
           <hr>
           <div class="text-dark float-right" style="height: 0px;"> 
            <h6><p class="text-danger float-right"> Asked <?php echo $currentDate?></p></h6>
                <h6><p class="text-danger float-right"><?php echo $temp->created_by?> </p></h6>  
           </div>
        </div>
        <hr class="bg-light">
    </div>

<?php } 
} else { ?>
<div class="row justify-content-center mb-3">
    <div class="col-4"> <h4>No results found<h4>
    </div>
   
</div>
<?php } ?>
</div>
</div>
