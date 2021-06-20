function function1(){
  document.forms['handle'].action = 'handle_On.php';
    document.forms['handle'].action.submit();
  }
function updateLabel() {
  var limit = this.parentElement.getElementsByClassName("limit")[0];
  limit.innerHTML = this.value;
}

var slideContainers = document.getElementsByClassName("slidecontainer");

for (var i = 0; i < slideContainers.length; i++) {
  var slider = slideContainers[i].getElementsByClassName("slider")[0];
  updateLabel.call(slider);
  slider.oninput = updateLabel;
}
