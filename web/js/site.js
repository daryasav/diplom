function onEntry(entry) {
    entry.forEach(change => {
      if (change.isIntersecting) {
        change.target.classList.add('element-show');
      }
    });
}
  let options = { threshold: [0.5] };
  let observer = new IntersectionObserver(onEntry, options);
  let elements = document.querySelectorAll('.element-animation');
  for (let elm of elements) {
    observer.observe(elm);
  }


function show()
{
  $.ajax({
    url: '/site/test', 
    type: "GET",
    data: {id: id_p},
    success: function(html){
      $("#lasttenposts").html(html); 
      document.getElementById('lasttenposts').scrollTo(0,document.body.scrollHeight); 
    }
  });
  document.getElementById('lasttenposts').scrollTo(0,document.body.scrollHeight); 
}
  
$(document).ready(function(){
    show();
    setTimeout(function(){
       document.getElementById('lasttenposts').scrollTo(0,document.body.scrollHeight); 
    }, 500);
    setInterval(show, 3000);
});

function sendMessage(id,idus){
  if($('.mess').val().trim().length != 0){
    var value = $('.mess').val();
    $.ajax({
        url: '/site/send-message',
        type: "POST",
        data: {val: value, id: id, idus: idus},
        success: function(res){
        $('.mess').val('');
        }
    });
  }
}