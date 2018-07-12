
<div>
    <div class="row justify-content-center mb-3">
        <div class="col-3">
          <img src="<?php echo base_url('assets/images/login-logo.png')?>" class="rounded" alt="image not available" style="height:120px">
        </div>
    </div>

    <?php 
    if ($this->session->flashdata('Wrong_Credentials') != null) { ?>
    <div class="row justify-content-center mb-3">
        <div class="col-4 alert alert-danger" role="alert">
       <?php  echo $this->session->flashdata('Wrong_Credentials'); ?>
     </div>
    </div>
    <?php }
    ?>
    <form action="<?php echo base_url('welcome/login')?>" method="post">
        
        <div class="row justify-content-center mb-3">
            <div class="col-4">
              <label class="control-label" for="email">UserName:</label>
              <input type="text" class="form-control" id="username"
                placeholder="Username" name="username" value="<?php echo set_value('username')?>">
              <?php echo form_error('username');?>
            </div>
        </div>
        
        <div class="row justify-content-center mb-3">
            <div class="col-4">
              <label class="control-label" for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" 
                placeholder="Password" name="password">
                <?php echo form_error('password');?>
            </div>
        </div>

        <div class="row justify-content-center mb-3">
          <div class="col-4">
            <button type="submit" class="float-right btn btn-success text-light">Submit</button>
          </div>
        </div>
    </form>
</div>
  