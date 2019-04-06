$(document).ready(function () {

  // if (localStorage.getItem('repeat') == 'true') {
  //   $('.hero-content-srart').addClass('off');
  //   $('.hero-content-two').removeClass('off');
  //   localStorage.setItem('repeat', 'false');
  // }

  // setTimeoutRepeat(function () {
  //   localStorage.setItem('repeat', 'false');
  // }, 3000);

  // Share FB

  (function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id))
      return;
    js = d.createElement(s);
    js.id = id;
    js.src = '//connect.facebook.net/en_US/all.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  window.fbAsyncInit = function () {
    FB.init({
      appId: '807093306313734',
      status: true,
      xfbml: true,
    });
  };

  document.getElementById('shareFb').onclick = function () {
    FB.ui({
      method: 'share',
      display: 'popup',
      href: 'http://psbcosmos.ru/' + $('.userFingerprintFb').text() + '.html',
    });
  };

  $('.share-planet-fb').on('click', function (e) {
    $('#shareFb').trigger('click');
    e.preventDefault();
  });

  // Share VK

  var filesize = parseFloat($('.filesize').text());
  if (filesize < 1) {
    var imageVk = $('.userFingerprintFb').text();
  } else {
    var imageVk = $('.userFingerprintVk').text();
  }
  document.getElementById('shareVk').innerHTML = (VK.Share.button({
    url: 'http://psbcosmos.ru/' + $('.userFingerprintFb').text() + '.html',
    title: 'Космический день',
    image: 'http://psbcosmos.ru/' + imageVk + '.jpg',
    noparse: true
  },
  {
    type: 'custom',
    text: 'Share VK',
  }));

  $('.share-planet-vk').on('click', function (e) {
    $('#shareVk a').trigger('click');
    e.preventDefault();
  });

  // Off mobile scroll

  $(window).scroll(function () {
    if ($('body').scrollLeft() > 0)
      $('body').scrollLeft(0);
  });

  // Capture images for Fb and Vk

  function capture() {
    $('.image-fb').html2canvas({
      onrendered: function (canvas) {
        $('#img-val-fb').val(canvas.toDataURL("image/png"));
        document.getElementById("image-form").submit();
      }
    });
    $('.image-vk').html2canvas({
      onrendered: function (canvas) {
        $('#img-val-vk').val(canvas.toDataURL("image/png"));
        document.getElementById("image-form").submit();
      }
    });
  };

  $('.btn-start').on('click', function (e) {
    $('.hero-content-srart').addClass('off');
    $('.hero-content-two').removeClass('off');
    e.preventDefault();
  });

  $('.btn-two').on('click', function (e) {
    if ($(this).hasClass('name-off')) {
      $('#name').addClass('novalidate')
    }
    if ($(this).hasClass('who-off')) {
      $('#who').next('.select2-container').addClass('novalidate')
    }
    e.preventDefault();
  });

  $('.greeting-form').on('input change', function () {
    if ($('#name').val() != '') {
      $('#name').removeClass('novalidate');
      $('.btn-two').removeClass('name-off').addClass('name-on');
    } else {
      $('.btn-two').removeClass('name-on').addClass('name-off');
    }
    if ($('#who, .sex').val() == 'man' || $('#who, .sex').val() == 'woman') {
      $('#who').next('.select2-container').removeClass('novalidate');
      $('.btn-two').removeClass('who-off').addClass('who-on');
    } else {
      $('.btn-two').removeClass('who-on').addClass('who-off');
    }
    $('.btn-two').on('click', function (e) {
      if ($(this).hasClass('name-off')) {
        $('#name').addClass('novalidate')
      }
      if ($(this).hasClass('who-off')) {
        $('#who').next('.select2-container').addClass('novalidate')
      }
      if ($(this).hasClass('name-on') && $(this).hasClass('who-on')) {
        $('.hero-content-two').addClass('off');
        $('.hero-content-three').removeClass('off');
        capture();
        $('.image-social').removeClass('off');
      }
      e.preventDefault();
    });
    localStorage.setItem('greeting-name', $('.hero-content-two .greeting-name').text());
    localStorage.setItem('greeting-sex', $('.hero-content-two .greeting-sex').text().toLowerCase());
    localStorage.setItem('greeting-who', $('.hero-content-two .greeting-who').text().toLowerCase());
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

  $('.greeting .greeting-sex').text('ты ' + $('#sex option:selected').text());
  $('#sex').on('change', function () {
    $('.greeting .greeting-sex').text('ты ' + $('#sex option:selected').text());
  });

  $('#who').on('change', function () {
    $('.greeting .greeting-who').text($('#who option:selected').text() + '!');
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

  $('.hero-content-three .greeting-name').text(localStorage.getItem('greeting-name'));
  $('.hero-content-three .greeting-sex').text(localStorage.getItem('greeting-sex'));
  $('.hero-content-three .greeting-who').text(localStorage.getItem('greeting-who'));

  $('.repeat').on('click', function (e) {
    window.location.href = 'http://psbcosmos.ru/';
    localStorage.setItem('repeat', 'true');
    e.preventDefault();
  });

});