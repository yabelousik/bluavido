function removeSafeDeliveryBunner() {
  var coronaWrapper = document.querySelector('#corona_banner');
  var coronaClose = document.querySelector('.corona-wrapper-close');

  coronaClose.addEventListener('click', function(evt) {
    evt.preventDefault();

    coronaWrapper.remove();
    document.body.setAttribute('style', `margin-top: 0px !important`);
    $('body').removeClass('corona-body');
  })
}
$('body').addClass('corona-body');
removeSafeDeliveryBunner();
