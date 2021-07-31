<div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-2"><!--img src="<?php echo base_url();?>assets/img/ads/ads100x700.png"--></div>
                <div class="col-md-8">
                    <div class="short">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" name="url" id="url" placeholder="Enter the link to be shortened">
                            <span class="input-group-btn">
                                <button class="btn btn-info" id="short-btn"><span class="glyphicon glyphicon-link" aria-hidden="true"></span> Short</button>
                            </span>
                        </div><!-- /input-group -->
                        <div id="loading"></div>
                        <div class="short-results"></div>
                    </div>
                </div>
                <div class="col-md-2"><!--img src="<?php echo base_url();?>assets/img/ads/ads100x700.png"--></div>
            </div>
            <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="col-sm-4 col-md-4">
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="thumbnail">
                                <div class="caption">
                                    Total Shortened URL: <strong><?php echo $jml;?></strong>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                        </div>
                    </div>
                    <div class="col-md-2"></div>
            </div>
        </div>
    </div>