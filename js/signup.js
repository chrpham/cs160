/* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

function cambiar_login() {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";
document.querySelector('.cont_form_login').style.display = "block";
document.querySelector('.cont_form_sign_up').style.opacity = "0";

setTimeout(function(){  document.querySelector('.cont_form_login').style.opacity = "1"; },400);

setTimeout(function(){
document.querySelector('.cont_form_sign_up').style.display = "none";
},200);
  }

function cambiar_sign_up(at) {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
  document.querySelector('.cont_form_sign_up').style.display = "block";
document.querySelector('.cont_form_login').style.opacity = "0";

setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";
},100);

setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";
},400);


}



function ocultar_login_sign_up() {

document.querySelector('.cont_forms').className = "cont_forms";
document.querySelector('.cont_form_sign_up').style.opacity = "0";
document.querySelector('.cont_form_login').style.opacity = "0";

setTimeout(function(){
document.querySelector('.cont_form_sign_up').style.display = "none";
document.querySelector('.cont_form_login').style.display = "none";
},500);

}

function server_login(){
    // TBA
    window.alert('server_login');
}

function server_signup(){
    var id = document.getElementById('user_id').value;
    var name = document.getElementById('user_name').value;
    var pass = document.getElementById('user_password').value;
    var conf_pass = document.getElementById('confirm_password').value;

    if(password != conf_pass){
        // check if password match
        alert('Password not match!');
    }
    else{
        // it's better to do with ajax, but this also works
        post('php/Signup.php', {user_id: id, user_name: name, user_password: password});
    }
}

function post(path, params, method) {
    method = method || "post"; // Set method to post by default

    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
         }
    }

    document.body.appendChild(form);
    form.submit();
}
