<?php

use Mangoweb\Messenger\QuickReply;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


Assert::equal([ 'content_type' => 'text', 'title' => 'foo', 'payload' => '-' ], (QuickReply::text('foo'))->toSchema());

Assert::equal([ 'content_type' => 'text', 'title' => 'foo', 'payload' => 'bar' ], (QuickReply::text('foo', 'bar'))->toSchema());

Assert::equal([ 'content_type' => 'text', 'title' => 'foo', 'payload' => '{"answer":42}' ], (QuickReply::text('foo', [ 'answer' => 42 ]))->toSchema());
