$(".form").submit(function() {
var str = $(this).serialize();
$.ajax({
type: "POST",
url: "php/form.php",
data: str,
success: function(msg) {
if(msg == 'ok') {
alert('Письмо отправлено');
}
else {
alert('Ошибка! Возможно вы неправильно заполнили поля.');
}
}
});
return false;
});