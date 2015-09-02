<?php

use App\Entities\Subscriber;

$em = require_once "bootstrap.php";

$subscriber_repo = $em->getRepository(Subscriber::class);

$subscriber = new Subscriber();
$subscriber->setEmail('admin@admin.com')->setName('AAAAAAAAAAAAAAAAAAAAAA')->setPhone('00000000000000');

$em->persist($subscriber);
$em->flush();

$subscribers = $subscriber_repo->findAll();
$subscribers_with_comments = $subscriber_repo->createNamedQuery('comment not null')->getResult();

print_r($subscribers);
print_r($subscribers_with_comments);
die;