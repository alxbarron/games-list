
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

var App = {
  init: function() {
    console.log('init');
  },
  load: function() {
    console.log('Assets loaded');
    App.addEvents();

    document.querySelector('#loader-wrapper').classList.add('loaded');
  },
  addEvents: function() {

    /* Prevent Default in all links with href === '#' */
    $(document).on('click', 'a[href="#"]', function(e) {
        e.preventDefault();
    });
    /** Good practice, add toggle class only in 'anchor' or 'button' */
    $(document).on('click', '.toggle', function(e) {
        e.preventDefault();
        var _target = e.target.dataset.target;

        var $target = _target === undefined ? $(this) : $(_target);
        $target.toggleClass('active');
    });

    $(document).on('click', '.open-modal', function(e) {
      var _modal = e.target.dataset.target;
      $( _modal ).modal({
        backdrop: 'static',
        keyboard: false,
        show: true
      });
    });

  }

}

document.addEventListener("DOMContentLoaded", App.init);
window.onload = App.load;
