<?php
App::uses('FormHelper', 'View/Helper');
class ExtendedFormHelper extends FormHelper {
	var $helpers = array('Form');
	public function radio($fieldName, $options = array()) {
		$options['legend'] = false;
		//$options['before'] = ;
		//$options['label'] = false;
		$out = $this->Form->input($fieldName, $options);
		$out = str_ireplace('<label ', '<label class="btn icon-" ', $out);
		$out = str_ireplace('<div class="input radio">', '<div class="input radio"><label>'.$options['label'].'</label><br />', $out);
		return $this->output($out);
	}

}
?>