<?php
$currentDate = date('d-M-y');
?>
<div class="row">
    <div class="col-12">
        <button class="btn btn-success float-right" onclick="location.href='<?php echo base_url();?>question/questionList'">Go to Questions List</button>
    </div>
</div>
<div class="row text-dark">
        <h5><b><?php echo $questionAlone->question_title;?></b></h5>
</div>
<div class="row">
    <div class="col-10">
       <h4><small><?php echo $questionAlone->question_description;?></small></h4>
    </div>
    <div class="col-2">
        <h6><p class="text-danger"> asked <?php echo $currentDate?></p></h6>
       <h6><p class="text-danger"><?php echo $questionAlone->created_by;?></p><h6>
    </div>
</div>
<hr class="bg-light">

    <?php 
    if($questionWithAnswers) { 
            echo '<h5 class="text-primary"><b>'.sizeof($questionWithAnswers).' '."Answers </b></h5><hr>";
        foreach ($questionWithAnswers as $key => $temp) { ?>
            <div class="row">
            <div class="col-10">
                <h5><?php echo $temp->answer_content?></h5>
                </div>
                <div class="col-2">
                  <!-- <div class="text-dark float-right" style="height:0px;"> -->
                        <h6><p class="text-danger"> answered <?php echo $currentDate?></p></h6>
                        <h6><p class="text-danger"><?php echo $temp->answered_by?></p><h6>
                </div> 
             </div>

<hr class="bg-light">
        
    <?php } // End of foreach
    } else { ?>

            <div class="row">
                <div class="col-12 text-primary"><h5><b> No answers yet</h5></b></div>
            </div>
<hr>
    <?php } ?>

<div class="row justify-content-center">
    <div class="col-12">

        <?php echo form_open("answer/saveAnswer", ['id' => 'answer_form'])?>
            <div class="col-12 border border border-light">
                <input type="hidden" name="question_id" value="<?php echo $questionAlone->id;?>">

                <div class="form-group">
                    <h5><b><label for="question_description" class="text-success">Enter Your Answer Here</label></b></h5>
                    <textarea required class="form-control" name="answer_content" id="answer_content"><?php echo set_value('answer_content');?></textarea>
                    <?php echo form_error('answer_content');?>
                </div>

                <script>
                     CKEDITOR.replace( 'answer_content' );
                </script>

            </div>
            <div>
                <button type="submit" class="center-block btn btn-primary float-right">Submit</button>
            </div>
        </form>
    </div>
</div>

        <script>
            $("#answer_form").submit( function(e) {

                var messageLength = CKEDITOR.instances['answer_content'].getData().replace(/<[^>]*>/gi, '').length;
                if( !messageLength ) {
                    alert('Please enter an answer');
                    e.preventDefault();
                }
                });
        </script>
    


