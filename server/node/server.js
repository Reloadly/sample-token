var myHeaders = new Headers();
myHeaders.append("Content-Type", "application/json");
myHeaders.append("Accept", "application/json");

var raw = JSON.stringify(
    {"client_id":"PUT_YOUR_CLIENT_ID_HERE",
      "client_secret":"PUT_YOUR_CLIENT_SECRET_HERE",
      "grant_type":"client_credentials","audience":"https://topups.reloadly.com"}
);

var requestOptions = {
  method: 'POST',
  headers: myHeaders,
  body: raw,
  redirect: 'follow'
};

fetch("https://auth.reloadly.com/oauth/token", requestOptions)
    .then(response => response.text())
    .then(result => console.log(result))
    .catch(error => console.log('error', error));
});
