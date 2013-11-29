<?php
class Inkatia_Customregistration_Model_Entity_Setup extends Mage_Customer_Model_Entity_Setup
{
    public function getDefaultEntities(){
 
        return array(
 
                'occupation'=>array(
                        'type'=> 'static',
                        'label'=> 'Occupation',
                        'visiable' => true,
                        'required' => true,
                        'sort_order' => 80,
                ),
                'jobtitle'=>array(
                        'type'=> 'static',
                        'label'=> 'Jobtitle',
                        'visiable' => true,
                        'required' => true,
                        'sort_order' => 80,
                )
        );
    }
}