<div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><!--img src="<?php echo base_url();?>assets/img/ads/ads100x700.png"--><!--/div>
                <div class="col-md-8"-->
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Short Link</th>
                                <th>Original Link</th>
                                <th>Date Create</th>
                                <th>IP Address</th>
                                <th>Hits</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if ($jml_record==0) {
                                    echo "<tr><td colspan=\"8\" align=\"center\">Data kosong</td></tr>";
                                }
                                $i=0;
                                foreach ($isi as $key) {
                                    $temp_tot = $this->m_short->count_visit($key->alias);
                                    //var_dump($temp_tot);
                                    echo "<tr>
                                               <td>".++$i."</td>
                                               <td><a href=\"".base_url().$key->alias."\" target=\"_blank\">".base_url().$key->alias."</a></td>
                                               <td><a href=\"".$key->url."\" target=\"_blank\">".$key->url."</a></td>
                                               <td>".$key->created."</td>
                                               <td>".$key->ip."</td>
                                               <td><a href=\"".base_url()."stat_lists/".$key->alias."\">".$temp_tot."</a></td>
                                          </tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                <!--/div>
                <div class="col-md-2"--><!--img src="<?php echo base_url();?>assets/img/ads/ads100x700.png"--></div>
            </div>
            
        </div>
</div>