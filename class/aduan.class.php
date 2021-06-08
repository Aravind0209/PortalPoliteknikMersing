<?php


require_once __DIR__.'../../model/aduan.model.php';


class AduanController extends AduanModel{



    public function new_aduan($aduan,$email,$added_date){

    $run_register = $this->insert_to_aduan($aduan,$email,$added_date);

    return $run_register;
    }


        public function get_aduan(){
        $data = $this->get_all_aduan();
        return $data;
    }

  

}

?>