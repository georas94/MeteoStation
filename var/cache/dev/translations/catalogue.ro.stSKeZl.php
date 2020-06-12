<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ro', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Aceast formular nu ar trebui să conțină câmpuri suplimentare.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Fișierul încărcat a fost prea mare. Vă rugăm sa încărcați un fișier mai mic.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Token-ul CSRF este invalid. Vă rugăm să trimiteți formularul incă o dată.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'A apărut o eroare de autentificare.',
    'Authentication credentials could not be found.' => 'Informațiile de autentificare nu au fost găsite.',
    'Authentication request could not be processed due to a system problem.' => 'Sistemul nu a putut procesa cererea de autentificare din cauza unei erori.',
    'Invalid credentials.' => 'Date de autentificare invalide.',
    'Cookie has already been used by someone else.' => 'Cookieul este folosit deja de altcineva.',
    'Not privileged to request the resource.' => 'Permisiuni insuficiente pentru resursa cerută.',
    'Invalid CSRF token.' => 'Tokenul CSRF este invalid.',
    'No authentication provider found to support the authentication token.' => 'Nu a fost găsit nici un agent de autentificare pentru tokenul specificat.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesiunea nu mai este disponibilă, a expirat sau suportul pentru cookieuri nu este activat.',
    'No token could be found.' => 'Tokenul nu a putut fi găsit.',
    'Username could not be found.' => 'Numele de utilizator nu a fost găsit.',
    'Account has expired.' => 'Contul a expirat.',
    'Credentials have expired.' => 'Datele de autentificare au expirat.',
    'Account is disabled.' => 'Contul este dezactivat.',
    'Account is locked.' => 'Contul este blocat.',
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
