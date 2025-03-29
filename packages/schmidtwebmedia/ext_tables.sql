#
# Add SQL definition of database tables
#
CREATE TABLE pages (
	`tx_schmidtwebmedia_is_highlighted` int(11) NOT NULL DEFAULT '0'
);

CREATE TABLE tx_schmidtwebmedia_domain_model_contact_form (
	uid         	INT					NOT NULL AUTO_INCREMENT,
	pid 			INT(11) 			DEFAULT '0' NOT NULL,
	firstname		VARCHAR(256)		NULL,
	lastname		VARCHAR(256)		NULL,
	birth_date		VARCHAR(256)		NULL,
	location		VARCHAR(256)		NULL,
	email			VARCHAR(256)		NULL,
	requested_driver_licence	VARCHAR(256)		NULL,
	existing_driver_licence		VARCHAR(256)		NULL,
	message			TEXT				NULL,
	tstamp 			INT(11) DEFAULT '0' NOT NULL,
	crdate 			INT(11) DEFAULT '0' NOT NULL,
	PRIMARY KEY (uid)
);

CREATE TABLE tx_schmidtwebmedia_domain_model_online_registration (
	uid         	INT					NOT NULL AUTO_INCREMENT,
	pid 			INT(11) 			DEFAULT '0' NOT NULL,
	name			VARCHAR(512)		NULL,
	birth_name		VARCHAR(256)		NULL,
	birth_date		VARCHAR(256)		NULL,
	birth_location	VARCHAR(256)		NULL,
	nationality		VARCHAR(256)		NULL,
	driver_licence_since	VARCHAR(256)	NULL,
	requested_driver_licence	VARCHAR(256)		NULL,
	street			VARCHAR(256) 		NULL,
	post_code		VARCHAR(8)			NULL,
	location		VARCHAR(256)		NULL,
	email			VARCHAR(256)		NULL,
	phone			VARCHAR(256)		NULL,
	mobile_phone	VARCHAR(256)		NULL,
	accessibility	TEXT				NULL,
	message			TEXT				NULL,
	optical_aid		VARCHAR(8)			NULL,
	tstamp 			INT(11) DEFAULT '0' NOT NULL,
	crdate 			INT(11) DEFAULT '0' NOT NULL,
	PRIMARY KEY (uid)
);
