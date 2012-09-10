<?php
use \PdContact;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mapper
 *
 * @author Rana
 */
class Mapper {
    //put your code here
    function __construct() {
        ;
    }
    
    function formToMessage($input,$contact_form,$contact){
        /**
         * @var PdContact $contact
         */
        if(empty($contact)){
            $contact = new PdContact();
        }
        $contact->setName($input->post($contact_form["name"]["field"]));
        $contact->setEmail($input->post($contact_form["email"]["field"]));
        $contact->setSubject($input->post($contact_form["subject"]["field"]));
        $contact->setMessage($input->post($contact_form["message"]["field"]));
        $contact->setTime(new DateTime());
        return $contact;
    }
   
}

?>
