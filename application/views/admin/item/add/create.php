<?php $this->load->view('admin/includes/headerStyle'); ?>

<?php $this->load->view('admin/includes/leftMenu'); ?>

<?php $this->load->view('admin/includes/navbar'); ?>

<?php $this->load->view('admin/includes/pageName'); ?>

<style>
    .p20{
        padding: 20px;
    }

    .noBlock{
        float: left;
    }
</style>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Item Create
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <a href="<?php echo base_url('admin_item_list'); ?>">
                            <button class="btn btn-info">Back</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p20">


                <?php if($this->session->flashdata('err')){ ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('err'); ?>
                        </div>
                <?php } ?>




                <form action="<?php echo base_url('admin_create_item_act'); ?>" method="post" enctype="multipart/form-data">
                    <label for="t">TITLE</label>
                    <input type="text" name="title" id="t" class="form-control" placeholder="Enter title">
                    <br>

                    <label for="d">DESCRIPTION</label>
                    <textarea name="descr" rows="10" cols="50" id="d" class="form-control"></textarea>
                    <br>


                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                        <div class="row">
                            <label for="date">DATE</label>
                            <input type="date" name="date" id="date" class="form-control">
                        </div>
                    </div> 


                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                        
                            <label for="cate">CATEGORY</label>
                            <select id="cate" class="form-control"name="category">
                                <option value="">-SELECT-</option>
                                <option value="Sports">Sports</option>
                                <option value="Technology">Technology</option>
                                <option value="Business">Business</option>
                                <option value="Entertainment">Entertainment</option>
                            </select>
                        
                    </div> 
                        
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                        <div class="row">
                            <label for="status">STATUS</label>
                            <select id="status" class="form-control"name="status">
                                <option value="">-SELECT-</option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                    </div> 

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 noBlock">
                        
                            <label for="img">IMG <br>
                                <img width="50px" src="https://www.iphonefaq.org/files/styles/large/public/files-a.jpg">
                            </label>
                            <input hidden type="file" name="user_file" id="img" class="form-control">
                            
                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                        <div class="row">

                            <button type="submit" class="btn btn-info btn-block" style="margin-top: 23px; height: 40px;">SEND</button>
                        </div>
                    </div>


                </form>

            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $this->load->view('admin/includes/footerStyle') ; ?>
