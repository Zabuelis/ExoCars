const picker = document.getElementById('date');
picker.addEventListener('input', function(e){
  var day = new Date(this.value).getUTCDay();
  if(day == 6 || day == 0){
    this.value = '';
    alert('Weekends are not allowed');
  }
});