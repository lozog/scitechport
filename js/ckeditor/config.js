/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license


CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	 config.language = 'fr';
	 config.uiColor = '#AADC6E';
};
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	 config.skin = 'v2';
	//config.toolbar = 'Basic';
	config.removePlugins =  'elementspath,enterkey,entities,forms,pastefromword,htmldataprocessor,specialchar';
	//config.skin = 'office2003';
	config.resize_enabled = false;
	CKEDITOR.config.width ='100%';
	CKEDITOR.config.height='785px';
	CKEDITOR.config.htmlEncodeOutput = false;
	//CKEDITOR.config.extraPlugins = "isdone";
	CKEDITOR.config.toolbar = [
	['NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
	['Image','Table','-','TextColor','BGColor','Source','Finished'],
	'/',
	['Bold','Italic','Underline','StrikeThrough','-','Undo','Redo','-','Find','Replace','-','Outdent','Indent','-','Print','Save'],
	'/',
	['Styles','Format','Font','FontSize']
	
] ;

};