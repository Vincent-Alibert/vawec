function sameHeight(element){
  var height = 0;
  $(element).css('height' , '');
  $(element).each(function(){
    var maxHeight = $(this).height();
    if(maxHeight > height) {
      height = maxHeight;
    }
  });
  $(element).css('height', height);
}

function sameHeightByRow(){
  var arrayData = $('.list-albums');
  var height = 0;
  for (var i = 0; i <= arrayData.length - 1; i++) {
    for (var j = 0; j <= arrayData[i].children.length - 1; j++) {
      $(arrayData[i].children[j]).children('.picture').children('.atm-link').each(function() {
        if( $(this).outerHeight() > height) {
          height = $(this).outerHeight();
        }
      });
    }
    
    $(arrayData[i].children).children('.picture').children('.atm-link').css('height', height);
    height = 0;
  }
}

document.addEventListener('DOMContentLoaded', function() {

});
