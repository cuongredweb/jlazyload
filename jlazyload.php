<?php
/**
 * @package     RedSlider
 * @subpackage  Plugin
 *
 * @copyright   Copyright (C) 2014 redCOMPONENT.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */
defined('_JEXEC') or die;

/**
 * Plugins JLazyLoad
 *
 * @since  1.0
 */
class PlgSystemJLazyLoad extends JPlugin
{
	/**
	 * Constructor
	 *
	 * @param   object  &$subject  The object to observe
	 * @param   [type]  $config    An array that holds the plugin configuration
	 */
	public function __construct(&$subject, $config)
	{
		$app = JFactory::getApplication();

		if ($app->isAdmin())
		{
			return;
		}

		parent::__construct($subject, $config);

		$this->loadLanguage();
	}

	/**
	 * Adds needed data to the head section
	 *
	 * @return  void
	 */
	public function onBeforeCompileHead()
	{
		$document = JFactory::getDocument();

		// Load jQuery
		if ($this->params->get('load_jquery'))
		{
			$document->addScript('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
		}

		// Add lazyload library
		JHtml::script('media/rlazyload/js/jquery.lazyload.min.js');

		// Init jquery layzyload
		JHtml::script('media/rlazyload/js/rlazyload.js');
	}
}
