<?php
class Ssn_View_login extends Ethna_ViewClass
{
    public function preforward()
    {
        $this->af->setApp('now', strftime('%Y/%m/%d'));
    }
}
