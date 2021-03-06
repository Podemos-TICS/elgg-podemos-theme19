<?php
/**
 * Elgg Groups css
 *
 * @package groups
 */

?>

.groups-profile{
	margin-left:0px;
	background-color:#272727;
	margin-right:10px;
	box-shadow: 0px 0px 5px 2px #111 inset;
}

.groups-profile > .elgg-image {
	margin-left: 10px
	margin-right: 10px;
}
.groups-stats {
	margin-top: 10px;
}
.groups-stats p {
	margin-bottom: 2px;
}
.groups-profile-fields div:first-child {
	padding-top: 0;
}

.groups-profile-fields .odd,
.groups-profile-fields .even {
	border-bottom: 1px solid #DCDCDC;
	padding: 5px 0;
	margin-bottom: 0;
}

.groups-profile-fields .elgg-output {
	margin: 0;
}

#groups-tools > li{
	min-height: 200px;
	margin-bottom: 40px;
	margin-right:10px;
	background-color:#272727;
}

#groups-tools .elgg-head{
	background-color:#019875;
}

#groups-tools .elgg-head h3{
	color: #fff; /*antes #603761;*/
}

#groups-tools > li, #groups-tools .elgg-head{
	border-radius:5px 5px 0px 0px;
}

/*#groups-tools > li:nth-child(odd) {
	margin-right: 4%;
}*/

.groups-widget-viewall {
	float: right;
	font-size: 85%;
}

.groups-latest-reply {
	float: right;
}

.elgg-menu-groups-my-status li a {
	color: #444;
	display: block;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 0;
}
.elgg-menu-groups-my-status li a:hover {
	color: #999;
}
.elgg-menu-groups-my-status li.elgg-state-selected > a {
	color: #999;
}
