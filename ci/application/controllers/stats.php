<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Stats extends CI_Controller
{

    public function index()
    {
        
    }

    /**
     * Load some recent redirect stats
     * @param int $limit Limit the number of records to show
     */
    public function view($limit = 100)
    {
        $this->load->library('table');

        $redirects = array();

        $redirects[] = array('ID', 'Date', 'IP Address', 'Agent', 'Short URL');

        $this->db->select('id_redirect, datetime, ip_address, browser_agent,url_string');

        $this->db->limit($limit);

        $this->db->order_by('id_redirect', 'desc');

        $query = $this->db->get('redirects');

        if ($query->num_rows() > 0)
        {
            foreach ($query->result_array() as $row)
            {
                $redirects[] = $row;
            }
        }

        echo $this->table->generate($redirects);
    }
    
    public function lists($link)
    {
        
        //$tempS=$this->m_short->get_stat($this->config->item('limit'),$offset,$order_column,$order_type)->result();
        //$tempS=$this->m_short->get_all()->result();
        $temps = $this->m_short->get_visit($link)->result();
        $temp_tot = $this->m_short->count_all();
        //var_dump($temp_tot);
        var_dump($tempS);
        /*$config['base_url'] = site_url('msdosen/index/');
        $config['total_rows'] = $temp_tot;
        $config['per_page'] = $this->config->item('limit');
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);
        
        $data['pagination'] = $this->pagination->create_links();
        $data['offset'] = $offset;
        
        $new_order = ($order_type=='asc'?'desc':'asc');
        $data['new_order'] = $new_order;
        $data['page'] = "";*/
        $data['jml_record'] = $temp_tot;
        $data['hasil'] = $tempS;
        /*$data['offset'] = $offset;
        $data['order'] = $new_order;*/
        
        tampil('__stat',$data);
    }
    
    public function links()
    {
        $temp_tot = $this->m_short->count_all();
        $temp_dump = $this->m_short->get_link()->result();
        //var_dump($temp_dump);
        
        $data['jml_record'] = $temp_tot;
        $data['isi'] = $temp_dump;
        tampil('__link',$data);
    }
    

}

/* End of file Stats.php */
    /* Location: ./application/controllers/Stats.php */