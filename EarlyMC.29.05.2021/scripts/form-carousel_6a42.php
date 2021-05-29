<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Nouveau Demande d&#39;anti banissement ',
    'email_message' => 'Nouvel demande d&#39;anti-bannissement! ',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'tedd5036@gmail.com',
    'to' => 'jimaginemdr@gmail.com'
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
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
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Alors c&#39;est parce-que',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Alors c&#39;est parce-que\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor();
    $processor->process($form);

    ?>