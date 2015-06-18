(function ($, Drupal, drupalSettings, CKEDITOR) {

  "use strict";

  CKEDITOR.plugins.add( 'dropcap', {
    icons: 'timestamp',
    init: function( editor ) {
        editor.addCommand( 'insertDropCap', {
            exec: function( editor ) {
                var now = new Date();
                editor.insertHtml( 'The current date and time is: <em>' + now.toString() + '</em>' );
            }
        });
        editor.ui.addButton('Drop Cap', {
          label: Drupal.t('DropCap'),
          command: 'insertDropCap',
          icon: this.path + '/dropcap.png'
        });
    }
});


})(jQuery, Drupal, drupalSettings, CKEDITOR);
