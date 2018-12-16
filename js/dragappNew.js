// For any third party dependencies, like jQuery, place them in the lib folder.

// Configure loading modules from the lib directory,
// except for 'app' ones, which are in a sibling
// directory.
requirejs.config({
    baseUrl: 'js/app',
    paths: {

        // Editor libraries
        ace: '../../ace/build/src-noconflict/ace',
        emmet: '../../ace/build/src-noconflict/emmet',
        extEmmet: '../../ace/build/src-noconflict/ext-emmet',
        extLanguageTools: '../../ace/build/src-noconflict/ext-language_tools',
        mediumEditor: '../medium-editor',

        // Jquery libraries
        jquery: '../jquery-2.1.1.min',
        jqueryUI: '../jquery-ui',
        jqueryCountdown: '../jquery.countdown.min',
        jqueryUITouchPunch: '../jquery.ui.touch-punch.min',
        jqueryHtmlCleanOld: '../jquery.htmlClean_old',

        // responsive video
        jqueryFitvids: '../jquery.fitvids.min',

        twitterBootstrap: '../bootstrap.min',

        //Color picker
        bootstrapColorpicker: '../bootstrap-colorpicker',
        colorpickerColor: '../colorpicker-color',

        //File Saver
        blob: '../Blob',
        fileSaver: '../FileSaver',

        //Parallax
        stellar: '../stellar',

        eventEmmiter: '../EventEmitter.min',

        detailsMode: './modes/detailsMode'
    },
    shim: {
        "jqueryGradient": ['jqueryDrag', 'jqueryColorPicker'],
        "emmet": ['ace'],
        "extEmmet": ['ace'],
        "twitterBootstrap": ['jquery'],
        'extLanguageTools': ['ace'],
        'jqueryUITouchPunch': ['jquery'],
        'jqueryFitvids': ['jquery'],
        'stellar': ['jquery'],
        'jqueryUI': ['jquery'],
        'jqueryHtmlCleanOld': ['jquery']
    }
});


// Start loading the main app file. Put all of
// your application logic in there.
//requirejs(['main']);
requirejs(['mb']);
