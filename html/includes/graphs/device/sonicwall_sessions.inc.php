<?php

$rrd_filename = rrd_name($device['hostname'], 'sonicwall_sessions');

$rrd_list[0]['filename'] = $rrd_filename;
$rrd_list[0]['descr']    = 'Maxiumum Sessions';
$rrd_list[0]['ds']       = 'maxsessions';

$rrd_list[1]['filename'] = $rrd_filename;
$rrd_list[1]['descr']    = 'Active Sessions';
$rrd_list[1]['ds']       = 'activesessions';

$colours   = 'mixed';
$nototal   = 1;
$unit_text = 'Sessions';
$scale_min = '0';

require 'includes/graphs/generic_multi_line.inc.php';