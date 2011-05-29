<?php
/**
 * @package		JFoxConsole
 * @author		Emerson Rocha Luiz (emerson@webdesign.eng.br)
 * @copyright           Copyright (C) 2005 - 2011 Webdesign Assessoria em Tecnologia da Informação LTDA.
 * @license		GNU General Public License version 2 or later;
 */


// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * JFoxConsole View
 */
class JFoxConsoleViewJFoxConsole extends JView
{
	
	function display($tpl = null) 
	{

            JToolBarHelper::title( JText::_('COM_JFOXCONSOLE_NAME'), 'generic.png');
            JToolBarHelper::preferences( 'com_jfoxconsole', '270', '500' );


            $code = $this->get('Runcode');
            $this->result = $code;

        //Return to display
        parent::display($tpl);
        }
}
