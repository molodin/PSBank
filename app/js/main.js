$(document).ready(function () {

  $('.btn-start').on('click', function (e) {
    $('.hero-content-srart').addClass('off');
    $('.hero-content-two').removeClass('off');
    $('.hero-content-two').css({
      animation: 'content-show ease-out 1s'
    });
    e.preventDefault();
  });

  $('#sex').select2({
    minimumResultsForSearch: -1
  });
  $('#who').select2({
    minimumResultsForSearch: -1,
    placeholder: 'Кого поздравляем?'
  });

  $('#name').on('input', function () {
    $('.greeting .greeting-name').text($(this).val() + ',');
  });

  $('.greeting .greeting-sex').text($('#sex option:selected').text());
  $('#sex').on('change', function () {
    $('.greeting .greeting-sex').text($('#sex option:selected').text());
  });

  $('#who').on('change', function () {
    $('.greeting .greeting-who').text($('#who option:selected').text());
  });

  $('#who option[value="woman"]').prop('disabled', true);
  $('#sex').on('change', function () {
    if ($('#sex').val() == 'woman') {
      $('#who').addClass('t');
      $('#who option[value="man"]').prop('disabled', true);
      $('#who option[value="woman"]').prop('disabled', false);
    } else {
      $('#who').removeClass('t');
      $('#who option[value="woman"]').prop('disabled', true);
      $('#who option[value="man"]').prop('disabled', false);
    }
    $('#who').select2({
      minimumResultsForSearch: -1,
      placeholder: 'Кого поздравляем?',
    });
    $("#who").val('').trigger('change');
  });

});