'use strict';
require('@babel/register')({
  presets: ['@babel/preset-env'],
});

module.exports = require('./gulp-style-tasks');
