<?php
/**
 * @package		JFoxConsole
 * @author		Emerson Rocha Luiz (emerson@webdesign.eng.br)
 * @copyright           Copyright (C) 2005 - 2011 Webdesign Assessoria em Tecnologia da Informação LTDA.
 * @license		GNU General Public License version 2 or later;
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

?>
<?php if ($this->result->jfoxcode): ?>
<fieldset><legend> <?php echo JTEXT::_('COM_JFOXCONSOLE_RESULT'); ?>  </legend>

    <?php echo $this->result->jfoxconsoleoutput; ?>

</fieldset>
<?php else: ?>

    <?php echo JTEXT::_('COM_JFOXCONSOLE_HOW_TO_USE'); ?>

<?php endif; ?>

<form id="joomlafoxcode" name="joomlafoxcode" method="post" enctype="multipart/form-data" action="">
  <textarea name="code" cols="<?php echo $this->result->cols; ?>" rows="<?php echo $this->result->rows; ?>"><?php echo $this->result->jfoxcode; ?></textarea>
  <br />
    <input type="submit" name="Submit" value="Submit" />
    <?php echo JTEXT::_('Rows'); ?>:
    <input name="rows" type="text" value="<?php echo $this->result->rows; ?>" size="3" maxlength="3" />
    <?php echo JTEXT::_('Cols'); ?>:
    <input name="cols" type="text" value="<?php echo $this->result->cols; ?>" size="3" maxlength="3" />

    <a href="index.php?option=com_jfoxconsole&format=raw" target="_blank"><?php echo JTEXT::_('COM_JFOXCONSOLE_OPEN_NEW_WINDOW'); ?></a> | <a href="<?php echo JTEXT::_('COM_JFOXCONSOLE_USAGE_TUTORIAL_URL'); ?>" target="_blank"><?php echo JTEXT::_('COM_JFOXCONSOLE_USAGE_TUTORIAL'); ?></a>
</form>