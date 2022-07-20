let name_input = document.getElementById('name');
let email_input = document.getElementById('email');
let password_input = document.getElementById('password');
let submit_btn = document.getElementById('submit_btn');

let token = "1|1vLfkfFa7Id7mSbWIxaOXXG4qTjohUthd33zXxTM";


submit_btn.addEventListener('click', function(){

login = '/api/auth/v0/register';

    let form_data = {
        name: name_input.value,
        email: email_input.value,
        password: password_input.value,

      };

      console.log(form_data);

    fetch(login, {
        method: "post",
        headers: {
            'Content-Type': 'application/json'
            // 'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: JSON.stringify(form_data)
    })
    .then(response => response.json())
    .then(data => console.log(data));


    // fetch(login, {
    //     method: "POST",
    //     headers: {
    //       Accept: "application/json, text/plain, */*",
    //       "Content-Type": "application/json",
    //     },
    //     body: JSON.stringify({
    //       email: form.email.value,
    //       password: form.password.value,
    //     }),
    //   })
    //     .then((response) => response.json())
    //     .then((data) => console.log(data))
    //     .catch((err) => {
    //       console.log(err);
    //      });





});
