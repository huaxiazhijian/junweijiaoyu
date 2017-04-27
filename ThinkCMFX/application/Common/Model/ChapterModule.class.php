<?php
/**
 * 课程科目:章节
 */
namespace Common\Model;
use Common\Model\CommonModel;
class ChapterModel extends CommonModel {
	
	
	protected function _before_write(&$data) {
		parent::_before_write($data);
	}
	
}