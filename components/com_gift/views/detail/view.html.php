<?php

defined('_JEXEC') or die;

use Joomla\Registry\Registry;

class GiftViewDetail extends JViewLegacy
{
	public function display($tpl = null)
	{
		$app = JFactory::getApplication();
		$model = $this->getModel();
		$gift_id = JRequest::getVar('gift');

		$this->gift = $model->getGift( $gift_id );
		$this->gallery = $model->getGiftGallery( $gift_id );

		if( empty( $this->gift->id ) ){
			$app->redirect('index.php');
		}

		$doc = JFactory::getDocument();
		$doc->addStyleSheet( $this->baseurl.'/templates/gift/css/brand.css' );

		$this->months = array();

		for ($m=1; $m<=12; $m++) {
			$month = date('F', mktime(0,0,0,$m, 1, date('Y')));
			$this->months[] = $month;
		}

		$this->today = getdate();

		$this_year = $this->today['year'];
		$next_year = $this_year + 1;

		$this->years = array();

		$this->years[] = $this_year;
		$this->years[] = $next_year;

		$this->button_width = empty( $this->gallery ) ? 49 : 33;

		if( !empty( $this->gift->amounts ) ){
			$this->amounts = explode(';', $this->gift->amounts);
		}else{
			$this->amounts = array();
		}

		parent::display($tpl);
	}
}
