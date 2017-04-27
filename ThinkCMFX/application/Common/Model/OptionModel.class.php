<?php
/**
 * 题库：选项
 */
namespace Common\Model;
use Common\Model\CommonModel;
class OptionModel extends CommonModel {
	
	
	protected function _before_write(&$data) {
		parent::_before_write($data);
	}
	
}