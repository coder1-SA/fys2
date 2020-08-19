//Add a row
$('.add').click(function() {
  arguments.callee.count = ++arguments.callee.count || 1;
  addCount = arguments.callee.count;
  no = addCount - delCount;

  var end = '</div>';


  var div_html = '<div class="field-wrap row' + String(no) + '">';
  var input_placeholder = "Name";
  var input_name = '"name' + String(no) + '"';
  var input_html = '<input placeholder=' + input_placeholder + ' type="text" name=' + input_name + ' />';
  var html = div_html + input_html + end;
  $('.name').append(input_html);

  div_html = '<div class="field-wrap row' + String(no) + '">';
  input_placeholder = '"USN"';
  input_name = '"usn' + String(no) + '"';
  input_html = '<input placeholder=' + input_placeholder + ' type="text" name=' + input_name + ' />';
  html = div_html + input_html + end;
  $('.usn').append(input_html);

  div_html = '<div class="field-wrap row' + String(no) + '">';
  input_placeholder = '"Mobile Number"';
  input_name = '"mob' + String(no) + '"';
  input_html = '<input class="marks-details" placeholder=' + input_placeholder + '  type="text" data-id="pass'+String(no)+'"  name=' + input_name + '  />';
  html = div_html + input_html + end;
  $('.mob').append(input_html);

  div_html = '<div class="field-wrap row' + String(no) + '">';
  input_placeholder = '"Email"';
  input_name = '"email' + String(no) + '"';
  input_html = '<input class="marks-details" placeholder=' + input_placeholder + '  type="text" data-id="pass'+String(no)+'"  name=' + input_name + '  />';
  html = div_html + input_html + end;
  $('.email').append(input_html);

  if (no > 0) {
    $('.delete').prop('disabled', false);
  }

});

//Delete a row
$('.delete').click(function() {
  arguments.callee.count = ++arguments.callee.count || 1;
  delCount = arguments.callee.count;
  no = addCount - delCount;

  $('.row' + String(no + 1)).remove();

  if (no <= 0) {
    $('.delete').prop('disabled', true);
  }

});
