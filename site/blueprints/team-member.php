<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Team Member
pages: false
files: true
fields:
  title: 
    label: Name
    type:  text
  position: 
    label: Position
    type:  text
  bio: 
    label: Biography
    type:  textarea
    size:  large