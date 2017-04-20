<?php
/**
 * 题库管理
 */
namespace Admin\Controller;

use Common\Controller\AdminbaseController;

class QuestionController extends AdminbaseController
{
  protected $itembank_model;
	
	public function _initialize() {
		parent::_initialize();
		$this->itembank_model = D("Common/Itembank");
		$this->subjects_model = D("Common/Subjects");
	}

   /**
    *题库管理
    */
   public function itembank()
   {    
   	    if(IS_POST){
   	    	$keyword=I('keyword');
   	    	empty($keyword)?"":$keyword;
	   	    $item=$this->itembank_model->where("'question' like '`%$keyword%`'")->select();
			$this->assign("item",$item);
			$this->display();
	    }
	    else
	    {
		    $item=$this->itembank_model->select();
		    //var_dump($item);die;
			$this->assign("item",$item);
			$this->display();
	    }
   }
   /**
    * 考试题添加
    */
  public function itembankadd()
   { 
     $su=$this->subjects_model->select();
     $this->assign("su",$su);
   	 $this->display();  
   }
   /**
    * 试题添加提交
    */
  public function itembankadd_post()
  {
  	if(IS_POST){
			$data['te_type']=I('te_type');
			$data['op_type']=I('op_type');
			$data['sid']=I('sid');
			$data['question']=I('question');
			$data['options']=I('options');
			//$option=explode(';',$data['options']);
			$data['answer']=I('answer');
			$data['info']=I('info');
			$data['parsing']=I('parsing');
			$data['itime']=time();
			$data['score']=I('score');
			//var_dump($option);die;
			if ($this->itembank_model->create($data)!==false){
				if ($this->itembank_model->add($data)!==false) {
					$this->success(L('ADD_SUCCESS'), U("Question/itembank"));
				} else {
					$this->error(L('ADD_FAILED'));
				}
			} else {
				$this->error($this->professional_model->getError());
			}
		
		}
	}
		/**
	   * 试题删除
	   */
	  public function itembankdelete()
	  {
	  	  if(isset($_GET['item_id'])){
				$id = intval(I("get.item_id"));
				if ($this->itembank_model->where("item_id=$id")->delete()!==false) {
					$this->success("删除成功！");
				} else {
					$this->error("删除失败！");
				}
			}
			if(isset($_POST['item_ids'])){
				$ids=join(",",$_POST['item_ids']);
				if ($this->itembank_model->where("item_id in ($ids)")->delete()!==false) {
					$this->success("删除成功！");
				} else {
					$this->error("删除失败！");
				}
			}
	  }
	  /**
	   * 试题修改
	   */
	  public function itembankedit()
	  {
	  	$id=I("get.item_id",0,'intval');
		$item=$this->itembank_model->where(array('item_id'=>$id))->find();
		var_dump($item);die;
   	    $this->assign("item",$item);
		$this->display();
	  }
  }
  
