<?php
// vim: foldmethod=marker
/**
 *  Sen_ActionClass.php
 *
 *  @author     {$author}
 *  @package    Sen
 */

// {{{ Sen_ActionClass
/**
 *  action execution class
 *
 *  @author     {$author}
 *  @package    Sen
 *  @access     public
 */
class Sen_ActionClass extends Ethna_ActionClass
{
    /**
     *  authenticate before executing action.
     *
     *  @access public
     *  @return string  Forward name.
     *                  (null if no errors. false if we have something wrong.)
     */
    public function authenticate()
    {
        return parent::authenticate();
    }

    /**
     *  Preparation for executing action. (Form input check, etc.)
     *
     *  @access public
     *  @return string  Forward name.
     *                  (null if no errors. false if we have something wrong.)
     */
    public function prepare()
    {
        return parent::prepare();
    }

    /**
     *  execute action.
     *
     *  @access public
     *  @return string  Forward name.
     *                  (we does not forward if returns null.)
     */
    public function perform()
    {
        return parent::perform();
    }
}
// }}}
