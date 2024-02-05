<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('km-KH', array (
));

$catalogueKm = new MessageCatalogue('km', array (
));
$catalogue->addFallbackCatalogue($catalogueKm);

return $catalogue;
