const sendMail = document.getElementById("sendMail");
const mail = document.getElementById("emailForm");
const contentMail = document.getElementById("emailContentForm");

sendMail.addEventListener('click', function(e){
    console.log("eh " + mail.value);
    console.log(contentMail.value);
    //e.preventDefault();
    const form = [mail.value,contentMail.value];

    register(form);
    //console.error("normalement c'est passé")
  });


async function register(form) {
    let data = new FormData();
    data.append('mail', form[0])
    data.append('content', form[1])
    data = JSON.stringify(Object.fromEntries(data)); // convert formdata to json
    console.log(data)
    let response = await fetch("./sendMail.php", {
        method: "GET",
        body: data,
        cache: 'no-cache',
        headers: {
            'content-type': 'application/json; charset=utf-8'
        }
    })
    .then(response => response.text())
    .catch(error => {
        alert("Could not connect to the registration server. Please try again later.")
        alert(error)
    });
    console.log("c'est passé par ici aussi")
}