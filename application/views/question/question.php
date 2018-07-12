<div class="row">
    <div class="col-12">
    <button class=" btn btn-success float-right" onclick="location.href='<?php echo base_url();?>question/questionList'">Go to Questions List</button>
</div>
</div>
   
        <div >
             <?php echo form_open("question/saveQuestion", ['id' => 'question_form'])?>
               <h5> <label for="question_title">Question Title</label><h5>
                <input type="text" name="question_title" class="form-control" id="question_title" value="<?php echo set_value('question_title');?>"> 

                <?php echo form_error('question_title');?>
        </div>
        <div>
               <h5> <label for="question_description">Question Description</label></h5>
                <textarea class="form-control " id="question_description" name="question_description"><?php echo set_value('question_description');?></textarea>
                <?php echo form_error('question_description');?>
        </div>
    
<hr>
        <script>
            CKEDITOR.replace( 'question_description' );
        </script>

        <div>
                <button type="submit" class="float-right btn btn-primary">Submit</button>
        </div>
            </div>
            
        </form>
    <script>
        $("#question_form").submit( function(e) {

            var messageLength = CKEDITOR.instances['question_description'].getData().replace(/<[^>]*>/gi, '').length;
            if( !messageLength ) {
                alert('Please enter your question');
                e.preventDefault();
            }
        });
    </script>
    </div> 
</div>
  <!--   </li>
</ul> -->


