CREATE TABLE tt_content (
    tx_cceexport_age tinytext,
    tx_cceexport_comment mediumtext,
    tx_cceexport_fa_icon tinytext,
    tx_cceexport_large_image int(11) DEFAULT '0' NOT NULL,
    tx_cceexport_lat double(11,2) DEFAULT '0.00' NOT NULL,
    tx_cceexport_lng double(11,2) DEFAULT '0.00' NOT NULL,
    tx_cceexport_previous_ownership tinytext,
    tx_cceexport_url_title tinytext,
    tx_cceexport_usplist int(11) unsigned DEFAULT '0' NOT NULL
);
CREATE TABLE tx_cceexport_usplist (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_cceexport_usp tinytext,
    KEY language (l10n_parent,sys_language_uid)
);
