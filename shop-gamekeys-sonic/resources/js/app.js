// require('./bootstrap');
import $ from 'jquery'
import {Modal,Dropdown} from 'bootstrap'

Object.assign(window, {$})

$(window).on('load', function() {
    $('.preloader').fadeOut().end().delay(3000).fadeOut('fast');
});
