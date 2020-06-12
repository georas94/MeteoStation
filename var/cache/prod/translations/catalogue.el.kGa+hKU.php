<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('el', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Αυτή η φόρμα δεν πρέπει να περιέχει επιπλέον πεδία.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Το αρχείο είναι πολύ μεγάλο. Παρακαλούμε προσπαθήστε να ανεβάσετε ένα μικρότερο αρχείο.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Το CSRF token δεν είναι έγκυρο. Παρακαλούμε δοκιμάστε να υποβάλετε τη φόρμα ξανά.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Συνέβη ένα σφάλμα πιστοποίησης.',
    'Authentication credentials could not be found.' => 'Τα στοιχεία πιστοποίησης δε βρέθηκαν.',
    'Authentication request could not be processed due to a system problem.' => 'Το αίτημα πιστοποίησης δε μπορεί να επεξεργαστεί λόγω σφάλματος του συστήματος.',
    'Invalid credentials.' => 'Λανθασμένα στοιχεία σύνδεσης.',
    'Cookie has already been used by someone else.' => 'Το Cookie έχει ήδη χρησιμοποιηθεί από κάποιον άλλο.',
    'Not privileged to request the resource.' => 'Δεν είστε εξουσιοδοτημένος για πρόσβαση στο συγκεκριμένο περιεχόμενο.',
    'Invalid CSRF token.' => 'Μη έγκυρο CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Δε βρέθηκε κάποιος πάροχος πιστοποίησης που να υποστηρίζει το token πιστοποίησης.',
    'No session available, it either timed out or cookies are not enabled.' => 'Δεν υπάρχει ενεργή σύνοδος (session), είτε έχει λήξει ή τα cookies δεν είναι ενεργοποιημένα.',
    'No token could be found.' => 'Δεν ήταν δυνατόν να βρεθεί κάποιο token.',
    'Username could not be found.' => 'Το Username δε βρέθηκε.',
    'Account has expired.' => 'Ο λογαριασμός έχει λήξει.',
    'Credentials have expired.' => 'Τα στοιχεία σύνδεσης έχουν λήξει.',
    'Account is disabled.' => 'Ο λογαριασμός είναι απενεργοποιημένος.',
    'Account is locked.' => 'Ο λογαριασμός είναι κλειδωμένος.',
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
