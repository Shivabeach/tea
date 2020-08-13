$(function() {
  "use strict";
  $('A[rel="external"]').click(function() {
    window.open($(this).attr('href'));
    return false;
  });
});

$(function() {
  "use strict";
  $('form#ajax').on('submit', function(e) {
    e.preventDefault();
    var that = $(this),
      url = that.attr('action'),
      type = that.attr('method'),
      data = {};
    that.find('[name]').each(function(index, value) {
      var that = $(this),
        name = that.attr('name'),
        value = that.val();
      data[name] = value;
    });
    $.ajax({
      url: url,
      type: type,
      data: data,
      success: function(response) {
        $('#display').html(response).delay(4000).fadeOut(1000);
        location.reload();
      }
    });
    return false;
  });
});
 
$(function() {
  "use strict";
  $('td.teaname').on('click', function() { //click on the li
    var content = $(this).text(); //content is the text that you clicked on
    //PLACE THE TEXT INSIDE THE INPUT FIELD, YOU CAN CHANGE YOUR SELECTOR TO TARGET THE RIGHT INPUT
    $('input[id="teaname"]').val(content);
  });
});

$(function() {
    $("#datepicker").datepicker;
  })
  //@prepros-append spec.js
