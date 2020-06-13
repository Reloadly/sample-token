
import http.client
import mimetypes
conn = http.client.HTTPSConnection("auth.reloadly.com")
payload = "{\"client_id\": \"PUT_YOUR_CLIENT_ID_HERE\"," +
            "\"client_secret\": \"PUT_YOUR_CLIENT_SECRET_HERE\"," +
            "\"grant_type\": \"client_credentials\",\"audience\": \"https://topups.reloadly.com\"\n}"
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
conn.request("POST", "/oauth/token", payload, headers)
res = conn.getresponse()
data = res.read()
print(data.decode("utf-8"))
