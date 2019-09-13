<?php
/*
Navbar search form
==================
If you don't want a search form in your navbar, then delete the link to this PHP page from within the navbar in `header.php`.
You can then insert the Search Widget into the sidebar.
*/
?>

<form class="form-inline  my-2 my-lg-0" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input class="form-control mr-sm-2" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
  <button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'b4st') ?>" class="btn btn-outline-secondary my-2 my-sm-0">
    <i class="fa fa-search"></i>
  </button>
</form>

<div class="dropdown">
  <button class="dropbtn">
  	<a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div></a></button>
  <div class="dropdown-content">

	<form class="example" role="search"   method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	  <input type="text" value="<?php echo get_search_query(); ?>" placeholder="Search.." name="s" >
	  <button type="submit" lue="<?php esc_attr_x('Search', 'b4st') ?>" ><i class="fa fa-search"  ></i></button>
	</form>
	
  </div>
</div> 

<style type="text/css">
	.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
* {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>