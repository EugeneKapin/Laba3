<?php

class userController extends Controller {

	public function index(){
		$examples=$this->model->load();		
		$this->setResponce($examples);		
	}
		
    public function view($data){
		$example=$this->model->load($data['id']); 
		$this->setResponce($example);
	}

	public function add(){
		if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['image']) && isset($_POST['power']) && isset($_POST['speed'])){
			$dataToSave=array('id'=>$_POST['id'], 'name'=>$_POST['name'], 'image'=>$_POST['image'], 'power'=>$_POST['power'], 'speed'=>$_POST['seed']);
			$addedItem=$this->model->create($dataToSave);
			$this->setResponce($addedItem);
		}
	}
    
    public function edit($id){
		if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['image']) && isset($_POST['power']) && isset($_POST['speed'])){
			$dataToEdit=array('id'=>$_POST['id'], 'name'=>$_POST['name'], 'image'=>$_POST['image'], 'power'=>$_POST['power'], 'speed'=>$_POST['seed']);
			$editItem=$this->model->save($dataToEdit, $data['id']);
			$this->setResponce($editItem);
	   }	 
    }
    public function delete($data){
        $examples=$this->model->delete($data['id']);
        $this->setResponce($examples);
    }
}