<?php
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'smtp.gmail.com';
    $config['smtp_user'] = 'dev.valenzuela02@gmail.com'; // Tu dirección de correo de Gmail
    $config['smtp_pass'] = 'v4l3n3str4d4m'; // Tu contraseña de Gmail
    $config['smtp_port'] = 587; // El puerto SMTP de Gmail para TLS
    $config['smtp_crypto'] = 'tls'; // TLS o SSL según corresponda
    $config['charset'] = 'utf-8';
    $config['mailtype'] = 'html';
    $config['newline'] = "\r\n";
    $config['validate'] = TRUE; // Habilita la validación del correo electrónico
    $config['smtp_timeout'] = 30; // Tiempo de espera para la conexión SMTP en segundos