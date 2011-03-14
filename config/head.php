<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// --------------------------------------------------------------------------
// Head Library Configs
// --------------------------------------------------------------------------

/*
|--------------------------------------------------------------------------
| Default configs
|--------------------------------------------------------------------------
|
| These configs can override class variables for the head class. You can find
| These variables listed and commented in the head class file.
|
*/

$config['show_errors'] = TRUE;
$config['meta_author'] = "Adam Fairholm";
$config['meta_description'] = "A test page.";
$config['site_title'] = 'Accommodating Ideas';
$config['jquery_file'] = 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js';


/*
|--------------------------------------------------------------------------
| Default elements
|--------------------------------------------------------------------------
|
| Need some files loaded for every page? Put them here. They will be loaded first.
|
*/

$config['defaults']['css'][] = 'styles.css';
$config['defaults']['js'][] = array('https://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE7.js', 'IE 7');

$config['defaults']['packages'] = array('coda_slider', 'accordian');


/*
|--------------------------------------------------------------------------
| Packages
|--------------------------------------------------------------------------
|
| Packages work like containers for groups of files needed. For example, the coda slider
| needs several Javascipt files, and a css file.
| 
| Packages can contain references to other packages. Each referenced package will be
| recursively loaded when the main package is loaded.
|
*/

// JQUERY
$config['packages']['jquery']['js'][] = $config['jquery_file'];

// CODA_SLIDER
$config['packages']['coda_slider']['packages'][] = 'jquery';
$config['packages']['coda_slider']['css'][] = 'coda-slider.css';
$config['packages']['coda_slider']['js'] = array(
	'jquery.scrollTo.js',
	'jquery.localscroll.js',
	'jquery.serialScroll.js',
	'coda-slider.js'
);

// ACCORDIAN
$config['packages']['accordian']['packages'][] = 'jquery';
$config['packages']['accordian']['css'] ='accordian.css';
$config['packages']['accordian']['js'] = 'accordian.js';



/* End of file head.php */
/* Location: ./application/config/head.php */