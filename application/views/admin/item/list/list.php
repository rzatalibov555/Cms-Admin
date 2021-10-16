<?php $this->load->view('admin/includes/headerStyle'); ?>

<?php $this->load->view('admin/includes/leftMenu'); ?>

<?php $this->load->view('admin/includes/navbar'); ?>

<?php $this->load->view('admin/includes/pageName'); ?>

<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Orders</div>
                        <div class="widget-subheading">Last year expenses</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-success">1896</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Products Sold</div>
                        <div class="widget-subheading">Revenue streams</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-warning">$3M</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Followers</div>
                        <div class="widget-subheading">People Interested</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-danger">45,9%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Income</div>
                        <div class="widget-subheading">Expected totals</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-focus">$147</div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                    </div>
                    <div class="progress-sub-label">
                        <div class="sub-label-left">Expenses</div>
                        <div class="sub-label-right">100%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-12">

        <div class="main-card mb-3 card">
            <div class="card-header">Item List
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <a href="<?php echo base_url('admin_create_item'); ?>">
                          <button class="btn btn-outline-success">Create</button>
                        </a>
                    </div>
                </div>
            </div>

            <?php if(empty($items)){ ?>
                <div style="margin: 20px" class="alert alert-info text-center">
                <span>Hər hansı bir məlumat tapılmadı. Məlumat daxil etmək üçün <a href="<?php echo base_url('admin_create_item'); ?>" style="color: green">əlavə et</a></span>
            </div>
            <?php }else{ ?>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Url</th>
                            <th>Title</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Rank</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Img</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $itemCount = 1; foreach ($items as $item){ ?>
                            <tr>
                                <td class="text-center text-muted">#<?php echo $itemCount++; ?></td>
                                <td><?php echo $item->url; ?></td>
                                <td><?php echo $item->title; ?></td>
                                <td class="text-center"><?php echo $item->description; ?></td>
                                <td class="text-center">r</td>
                                <td class="text-center">datesss</td>
                                <td class="text-center">
                                    <img width="50" src="https://cdn.britannica.com/30/211830-050-733DB46D/Baku-Azerbaijan-Caspian-Sea.jpg">
                                </td>
                                <td class="text-center">

                                    <button  type="button" class="btn btn-sm btn-toggle <?php if($item->status){echo "active"; }else{ echo "";} ?>" data-toggle="button" aria-pressed="true" autocomplete="off">
                                        <div class="handle"></div>
                                    </button>

                                </td>
                                <td class="text-center">

                                    <button type="button" id="PopoverCustomT-1" class="btn btn-outline-primary">Details</button>
                                    <button class="btn-wide btn btn-outline-warning">Edit</button>
                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                </td>
                            </tr>
                        <?php } ?>



                        </tbody>
                    </table>
                </div>
            <?php } ?>




        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $this->load->view('admin/includes/footerStyle') ; ?>
