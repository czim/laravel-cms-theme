(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

// Loads the side menu

$(function () {

    $('#side-menu').metisMenu();
});

// Loads the correct sidebar on window load, collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size

$(function () {
    $(window).bind("load resize", function () {
        var topOffset = 50;
        var width = this.window.innerWidth > 0 ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        var height = (this.window.innerHeight > 0 ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", height + "px");
        }
    });

    var url = window.location;

    var element = $('ul.nav a').filter(function () {
        return this.href == url;
    }).addClass('active').parent();

    while (true) {
        if (element.is('li')) {
            element = element.parent().addClass('in').parent();
        } else {
            break;
        }
    }
});

// Select dropdown paceholder.
// Give select a class of placeholder, and its first option will be a hidden,
// option that shows as greyed out in the form input. If an additional empty
// option is present and selected, it will default back to the placeholder.
$(function () {

    $('select.placeholder').change(function () {

        var placeholderOption = $(this).children('option:first-child');

        if ($(this).val() == '' && !placeholderOption.is(':selected')) {
            placeholderOption.prop('selected', true);
        }

        if (placeholderOption.is(':selected')) {
            $(this).addClass('placeholder-active');
        } else {
            $(this).removeClass('placeholder-active');
        }
    }).change();
});

},{}]},{},[1]);

//# sourceMappingURL=app.js.map
