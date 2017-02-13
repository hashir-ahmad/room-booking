(function() {
  'use strict';
  window['counter'] = 0;
  var snackbarContainer = document.querySelector('#demo-toast-example');
  var showToastButton = document.querySelector('#demo-show-toast');
  showToastButton.addEventListener('click', function() {
    'use strict';
    var data = {message: 'Example error or sucess Message # ' + ++counter};
    snackbarContainer.MaterialSnackbar.showSnackbar(data);
  });
}());

var date = new Date();
var formDate = document.getElementById('formDate');
var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var today = year + "-" + month + "-" + day;
formDate.value = today;
formDate.addEventListener('change', function(){
  if (formDate.value == ""){
    formDate.value = today;
  }
});
