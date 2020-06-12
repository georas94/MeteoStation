<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ca', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Aquest formulari no hauria de contenir camps addicionals.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'L\'arxiu pujat és massa gran. Per favor, pugi un arxiu més petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no és vàlid. Per favor, provi d\'enviar novament el formulari.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ha succeït un error d\'autenticació.',
    'Authentication credentials could not be found.' => 'No s\'han trobat les credencials d\'autenticació.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud d\'autenticació no s\'ha pogut processar per un problema del sistema.',
    'Invalid credentials.' => 'Credencials no vàlides.',
    'Cookie has already been used by someone else.' => 'La cookie ja ha estat utilitzada per una altra persona.',
    'Not privileged to request the resource.' => 'No té privilegis per solicitar el recurs.',
    'Invalid CSRF token.' => 'Token CSRF no vàlid.',
    'No authentication provider found to support the authentication token.' => 'No s\'ha trobat un proveïdor d\'autenticació que suporti el token d\'autenticació.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hi ha sessió disponible, ha expirat o les cookies no estan habilitades.',
    'No token could be found.' => 'No s\'ha trobat cap token.',
    'Username could not be found.' => 'No s\'ha trobat el nom d\'usuari.',
    'Account has expired.' => 'El compte ha expirat.',
    'Credentials have expired.' => 'Les credencials han expirat.',
    'Account is disabled.' => 'El compte està deshabilitat.',
    'Account is locked.' => 'El compte està bloquejat.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
