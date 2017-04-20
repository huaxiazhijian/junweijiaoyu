<?php
/**
 *题库管理
 */
namespace Common\Model;
use Common\Model\CommonModel;
class ItembankModel extends CommonModel {
	
	protected function _before_write(&$data) {
		parent::_before_write($data);
	}
	
}