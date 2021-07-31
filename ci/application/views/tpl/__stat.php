<div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-2"><!--img src="<?php echo base_url();?>assets/img/ads/ads100x700.png"--></div>
                <div class="col-md-8">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>IP Address</th>
                                <th>Agent</th>
                                <th>Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if ($jml_record==0) {
                                    echo "<tr><td colspan=\"8\" align=\"center\">Data kosong</td></tr>";
                                }
                                $i=0;
                                foreach ($hasil as $key) {
                                    echo "<tr>
                                               <td>".++$i."</td>
                                               <td>".$key->datetime."</td>
                                               <td>".$key->ip_address."</td>
                                               <td>".$key->browser_agent."</td>
                                               <td>".base_url().$key->url_string."</td>
                                          </tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-2"><!--img src="<?php echo base_url();?>assets/img/ads/ads100x700.png"--></div>
            </div>
            
        </div>
</div>