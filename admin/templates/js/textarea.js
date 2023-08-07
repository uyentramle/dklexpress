<!-- Initiate WYIWYG text area -->

    $(function()
    {
    $('#wysiwyg').wysiwyg(
    {
    controls : {
    separator01 : { visible : true },
    separator03 : { visible : true },
    separator04 : { visible : true },
    separator00 : { visible : true },
    separator07 : { visible : false },
    separator02 : { visible : false },
    separator08 : { visible : false },
    insertOrderedList : { visible : true },
    insertUnorderedList : { visible : true },
    undo: { visible : true },
    redo: { visible : true },
    justifyLeft: { visible : true },
    justifyCenter: { visible : true },
    justifyRight: { visible : true },
    justifyFull: { visible : true },
    subscript: { visible : true },
    superscript: { visible : true },
    underline: { visible : true },
    increaseFontSize : { visible : false },
    decreaseFontSize : { visible : false }
    }
    } );
    });

<!-- Initiate tablesorter script -->

<!-- Initiate password strength script -->
	$(function() {
    $('.password').pstrength();
    });