CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.skin = 'office2003';
	//config.removePlugins =  'elementspath,enterkey,entities,forms,pastefromword,htmldataprocessor,specialchar' ;
	config.removePlugins =  'elementspath,enterkey,entities,forms,pastefromword,htmldataprocessor,specialchar,horizontalrule,wsc' ;
	config.skin = 'v2';
	//config.toolbar = 'Basic';
	config.resize_enabled = false;
	CKEDITOR.config.width ='100%';
	CKEDITOR.config.height='785px';
	CKEDITOR.config.toolbar = [
	['NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
	['Image','Table','-','TextColor','BGColor','Source']
	'/',
	['Styles','Format','Font','FontSize'],
	'/',
	['Bold','Italic','Underline','StrikeThrough','-','Undo','Redo','-','Cut','Copy','Paste','Find','Replace','-','Outdent','Indent','-','Print']
	
] ;

};