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
 * HTML View class for the HelloWorld Component
 */
class JFoxConsoleViewJFoxConsole extends JView
{
	// Overwriting JView display method
	function display($tpl = null)
	{

            $code = $this->get('Runcode');
            $this->result = $code;

        //Return to display
        parent::display($tpl);
        }
}
