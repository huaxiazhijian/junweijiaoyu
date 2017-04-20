<?php
/**
 * 课程科目：科目
 */
namespace Common\Model;
use Common\Model\CommonModel;
class SubjectsModel extends CommonModel {
	
	
	protected function _before_write(&$data) {
		parent::_before_write($data);
	}
	
}