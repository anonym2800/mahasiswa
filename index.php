<!DOCTYPE html>
<!-- saved from url=(0048)https://paiza.io/projects/nSaj_j1vaq-UZMYrjClDhw -->
<html lang="en" ng-app="CodeApp" ng-class="{embed: embed, spa: spa}" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#" class="ng-scope spa" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style id="ace-twilight">.ace-twilight .ace_gutter {background: #232323;color: #E2E2E2}.ace-twilight .ace_print-margin {width: 1px;background: #232323}.ace-twilight {background-color: #141414;color: #F8F8F8}.ace-twilight .ace_cursor {color: #A7A7A7}.ace-twilight .ace_marker-layer .ace_selection {background: rgba(221, 240, 255, 0.20)}.ace-twilight.ace_multiselect .ace_selection.ace_start {box-shadow: 0 0 3px 0px #141414;}.ace-twilight .ace_marker-layer .ace_step {background: rgb(102, 82, 0)}.ace-twilight .ace_marker-layer .ace_bracket {margin: -1px 0 0 -1px;border: 1px solid rgba(255, 255, 255, 0.25)}.ace-twilight .ace_marker-layer .ace_active-line {background: rgba(255, 255, 255, 0.031)}.ace-twilight .ace_gutter-active-line {background-color: rgba(255, 255, 255, 0.031)}.ace-twilight .ace_marker-layer .ace_selected-word {border: 1px solid rgba(221, 240, 255, 0.20)}.ace-twilight .ace_invisible {color: rgba(255, 255, 255, 0.25)}.ace-twilight .ace_keyword,.ace-twilight .ace_meta {color: #CDA869}.ace-twilight .ace_constant,.ace-twilight .ace_constant.ace_character,.ace-twilight .ace_constant.ace_character.ace_escape,.ace-twilight .ace_constant.ace_other,.ace-twilight .ace_heading,.ace-twilight .ace_markup.ace_heading,.ace-twilight .ace_support.ace_constant {color: #CF6A4C}.ace-twilight .ace_invalid.ace_illegal {color: #F8F8F8;background-color: rgba(86, 45, 86, 0.75)}.ace-twilight .ace_invalid.ace_deprecated {text-decoration: underline;font-style: italic;color: #D2A8A1}.ace-twilight .ace_support {color: #9B859D}.ace-twilight .ace_fold {background-color: #AC885B;border-color: #F8F8F8}.ace-twilight .ace_support.ace_function {color: #DAD085}.ace-twilight .ace_list,.ace-twilight .ace_markup.ace_list,.ace-twilight .ace_storage {color: #F9EE98}.ace-twilight .ace_entity.ace_name.ace_function,.ace-twilight .ace_meta.ace_tag,.ace-twilight .ace_variable {color: #AC885B}.ace-twilight .ace_string {color: #8F9D6A}.ace-twilight .ace_string.ace_regexp {color: #E9C062}.ace-twilight .ace_comment {font-style: italic;color: #5F5A60}.ace-twilight .ace_variable {color: #7587A6}.ace-twilight .ace_xml-pe {color: #494949}.ace-twilight .ace_indent-guide {background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAEklEQVQImWMQERFpYLC1tf0PAAgOAnPnhxyiAAAAAElFTkSuQmCC) right repeat-y}
/*# sourceURL=ace/css/ace-twilight */</style><style type="text/css">[uib-typeahead-popup].dropdown-menu{display:block;}</style><style type="text/css">.uib-time input{width:50px;}</style><style type="text/css">[uib-tooltip-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-bottom > .tooltip-arrow,[uib-popover-popup].popover.top-left > .arrow,[uib-popover-popup].popover.top-right > .arrow,[uib-popover-popup].popover.bottom-left > .arrow,[uib-popover-popup].popover.bottom-right > .arrow,[uib-popover-popup].popover.left-top > .arrow,[uib-popover-popup].popover.left-bottom > .arrow,[uib-popover-popup].popover.right-top > .arrow,[uib-popover-popup].popover.right-bottom > .arrow,[uib-popover-html-popup].popover.top-left > .arrow,[uib-popover-html-popup].popover.top-right > .arrow,[uib-popover-html-popup].popover.bottom-left > .arrow,[uib-popover-html-popup].popover.bottom-right > .arrow,[uib-popover-html-popup].popover.left-top > .arrow,[uib-popover-html-popup].popover.left-bottom > .arrow,[uib-popover-html-popup].popover.right-top > .arrow,[uib-popover-html-popup].popover.right-bottom > .arrow,[uib-popover-template-popup].popover.top-left > .arrow,[uib-popover-template-popup].popover.top-right > .arrow,[uib-popover-template-popup].popover.bottom-left > .arrow,[uib-popover-template-popup].popover.bottom-right > .arrow,[uib-popover-template-popup].popover.left-top > .arrow,[uib-popover-template-popup].popover.left-bottom > .arrow,[uib-popover-template-popup].popover.right-top > .arrow,[uib-popover-template-popup].popover.right-bottom > .arrow{top:auto;bottom:auto;left:auto;right:auto;margin:0;}[uib-popover-popup].popover,[uib-popover-html-popup].popover,[uib-popover-template-popup].popover{display:block !important;}</style><style type="text/css">.uib-datepicker-popup.dropdown-menu{display:block;float:none;margin:0;}.uib-button-bar{padding:10px 9px 2px;}</style><style type="text/css">.uib-position-measure{display:block !important;visibility:hidden !important;position:absolute !important;top:-9999px !important;left:-9999px !important;}.uib-position-scrollbar-measure{position:absolute !important;top:-9999px !important;width:50px !important;height:50px !important;overflow:scroll !important;}.uib-position-body-scrollbar-measure{overflow:scroll !important;}</style><style type="text/css">.uib-datepicker .uib-title{width:100%;}.uib-day button,.uib-month button,.uib-year button{min-width:100%;}.uib-left,.uib-right{width:100%}</style><style type="text/css">.ng-animate.item:not(.left):not(.right){-webkit-transition:0s ease-in-out left;transition:0s ease-in-out left}</style><style id="autocompletion.css">.ace_editor.ace_autocomplete .ace_marker-layer .ace_active-line {    background-color: #CAD6FA;    z-index: 1;}.ace_dark.ace_editor.ace_autocomplete .ace_marker-layer .ace_active-line {    background-color: #3a674e;}.ace_editor.ace_autocomplete .ace_line-hover {    border: 1px solid #abbffe;    margin-top: -1px;    background: rgba(233,233,253,0.4);    position: absolute;    z-index: 2;}.ace_dark.ace_editor.ace_autocomplete .ace_line-hover {    border: 1px solid rgba(109, 150, 13, 0.8);    background: rgba(58, 103, 78, 0.62);}.ace_completion-meta {    opacity: 0.5;    margin: 0.9em;}.ace_completion-message {    color: blue;}.ace_editor.ace_autocomplete .ace_completion-highlight{    color: #2d69c7;}.ace_dark.ace_editor.ace_autocomplete .ace_completion-highlight{    color: #93ca12;}.ace_editor.ace_autocomplete {    width: 300px;    z-index: 200000;    border: 1px lightgray solid;    position: fixed;    box-shadow: 2px 3px 5px rgba(0,0,0,.2);    line-height: 1.4;    background: #fefefe;    color: #111;}.ace_dark.ace_editor.ace_autocomplete {    border: 1px #484747 solid;    box-shadow: 2px 3px 5px rgba(0, 0, 0, 0.51);    line-height: 1.4;    background: #25282c;    color: #c1c1c1;}
/*# sourceURL=ace/css/autocompletion.css */</style><style>.ace_snippet-marker {    -moz-box-sizing: border-box;    box-sizing: border-box;    background: rgba(194, 193, 208, 0.09);    border: 1px dotted rgba(211, 208, 235, 0.62);    position: absolute;}</style><style>    .error_widget_wrapper {        background: inherit;        color: inherit;        border:none    }    .error_widget {        border-top: solid 2px;        border-bottom: solid 2px;        margin: 5px 0;        padding: 10px 40px;        white-space: pre-wrap;    }    .error_widget.ace_error, .error_widget_arrow.ace_error{        border-color: #ff5a5a    }    .error_widget.ace_warning, .error_widget_arrow.ace_warning{        border-color: #F1D817    }    .error_widget.ace_info, .error_widget_arrow.ace_info{        border-color: #5a5a5a    }    .error_widget.ace_ok, .error_widget_arrow.ace_ok{        border-color: #5aaa5a    }    .error_widget_arrow {        position: absolute;        border: solid 5px;        border-top-color: transparent!important;        border-right-color: transparent!important;        border-left-color: transparent!important;        top: -5px;    }</style><style id="ace-tm">.ace-tm .ace_gutter {background: #f0f0f0;color: #333;}.ace-tm .ace_print-margin {width: 1px;background: #e8e8e8;}.ace-tm .ace_fold {background-color: #6B72E6;}.ace-tm {background-color: #FFFFFF;color: black;}.ace-tm .ace_cursor {color: black;}.ace-tm .ace_invisible {color: rgb(191, 191, 191);}.ace-tm .ace_storage,.ace-tm .ace_keyword {color: blue;}.ace-tm .ace_constant {color: rgb(197, 6, 11);}.ace-tm .ace_constant.ace_buildin {color: rgb(88, 72, 246);}.ace-tm .ace_constant.ace_language {color: rgb(88, 92, 246);}.ace-tm .ace_constant.ace_library {color: rgb(6, 150, 14);}.ace-tm .ace_invalid {background-color: rgba(255, 0, 0, 0.1);color: red;}.ace-tm .ace_support.ace_function {color: rgb(60, 76, 114);}.ace-tm .ace_support.ace_constant {color: rgb(6, 150, 14);}.ace-tm .ace_support.ace_type,.ace-tm .ace_support.ace_class {color: rgb(109, 121, 222);}.ace-tm .ace_keyword.ace_operator {color: rgb(104, 118, 135);}.ace-tm .ace_string {color: rgb(3, 106, 7);}.ace-tm .ace_comment {color: rgb(76, 136, 107);}.ace-tm .ace_comment.ace_doc {color: rgb(0, 102, 255);}.ace-tm .ace_comment.ace_doc.ace_tag {color: rgb(128, 159, 191);}.ace-tm .ace_constant.ace_numeric {color: rgb(0, 0, 205);}.ace-tm .ace_variable {color: rgb(49, 132, 149);}.ace-tm .ace_xml-pe {color: rgb(104, 104, 91);}.ace-tm .ace_entity.ace_name.ace_function {color: #0000A2;}.ace-tm .ace_heading {color: rgb(12, 7, 255);}.ace-tm .ace_list {color:rgb(185, 6, 144);}.ace-tm .ace_meta.ace_tag {color:rgb(0, 22, 142);}.ace-tm .ace_string.ace_regex {color: rgb(255, 0, 0)}.ace-tm .ace_marker-layer .ace_selection {background: rgb(181, 213, 255);}.ace-tm.ace_multiselect .ace_selection.ace_start {box-shadow: 0 0 3px 0px white;}.ace-tm .ace_marker-layer .ace_step {background: rgb(252, 255, 0);}.ace-tm .ace_marker-layer .ace_stack {background: rgb(164, 229, 101);}.ace-tm .ace_marker-layer .ace_bracket {margin: -1px 0 0 -1px;border: 1px solid rgb(192, 192, 192);}.ace-tm .ace_marker-layer .ace_active-line {background: rgba(0, 0, 0, 0.07);}.ace-tm .ace_gutter-active-line {background-color : #dcdcdc;}.ace-tm .ace_marker-layer .ace_selected-word {background: rgb(250, 250, 255);border: 1px solid rgb(200, 200, 250);}.ace-tm .ace_indent-guide {background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAE0lEQVQImWP4////f4bLly//BwAmVgd1/w11/gAAAABJRU5ErkJggg==") right repeat-y;}
/*# sourceURL=ace/css/ace-tm */</style><style id="ace_editor.css">.ace_br1 {border-top-left-radius    : 3px;}.ace_br2 {border-top-right-radius   : 3px;}.ace_br3 {border-top-left-radius    : 3px; border-top-right-radius:    3px;}.ace_br4 {border-bottom-right-radius: 3px;}.ace_br5 {border-top-left-radius    : 3px; border-bottom-right-radius: 3px;}.ace_br6 {border-top-right-radius   : 3px; border-bottom-right-radius: 3px;}.ace_br7 {border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-right-radius: 3px;}.ace_br8 {border-bottom-left-radius : 3px;}.ace_br9 {border-top-left-radius    : 3px; border-bottom-left-radius:  3px;}.ace_br10{border-top-right-radius   : 3px; border-bottom-left-radius:  3px;}.ace_br11{border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-left-radius:  3px;}.ace_br12{border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br13{border-top-left-radius    : 3px; border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br14{border-top-right-radius   : 3px; border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br15{border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;}.ace_editor {position: relative;overflow: hidden;padding: 0;font: 12px/normal 'Monaco', 'Menlo', 'Ubuntu Mono', 'Consolas', 'source-code-pro', monospace;direction: ltr;text-align: left;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);}.ace_scroller {position: absolute;overflow: hidden;top: 0;bottom: 0;background-color: inherit;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;cursor: text;}.ace_content {position: absolute;box-sizing: border-box;min-width: 100%;contain: style size layout;font-variant-ligatures: no-common-ligatures;}.ace_dragging .ace_scroller:before{position: absolute;top: 0;left: 0;right: 0;bottom: 0;content: '';background: rgba(250, 250, 250, 0.01);z-index: 1000;}.ace_dragging.ace_dark .ace_scroller:before{background: rgba(0, 0, 0, 0.01);}.ace_selecting, .ace_selecting * {cursor: text !important;}.ace_gutter {position: absolute;overflow : hidden;width: auto;top: 0;bottom: 0;left: 0;cursor: default;z-index: 4;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;contain: style size layout;}.ace_gutter-active-line {position: absolute;left: 0;right: 0;}.ace_scroller.ace_scroll-left {box-shadow: 17px 0 16px -16px rgba(0, 0, 0, 0.4) inset;}.ace_gutter-cell {position: absolute;top: 0;left: 0;right: 0;padding-left: 19px;padding-right: 6px;background-repeat: no-repeat;}.ace_gutter-cell.ace_error {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAABOFBMVEX/////////QRswFAb/Ui4wFAYwFAYwFAaWGAfDRymzOSH/PxswFAb/SiUwFAYwFAbUPRvjQiDllog5HhHdRybsTi3/Tyv9Tir+Syj/UC3////XurebMBIwFAb/RSHbPx/gUzfdwL3kzMivKBAwFAbbvbnhPx66NhowFAYwFAaZJg8wFAaxKBDZurf/RB6mMxb/SCMwFAYwFAbxQB3+RB4wFAb/Qhy4Oh+4QifbNRcwFAYwFAYwFAb/QRzdNhgwFAYwFAbav7v/Uy7oaE68MBK5LxLewr/r2NXewLswFAaxJw4wFAbkPRy2PyYwFAaxKhLm1tMwFAazPiQwFAaUGAb/QBrfOx3bvrv/VC/maE4wFAbRPBq6MRO8Qynew8Dp2tjfwb0wFAbx6eju5+by6uns4uH9/f36+vr/GkHjAAAAYnRSTlMAGt+64rnWu/bo8eAA4InH3+DwoN7j4eLi4xP99Nfg4+b+/u9B/eDs1MD1mO7+4PHg2MXa347g7vDizMLN4eG+Pv7i5evs/v79yu7S3/DV7/498Yv24eH+4ufQ3Ozu/v7+y13sRqwAAADLSURBVHjaZc/XDsFgGIBhtDrshlitmk2IrbHFqL2pvXf/+78DPokj7+Fz9qpU/9UXJIlhmPaTaQ6QPaz0mm+5gwkgovcV6GZzd5JtCQwgsxoHOvJO15kleRLAnMgHFIESUEPmawB9ngmelTtipwwfASilxOLyiV5UVUyVAfbG0cCPHig+GBkzAENHS0AstVF6bacZIOzgLmxsHbt2OecNgJC83JERmePUYq8ARGkJx6XtFsdddBQgZE2nPR6CICZhawjA4Fb/chv+399kfR+MMMDGOQAAAABJRU5ErkJggg==");background-repeat: no-repeat;background-position: 2px center;}.ace_gutter-cell.ace_warning {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAmVBMVEX///8AAAD///8AAAAAAABPSzb/5sAAAAB/blH/73z/ulkAAAAAAAD85pkAAAAAAAACAgP/vGz/rkDerGbGrV7/pkQICAf////e0IsAAAD/oED/qTvhrnUAAAD/yHD/njcAAADuv2r/nz//oTj/p064oGf/zHAAAAA9Nir/tFIAAAD/tlTiuWf/tkIAAACynXEAAAAAAAAtIRW7zBpBAAAAM3RSTlMAABR1m7RXO8Ln31Z36zT+neXe5OzooRDfn+TZ4p3h2hTf4t3k3ucyrN1K5+Xaks52Sfs9CXgrAAAAjklEQVR42o3PbQ+CIBQFYEwboPhSYgoYunIqqLn6/z8uYdH8Vmdnu9vz4WwXgN/xTPRD2+sgOcZjsge/whXZgUaYYvT8QnuJaUrjrHUQreGczuEafQCO/SJTufTbroWsPgsllVhq3wJEk2jUSzX3CUEDJC84707djRc5MTAQxoLgupWRwW6UB5fS++NV8AbOZgnsC7BpEAAAAABJRU5ErkJggg==");background-position: 2px center;}.ace_gutter-cell.ace_info {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAJ0Uk5TAAB2k804AAAAPklEQVQY02NgIB68QuO3tiLznjAwpKTgNyDbMegwisCHZUETUZV0ZqOquBpXj2rtnpSJT1AEnnRmL2OgGgAAIKkRQap2htgAAAAASUVORK5CYII=");background-position: 2px center;}.ace_dark .ace_gutter-cell.ace_info {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAAJFBMVEUAAAChoaGAgIAqKiq+vr6tra1ZWVmUlJSbm5s8PDxubm56enrdgzg3AAAAAXRSTlMAQObYZgAAAClJREFUeNpjYMAPdsMYHegyJZFQBlsUlMFVCWUYKkAZMxZAGdxlDMQBAG+TBP4B6RyJAAAAAElFTkSuQmCC");}.ace_scrollbar {contain: strict;position: absolute;right: 0;bottom: 0;z-index: 6;}.ace_scrollbar-inner {position: absolute;cursor: text;left: 0;top: 0;}.ace_scrollbar-v{overflow-x: hidden;overflow-y: scroll;top: 0;}.ace_scrollbar-h {overflow-x: scroll;overflow-y: hidden;left: 0;}.ace_print-margin {position: absolute;height: 100%;}.ace_text-input {position: absolute;z-index: 0;width: 0.5em;height: 1em;opacity: 0;background: transparent;-moz-appearance: none;appearance: none;border: none;resize: none;outline: none;overflow: hidden;font: inherit;padding: 0 1px;margin: 0 -1px;contain: strict;-ms-user-select: text;-moz-user-select: text;-webkit-user-select: text;user-select: text;white-space: pre!important;}.ace_text-input.ace_composition {background: transparent;color: inherit;z-index: 1000;opacity: 1;}.ace_composition_placeholder { color: transparent }.ace_composition_marker { border-bottom: 1px solid;position: absolute;border-radius: 0;margin-top: 1px;}[ace_nocontext=true] {transform: none!important;filter: none!important;clip-path: none!important;mask : none!important;contain: none!important;perspective: none!important;mix-blend-mode: initial!important;z-index: auto;}.ace_layer {z-index: 1;position: absolute;overflow: hidden;word-wrap: normal;white-space: pre;height: 100%;width: 100%;box-sizing: border-box;pointer-events: none;}.ace_gutter-layer {position: relative;width: auto;text-align: right;pointer-events: auto;height: 1000000px;contain: style size layout;}.ace_text-layer {font: inherit !important;position: absolute;height: 1000000px;width: 1000000px;contain: style size layout;}.ace_text-layer > .ace_line, .ace_text-layer > .ace_line_group {contain: style size layout;position: absolute;top: 0;left: 0;right: 0;}.ace_hidpi .ace_text-layer,.ace_hidpi .ace_gutter-layer,.ace_hidpi .ace_content,.ace_hidpi .ace_gutter {contain: strict;will-change: transform;}.ace_hidpi .ace_text-layer > .ace_line, .ace_hidpi .ace_text-layer > .ace_line_group {contain: strict;}.ace_cjk {display: inline-block;text-align: center;}.ace_cursor-layer {z-index: 4;}.ace_cursor {z-index: 4;position: absolute;box-sizing: border-box;border-left: 2px solid;transform: translatez(0);}.ace_multiselect .ace_cursor {border-left-width: 1px;}.ace_slim-cursors .ace_cursor {border-left-width: 1px;}.ace_overwrite-cursors .ace_cursor {border-left-width: 0;border-bottom: 1px solid;}.ace_hidden-cursors .ace_cursor {opacity: 0.2;}.ace_hasPlaceholder .ace_hidden-cursors .ace_cursor {opacity: 0;}.ace_smooth-blinking .ace_cursor {transition: opacity 0.18s;}.ace_animate-blinking .ace_cursor {animation-duration: 1000ms;animation-timing-function: step-end;animation-name: blink-ace-animate;animation-iteration-count: infinite;}.ace_animate-blinking.ace_smooth-blinking .ace_cursor {animation-duration: 1000ms;animation-timing-function: ease-in-out;animation-name: blink-ace-animate-smooth;}@keyframes blink-ace-animate {from, to { opacity: 1; }60% { opacity: 0; }}@keyframes blink-ace-animate-smooth {from, to { opacity: 1; }45% { opacity: 1; }60% { opacity: 0; }85% { opacity: 0; }}.ace_marker-layer .ace_step, .ace_marker-layer .ace_stack {position: absolute;z-index: 3;}.ace_marker-layer .ace_selection {position: absolute;z-index: 5;}.ace_marker-layer .ace_bracket {position: absolute;z-index: 6;}.ace_marker-layer .ace_error_bracket {position: absolute;border-bottom: 1px solid #DE5555;border-radius: 0;}.ace_marker-layer .ace_active-line {position: absolute;z-index: 2;}.ace_marker-layer .ace_selected-word {position: absolute;z-index: 4;box-sizing: border-box;}.ace_line .ace_fold {box-sizing: border-box;display: inline-block;height: 11px;margin-top: -2px;vertical-align: middle;background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAJCAYAAADU6McMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJpJREFUeNpi/P//PwOlgAXGYGRklAVSokD8GmjwY1wasKljQpYACtpCFeADcHVQfQyMQAwzwAZI3wJKvCLkfKBaMSClBlR7BOQikCFGQEErIH0VqkabiGCAqwUadAzZJRxQr/0gwiXIal8zQQPnNVTgJ1TdawL0T5gBIP1MUJNhBv2HKoQHHjqNrA4WO4zY0glyNKLT2KIfIMAAQsdgGiXvgnYAAAAASUVORK5CYII="),url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA3CAYAAADNNiA5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACJJREFUeNpi+P//fxgTAwPDBxDxD078RSX+YeEyDFMCIMAAI3INmXiwf2YAAAAASUVORK5CYII=");background-repeat: no-repeat, repeat-x;background-position: center center, top left;color: transparent;border: 1px solid black;border-radius: 2px;cursor: pointer;pointer-events: auto;}.ace_dark .ace_fold {}.ace_fold:hover{background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAJCAYAAADU6McMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJpJREFUeNpi/P//PwOlgAXGYGRklAVSokD8GmjwY1wasKljQpYACtpCFeADcHVQfQyMQAwzwAZI3wJKvCLkfKBaMSClBlR7BOQikCFGQEErIH0VqkabiGCAqwUadAzZJRxQr/0gwiXIal8zQQPnNVTgJ1TdawL0T5gBIP1MUJNhBv2HKoQHHjqNrA4WO4zY0glyNKLT2KIfIMAAQsdgGiXvgnYAAAAASUVORK5CYII="),url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA3CAYAAADNNiA5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACBJREFUeNpi+P//fz4TAwPDZxDxD5X4i5fLMEwJgAADAEPVDbjNw87ZAAAAAElFTkSuQmCC");}.ace_tooltip {background-color: #FFF;background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.1));border: 1px solid gray;border-radius: 1px;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);color: black;max-width: 100%;padding: 3px 4px;position: fixed;z-index: 999999;box-sizing: border-box;cursor: default;white-space: pre;word-wrap: break-word;line-height: normal;font-style: normal;font-weight: normal;letter-spacing: normal;pointer-events: none;}.ace_folding-enabled > .ace_gutter-cell {padding-right: 13px;}.ace_fold-widget {box-sizing: border-box;margin: 0 -12px 0 1px;display: none;width: 11px;vertical-align: top;background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAANElEQVR42mWKsQ0AMAzC8ixLlrzQjzmBiEjp0A6WwBCSPgKAXoLkqSot7nN3yMwR7pZ32NzpKkVoDBUxKAAAAABJRU5ErkJggg==");background-repeat: no-repeat;background-position: center;border-radius: 3px;border: 1px solid transparent;cursor: pointer;}.ace_folding-enabled .ace_fold-widget {display: inline-block;   }.ace_fold-widget.ace_end {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAANElEQVR42m3HwQkAMAhD0YzsRchFKI7sAikeWkrxwScEB0nh5e7KTPWimZki4tYfVbX+MNl4pyZXejUO1QAAAABJRU5ErkJggg==");}.ace_fold-widget.ace_closed {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAGCAYAAAAG5SQMAAAAOUlEQVR42jXKwQkAMAgDwKwqKD4EwQ26sSOkVWjgIIHAzPiCgaqiqnJHZnKICBERHN194O5b9vbLuAVRL+l0YWnZAAAAAElFTkSuQmCCXA==");}.ace_fold-widget:hover {border: 1px solid rgba(0, 0, 0, 0.3);background-color: rgba(255, 255, 255, 0.2);box-shadow: 0 1px 1px rgba(255, 255, 255, 0.7);}.ace_fold-widget:active {border: 1px solid rgba(0, 0, 0, 0.4);background-color: rgba(0, 0, 0, 0.05);box-shadow: 0 1px 1px rgba(255, 255, 255, 0.8);}.ace_dark .ace_fold-widget {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAHklEQVQIW2P4//8/AzoGEQ7oGCaLLAhWiSwB146BAQCSTPYocqT0AAAAAElFTkSuQmCC");}.ace_dark .ace_fold-widget.ace_end {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAH0lEQVQIW2P4//8/AxQ7wNjIAjDMgC4AxjCVKBirIAAF0kz2rlhxpAAAAABJRU5ErkJggg==");}.ace_dark .ace_fold-widget.ace_closed {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAFCAYAAACAcVaiAAAAHElEQVQIW2P4//+/AxAzgDADlOOAznHAKgPWAwARji8UIDTfQQAAAABJRU5ErkJggg==");}.ace_dark .ace_fold-widget:hover {box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2);background-color: rgba(255, 255, 255, 0.1);}.ace_dark .ace_fold-widget:active {box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2);}.ace_inline_button {border: 1px solid lightgray;display: inline-block;margin: -1px 8px;padding: 0 5px;pointer-events: auto;cursor: pointer;}.ace_inline_button:hover {border-color: gray;background: rgba(200,200,200,0.2);display: inline-block;pointer-events: auto;}.ace_fold-widget.ace_invalid {background-color: #FFB4B4;border-color: #DE5555;}.ace_fade-fold-widgets .ace_fold-widget {transition: opacity 0.4s ease 0.05s;opacity: 0;}.ace_fade-fold-widgets:hover .ace_fold-widget {transition: opacity 0.05s ease 0.05s;opacity:1;}.ace_underline {text-decoration: underline;}.ace_bold {font-weight: bold;}.ace_nobold .ace_bold {font-weight: normal;}.ace_italic {font-style: italic;}.ace_error-marker {background-color: rgba(255, 0, 0,0.2);position: absolute;z-index: 9;}.ace_highlight-marker {background-color: rgba(255, 255, 0,0.2);position: absolute;z-index: 8;}.ace_mobile-menu {position: absolute;line-height: 1.5;border-radius: 4px;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;background: white;box-shadow: 1px 3px 2px grey;border: 1px solid #dcdcdc;color: black;}.ace_dark > .ace_mobile-menu {background: #333;color: #ccc;box-shadow: 1px 3px 2px grey;border: 1px solid #444;}.ace_mobile-button {padding: 2px;cursor: pointer;overflow: hidden;}.ace_mobile-button:hover {background-color: #eee;opacity:1;}.ace_mobile-button:active {background-color: #ddd;}.ace_placeholder {font-family: arial;transform: scale(0.9);transform-origin: left;white-space: pre;opacity: 0.7;margin: 0 10px;}
/*# sourceURL=ace/css/ace_editor.css */</style><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
<!--<base href="/">--><base href=".">

<meta content="IE=Edge,chrome=1" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta content="UOKWL9FDreUe8Z9juyL7NBjLaTNPluL1n3Zw7n9HLLI" name="google-site-verification">
<meta content="Online editor and compiler" property="og:title">
<meta content="website" property="og:type">
<meta content="Paiza.IO is online editor and compiler. Java, Ruby, Python, PHP, Perl, Swift, JavaScript... You can use for learning programming, scraping web sites, or writing batch" property="og:description">
<meta content="https://paiza.IO/" property="og:url">
<meta content="https://paiza.io/assets/movie_title-aed88df2f448c0d69598876d1262bdc0.png" property="og:image">
<meta content="!" name="fragment">
<link rel="shortcut icon" type="image/x-icon" href="https://paiza.io/images/favicon.ico">
<title ng-bind-template="(PHP) | Online editor and compiler" class="ng-binding">(PHP) | Online editor and compiler</title>
<meta content="Paiza.IO is online editor and compiler. Java, Ruby, Python, PHP, Perl, Swift, JavaScript... You can use for learning programming, scraping web sites, or writing batch" name="description">
<meta name="csrf-param" content="authenticity_token">
<meta name="csrf-token" content="VCuezyVyqjNQ3Hq12xWa9n8agMChqeH59EqlS+TSbTspJgca4uZH9yEBObJ6goFeEu7Z5UcSToWDWcfdK3DbrA==">
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script>
<![endif]-->
<!-- = stylesheet_link_tag "http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" -->
<!-- = stylesheet_link_tag "http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" -->
<link rel="stylesheet" media="all" href="./index_files/application-2e315767a18ba97e672d40372b4d1a68.css">
<link rel="apple-touch-icon-precomposed" type="image/png" href="https://paiza.io/images/apple-touch-icon-144x144-precomposed.png" sizes="144x144">
<link rel="apple-touch-icon-precomposed" type="image/png" href="https://paiza.io/images/apple-touch-icon-114x114-precomposed.png" sizes="114x114">
<link rel="apple-touch-icon-precomposed" type="image/png" href="https://paiza.io/images/apple-touch-icon-72x72-precomposed.png" sizes="72x72">
<link rel="apple-touch-icon-precomposed" type="image/png" href="https://paiza.io/images/apple-touch-icon-precomposed.png">
<link rel="shortcut icon" type="image/x-icon" href="https://paiza.io/images/favicon.ico">
<!-- Load jQuery before AngularJS to use jQuery with AngularJS -->
<script src="./index_files/sdk.js.download" async="" crossorigin="anonymous"></script><script type="text/javascript" async="" id="inspsync" src="./index_files/inspectlet.js.download"></script><script id="twitter-wjs" src="./index_files/widgets.js.download"></script><script async="" src="./index_files/analytics.js.download"></script><script id="facebook-jssdk" src="./index_files/sdk.js(1).download"></script><script type="text/javascript" async="" src="./index_files/heap-1680397002.js.download"></script><script type="text/javascript" async="" src="./index_files/mixpanel-2-latest.min.js.download"></script><script async="" charset="utf-8" src="./index_files/saved_resource" type="text/javascript"></script><script src="./index_files/jquery-ccdc624a8843d58f3ce83ba0e8835749.js.download"></script>
<!-- AngularJS modules -->
<script src="./index_files/angular.js.download"></script>
<script src="./index_files/angular-messages.js.download"></script>
<script src="./index_files/angular-cookies.js.download"></script>
<script src="./index_files/angular-resource.js.download"></script>
<script src="./index_files/angular-route.js.download"></script>
<script src="./index_files/angular-animate.js.download"></script>
<script src="./index_files/angular-sanitize.js.download"></script>
<script src="./index_files/angular-touch.js.download"></script>
<script src="./index_files/angular-locale_en-us.js.download"></script>
<script src="./index_files/en-us-309108e8d2ae20c9fdbd311f4a2ccf6e.js.download"></script>
<script src="./index_files/ng-infinite-scroll-9ffd426b56bb40f60dc9951c822d5da8.js.download"></script>
<script src="./index_files/angularLocalStorage-2cf1e31d1faff838bc8f6a1e8a2459b0.js.download"></script>
<script src="./index_files/angular-ui-utils.min.js.download"></script>
<link rel="stylesheet" media="screen" href="./index_files/owl.carousel.css">
<link rel="stylesheet" media="screen" href="./index_files/owl.theme.css">
<script src="./index_files/owl.carousel.js.download"></script>
<!-- = javascript_include_tag "http://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.js" -->
<!-- = javascript_include_tag "ui-bootstrap-tpls-0.11.0.js" -->
<script src="./index_files/ui-bootstrap-tpls-2.3.2-91ab855c94f9822c74bca4b1c19e3189.js.download"></script>
<!-- = javascript_include_tag "//cdnjs.cloudflare.com/ajax/libs/ace/1.1.3/ace.js" -->
<!-- = javascript_include_tag "//cdn.jsdelivr.net/ace/1.1.6/min/ace.js" -->
<!-- = javascript_include_tag "//cdn.jsdelivr.net/ace/1.1.6/min/ext-language_tools.js" -->
<!-- = javascript_include_tag "/js/ace-20151029/ace.js" -->
<!-- = javascript_include_tag "/js/ace-20151029/ext-language_tools.js" -->
<!-- = javascript_include_tag "/js/ace-20160316/ace.js" -->
<!-- = javascript_include_tag "/js/ace-20160316/ext-language_tools.js" -->
<script src="./index_files/ace.js.download"></script>
<script src="./index_files/ext-language_tools.js.download"></script>
<script src="./index_files/ui-ace.js.download"></script>
<link rel="stylesheet" media="screen" href="./index_files/split-pane-42c9dd90cdb2c30bf18755cd8aab23c7.css">
<script src="./index_files/split-pane-332265058e7a5f1bb0cb15f0575b850a.js.download"></script>
<script src="./index_files/angular-split-pane-36c664f8ca5bf12036da29286b5719a6.js.download"></script>
<script src="./index_files/jquery.terminal-0.8.8-4299c960f5c0ba516a5cfd0593c507aa.js.download"></script>
<link rel="stylesheet" media="screen" href="./index_files/jquery.terminal-b6d4b11f642b9f283b1b62d02a78a23e.css">
<script src="./index_files/loading-bar-189b0aad32706ebd8aed712c6479cd80.js.download"></script>
<link rel="stylesheet" media="screen" href="./index_files/loading-bar-3ac2926aed75deea6f717c371faf7dc5.css">
<!-- = stylesheet_link_tag "http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" -->
<!-- = javascript_include_tag "http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" -->
<!-- = javascript_include_tag "http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" -->
<!-- = javascript_include_tag "//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5417a9d527daa381" -->
<script src="./index_files/application-ca1690fdaf8115a85ff256bfbc4b44a2.js.download"></script>
<script src="./index_files/togetherjs-min.js.download"></script>
<!-- = javascript_include_tag "/js/togetherjs.js" -->
<script src="./index_files/sweet-alert.min.js.download"></script>
<link rel="stylesheet" media="screen" href="./index_files/sweet-alert.css">
<script src="./index_files/moment-with-locales.js.download"></script>
<script src="./index_files/angular-busy-776baa9339f927aafb3f375b8af31ea2.js.download"></script>
<link rel="stylesheet" media="screen" href="./index_files/angular-busy-cea25a4fc49b4568a474e2c0e91eb9b5.css">


<link href="https://paiza.io/en/languages/online-php-editor" rel="canonical">
<link href="https://paiza.io/en/projects/new" hreflang="en" rel="alternate">
<link href="https://paiza.io/ja/projects/new" hreflang="ja" rel="alternate">
<link href="https://paiza.io/es/projects/new" hreflang="es" rel="alternate">
<link href="https://paiza.io/projects/new" hreflang="x-default" rel="alternate">
<script>
  window.current_user = null
  if(window.current_user){
    window.current_user.providers = null
    window.current_user.policy = null
  }
  console.log("current_user=", current_user)
  window.app_locale = "en-us"
  window.app_locale_short = "en"
</script>
<script>
  window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
  d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
  _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
  $.src="//v2.zopim.com/?2yZ9OOc1wcz7iOrjG11V1OWGAM1aPwh7";z.t=+new Date;$.
  type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
  
  $zopim(function() {
    $zopim.livechat.setLanguage(window.app_locale.substr(0,2));
    if(current_user){
      $zopim.livechat.setName(current_user.username);
      $zopim.livechat.setEmail(current_user.email);
    }
  });
</script>
<script>
  // hotjar (https://www.hotjar.com)
  // <!-- Hotjar Tracking Code for http://paiza.io/ -->
  (function(h,o,t,j,a,r){
  h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
  h._hjSettings={hjid:273669,hjsv:5};
  a=o.getElementsByTagName('head')[0];
  r=o.createElement('script');r.async=1;
  r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
  a.appendChild(r);
  })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script><script async="" src="./index_files/hotjar-273669.js.download"></script>
<script>
  // Inspectlet (https://www.inspectlet.com)
  // <!-- Begin Inspectlet Embed Code -->
  window.__insp = window.__insp || [];
  __insp.push(['wid', 27194362]);
  (function() {
  function ldinsp(){if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
  setTimeout(ldinsp, 500); document.readyState != "complete" ? (window.attachEvent ? window.attachEvent('onload', ldinsp) : window.addEventListener('load', ldinsp, false)) : ldinsp();
  })();
  // <!-- End Inspectlet Embed Code -->
</script>
<script>
  // mouseflow (https://mouseflow.com)
  var _mfq = _mfq || [];
    (function() {
      var mf = document.createElement("script");
      mf.type = "text/javascript"; mf.async = true;
      mf.src = "//cdn.mouseflow.com/projects/b2f6be73-5f2c-4f81-bd4b-15b190d646fa.js";
      document.getElementsByTagName("head")[0].appendChild(mf);
    })();
</script><script type="text/javascript" async="" src="./index_files/b2f6be73-5f2c-4f81-bd4b-15b190d646fa.js.download"></script>
<script>
  // Mixpanel (https://mixpanel.com/)
  // <!-- start Mixpanel --><script type="text/javascript">
  (function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
  
  for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
  
  mixpanel.init("f56fede95c3a912e614e8c4e8ec6ec2b");
</script>
<script>
  // HEAP (https://heapanalytics.com/)
  window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var r=t.forceSSL||"https:"===document.location.protocol,a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=(r?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+e+".js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["addEventProperties","addUserProperties","clearEventProperties","identify","removeEventProperty","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
  heap.load("1680397002");
</script>
<script>
  window._mNHandle = window._mNHandle || {};
  window._mNHandle.queue = window._mNHandle.queue || [];
  medianet_versionId = "3121199";
</script>
<script async="async" src="./index_files/dmedianet.js.download"></script>
<meta data-csrf="vWDC9ii9yz7oTtoW4gmecCwTFKfzpjGlByND6XoVq8fAbVsj7ykm+pmTmRFDnoXYQedNghUdntlwMCF/tbcdUA==" id="csrf" ng-controller="CsrfCtrl" class="ng-scope">
<style>
  .ng-cloak { display: none !important; }
</style>
<script src="./index_files/mode-php.js.download"></script><script src="./index_files/theme-twilight.js.download"></script><script src="./index_files/php.js.download"></script><script type="text/javascript" src="./index_files/w"></script><style media="print" class="jx_ui_StyleSheet" __jx__id="___$_2" type="text/css">.zopim { display: none !important }</style><script charset="utf-8" src="https://platform.twitter.com/js/button.e878ad6ba18f0bdda53d6861059b0edd.js"></script></head>
<body class="spa" ng-class="{embed: embed, spa: spa}" style=""><div class="zopim" __jx__id="___$_72 ___$_72" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; padding: 0px; border: 0px; background: transparent; overflow: hidden; position: fixed; z-index: 16000002; width: 180px; height: 30px; right: 10px; bottom: 0px;" data-test-id="ChatWidgetButton"><iframe frameborder="0" style="background-color: transparent; vertical-align: text-bottom; position: relative; width: 100%; height: 100%; min-width: 100%; min-height: 100%; max-width: 100%; max-height: 100%; margin: 0px; overflow: hidden; display: block;" src="./index_files/saved_resource.html" data-test-id="ChatWidgetButton-iframe" title="Zendesk Chat widget button"></iframe></div><div class="zopim" __jx__id="___$_4 ___$_4" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; padding: 0px; border: 0px; background: transparent; overflow: hidden; position: fixed; z-index: 16000001; right: 10px; bottom: 0px; border-top-left-radius: 5px; border-top-right-radius: 5px; display: none; width: 290px; height: 400px; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 3px 2px;" data-test-id="ChatWidgetWindow"><iframe frameborder="0" style="background-color: transparent; vertical-align: text-bottom; position: relative; width: 100%; height: 100%; min-width: 100%; min-height: 100%; max-width: 100%; max-height: 100%; margin: 0px; overflow: hidden; display: block;" src="./index_files/saved_resource(1).html" data-test-id="ChatWidgetWindow-iframe" title="Zendesk Chat widget window"></iframe></div>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJQKTWM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="fb-root"></div>
<script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=632950816819414&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<div class="navbar navbar-default navbar-static-top spa" ng-class="{spa: spa}" ng-hide="embed" style="">
<div class="ribbon">
<a href="https://paiza.io/#">
Beta
</a>
</div>
<div class="container">
<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" ng-href="/en/languages/php" style="display: block; padding: 0 15px;" href="https://paiza.io/en/languages/php">
<span style="display: inline-block; height: 100%; vertical-align:middle;"></span>
<!-- ngIf: !(languageId&&app_locale=='en-us') -->
<!-- ngIf: languageId&&app_locale=='en-us' --><span ng-if="languageId&amp;&amp;app_locale==&#39;en-us&#39;" class="ng-binding ng-scope" style="">
<img alt="paiza.IO" height="16" src="./index_files/paizaio_logo_s-9bd1bf73a17e2002f96a6337f2fb71f9.png" style="vertical-align:middle; padding:0; display: inline-block;" width="66">
Online PHP Editor
</span><!-- end ngIf: languageId&&app_locale=='en-us' -->
</a>
<div class="navbar-collapse collapse navbar-responsive-collapse">
<ul class="nav navbar-nav ng-scope" ng-controller="NavController">
<li ng-class="{active: isActive(&#39;/projects/new&#39;)}">
<!-- ngIf: languageId --><a ng-href="/en/projects/new?language=php" ng-if="languageId" class="ng-scope" href="https://paiza.io/en/projects/new?language=php" style="">
<!-- ngIf: app_locale != "en-us" -->
<!-- ngIf: app_locale == "en-us" --><b ng-if="app_locale == &quot;en-us&quot;" class="ng-binding ng-scope">
New
code
</b><!-- end ngIf: app_locale == "en-us" -->
</a><!-- end ngIf: languageId -->
<!-- ngIf: !languageId -->
</li>
<!-- ngIf: app_locale == "en-us" --><li ng-class="{active: isActive(&#39;/projects&#39;)}" ng-if="app_locale == &quot;en-us&quot;" class="ng-scope">
<!-- ngIf: languageId --><a ng-href="/projects?language=php" ng-if="languageId" class="ng-binding ng-scope" href="https://paiza.io/projects?language=php" style="">
Recent
code
</a><!-- end ngIf: languageId -->
<!-- ngIf: !languageId -->
</li><!-- end ngIf: app_locale == "en-us" -->
<!-- ngIf: app_locale != "en-us" -->
<li>
<a href="https://paiza.cloud/" target="_blank" class="ng-binding">
WebDev
</a>
</li>
<li>
<!-- ngIf: app_locale == "ja-jp" -->
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li>
<span class="dropdown" on-toggle="toggled(open)">
<p class="navbar-text">
<a class="navbar-link dropdown-toggle">
English
<span class="caret"></span>
</a>
</p>
<ul class="dropdown-menu">
<li>
<a onclick="javascript:location.href = location.href.split(/[?]/)[0] + &#39;?locale=&#39; + &#39;en-us&#39;" target="_top">
English
</a>
</li>
<li>
<a onclick="javascript:location.href = location.href.split(/[?]/)[0] + &#39;?locale=&#39; + &#39;ja-jp&#39;" target="_top">
日本語
</a>
</li>
<li>
<a onclick="javascript:location.href = location.href.split(/[?]/)[0] + &#39;?locale=&#39; + &#39;es-es&#39;" target="_top">
Spanish
</a>
</li>
</ul>
</span>
</li>
<li>
<button class="btn btn-primary navbar-btn" data-target="#signUpModal" data-toggle="modal" style="{vertical-align:center;}">Sign Up</button>
</li>
<li class="divider-vertical"></li>
<li style="vertical-align:middle;">
<button class="btn btn-primary navbar-btn" data-target="#signInModal" data-toggle="modal" style="vertical-align:middle;">Sign In</button>
</li>
<li>
<span class="dropdown" on-toggle="toggled(open)">
<p class="navbar-text">
<a class="navbar-link dropdown-toggle">
<i class="glyphicon-question-sign glyphicon"></i>
</a>
</p>
<ul class="dropdown-menu">
<li>
<a href="https://paiza.io/help">
Help
</a>
<a href="https://paiza.io/feedback/index">
Feedback/Contact
</a>
</li>
</ul>
</span>
</li>
</ul>
</div>
</div>
</div>
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="signUpModal" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
<span class="sr-only">Close</span>
</button>
<h4 class="modal-title" id="myModalLabel">
Sign Up
</h4>
</div>
<div class="modal-body">
<a class="btn btn-lg btn-primary" href="https://paiza.io/users/auth/github" target="_self">
<img height="32" src="./index_files/Octocat-31ccba2be37bc3c9586160d86657907a.png" width="32">
GitHub
Sign In
</a>
<hr>
<a class="btn btn-sm btn-primary" href="https://paiza.io/users/auth/facebook" target="_self">
<img height="16" src="./index_files/FB-f-Logo__blue_512-d4621313ed8f7821fb23cf46553ad3df.png" width="16">
Facebook
Sign In
</a>
<a class="btn btn-sm btn-primary" href="https://paiza.io/users/auth/google_oauth2" target="_self">
<img height="16" src="./index_files/btn_google_light_normal_ios@3x-4960eaf9552bee055293ce4b9abec781.png" width="16">
Google
Sign In
</a>
<hr>
<form name="signup_form" class="new_user ng-pristine ng-invalid ng-invalid-required ng-valid-minlength ng-valid-email ng-valid-validator" id="new_user" action="https://paiza.io/users" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="VCuezyVyqjNQ3Hq12xWa9n8agMChqeH59EqlS+TSbTspJgca4uZH9yEBObJ6goFeEu7Z5UcSToWDWcfdK3DbrA==">
<div class="control-group mb5">
<label class="control-label" for="user_username">Username</label>
<div class="controls">
<input autofocus="autofocus" class="text_area ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength" required="required" minlength="3" ng-model="username" type="text" name="user[username]" id="user_username">
<span class="text-danger ng-active" ng-messages="signup_form[&#39;user[username]&#39;].$error">
<!-- ngMessage: required --><span ng-message="required" class="ng-scope">Required</span>
<!-- ngMessage: minlength -->
</span>
<span class="text-success ng-hide" ng-show="signup_form[&#39;user[username]&#39;].$valid">OK</span>
</div>
</div>
<div class="control-group mb5">
<label class="control-label" for="user_email">E-mail</label>
<div class="controls">
<input class="text_area ng-pristine ng-untouched ng-empty ng-valid-email ng-invalid ng-invalid-required" ng-model="email" required="required" type="email" value="" name="user[email]" id="user_email">
<span class="text-danger ng-active" ng-messages="signup_form[&#39;user[email]&#39;].$error">
<!-- ngMessage: required --><span ng-message="required" class="ng-scope">Required</span>
<!-- ngMessage: email -->
</span>
<span class="text-success ng-hide" ng-show="signup_form[&#39;user[email]&#39;].$valid">OK</span>
</div>
</div>
<div class="control-group mb5">
<label class="control-label" for="user_password">Password</label>
<div class="controls">
<input autocomplete="off" class="text_area ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength" ng-model="password" minlength="8" required="required" type="password" name="user[password]" id="user_password">
<span class="text-danger ng-active" ng-messages="signup_form[&#39;user[password]&#39;].$error">
<!-- ngMessage: required --><span ng-message="required" class="ng-scope">Required</span>
<!-- ngMessage: minlength -->
</span>
<span class="text-success ng-hide" ng-show="signup_form[&#39;user[password]&#39;].$valid">OK</span>
</div>
</div>
<div class="mb15">
<label for="user_password_confirmation">Password confirmation</label>
<br>
<input autocomplete="off" ng-model="password_confirmation" minlength="8" required="required" ui-validate="&#39;$value==password&#39;" ui-validate-watch="&#39;password&#39;" type="password" name="user[password_confirmation]" id="user_password_confirmation" class="ng-pristine ng-untouched ng-valid-validator ng-empty ng-invalid ng-invalid-required ng-valid-minlength">
<span class="text-danger ng-active" ng-messages="signup_form[&#39;user[password_confirmation]&#39;].$error">
<!-- ngMessage: required --><span ng-message="required" class="ng-scope">Required</span>
<!-- ngMessage: validator -->
</span>
<span class="text-success ng-hide" ng-show="signup_form[&#39;user[password_confirmation]&#39;].$valid">OK</span>
</div>
<div><input type="submit" name="commit" value="Sign Up" class="btn btn-primary" ng-disabled="signup_form.$invalid" disabled="disabled"></div>
</form><a target="_blank" href="https://paiza.io/users/password/new">Forgot your password?</a>
<br>
<a target="_blank" href="https://paiza.io/users/confirmation/new">Didn't receive confirmation instructions?</a>
<br>

<hr>
<div style="font-size: x-small">

</div>


</div>
</div>
</div>
</div>
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="signInModal" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">×</span>
<span class="sr-only">Close</span>
</button>
<h4 class="modal-title" id="myModalLabel">
Sign In
</h4>
</div>
<div class="modal-body">
<a class="btn btn-lg btn-primary" href="https://paiza.io/users/auth/github" target="_self">
<img height="32" src="./index_files/Octocat-31ccba2be37bc3c9586160d86657907a.png" width="32">
GitHub
Sign In
</a>
<hr>
<a class="btn btn-sm btn-primary" href="https://paiza.io/users/auth/facebook" target="_self">
<img height="16" src="./index_files/FB-f-Logo__blue_512-d4621313ed8f7821fb23cf46553ad3df.png" width="16">
Facebook
Sign In
</a>
<a class="btn btn-sm btn-primary" href="https://paiza.io/users/auth/google_oauth2" target="_self">
<img height="16" src="./index_files/btn_google_light_normal_ios@3x-4960eaf9552bee055293ce4b9abec781.png" width="16">
Google
Sign In
</a>
<hr>
<form name="signin_form" class="new_user ng-pristine ng-valid-email ng-invalid ng-invalid-required ng-valid-minlength" id="new_user" action="https://paiza.io/users/sign_in" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="VCuezyVyqjNQ3Hq12xWa9n8agMChqeH59EqlS+TSbTspJgca4uZH9yEBObJ6goFeEu7Z5UcSToWDWcfdK3DbrA=="><div class="control-group">
<label class="control-label" for="user_email">E-mail</label>
<div class="controls">
<input autofocus="autofocus" class="text_area ng-pristine ng-untouched ng-empty ng-valid-email ng-invalid ng-invalid-required" ng-model="email" required="required" type="email" value="" name="user[email]" id="user_email">
<span class="text-danger" ng-show="signin_form[&#39;user[email]&#39;].$error.required">Required</span>
<span class="text-danger ng-hide" ng-show="signin_form[&#39;user[email]&#39;].$error.email">Invalid E-Mail address</span>
<span class="text-success ng-hide" ng-show="signin_form[&#39;user[email]&#39;].$valid">OK</span>
</div>
</div>
<div class="control-group">
<label class="control-label" for="user_password">Password</label>
<div class="controls">
<input autocomplete="off" class="text_area ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength" minlength="8" required="required" ng-model="password" type="password" name="user[password]" id="user_password">
<span class="text-danger" ng-show="signin_form[&#39;user[password]&#39;].$error.required">Required</span>
<span class="text-danger ng-hide" ng-show="signin_form[&#39;user[password]&#39;].$error.minlength">Too short(less than 8 characters)</span>
<span class="text-success ng-hide" ng-show="signin_form[&#39;user[password]&#39;].$valid">OK</span>
</div>
</div>
<div>
<input name="user[remember_me]" type="hidden" value="0"><input type="checkbox" value="1" name="user[remember_me]" id="user_remember_me">
<label for="user_remember_me">Remember me</label>
</div>
<div><input type="submit" name="commit" value="Sign In" class="btn btn-primary"></div>
</form><a target="_blank" href="https://paiza.io/users/password/new">Forgot your password?</a>
<br>
<a target="_blank" href="https://paiza.io/users/confirmation/new">Didn't receive confirmation instructions?</a>
<br>

<hr>
<div style="font-size: x-small">

</div>


</div>
</div>
</div>
</div>

<!-- ngView: --><div autoscroll="" class="main ng-scope spa" ng-class="{spa: spa}" ng-view="" style=""><div class="ng-scope">
<div style="display: flex; flex-direction: row;width:100%;height:100%;position:absolute;">
<div style="flex: 1 1 auto;height: 100%;position:relative;">
<div class="split-pane-parent">
<div class="split-pane fixed-top" style="min-height: 5px;">
<div class="split-pane-component aceframe" dropzone="" id="top-component" style="height: 156px;">
<div class="aceframe-header">
<table width="100%">
<tbody><tr>
<td width="150px">
<div class="btn-group dropdown" is-open="language_dropdown_is_open" ng-mouseenter="language_dropdown_is_open=true" ng-mouseleave="language_dropdown_is_open=false" uib-dropdown="">
<button class="btn btn-success dropdown-toggle ng-binding" style="border-bottom-right-radius: 0;border-top-right-radius: 0;" type="button" uib-dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
PHP
</button>
<button class="btn btn-success dropdown-toggle language-dropdown-toggle-arrow" uib-dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
<span class="caret"></span>
<span class="sr-only">
Split Button!
</span>
</button>
<div class="dropdown-menu" role="menu" style="min-width:300px; top: 50%; width: 100vw;max-width:700px;" uib-dropdown-menu="">
<!-- ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;bash&#39;">
Bash
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;c&#39;">
C
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;csharp&#39;">
C#
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;cpp&#39;">
C++
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;clojure&#39;">
Clojure
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;cobol&#39;">
Cobol
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;coffeescript&#39;">
CoffeeScript
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;d&#39;">
D
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;elixir&#39;">
Elixir
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;erlang&#39;">
Erlang
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;fsharp&#39;">
F#
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;go&#39;">
Go
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;haskell&#39;">
Haskell
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;java&#39;">
Java
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;javascript&#39;">
JavaScript
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;kotlin&#39;">
Kotlin
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;mysql&#39;">
MySQL
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;nadesiko&#39;">
Nadesiko
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;objective-c&#39;">
Objective-C
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;perl&#39;">
Perl
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty active" ng-model="project.language" uib-btn-radio="&#39;php&#39;">
PHP
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;python&#39;">
Python2
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;python3&#39;">
Python3
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;r&#39;">
R
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;ruby&#39;">
Ruby
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;rust&#39;">
Rust
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;scala&#39;">
Scala
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;scheme&#39;">
Scheme
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;swift&#39;">
Swift
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;typescript&#39;">
TypeScript
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' --><span ng-repeat="language in languages | orderBy:&#39;label&#39;" style="position: relative;display: inline-block;" class="ng-scope">
<button class="btn-sm btn-success rotatebtn ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="project.language" uib-btn-radio="&#39;vb&#39;">
VB
</button>
</span><!-- end ngRepeat: language in languages | orderBy:'label' -->
<div>
<br>
<div>
Ruby on Rails, Node.js, MySQL, Java(Tomcat, JSP), PHP(LAMP), Django, Jupyter Notebook, etc.
</div>
<a href="https://paiza.cloud/" style="color: green;" target="_blank">
<!-- ngIf: app_locale == "ja-jp" -->
<!-- ngIf: app_locale != "ja-jp" --><div ng-if="app_locale != &quot;ja-jp&quot;" class="ng-scope">
For web development, additional package, root, database, terminal... Visit PaizaCloud Cloud IDE!
</div><!-- end ngIf: app_locale != "ja-jp" -->
<div>
<img height="50" src="./index_files/paizacloud_logo_icontext.png">
</div>
</a>
</div>
</div>
</div>
</td>
<td>
<input class="form-control input-sm ng-pristine ng-untouched ng-valid ng-empty" ng-model="ctrl.project.title" placeholder="Enter a title here" style="width: 95%;" type="text">
</td>
</tr>
</tbody></table>
<div class="ng-isolate-scope">
  <ul class="nav nav-tabs" ng-class="{&#39;nav-stacked&#39;: vertical, &#39;nav-justified&#39;: justified}" ng-transclude="">
<!-- ngRepeat: source_file in project.source_files --><li ng-class="[{active: active, disabled: disabled}, classes]" class="uib-tab nav-item ng-scope ng-isolate-scope active" active="source_file.active" ng-repeat="source_file in project.source_files" select="ctrl.project.source_file_pos=$index">
  <a href="https://paiza.io/" ng-click="select($event)" class="nav-link ng-binding" uib-tab-heading-transclude=""><uib-tab-heading class="ng-scope">
<span ng-dblclick="renaming=true" ng-show="!renaming" class="ng-binding">
Main.php
</span>
<span ng-show="renaming" class="ng-hide">
<input id="source_file_filename_0" ng-blur="renaming=false" ng-keyup="renaming_keyup(this, $event)" ng-model="source_file.filename" type="text" class="ng-pristine ng-untouched ng-valid ng-not-empty">
</span>
<a ng-click="delete_source_file($index)">
<span class="glyphicon-remove glyphicon"></span>
</a>
</uib-tab-heading></a>
</li><!-- end ngRepeat: source_file in project.source_files -->
<a ng-click="new_source_file()" style="padding: 2px 15px;display: block; float: left;" class="ng-scope">
<span class="glyphicon-plus glyphicon"></span>
</a>
</ul>
  <div class="tab-content">
    <!-- ngRepeat: tab in tabset.tabs --><div class="tab-pane ng-scope active" ng-repeat="tab in tabset.tabs" ng-class="{active: tabset.active === tab.index}" uib-tab-content-transclude="tab">
    

</div><!-- end ngRepeat: tab in tabset.tabs -->
  </div>
</div>
<div class="progress ng-isolate-scope" ng-transclude="" aria-labelledby="" ng-show="bar_show" style="">
<div class="progress-bar-striped  progress-bar progress-bar-success progress-no-transition" ng-class="type &amp;&amp; &#39;progress-bar-&#39; + type" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" ng-style="{width: (percent &lt; 100 ? percent : 100) + &#39;%&#39;}" aria-valuetext="100%" aria-labelledby="progressbar" ng-transclude="" bar="" type="success" value="dynamic" style="width: 100%;"><span class="ng-binding ng-scope">
Success
</span><!-- ngIf: type=='success' && !progress_transition --><span class="share-widgets ng-scope" ng-if="type==&#39;success&#39; &amp;&amp; !progress_transition" style="display: inline-block; vertical-align: bottom; height: 100%; line-height: 100%;">
<!-- ngIf: app_locale != "ja-jp" --><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 73px; height: 20px;" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.bbd13993eb53d3a11ac08f5e8cf9d6a4.en.html#dnt=false&amp;hashtags=paizaIO&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fpaiza.io%2Fprojects%2FnSaj_j1vaq-UZMYrjClDhw&amp;size=m&amp;text=Here%20is%20my%20PHP%20code%20(147%20lines)%20on%20online%20editor%2Fcompiler!&amp;time=1652875119398&amp;type=share&amp;url=https%3A%2F%2Fpaiza.io%2Fprojects%2FnSaj_j1vaq-UZMYrjClDhw%3Flocale%3Dja-jp&amp;via=paizaIO" data-url="https://paiza.io/projects/nSaj_j1vaq-UZMYrjClDhw?locale=ja-jp"></iframe><!-- end ngIf: app_locale != "ja-jp" -->
<!-- ngIf: app_locale == "ja-jp" -->
<div id="fb-container" style="display: inline-block;vertical-align:top;height:100%;line-height:100%;position:relative;">
<div class="fb-share-button fb_iframe_widget" data-href="https://paiza.io/projects/nSaj_j1vaq-UZMYrjClDhw" data-layout="button_count" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=632950816819414&amp;container_width=0&amp;href=https%3A%2F%2Fpaiza.io%2Fprojects%2FnSaj_j1vaq-UZMYrjClDhw&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey"><span style="vertical-align: bottom; width: 77px; height: 20px;"><iframe name="f37e67bc0f9bc9c" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.0/plugins/share_button.php?app_id=632950816819414&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2f591699473a74%26domain%3Dpaiza.io%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fpaiza.io%252Ff273639c739a824%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fpaiza.io%2Fprojects%2FnSaj_j1vaq-UZMYrjClDhw&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey" style="border: none; visibility: visible; width: 77px; height: 20px;" class=""></iframe></span></div>
</div>
</span><!-- end ngIf: type=='success' && !progress_transition -->
</div>
</div>
</div>
<div class="aceframe-content" style="display: flex; flex-direction: row; height: 32px;">
<div style="flex: 1 1 auto;">
<div class="editor form_editor ng-untouched ng-valid ace_editor ace-twilight ace_dark ng-dirty ng-valid-parse ng-not-empty" id="form_editor" ng-model="project.source_files[project.source_file_pos].body" ui-ace="aceOptions" style="font-size: 12px;"><textarea class="ace_text-input" wrap="off" autocorrect="off" autocapitalize="off" spellcheck="false" style="opacity: 0; font-size: 1px; height: 1px; width: 1px; top: 0px; left: 0px;"></textarea><div class="ace_gutter" aria-hidden="true" style="left: 0px; width: 53px;"><div class="ace_layer ace_gutter-layer ace_folding-enabled" style="height: 1e+06px; top: -1628px; left: 0px; width: 53px;"><div class="ace_gutter-cell " style="height: 14px; top: 1624px;">117<span style="display: none; height: 14px;" class="ace_fold-widget ace_start ace_open"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 1638px;">118<span style="display: none; height: 14px;" class="ace_fold-widget ace_start ace_open"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 1652px;">119<span style="display: none; height: 14px;" class="ace_fold-widget ace_start ace_open"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 1666px;">120<span class="ace_fold-widget ace_start ace_open" style="height: 14px; display: inline-block;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 1680px;">121<span style="display: none; height: 14px;" class="ace_fold-widget ace_start ace_open"></span></div></div></div><div class="ace_scroller" style="line-height: 14px; left: 52.793px; right: 17px; bottom: 0px;"><div class="ace_content" style="top: -4px; left: 0px; width: 1530.21px; height: 60px;"><div class="ace_layer ace_print-margin-layer"><div class="ace_print-margin" style="left: 532px; visibility: visible;"></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_text-layer" style="height: 1e+06px; margin: 0px 4px; top: -1624px; left: 0px;"><div class="ace_line" style="height: 14px; top: 1624px;"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">div</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div><div class="ace_line" style="height: 14px; top: 1638px;"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_table ace_tag-name ace_xml">td</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div><div class="ace_line" style="height: 14px; top: 1652px;"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_table ace_tag-name ace_xml">tr</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div><div class="ace_line" style="height: 14px; top: 1666px;"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_tag-open ace_xml">&lt;</span><span class="ace_meta ace_tag ace_table ace_tag-name ace_xml">tr</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_cursor-layer ace_hidden-cursors"><div class="ace_cursor" style="display: block; top: 420px; left: 50px; width: 7px; height: 14px; animation-duration: 1000ms;"></div></div></div></div><div class="ace_scrollbar ace_scrollbar-v" style="width: 22px; bottom: 0px;"><div class="ace_scrollbar-inner" style="width: 22px; height: 2058px;">&nbsp;</div></div><div class="ace_scrollbar ace_scrollbar-h" style="display: none; height: 22px; left: 52.793px; right: 17px;"><div class="ace_scrollbar-inner" style="height: 22px; width: 1560px;">&nbsp;</div></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: hidden;"><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: visible;">הההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההה</div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: visible;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div>
<!-- ngIf: isMobileSafari -->
</div>
<!-- ngIf: isMobile -->
</div>
<div class="aceframe-footer">
<div class="config-box clearfix">
<span style="text-align:left;">
<div class="btn-group dropup dropdown" uib-dropdown="">
<button class="btn btn-success submit-button" ng-click="submit_clicked_default()" ng-disabled="!ready" style="margin: 1px 0px;" tooltip-animation="false" type="button" uib-tooltip="Save and Run">
<span class="ng-binding">
<i class="glyphicon-circle-arrow-right glyphicon"></i>
Run (Ctrl-Enter)
</span>
</button>
<button class="btn btn-success dropdown-toggle" style="margin: 1px 0px;" uib-dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
<span class="caret"></span>
<span class="sr-only">
Split Button!
</span>
</button>
<ul class="dropdown-menu" role="menu" uib-dropdown-menu="">
<li ng-show="project.is_owner" class="" style="">
<a ng-click="delete()">
Delete
</a>
</li>
<li ng-show="current_user &amp;&amp; current_user.policy.name==&#39;super&#39;" class="ng-hide">
<a ng-click="delete()">
Delete (as Super User)
</a>
</li>
<li class="divider" ng-show="project.is_owner" style=""></li>
<li ng-show="!project.id || project.is_owner" class="">
<a dropdown-toggle="" ng-click="submit_clicked(true, false,project.id &amp;&amp; ! project.is_owner)">
Save only
</a>
</li>
<li ng-show="project.id != null" class="">
<a dropdown-toggle="" ng-click="submit_clicked(true, false,true)">
Fork
</a>
</li>
<li>
<a dropdown-toggle="" ng-click="submit_clicked(false, true, false)">
Run only
</a>
</li>
</ul>
</div>
</span>
<div style="display: inline-block;">
<a ng-click="amznTextLinkOnClick()" ng-href="https://paiza.jp/works" style="color: #1995dc;" target="_blank" href="https://paiza.jp/works">
<!-- ngIf: app_locale == "ja-jp" -->
</a>
|
<a ng-click="amznTextLinkOnClick()" ng-href="https://paiza.jp/challenges/info" style="color: #1995dc;" target="_blank" href="https://paiza.jp/challenges/info">
<!-- ngIf: app_locale == "ja-jp" -->
</a>
</div>
<span style="text-align:right;float:right">
<span class="glyphicon glyphicon-ok ng-hide" ng-show="project.featured" style="font-size: 32px;vertical-align:middle;"></span>
<span ng-show="project.id" class="" style="">
<i class="glyphicon glyphicon-user guest-user-color" ng-show="project.user==null" style="font-size: 32px;vertical-align:middle;" tooltip-animation="false" uib-tooltip="Owner: (A guest)"></i>
<a class="no-color" ng-href="/users/show/" href="https://paiza.io/users/show/">
<img height="32" ng-show="project.user.image_url" tooltip-animation="false" uib-tooltip="Owner:" widht="32" class="ng-hide">
<i class="glyphicon glyphicon-user default-user-color ng-hide" ng-show="project.user!=null &amp;&amp; !project.user.image_url" style="font-size: 32px;vertical-align:middle;" tooltip-animation="false" uib-tooltip="Owner: "></i>
</a>
</span>
<span style="background-color: #eee; border-color: #dddddd; border-width: 1px; border-style: solid;display: inline-block;">
<a class="no-color" data-target="#infoModal" data-toggle="modal">
<button class="btn btn-default" tooltip-animation="false" type="button" uib-tooltip="Code information">
<span class="glyphicon-info-sign glyphicon"></span>
</button>
</a>
<a class="no-color" data-target="#aceEditorConfigModal" data-toggle="modal" tooltip-animation="false" uib-tooltip="Editor preferences">
<button class="btn btn-default" type="button">
<span class="glyphicon-cog glyphicon"></span>
</button>
</a>
<a class="no-color" data-target="#scheduleModal" data-toggle="modal" ng-disabled="!(current_user &amp;&amp; project.is_owner)" tooltip-animation="false" uib-tooltip="Task scheduling / Please sign in to use this feature." disabled="disabled">
<button class="btn btn-default" ng-class="{active: project.schedule!=null}" type="button">
<span class="glyphicon-time glyphicon"></span>
</button>
</a>
<div style="display:inline-block" tooltip-animation="false" type="button" uib-tooltip="Not linked to GitHub Gist / Please sign in or connect account to GitHub to use this feature.">
<button class="btn btn-default ng-pristine ng-untouched ng-valid ng-empty" ng-model="$parent.link_gist" type="button" uib-btn-checkbox="">
<img ng-show="$parent.link_gist" ng-src="/assets/github/Octocat-31ccba2be37bc3c9586160d86657907a.png" style="width:14px;height:14px" src="./index_files/Octocat-31ccba2be37bc3c9586160d86657907a.png" class="ng-hide">
<img ng-show="!$parent.link_gist" ng-src="/assets/github/GitHub-Mark-32px-f53755a8fc40f335e980d0e03d63a6c6.png" style="width:14px;height:14px" src="./index_files/GitHub-Mark-32px-f53755a8fc40f335e980d0e03d63a6c6.png" class="">
</button>
</div>
<div style="display:inline-block" tooltip-animation="false" type="button" uib-tooltip="Not favorited / Please sign in to use this feature.">
<button class="btn btn-default ng-pristine ng-untouched ng-valid ng-not-empty" ng-model="project.favorite" type="button" uib-btn-checkbox="" style="">
<span class="glyphicon glyphicon-star-empty" ng-class="{&#39;glyphicon-star&#39;: project.favorite, &#39;glyphicon-star-empty&#39;: !project.favorite}"></span>
</button>
</div>
<span ng-show="current_user &amp;&amp; current_user.policy.name==&#39;super&#39;" class="ng-hide">
<div style="display:inline-block" tooltip-animation="false" type="button" uib-tooltip="?no_featured? / Please sign in to use this feature.">
<button class="btn btn-default ng-pristine ng-untouched ng-valid ng-not-empty" ng-model="project.featured" type="button" uib-btn-checkbox="" style="">
<span class="glyphicon glyphicon-remove" ng-class="{&#39;glyphicon-ok&#39;: project.featured, &#39;glyphicon-remove&#39;: !project.featured}"></span>
</button>
</div>
</span>
<div style="display:inline-block" tooltip-animation="false" type="button" uib-tooltip="Real-time collaboration(Experimental)">
<button class="btn btn-default" onclick="TogetherJS(this); return false;" type="button">
<span style="display:inline-block;position:relative">
<span class="glyphicon glyphicon-user"></span>
<span class="glyphicon glyphicon-user" style="position: absolute;left: -7px;top:2px;"></span>
<span class="glyphicon glyphicon-user" style="position: absolute;left: +7px;top:2px;"></span>
</span>
</button>
</div>
<div style="display:inline-block" tooltip-animation="false" type="button" uib-tooltip="In private">
<button btn-checkbox-false="&#39;public&#39;" btn-checkbox-true="&#39;private&#39;" class="btn btn-default ng-pristine ng-untouched ng-valid ng-not-empty active" ng-disabled="false&amp;&amp;!current_user" ng-model="project.share" tooltip-animation="false" type="button" uib-btn-checkbox="" uib-tooltip="Private">
<span class="glyphicon glyphicon-lock"></span>
</button>
</div>
<button class="btn btn-default" ng-click="embedModal()" ng-disabled="project.uid==null" tooltip-animation="false" tooltip-placement="left" type="button" uib-tooltip="Share or Embed">
<span class="glyphicon glyphicon-share"></span>
</button>
</span>
</span>
</div>
</div>
</div>
<div class="split-pane-divider" id="my-divider" style="top: 156px;"></div>
<div class="split-pane-component" id="bottom-component" style="display: flex; flex-direction: column; top: 156px;">
<div style="display: flex; flex-direction: row; flex: 1 1 auto; height: 100%;">
<div active="ctrl.result_tab_active" ng-class="{advertisement: advertisement}" style="height: 100%; flex: 1 1 auto; display: flex; flex-direction: column;" class="ng-isolate-scope advertisement">
  <ul class="nav nav-tabs" ng-class="{&#39;nav-stacked&#39;: vertical, &#39;nav-justified&#39;: justified}" ng-transclude="">
<li ng-class="[{active: active, disabled: disabled}, classes]" class="uib-tab nav-item ng-scope ng-isolate-scope active" index="&#39;tab_stdout_active&#39;" ng-show="project.stdout != null" style="">
  <a href="https://paiza.io/" ng-click="select($event)" class="nav-link ng-binding" uib-tab-heading-transclude=""><uib-tab-heading tooltip-animation="false" uib-tooltip="Standard output" class="ng-binding ng-scope">
Output
</uib-tab-heading></a>
</li>
<li ng-class="[{active: active, disabled: disabled}, classes]" class="uib-tab nav-item ng-scope ng-isolate-scope ng-hide" index="&#39;tab_stderr_active&#39;" ng-show="project.stderr">
  <a href="https://paiza.io/" ng-click="select($event)" class="nav-link ng-binding" uib-tab-heading-transclude=""><uib-tab-heading uib-tooltip="Standard error message" class="ng-binding ng-scope">
Runtime error
</uib-tab-heading></a>
</li>
<li ng-class="[{active: active, disabled: disabled}, classes]" class="uib-tab nav-item ng-scope ng-isolate-scope ng-hide" index="&#39;tab_build_output_active&#39;" ng-show="project.build_stdout||project.build_stderr">
  <a href="https://paiza.io/" ng-click="select($event)" class="nav-link ng-binding" uib-tab-heading-transclude=""><uib-tab-heading tooltip-animation="false" uib-tooltip="Build error" class="ng-binding ng-scope">
Build error
</uib-tab-heading></a>
</li>
<li ng-class="[{active: active, disabled: disabled}, classes]" class="uib-tab nav-item ng-scope ng-isolate-scope" index="&#39;tab_stdin_active&#39;" style="">
  <a href="https://paiza.io/" ng-click="select($event)" class="nav-link ng-binding" uib-tab-heading-transclude=""><uib-tab-heading class="clearfix ng-binding ng-scope" tooltip-animation="false" uib-tooltip="Standard input">
Input
</uib-tab-heading></a>
</li>
<li ng-class="[{active: active, disabled: disabled}, classes]" class="uib-tab nav-item ng-scope ng-isolate-scope" index="&#39;tab_comment2_active&#39;" ng-show="project.uid" style="">
  <a href="https://paiza.io/" ng-click="select($event)" class="nav-link ng-binding" uib-tab-heading-transclude=""><uib-tab-heading class="ng-binding ng-scope">
Comments
<span class="badge ng-binding">
0
</span>
</uib-tab-heading></a>
</li>
<span ng-show="project.time" style="float: right;" class="ng-binding ng-scope">
(0.04 sec)
</span>
</ul>
  <div class="tab-content">
    <!-- ngRepeat: tab in tabset.tabs --><div class="tab-pane ng-scope" ng-repeat="tab in tabset.tabs" ng-class="{active: tabset.active === tab.index}" uib-tab-content-transclude="tab">
    

<pre class="variable-area ng-scope"><code class="build-stderr ng-binding">nullnull</code></pre>
</div><!-- end ngRepeat: tab in tabset.tabs --><div class="tab-pane ng-scope" ng-repeat="tab in tabset.tabs" ng-class="{active: tabset.active === tab.index}" uib-tab-content-transclude="tab">
    

<div class="variable-area ng-scope">
<!-- ngIf: project.uid --><project-comments comments="comments" current-user="current_user" ng-if="project.uid" project-uid="project.uid" class="ng-scope ng-isolate-scope"><style>
  .arrow_box_all {
    position: relative;
    background: #c3edc6;
    border: 4px solid #bff5c3;
  }
  .arrow_box_all:after, .arrow_box_all:before {
    right: 100%;
    top: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
  }
  
  .arrow_box_all:after {
    border-color: rgba(175, 213, 178, 0);
    border-right-color: #c3edc6;
    border-width: 6px;
    margin-top: -6px;
  }
  .arrow_box_all:before {
    border-color: rgba(191, 245, 195, 0);
    border-right-color: #c3edc6;
    border-width: 12px;
    margin-top: -12px;
  }
</style>
<div cg-busy="{promise:commentPromise}" class="container" style="position: relative;">
<form ng-submit="addComment(comment_message)" role="form" class="ng-pristine ng-valid">
<div>
<table>
<tbody><tr>
<td>
<user-image size="32" user="current_user" class="ng-isolate-scope"><i class="glyphicon glyphicon-user guest-user-color" ng-show="user==null" ng-style="{&#39;font-size&#39;: size + &#39;px&#39;, &#39;vertical-align&#39;: &#39;middle&#39;}" tooltip-animation="false" uib-tooltip="(A guest)" style="font-size: 32px; vertical-align: middle;"></i>
<a class="no-color" ng-href="/users/show/" href="https://paiza.io/users/show/">
<img ng-show="user.image_url" ng-style="{ width: size+&#39;px&#39;,height:size+&#39;px&#39;}" tooltip-animation="false" uib-tooltip="" class="ng-hide" style="width: 32px; height: 32px;">
<i class="glyphicon glyphicon-user default-user-color ng-hide" ng-show="user!=null &amp;&amp; !user.image_url" ng-style="{&#39;font-size&#39;: size+&#39;px&#39;,&#39;vertical-align&#39;:&#39;middle&#39;}" tooltip-animation="false" uib-tooltip="" style="font-size: 32px; vertical-align: middle;"></i>
</a>
</user-image>
</td>
<td>
<div ng-show="current_user" class="ng-hide" style="">
<div>
<b class="ng-binding">

</b>
</div>
<div>
<div class="form-inline">
<div class="form-group">
<textarea class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-model="comment_message" placeholder="Looks good for you ?" style="width: 500px;" type="text"></textarea>
<input class="btn btn-primary" type="submit">
</div>
</div>
</div>
</div>
<div ng-show="!current_user">
<b class="ng-binding">
Please sign in to use this feature.
</b>
</div>
</td>
</tr>
</tbody></table>
</div>
</form>
<!-- ngRepeat: comment in comments|orderBy:'-id' -->
<div class="cg-busy cg-busy-backdrop cg-busy-backdrop-animation ng-hide ng-scope" ng-show="$cgBusyIsActive()"></div><div class="cg-busy cg-busy-animation ng-hide ng-scope" ng-show="$cgBusyIsActive()"><div class="cg-busy-default-wrapper" style="position: absolute; inset: 0px;">

   <div class="cg-busy-default-sign">

      <div class="cg-busy-default-spinner">
         <div class="bar1"></div>
         <div class="bar2"></div>
         <div class="bar3"></div>
         <div class="bar4"></div>
         <div class="bar5"></div>
         <div class="bar6"></div>
         <div class="bar7"></div>
         <div class="bar8"></div>
         <div class="bar9"></div>
         <div class="bar10"></div>
         <div class="bar11"></div>
         <div class="bar12"></div>
      </div>

      <div class="cg-busy-default-text ng-binding">Please Wait...</div>

   </div>

</div></div></div>
</project-comments><!-- end ngIf: project.uid -->
</div>
</div><!-- end ngRepeat: tab in tabset.tabs --><div class="tab-pane ng-scope" ng-repeat="tab in tabset.tabs" ng-class="{active: tabset.active === tab.index}" uib-tab-content-transclude="tab">
    

<pre class="variable-area ng-scope"><code class="stderr ng-binding"></code></pre>
</div><!-- end ngRepeat: tab in tabset.tabs --><div class="tab-pane ng-scope" ng-repeat="tab in tabset.tabs" ng-class="{active: tabset.active === tab.index}" uib-tab-content-transclude="tab" style="">
    

<textarea class="form-control variable-area ng-pristine ng-untouched ng-valid ng-scope ng-empty" dropzone-input="" ng-model="project.input" ng-trim="false" style="resize:none;"></textarea>
</div><!-- end ngRepeat: tab in tabset.tabs --><div class="tab-pane ng-scope active" ng-repeat="tab in tabset.tabs" ng-class="{active: tabset.active === tab.index}" uib-tab-content-transclude="tab" style="">
    

<div style="position:absolute; top: 24px; right: 15px; z-index: 1; margin: 2px;" class="ng-scope">
<select ng-model="project.output_type" ng-options="output_type.value as output_type.name for output_type in ctrl.output_type_options" class="ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched" style=""><option label="Text" value="object:null" selected="selected">Text</option><option label="HTML" value="string:html">HTML</option><option label="JSON" value="string:json">JSON</option></select>
<a class="btn btn-sm btn-default" ng-href="https://out.paiza.io:443/projects/nSaj_j1vaq-UZMYrjClDhw/output/output.html" style="padding:2px 5px;" target="_blank" tooltip-animation="false" uib-tooltip="Open in New Window as " href="https://out.paiza.io/projects/nSaj_j1vaq-UZMYrjClDhw/output/output.html">
<span class="glyphicon-share-alt glyphicon"></span>
</a>
</div>
<div class="h100 ng-scope ng-hide" ng-show="project.output_type==null || project.output_type==&#39;json&#39;" style="">
<div class="variable-area">
<pre><code class="stdout ng-binding">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Tugas Aritmatika | Nilai Mahasiswa&lt;/title&gt;
    &lt;script src="https://code.jquery.com/jquery-3.5.0.min.js"&gt;&lt;/script&gt;
    &lt;link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"&gt;

    &lt;style&gt;
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        h1 {
            text-align: center;
            color: #D3455B;
        }
        table {
            margin: 5%;
        }
        input, select {
            width: 100%;
            padding: 8px 15px;
        }
        option {
            line-height: 10px !important;
        }
        .space {
            padding-right: 50px; 
        }
        .average {
            padding-right: 800px; 
        }
        table tr td {
            padding-bottom: 10px;
        }
        button {
            background-color: #6558F5;
            border-color: #6558F5;
            border-radius: 2px;
            color: white;
            padding: 8px 15px;
        }
        .div-result {
            display: inline-block;
            height: 0;
            padding-bottom: 20%;
            width: 22%;
            border: 1px solid rgb(118, 118, 118);
        }
        .result {
            font-size: 120px;
            padding: 10px;
        }
        #footer {
            margin: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    
    &lt;div&gt;
        &lt;h1&gt;&lt;b&gt;Nilai Mahasiswa&lt;/b&gt;&lt;/h1&gt;

        &lt;form method="post" action="index.php"&gt;
            &lt;table&gt;
                &lt;tr&gt;
                    &lt;td class="space"&gt;Nilai Tugas&lt;/td&gt;
                    &lt;td&gt;
                        &lt;input type="number" name="assignments" value="0" tabindex="1"&gt;
                    &lt;/td&gt;
                    &lt;td class="space"&gt;&lt;/td&gt;
                    &lt;td class="space"&gt;&lt;/td&gt;
                    &lt;td class="space"&gt;Nilai Rata-rata&lt;/td&gt;
                    &lt;td class="average"&gt;
                        &lt;input type="text" name="average" value="0" readonly&gt;
                    &lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Nilai Praktikum&lt;/td&gt;
                    &lt;td&gt;
                        &lt;input type="number" name="practicum" value="0" tabindex="2"&gt;
                    &lt;/td&gt;
                    &lt;td class="space"&gt;&lt;/td&gt;
                    &lt;td class="space"&gt;&lt;/td&gt;
                    &lt;td class="space"&gt;Nilai Akhir&lt;/td&gt;
                    &lt;td rowspan="3"&gt;
                        &lt;div class="div-result"&gt;
                            &lt;div class="result w3-center w3-animate-zoom"&gt;
                                -                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Nilai UTS&lt;/td&gt;
                    &lt;td&gt;
                        &lt;input type="number" name="uts" value="0" tabindex="3"&gt;
                    &lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Nilai UAS&lt;/td&gt;
                    &lt;td&gt;
                        &lt;input type="number" name="uas" value="0" tabindex="4"&gt;
                    &lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;&lt;/td&gt;
                    &lt;td&gt;
                        &lt;button type="submit" name="count" tabindex="5"&gt;Hitung&lt;/button&gt;
                    &lt;/td&gt;
                &lt;/tr&gt;
            &lt;/table&gt;
        &lt;/form&gt;
    &lt;/div&gt;
    &lt;script&gt;
        $( "input[type=number]" ).focus((e)=&gt;{
            e.currentTarget.select();
        });
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
</div>
</div>
<div class="h100 ng-scope" ng-show="project.output_type==&#39;html&#39;" style="">
<div class="variable-area">
<iframe ng-show="project.output_type==&#39;html&#39;" ng-src="https://out.paiza.io:443/projects/nSaj_j1vaq-UZMYrjClDhw/output/output.html?timestamp=2022-05-18T11:59:03.756Z" style="width: 100%; height: 100%;" class="" src="./index_files/saved_resource(2).html"></iframe>
</div>
</div>
</div><!-- end ngRepeat: tab in tabset.tabs -->
  </div>
</div>
<div style="flex: 0 0 auto;">
</div>
</div>
<div class="advertisement uib-alert alert-info no-padding" ng-show="advertisement" style="flex: 0 0 auto;">
<div style="height:100%; width:100%; display: flex">
<div style="flex: 0 0 auto;">
<button class="close" ng-click="advertisement = !advertisement" style="float: none" type="button">
×
</button>
</div>
<div style="flex: 1 1 auto;">
<div>
<a href="https://paiza.jp/works/lp/free_pass" target="_blank">
学校向けに無料提供中！ブラウザだけでプログラミングが学べる「paizaラーニング学校フリーパス」の申請はこちらから!
</a>
</div>
</div>
</div>
</div>
</div>
<div class="split-pane-resize-shim" style="display: none;"></div></div>
</div>
</div>
</div>
<div area-hidden="true" area-labelledby="Information" class="modal fade" id="infoModal" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="close" data-dismiss="modal" type="button">
<span area-hidden="true">
×
</span>
<span class="sr-only">Close</span>
</button>
<h4 class="modal-title">Information</h4>
</div>
<div class="modal-body ng-binding">
<div ng-show="project.uid==null" class="ng-hide" style="">
This program was neither run nor saved.
<hr>
<br>
</div>
<h3>
Fork parent:
</h3>
<a ng-href="/projects/" ng-show="project.parent" target="_blank" class="ng-binding ng-hide" href="https://paiza.io/projects/">

</a>
<span ng-show="!project.parent" class="">
No parent
</span>
<h3>
Details
</h3>
Id: 13753324
<br>
Language: php
<br>
Build time: 
<br>
Build exit code: 0
<br>
Build result: 
<br>
Exit code: 0
<br>
Time: 0.04
<br>
Memory: 28704000
<br>
Network connections used: 0
<br>
Result: success
<br>
Live: 
<br>
Share: private
<br>
Created at: 2022-05-18T11:59:02.714Z
<br>
Updated at: 2022-05-18T11:59:03.758Z
<br>
Run at: 2022-05-18T11:59:03.756Z
<br>
Saved at: 2022-05-18T11:59:02.712Z
</div>
<div class="modal-footer">
<button class="btn btn-primary" data-dismiss="modal">
Close
</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="aceEditorConfigModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="close" data-dismiss="modal" type="button">
<span area-hidden="true">
×
</span>
<span class="sr-only">Close</span>
</button>
<h4 class="modal-title ng-binding">Editor preferences</h4>
</div>
<div class="modal-body">
<div class="control-group">
<label class="control-label">
Theme:
</label>
<select ng-model="aceEditorConfig.theme" ng-options="theme.key as theme.name group by theme.shade for theme in aceEditorThemes" class="ng-pristine ng-untouched ng-valid ng-empty"><option selected="selected"></option><optgroup label="Bright"><option label="Chrome" value="string:chrome">Chrome</option><option label="Clouds" value="string:clouds">Clouds</option><option label="Crimson Editor" value="string:crimson_editor">Crimson Editor</option><option label="Dawn" value="string:dawn">Dawn</option><option label="Dreamweaver" value="string:dreamweaver">Dreamweaver</option><option label="Eclipse" value="string:eclipse">Eclipse</option><option label="KatzenMilch" value="string:katzenmilch">KatzenMilch</option><option label="Kuroir" value="string:kuroir">Kuroir</option><option label="GitHub" value="string:github">GitHub</option><option label="Solarized Light" value="string:solarized_light">Solarized Light</option><option label="TextMate" value="string:textmate">TextMate</option><option label="Tomorrow" value="string:tomorrow">Tomorrow</option><option label="XCode" value="string:xcode">XCode</option></optgroup><optgroup label="Dark"><option label="Ambiance" value="string:ambiance">Ambiance</option><option label="Chaos" value="string:chaos">Chaos</option><option label="Clouds Midnight" value="string:clouds_midnight">Clouds Midnight</option><option label="Cobalt" value="string:cobalt">Cobalt</option><option label="idle_fingers" value="string:idle_fingers">idle_fingers</option><option label="kr" value="string:kr">kr</option><option label="krTheme" value="string:kr_theme">krTheme</option><option label="Merbivore" value="string:merbivore">Merbivore</option><option label="Merbivore Soft" value="string:merbivore_soft">Merbivore Soft</option><option label="Mono Industrial" value="string:mono_industrial">Mono Industrial</option><option label="Monokai" value="string:monokai">Monokai</option><option label="Pastel on Dark" value="string:pastel_on_dark">Pastel on Dark</option><option label="Solarized Dark" value="string:solarized_dark">Solarized Dark</option><option label="Terminal" value="string:terminal">Terminal</option><option label="Tomorrow Night" value="string:tomorrow_night">Tomorrow Night</option><option label="Tomorrow Night Blue" value="string:tomorrow_night_blue">Tomorrow Night Blue</option><option label="Tomorrow Night Bright" value="string:tomorrow_night_bright">Tomorrow Night Bright</option><option label="Tomorrow Night 80s" value="string:tomorrow_night_eighties">Tomorrow Night 80s</option><option label="Twilight" value="string:twilight">Twilight</option><option label="Vibrant Ink" value="string:vibrant_ink">Vibrant Ink</option></optgroup></select>
</div>
<div class="control-group">
<label class="control-label">
FontSize:
</label>
<select ng-model="aceEditorConfig.fontSize" ng-options="fontSize for fontSize in aceEditorFontSizes" class="ng-pristine ng-untouched ng-valid ng-not-empty"><option label="10px" value="string:10px">10px</option><option label="11px" value="string:11px">11px</option><option label="12px" value="string:12px" selected="selected">12px</option><option label="13px" value="string:13px">13px</option><option label="14px" value="string:14px">14px</option><option label="16px" value="string:16px">16px</option><option label="18px" value="string:18px">18px</option><option label="20px" value="string:20px">20px</option><option label="24px" value="string:24px">24px</option><option label="48px" value="string:48px">48px</option></select>
</div>
<div class="control-group">
<label class="control-label">
Keymap:
</label>
<select ng-model="aceEditorConfig.keyboardHandler" ng-options="keymap for keymap in aceEditorKeymaps" class="ng-pristine ng-untouched ng-valid ng-not-empty"><option label="normal" value="string:normal" selected="selected">normal</option><option label="vim" value="string:vim">vim</option><option label="emacs" value="string:emacs">emacs</option></select>
</div>
<div class="control-group">
<label class="control-label">
Tab width:
</label>
<input max="8" min="1" ng-model="aceEditorConfig.tabSize" type="number" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-min ng-valid-max">
</div>
<div class="control-group">
<label class="control-label">
Auto completion:
</label>
<button class="btn btn-default ng-pristine ng-untouched ng-valid ng-binding ng-not-empty active" ng-model="aceEditorConfig.autoCompletion" uib-btn-checkbox="">
On
</button>
</div>
<div class="control-group">
<label class="control-label">
Show gutter:
</label>
<button class="btn btn-default ng-pristine ng-untouched ng-valid ng-binding ng-not-empty active" ng-model="aceEditorConfig.showGutter" uib-btn-checkbox="">
On
</button>
</div>
<div class="control-group">
<label class="control-label">
Show invisibles:
</label>
<button class="btn btn-default ng-pristine ng-untouched ng-valid ng-binding ng-not-empty" ng-model="aceEditorConfig.showInvisibles" uib-btn-checkbox="">
Off
</button>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-primary" data-dismiss="modal">
Close
</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="scheduleModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="close" data-dismiss="modal" type="button">
×
</button>
<h4 class="modal-title ng-binding">Task scheduling</h4>
<div class="modal-body">
<div ng-show="!current_user" class="">
<b class="ng-binding">
Please sign in to use this feature.
</b>
</div>
<div ng-show="!project.is_owner" class="ng-hide" style="">
<b class="ng-binding">
You are not the owner of this code.
</b>
</div>
<select ng-disabled="!(current_user &amp;&amp; project.is_owner)" ng-model="project.schedule" ng-options="schedule.value as schedule.name for schedule in ctrl.schedule_options" class="ng-pristine ng-untouched ng-valid ng-empty" disabled="disabled"><option label="No scheduling" value="object:null" selected="selected">No scheduling</option><option label="Every hour" value="string:1h">Every hour</option><option label="Every day" value="string:1d">Every day</option></select>
</div>
<div class="modal-footer">
<button class="btn btn-primary" data-dismiss="modal">
Close
</button>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
<div ng-show="noview" class="ng-hide">

</div>
<div class="paizacloud-advertisement">
<div class="img-wrapper">
<a href="https://paiza.cloud/ja/" target="_blank">
<img height="65" src="./index_files/bnr_960x125_en.png">
</a>
</div>
</div>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-42027263-3', 'auto');
    ga('require', 'displayfeatures');
    if(current_user){
      ga('set', 'userId', 'uid-' + current_user.id);
      ga('set', 'userName', current_user.username);
      ga('set', 'dimension1', 'uid-' + current_user.id);
      ga('set', 'dimension2', 'LoggedIn');
    }else{
      ga('set', 'dimension2', 'NotLoggedIn');
    }
    // ga('send', 'pageview');
</script>
<script>
  var http_referer = "https://www.google.com/";
  console.log('HTTP_REFERER=', http_referer);
  if(http_referer && current_user){
    var parser = document.createElement('a')
    parser.href = http_referer;
    var pathname = parser.pathname;
    if(pathname.match(new RegExp("^(/users/auth/[a-z]+/callback|/users/confirmation)"))){
      ga('send', 'pageview', {page: pathname});
    }
  }
</script>
<script>
  var notice = null;
  console.log('notice=', notice);
  if(notice){
    ga('send', 'pageview', {page: '/notice/' + notice})
    ga('send', 'event', {
      eventCategory: 'notice',
      eventAction: 'show',
      eventLabel: notice,
    });
  }
</script>
<script>
  window.twttr = (function (d, s, id) {
    var t, js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src= "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);
    return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
  }(document, "script", "twitter-wjs"));
</script>


<iframe scrolling="no" frameborder="0" allowtransparency="true" src="./index_files/widget_iframe.bbd13993eb53d3a11ac08f5e8cf9d6a4.html" title="Twitter settings iframe" style="display: none;"></iframe><iframe id="rufous-sandbox" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" style="position: absolute; visibility: hidden; display: none; width: 0px; height: 0px; padding: 0px; border: none;" title="Twitter analytics iframe" src="./index_files/saved_resource(3).html"></iframe></body></html>