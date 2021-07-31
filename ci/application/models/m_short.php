<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
   /**
	* @author Yusuf Ayuba (yusufayuba@live.com)
    * @license Commercial
    * @copyright 2014
	* 
    */
 
   class M_short extends CI_Model {
       
	   private $primary_key = 'id';
	   private $table_name = 'links';
       private $table_2 = 'redirects';
	   
	   
       function __construct() {
           parent::__construct();
       }
	   
	
	   function count_all() {
	   	   return $this->db->count_all($this->table_name);
	   }
       /*
       public function view($limit = 100)
    {
        $this->load->library('table');

        $redirects = array();

        $redirects[] = array('ID', 'Date', 'IP Address', 'Agent', 'Short URL');

        $this->db->select('id, datetime, ip_address, browser_agent,url_string');

        $this->db->limit($limit);

        $this->db->order_by('id', 'desc');

        $query = $this->db->get('redirects');

        if ($query->num_rows() > 0)
        {
            foreach ($query->result_array() as $row)
            {
                $redirects[] = $row;
            }
        }

        echo $this->table->generate($redirects);
    }*/
    
       function get_all() {
        
          $this->db->select('*')
            ->from($this->table_2)
            ->join('links','links.alias=redirects.url_string')
            ->order_by('redirects.id_redirect','DESC');
          $result = $this->db->get();
          //$result = $this->db->get();
          return $result;
       }

       function get_stat($limit=100,$offset=0,$order_column='',$order_type='asc') {
        
           if (empty($order_column) || empty($order_type))
                $this->db->order_by($this->table_2.'.id_redirect','desc');  
           else
                $this->db->order_by($order_column,$order_type);
          $this->db->select('*')
            ->from($this->table_2)
            ->join('links','links.alias=redirects.url_string');
            //->join($this->tables_name,$this->table_name.'.alias='.$this->table_2.'.url_string')
            //->limit($limit,$offset);
          $result = $this->db->get();
          //$result = $this->db->get();
          return $result;
          //var_dump($result);
       }
       
       function get_link() {
           $this->db->select('*')
              ->from($this->table_name)
              ->order_by('created','DESC');
           return $this->db->get();
       }
       
       function count_visit($string){
           $this->db->select('*')
               ->from($this->table_2)
               ->where($this->table_2.'.url_string',$string);
           $result = $this->db->get();
           return $result->num_rows();
       }

       function get_visit($alias) {
        
          $this->db->select('*')
            ->from($this->table_2)
            //->join('links','links.alias=redirects.url_string')
            ->where('url_string',$alias)
            ->order_by('redirects.id_redirect','DESC');
          $result = $this->db->get();
          //$result = $this->db->get();
          return $result;
       }
       	   
   }
   
/* End of file m_msdosen.php */
/* Location: ./application/models/m_msdosen.php */