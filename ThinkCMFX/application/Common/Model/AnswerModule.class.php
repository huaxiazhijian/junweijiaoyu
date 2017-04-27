<?php
/**
 * 题库：答案
 */
namespace Common\Model;
use Common\Model\CommonModel;
class AnswerModel extends CommonModel {
	
	
	protected function _before_write(&$data) {
		parent::_before_write($data);
	}
	
}