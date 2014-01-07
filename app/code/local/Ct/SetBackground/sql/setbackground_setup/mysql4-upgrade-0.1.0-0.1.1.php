<?php

$this->startSetup()->run("



ALTER TABLE {$this->getTable('set_background_item')}
	CHANGE `filename` `image` varchar(255) NOT NULL default '',
	CHANGE `url` `link_url` varchar(255) NOT NULL default '',
    ADD COLUMN `image_url` varchar(512) NOT NULL default '' AFTER `image`,
	ADD COLUMN `thumb_image` varchar(255) NOT NULL default '' AFTER `image_url`,
	ADD COLUMN `thumb_image_url` varchar(512) NOT NULL default '' AFTER `thumb_image`;

")->endSetup();
