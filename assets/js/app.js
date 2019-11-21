/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
import '../css/app.scss';

import getNiceMessage from './get_nice_message';

//now that i ran npm to include jquery, we can do execute the following:
import $ from 'jquery';
import 'bootstrap';


// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

$('body').addClass('jquery-attached');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
console.log(getNiceMessage(5));