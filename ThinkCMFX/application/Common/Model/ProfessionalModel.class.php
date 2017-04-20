<?php
/**
 * 课程科目：专业
 */
namespace Common\Model;
use Common\Model\CommonModel;
class ProfessionalModel extends CommonModel {
	
	
	protected function _before_write(&$data) {
		parent::_before_write($data);
	}
	
}