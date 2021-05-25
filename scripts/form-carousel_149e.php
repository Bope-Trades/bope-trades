<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Contate nos',
    'email_message' => 'Contato',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => 'kingsroleplaybrasil2020@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Nome',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Nome\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Mensagem',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Mensagem\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor();
    $processor->process($form);

    ?>