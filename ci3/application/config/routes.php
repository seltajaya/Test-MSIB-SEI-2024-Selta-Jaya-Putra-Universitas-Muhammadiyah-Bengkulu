<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Default controller
$route['default_controller'] = 'maincontroller';

// Routes for Proyek
$route['proyekcontroller'] = 'proyekcontroller/index'; // List all projects
$route['proyekcontroller/create'] = 'proyekcontroller/create'; // Show form to create a new project
$route['proyekcontroller/edit/(:num)'] = 'proyekcontroller/edit/$1'; // Show form to edit a project
$route['proyekcontroller/delete/(:num)'] = 'proyekcontroller/delete/$1'; // Delete a project

// Routes for Lokasi
$route['lokasicontroller'] = 'lokasicontroller/index'; // List all locations
$route['lokasicontroller/create'] = 'lokasicontroller/create'; // Show form to create a new location
$route['lokasicontroller/edit/(:num)'] = 'lokasicontroller/edit/$1'; // Show form to edit a location
$route['lokasicontroller/delete/(:num)'] = 'lokasicontroller/delete/$1'; // Delete a location

// Route for MainController
$route['maincontroller'] = 'maincontroller/index'; // Display all locations and projects

// Custom 404 page
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
