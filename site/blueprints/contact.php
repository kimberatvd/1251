<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Contact
pages: false
files: false
fields:
  title: 
    label: Title
    type:  text
  text: 
    label: Text
    type:  textarea
    size:  large
  address: 
    label: Address
    type:  textarea
    size:  medium
  email: 
    label: Email Line
    type:  text