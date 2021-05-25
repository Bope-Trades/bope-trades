<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Novo formulário',
    'email_message' => 'Formulário da staff!',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => 'kingsroleplaybrasil2020@gmail.com'
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'Endereço de email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Endereço de email\' is required.'
    )
    ),
    'name' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'message-2' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Nome no discord',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Nome no discord\' is required.'
    )
    ),
    'date' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Data de nascimento',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Data de nascimento\' is required.'
    )
    ),
    'message-1' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Porque quer entrar para a staff?',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Porque quer entrar para a staff?\' is required.'
    )
    ),
    'agree' => array(
    'order' => 6,
    'type' => 'checkbox',
    'label' => 'Eu aceito os Termos de Serviço',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Eu aceito os Termos de Serviço\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor();
    $processor->process($form);

    ?>