<?php if ( in_category('case') ) {
include(TEMPLATEPATH . '/single-case.php');
}else if ( in_category('blog') ) {
  include(TEMPLATEPATH . '/single-blog.php');
}else if ( in_category('meeting-room-reservation-management') ) {
  include(TEMPLATEPATH . '/single-meeting-room-reservation-management.php');
}else if ( in_category('lack-of-meeting-rooms') ) {
  include(TEMPLATEPATH . '/single-lack-of-meeting-rooms.php');
}else if ( in_category('meeting-room-reservation-management') ) {
  include(TEMPLATEPATH . '/single-meeting-room-reservation-management.php');
}else if ( in_category('meeting-efficiency') ) {
  include(TEMPLATEPATH . '/single-meeting-efficiency.php');
}else if ( in_category('meeting-time-management') ) {
  include(TEMPLATEPATH . '/single-meeting-time-management.php');
}else {
include(TEMPLATEPATH . '/single-theme.php');
}
?>