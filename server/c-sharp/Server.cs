var client = new RestClient("https://auth.reloadly.com/oauth/token");
client.Timeout = -1;
var request = new RestRequest(Method.POST);

request.AddHeader("Content-Type", "application/json");
request.AddHeader("Accept", "application/json");

request.AddParameter("application/json", "{\"client_id\": \"PUT_YOUR_CLIENT_ID_HERE\"," +
            "\"client_secret\": \"PUT_YOUR_CLIENT_SECRET_HERE\"," +
            "\"grant_type\": \"client_credentials\",\"audience\": \"https://topups.reloadly.com\"\n}"
    );

IRestResponse response = client.Execute(request);
Console.WriteLine(response.Content);
