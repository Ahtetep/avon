$(function () {
    $('.carousel').carousel({
        interval: 10000
    })
    var options = {
        responsive:false,

        autoFit:true,

        padding:10,
        pdfAutoCreatePages: true,
        pdfDisableRangeRequests: false,
        pdfBookSizeFromDocument: false,
        preloadNeighbours: true,
        pageStart: 1, // The number of the page to show first, after the book init
        zoom:1,
        autoHeight: true,
        bookmarks: [
            {text:'Profile List', link:'', folded: false, bookmarks:[
                    {text:'Avirtum', link:'http://avirtum.com', target:'blank'},
                    {text:'Twitter', link:'https://twitter.com/avirtumcom', target:'blank'},
                ]},
            {text:'The first page', link:'1'},
            {text:'The last page', link:'-1'}
        ],


        bookEnginePortrait: null, // Sets the book render mode for the portrait type of the book container
        toolbarControls: [
            {type:'share',        active:false,  title:'share',                    icon:'ipgs-icon-share',        optional:false},
            {type:'outline',      active:false,  title:'toggle outline/bookmarks', icon:'ipgs-icon-outline',      optional:false},
            {type:'thumbnails',   active:true,  title:'toggle thumbnails',        icon:'ipgs-icon-thumbnails',   optional:false},
            {type:'gotofirst',    active:true,  title:'goto first page',          icon:'ipgs-icon-gotofirst',    optional:false},
            {type:'prev',         active:true,  title:'prev page',                icon:'ipgs-icon-prev',         optional:false},
            {type:'pagenumber',   active:true,  title:'goto page number',         icon:'ipgs-icon-pagenumber',   optional:false},
            {type:'next',         active:true,  title:'next page',                icon:'ipgs-icon-next',         optional:false},
            {type:'gotolast',     active:true,  title:'goto last page',           icon:'ipgs-icon-gotolast',     optional:false},
            {type:'zoom-in',      active:true,  title:'zoom in',                  icon:'ipgs-icon-zoom-in',      optional:false},
            {type:'zoom-out',     active:true,  title:'zoom out',                 icon:'ipgs-icon-zoom-out',     optional:false},
            {type:'zoom-default', active:true,  title:'zoom default',             icon:'ipgs-icon-zoom-default', optional:true},
            {type:'optional',     active:true,  title:'optional',                 icon:'ipgs-icon-optional',     optional:false},
            {type:'fullscreen',   active:true,  title:'toggle fullscreen',        icon:'ipgs-icon-fullscreen',   optional:true},
            {type:'sound',        active:false,  title:'turn on/off flip sound',   icon:'ipgs-icon-sound',        optional:true},
            {type:'download',     active:false, title:'download pdf',             icon:'ipgs-icon-download',     optional:true},
        ],

        twoPageFlip: {},
        onePageFlip: {},
        onePageSwipe: {
            pageFade: true
        },

        onLoad: null, // function(){} fire after the plugin was loaded

        txtFailedEngine: 'Can not find the book engine module specified',
        txtPDFLoading: 'Loading PDF document',
        txtPDFFailedToLoad: 'Failed to load PDF document',
        txtShareDlgTitle: 'Share'
    };

    var options404 = {
        pages: [
            { type:'image', image:'/images/question.png' },
        ],
        toolbar: false
    };

    $('#flipbook').ipages(options);
    $('#flipbook.not-found').ipages(options404);

    $(this).on('click', '.catalog', function(e){
        e.preventDefault();
        var pdfUrl = $(this).find('.catalog-title').data('pdf-src');
        $('#flipbook').remove();
        if (pdfUrl) {
            document.querySelector('.flipbook').insertAdjacentHTML(
                'afterbegin',
                `<div id="flipbook" class="ipgs-flipbook"
                     data-pdf-src="`+ pdfUrl +`"></div>`
            )
        } else {
            document.querySelector('.flipbook').insertAdjacentHTML(
                'afterbegin',
                `<div id="flipbook" class="not-found"></div>`
            )
        }

        $('#flipbook').ipages(options);
    });

    $(this).on('click', '.no-js-handle', function(e){
        e.preventDefault();
    });
})