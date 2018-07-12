

<div class="row">
    <div class="col">
        <?php echo form_open('answer/save')?>

            <div class="form-group">
                <label for="question_title">Question Title</label>
                <input type="text" name="question_title" class="form-control" id="question_title" value="<?php echo set_value('question_title');?>"> 

                <?php echo form_error('question_title');?>
            </div>

            <div class="form-group">
                <label for="question_description">Example textarea</label>
                <textarea class="form-control" id="question_description" name="question_description"><?php echo set_value('question_description');?></textarea>
                <?php echo form_error('question_description');?>
            </div>

            <button type="submit" class="float-right btn btn-primary">Submit</button>
            
        </form>
    </div>
</div>




