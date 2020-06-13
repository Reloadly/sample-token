MediaType mediaType = MediaType.parse("application/json");
OkHttpClient client = new OkHttpClient().newBuilder().build();

RequestBody body = RequestBody.create(mediaType,
    "{\"client_id\": \"PUT_YOUR_CLIENT_ID_HERE\"," +
    "\"client_secret\": \"PUT_YOUR_CLIENT_SECRET_HERE\"," +
    "\"grant_type\": \"client_credentials\",\"audience\": \"https://topups.reloadly.com\"\n}"
);

Request request = new Request.Builder()
        .url("https://auth.reloadly.com/oauth/token")
        .method("POST", body)
        .addHeader("Content-Type", "application/json")
        .addHeader("Accept", "application/json")
        .build();
Response response = client.newCall(request).execute();

System.out.println(response.body().string());
