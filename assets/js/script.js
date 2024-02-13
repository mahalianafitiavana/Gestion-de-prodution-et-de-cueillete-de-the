function change() {
    var eyeIcon = document.getElementsByName('eye')[0];
    var pwd = document.getElementsByName('pwd')[0];
    if (eyeIcon.classList.contains('glyphicon-eye-open')) {
        eyeIcon.classList.remove('glyphicon-eye-open');
        eyeIcon.classList.add('glyphicon-eye-close');
        pwd.type = 'password';
    } else {
        eyeIcon.classList.remove('glyphicon-eye-close');
        eyeIcon.classList.add('glyphicon-eye-open');
        pwd.type = 'text';
    }
}
