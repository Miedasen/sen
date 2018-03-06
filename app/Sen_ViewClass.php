<?php
// vim: foldmethod=marker
/**
 *  Sen_ViewClass.php
 *
 *  @author     {$author}
 *  @package    Sen
 */

// {{{ Sen_ViewClass
/**
 *  View class.
 *
 *  @author     {$author}
 *  @package    Sen
 *  @access     public
 */
class Sen_ViewClass extends Ethna_ViewClass
{
    /**#@+
     *  @access protected
     */

    /** @var  string  set layout template file   */
    protected $_layout_file = 'layout';

    /**#@+
     *  @access public
     */

    /** @var boolean  layout template use flag   */
    public $use_layout = true;

    /**
     *  set common default value.
     *
     *  @access protected
     *  @param  object  Sen_Renderer  Renderer object.
     */
    protected function _setDefault($renderer)
    {
    }

}
// }}}

