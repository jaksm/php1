<?php

function assets($asset) {
  require_once __DIR__ . $asset;
}

function page($page) {
  require_once __DIR__ . '/pages/' . $page;
}

function component($comp) {
  require_once __DIR__ . '/components/' .$comp;
}
