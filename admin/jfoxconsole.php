<?php
/**
 * @package		JFoxConsole
 * @author		Emerson Rocha Luiz (emerson@webdesign.eng.br)
 * @copyright           Copyright (C) 2005 - 2011 Webdesign Assessoria em Tecnologia da Informação LTDA.
 * @license		GNU General Public License version 2 or later;
 */


// No direct access to this file
defined('_JEXEC') or die('Restricted access');

//Block non superadmins
if (!JFactory::getUser()->authorise('core.admin', 'com_jfoxconsole'))
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// import joomla controller library
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by HelloWorld
$controller = JController::getInstance('JFoxConsole');

// Perform the Request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
