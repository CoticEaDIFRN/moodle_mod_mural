<?php
require_once('../config.php');
require_once($CFG->dirroot.'/course/lib.php');
require_once($CFG->dirroot.'/calendar/lib.php');

$PAGE->set_pagelayout('mydashboard');
$PAGE->set_pagetype('my-index');
$PAGE->blocks->add_region('content');
$PAGE->set_subpage($currentpage->id);
$PAGE->set_title("Mural");
$PAGE->set_heading("Mural do Campus EaD");


echo $OUTPUT->header();
echo "<h2>Notícias</h2>Anúncio do novo tema.";

//$data = [];
//echo $OUTPUT->render_from_template('secretaria/aviso', $data);
echo $OUTPUT->footer();
