<div class="custom-modal-popup"><div id="modalBackdrop" class="backdrop-default" style="z-index: 1000; position: absolute; left: 0px; margin: 0px; background: #000; opacity: 0.66; top: 0px; height: 100%; width: 100%;"></div><div id="modalContent" class="modal-default" style="z-index: 1001; position: absolute; top: 172px; left: 50%; margin-left: -350px; display: block;"><div style="width: 700px; height: 300px;" class="ctools-modal-content modal-forms-modal-content"><div class="popups-container"><div class="modal-header popups-title"><span id="modal-title" class="modal-title">Important</span><div class="clear-block"></div></div><div class="modal-scroll"><div id="modal-content" class="modal-content popups-body"><form action="#"><p>Please check the updated terms of use!</p><div class="form-actions" style="padding-top: 1em; text-align: center;"><div class="button" style="margin: 0;" onclick="supMmodalRemove()">OK</div></div></form></div></div></div></div></div></div>

<script>
function supCreateCookie(name, value, days) {
  var expires = '';
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toGMTString();
  }
  document.cookie = name + "=" + value + expires + "; path=/";
}
function supReadCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}
function supMmodalRemove() {
  supCreateCookie('supUpdatedTerms', true, 30);
  jQuery('#modalContent').fadeOut(300, function() { jQuery('#modalContent').remove(); });
  jQuery('#modalBackdrop').fadeOut(300, function() { jQuery('#modalBackdrop').remove(); });
}
if (!supReadCookie('supUpdatedTerms')) {
  jQuery('body').prepend('.custom-modal-popup');
} else {
   jQuery('.custom-modal-popup').remove();
}
</script>
