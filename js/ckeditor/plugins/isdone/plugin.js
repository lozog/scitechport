CKEDITOR.plugins.add( 'isdone',
{
	init: function( editor )
	{
		editor.addCommand( 'isItDone',
			{
				exec : function( editor )
				{    
					editor.insertHtml("<p> I WANT THIS TO CHANGE A MYSQL VARIABLE. </p>");
				}
			});

		editor.ui.addButton( 'Finished',
		{
			label: 'Mark as Done.',
			command: 'isItDone',
			icon: this.path + 'cry_smile.gif'
		} );
	}
} );