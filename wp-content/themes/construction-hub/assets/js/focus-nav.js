jQuery(document).ready(function () {
  window.construction_hub_currentfocus=null;
    construction_hub_checkfocusdElement();
  var construction_hub_body = document.querySelector('body');
  construction_hub_body.addEventListener('keyup', construction_hub_check_tab_press);
  var construction_hub_gotoHome = false;
  var construction_hub_gotoClose = false;
  window.construction_hub_responsiveMenu=false;
  function construction_hub_checkfocusdElement(){
    if(window.construction_hub_currentfocus=document.activeElement.className){
      window.construction_hub_currentfocus=document.activeElement.className;
    }
  }
  function construction_hub_check_tab_press(e) {
    "use strict";
    // pick passed event or global event object if passed one is empty
    e = e || event;
    var activeElement;

    if(window.innerWidth < 999){
    if (e.keyCode == 9) {
      if(window.construction_hub_responsiveMenu){
      if (!e.shiftKey) {
        if(construction_hub_gotoHome) {
          jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
        }
      }
      if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
        construction_hub_gotoHome = true;
      } else {
        construction_hub_gotoHome = false;
      }

    }else{

      if(window.construction_hub_currentfocus=="responsivetoggle"){
        jQuery( "" ).focus();
      }}}
    }
    if (e.shiftKey && e.keyCode == 9) {
    if(window.innerWidth < 999){
      if(window.construction_hub_currentfocus=="header-search"){
        jQuery(".responsivetoggle").focus();
      }else{
        if(window.construction_hub_responsiveMenu){
        if(construction_hub_gotoClose){
          jQuery("a.closebtn.mobile-menu").focus();
        }
        if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
          construction_hub_gotoClose = true;
        } else {
          construction_hub_gotoClose = false;
        }
      
      }else{

      if(window.construction_hub_responsiveMenu){
      }}}}
    }
    construction_hub_checkfocusdElement();
  }
});