<?php
class Sen_Form_LoginDo extends Sen_ActionForm
{
  public $form = array(
      'mailaddress' => [
          'name'          => 'メールアドレス',
          'required'      => true,
           'type'          => VAR_TYPE_STRING,
       ],
      'password' => [
          'name'          => 'パスワード',
          'required'      => true,
          'type'          => VAR_TYPE_STRING,
      ]
    );
}

class Sen_Action_LoginDo extends Sen_ActionClass
{
    public function prepare()
    {
        if ($this->af->validate() > 0) {
              return 'login';
          }
          die($this->af->get('mailaddress'));
    }
}
