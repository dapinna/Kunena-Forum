<?php
/**
 * Kunena Component
 * @package         Kunena.Template.Crypsis
 * @subpackage      Pages.Category
 *
 * @copyright   (C) 2008 - 2016 Kunena Team. All rights reserved.
 * @license         http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link            https://www.kunena.org
 **/
defined('_JEXEC') or die;

$content = $this->execute('Category/Manage');

$this->addBreadcrumb(
	JText::_('COM_KUNENA_MENU_CATEGORY_MANAGE'),
	'index.php?option=com_kunena&view=category&layout=manage'
);

echo $content;
