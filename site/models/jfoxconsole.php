<?php
/**
 * @package		JFoxConsole
 * @author		Emerson Rocha Luiz (emerson@webdesign.eng.br)
 * @copyright           Copyright (C) 2005 - 2011 Webdesign Assessoria em Tecnologia da Informação LTDA.
 * @license		GNU General Public License version 2 or later;
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla modelitem library
jimport('joomla.application.component.modelitem');

/**
 * JFoxConsole Model
 */
class JFoxConsoleModelJFoxConsole extends JModelItem
{

    public function getRuncode(){

        //Get params
        $params = &JComponentHelper::getParams( 'com_jfoxconsole' );

        //load post and put on variables
        $jfoxcode = Jrequest::getVar('code', '', 'post','string', JREQUEST_ALLOWRAW );

        $format = JRequest::getCmd('format', 'html');

        $cols = JRequest::getInt('cols');
        $rows = JRequest::getInt('rows');

        if ($cols == 0) {
            if ($format == 'html') {
            $cols = $params->get('cols_html', 130);
            $rows = $params->get('rows_html', 20);
            } else {
            $cols = $params->get('cols_raw', 130);
            $rows = $params->get('rows_raw', 3);
           }
        }


        //load $app for be able to take at least live_site
        $app = JFactory::GetApplication();

        // the core that execute the code and put in one variable
        ob_start();
        eval($jfoxcode);
        $eval_result = ob_get_contents();
        ob_end_clean();

        // Way to abstract errors
        //todo: think a bit better who to do it to show another useful messages to user
        $errormessage   = 'Parse error';
        $pos = strpos($eval_result , $errormessage);

        if ($pos === false OR $params->get('filter_error') == 0) {
			if ($eval_result != ''){
					$jfoxconsoleoutput = $eval_result;
			} else {
					$jfoxconsoleoutput = JTEXT::_('COM_JFOXCONSOLE_NO_RESULT');
			}
        } else {
            $jfoxconsoleoutput = JTEXT::_('COM_JFOXCONSOLE_RUNCODE_HAS_ERROR');
        }


        $result = new stdClass;
        $result->jfoxconsoleoutput = $jfoxconsoleoutput;
        $result->jfoxcode = $jfoxcode;
        $result->cols = $cols;
        $result->rows = $rows;

        return $result;
    }

}
