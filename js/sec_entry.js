var addCount = 0;
var delCount = 0;
var no = 0;

//Add a row
$('.add').click(function() {
  if(arguments.callee.count <= 0)
  {
    arguments.callee.count = 1;
  }
  else
  {
    arguments.callee.count = ++arguments.callee.count || 1;
  }

  addCount = arguments.callee.count;
  no = addCount - delCount;

  var end = '</div>';

  var input_placeholder = '"Name"';
  var input_name = '"name' + String(no) + '"';
  var input_class = '"cname' + String(no) + '"';
  var input_html = '<input class=' + input_class + ' placeholder=' + input_placeholder + ' type="text" name=' + input_name + ' />';
  $('.name').append(input_html);

  input_placeholder = '"Fathers Name"';
  input_name = '"fname' + String(no) + '"';
  input_class = '"cfname' + String(no) + '"';
  input_html = '<input class=' + input_class + ' placeholder=' + input_placeholder + ' type="text" name=' + input_name + ' />';
  $('.fname').append(input_html);

  input_placeholder = '"USN"';
  input_name = '"usn' + String(no) + '"';
  input_class = '"cusn' + String(no) + '"';
  input_html = '<input class=' + input_class + ' placeholder=' + input_placeholder + ' type="text" name=' + input_name + ' />';
  $('.usn').append(input_html);

  input_placeholder = '"Mobile Number"';
  input_name = '"mob' + String(no) + '"';
  input_class = '"cmob' + String(no) + '"';
  input_html = '<input class=' + input_class + ' placeholder=' + input_placeholder + ' type="text" name=' + input_name + ' />';
  $('.mob').append(input_html);

  input_placeholder = '"Email"';
  input_name = '"email' + String(no) + '"';
  input_class = '"cemail' + String(no) + '"';
  input_html = '<input class=' + input_class + ' placeholder=' + input_placeholder + ' type="text" name=' + input_name + ' />';
  $('.email').append(input_html);

  if (no > 0) {
    $('.delete').removeClass('disabled');
  }

  $('.val').val(no);

});

//Delete a row
$('.delete').click(function() {
  if(arguments.callee.count <= 0)
  {
    arguments.callee.count = 1;
  }
  else
  {
    arguments.callee.count = ++arguments.callee.count || 1;
  }

  delCount = arguments.callee.count;
  no = addCount - delCount;

  $('.cname' + String(no + 1)).remove();
  $('.cfname' + String(no + 1)).remove();
  $('.cusn' + String(no + 1)).remove();
  $('.cmob' + String(no + 1)).remove();
  $('.cemail' + String(no + 1)).remove();

  if (no <= 0) {
    $('.delete').addClass('disabled');
  }

  $('#val').val(no);

});
