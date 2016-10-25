/* global angular */

'use strict';

/* Controllers
* Put all the controllers you will use here
*/
var careControllers = angular.module('careControllers', 
	[
	 'mainController', 
	 'patientController', 
	 'metadataController', 
	 'authController', 
	 'userController'
	]
);

