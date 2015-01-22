<?php

$xml = Xml::fromArray(array('response' => $user));
echo $xml->asXML();