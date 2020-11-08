<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class M_Blog_Post_Category extends CI_Model {

    public $table_blog_post_category = 'tb_blog_post_category';

    public function datatables(){
        # code...
        return [
            'datatable' => true,
            'datatables_data' => "
            [{'data': 'checkbox',className:'c-table__cell u-pl-small u-pr-small', width:'50'},
            {'data': 'id',className:'c-table__cell'},
            {'data': 'name',className:'c-table__cell u-pl-zero',width:'100%'},
            {'data': 'alat',className:'c-table__cell', width:'100'} ]
            ",
        ];
    }

    public function data_table()
    {
        # code...

        header('Content-Type: application/json');

        return[
            'name' => strip_tags($this->input->post('name')),
            'slug' => slug(strip_tags($this->input->post('name'))),
        ];
    }

    public function check_data()
    {
        # code...
        $data = ['name' => strtolower($this->input->post('name'))];

        return $this->_Process_MYSQL->get_data($this->tabke_blog_post_category, $data) ->num_rows();
    }

    public function process_create(){

        if ($this->check_data() < 1) {

            if ($this->_Process_MYSQL->insert_data($this->table_blog_post_category,$this->data_post())) {
                return 'success';
            }else{
                return false;
            }
        }else {
            return 'invalid';
        }
    }

    public function process_update(){

        if ($this->check_data() < 1) {

            if ($this->_Process_MYSQL->update_data($this->table_blog_post_category,$this->data_post(),['id' => $this->input->post('id')])) {
                return 'success';
            }else{
                return false;
            }
        }else {
            return 'invalid';
        } 

    }  

    public function process_delete($id){
        return $this->_Process_MYSQL->delete_data($this->table_blog_post_category, array('id' => $id));
    }

    public function process_multiple_delete($id){
        return $this->_Process_MYSQL->delete_data_multiple($this->table_blog_post_category, $id, 'id');
    }

}