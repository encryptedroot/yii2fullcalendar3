yii2fullcalendar
================
JQuery Fullcalendar Yii2 Extension
JQuery from: http://arshaw.com/fullcalendar/
License MIT

JQuery Documentation:
http://arshaw.com/fullcalendar/docs/
Yii2 Extension by <philipp@frenzel.net>

A tiny sample can be found here:
http://yii2fullcalendar.beeye.org

[![Latest Stable Version](https://poser.pugx.org/philippfrenzel/yii2fullcalendar/v/stable.svg)](https://packagist.org/packages/philippfrenzel/yii2fullcalendar)
[![Build Status](https://travis-ci.org/philippfrenzel/yii2fullcalendar.svg?branch=master)](https://travis-ci.org/philippfrenzel/yii2fullcalendar)
[![Code Climate](https://codeclimate.com/github/philippfrenzel/yii2fullcalendar.png)](https://codeclimate.com/github/philippfrenzel/yii2fullcalendar)
[![License](https://poser.pugx.org/philippfrenzel/yii2fullcalendar/license.svg)](https://packagist.org/packages/philippfrenzel/yii2fullcalendar)

All credit goes to Philipp Frenzel who originally put this together.  As versions of FullCalendar have increased, there were dependency issues with older versions.  This repo was a quick and easy way to make sure FullCalendar v3 compatibility can be maintained, by using a packaging all files in one place.  

All code and documentation was originally written here: https://github.com/philippfrenzel/yii2fullcalendar.  Please visit that repo if you are new to FullCalendar so you can get the latest and greatest.

Installation
============
Package is although registered at packagist.org - so you can just add one line of code, to let it run!

add the following line to your composer.json require section:
```json
  "encryptedroot/yii2fullcalendar3":"~1.0",
```

or run:
```
$ php composer.phar require encryptedroot/yii2fullcalendar3 "~1.0"
```

And ensure, that you have the following plugin installed global:

> php composer.phar global require "fxp/composer-asset-plugin:~1.0"
