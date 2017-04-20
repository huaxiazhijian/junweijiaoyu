<?php
/**
 * 课程科目：分类
 */
namespace Common\Model;
use Common\Model\CommonModel;
class TypesModel extends CommonModel {
	
	
	protected function _before_write(&$data) {
		parent::_before_write($data);
	}
	
}