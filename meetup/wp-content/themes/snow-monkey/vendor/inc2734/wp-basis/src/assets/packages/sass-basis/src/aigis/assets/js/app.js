'use strict';

import '../../../js/basis';

import SgBasisHamburgerBtn from '../../../js/_hamburger-btn.js';
new SgBasisHamburgerBtn({
  btn: '.sg-c-hamburger-btn'
});

import SgBasisDrawer from '../../../js/_drawer.js';
new SgBasisDrawer({
  drawer : '.sg-c-drawer',
  toggle : '.sg-c-drawer__toggle',
  submenu: '.sg-c-drawer__submenu'
});

import SgBasisNavbar from '../../../js/_navbar.js';
new SgBasisNavbar({
  item   : '.sg-c-navbar__item',
  submenu: '.sg-c-navbar__submenu',
  subitem: '.sg-c-navbar__subitem'
});

import SgBasisPageEffect from '../../../js/_page-effect.js';
new SgBasisPageEffect({
  pageEffect: '.sg-c-page-effect',
  duration: 200
});

import SgBasisSelect from '../../../js/_select.js';
new SgBasisSelect({
  select: '.sg-c-select',
  label : '.sg-c-select__label'
});
