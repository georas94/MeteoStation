<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sr_Latn', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Ovaj formular ne treba da sadrži dodatna polja.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Otpremljena datoteka je bila prevelika. Molim pokušajte otpremanje manje datoteke.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF vrednost je nevalidna. Pokušajte ponovo.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Izuzetak pri autentifikaciji.',
    'Authentication credentials could not be found.' => 'Autentifikacioni podaci nisu pronađeni.',
    'Authentication request could not be processed due to a system problem.' => 'Zahtev za autentifikaciju ne može biti obrađen zbog sistemskih problema.',
    'Invalid credentials.' => 'Nevalidni podaci za autentifikaciju.',
    'Cookie has already been used by someone else.' => 'Kolačić je već iskorišćen od strane nekog drugog.',
    'Not privileged to request the resource.' => 'Nemate prava pristupa ovom resursu.',
    'Invalid CSRF token.' => 'Nevalidan CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Autentifikacioni provajder za podršku tokena nije pronađen.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija nije dostupna, istekla je ili su kolačići isključeni.',
    'No token could be found.' => 'Token ne može biti pronađen.',
    'Username could not be found.' => 'Korisničko ime ne može biti pronađeno.',
    'Account has expired.' => 'Nalog je istekao.',
    'Credentials have expired.' => 'Podaci za autentifikaciju su istekli.',
    'Account is disabled.' => 'Nalog je onemogućen.',
    'Account is locked.' => 'Nalog je zaključan.',
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
