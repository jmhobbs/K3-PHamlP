K3-PHamlP Module
==============

A Ko3 Module by [**John Hobbs**](http://twitter.com/jmhobbs)

THIS IS PRE-RELEASE SOFTWARE, DO NOT USE IN PRODUCTION

Introduction
------------

This module provides access to Haml, Sass and Scss via the [PHamlP library](http://code.google.com/p/phamlp/).

It's pretty incomplete at the moment, but should be pretty rad once it is finished.

Installation
------------

K3-PHamlP setup is easy.

1. Drop the source in your MODPATH folder.
2. Add the module to Kohana::modules in your bootstrap.php
3. (Optional) Copy and edit config/phamlp.php

Usage
-----

Currently only Sass/Scss is working.  To use it, place your SCSS files in DOCROOT . 'public/sass'.  This path can be configured in config/phamlp.php

Then, just request '/sass/[your sass file]' to get the rendered version.

Nesting directories work fine.

