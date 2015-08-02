<?php
include_once($_SERVER['FILE_PREFIX']."/project_list/project_object.php") ;
$github_uri   = "https://github.com/aidansean/sequences" ;
$blogpost_uri = "http://aidansean.com/projects/?tag=sequences" ;
$project = new project_object("sequences", "Sequences", "https://github.com/aidansean/sequences", "http://aidansean.com/projects/?tag=sequences", "sequences/images/project.jpg", "sequences/images/project_bw.jpg", "This project is intended to be a space to investigate different sequences.", "Maths", "CSS,HTML,JavaScript") ;
?>