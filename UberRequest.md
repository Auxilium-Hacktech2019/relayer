Login URL



```
https://login.uber.com/oauth/v2/authorize?response_type=code&client_id=VXsQntCvlmfiTFw9dNhRA81jXDCO_yNU&scope=request%20profile%20history&redirect_uri=https://hacktech-2019-lifesavor.github.io
```



mithsul@foxmail authorization code

`crd.EA.CAESEKEROeco0kUppceDbAPmvSUiATE.kE7aJRrSfQ95679aObxWV-kcklwXJg92-ybs4yV6uEI`

access token

`JA.VUNmGAAAAAAAEgASAAAABwAIAAwAAAAAAAAAEgAAAAAAAAG8AAAAFAAAAAAADgAQAAQAAAAIAAwAAAAOAAAAkAAAABwAAAAEAAAAEAAAAF4n4Ev1XX_06M7h07GUkGVsAAAAalJyiAOkLpJ4ukBu03sdRF5C3MYnotMBvYI5uJ4O8QtcfQJUdZPXuIAsI-VTNextrwkGAqegQTv2xho1JP3ctPR8q1a3ckIHrukIzJLfjStUYIxHj9eFmmMF4Sf7bZawoQ8BCaXSw54dc25fDAAAAJzyOofz3Fxt4FQ6RCQAAABiMGQ4NTgwMy0zOGEwLTQyYjMtODA2ZS03YTRjZjhlMTk2ZWU`





MGR authorization code

`crd.EA.CAESEGxqMcMgOUtSu5uT6rNOwmkiATE.zOin0V84IAADyxN5wxJ66PpaWwD1BnAopBrWFOJShbY`

Access Token:

`JA.VUNmGAAAAAAAEgASAAAABwAIAAwAAAAAAAAAEgAAAAAAAAG8AAAAFAAAAAAADgAQAAQAAAAIAAwAAAAOAAAAkAAAABwAAAAEAAAAEAAAADr88x9CKlCYl2jpNTBwcghsAAAAFTaKCYmv4fxtBvb-cyJ43p9MOeT1imgOSYph4_hAowwvGDP_JD_lHOCLI72-V1HoARjfJoCBNl6DONZyEdjakfVhvKChU9jjyZnyhgrURToem9LuGEm98vbyF5LLpKZfw8nUQmJfaxf6Vsy5DAAAAIf-hMV8BK5R4q28lSQAAABiMGQ4NTgwMy0zOGEwLTQyYjMtODA2ZS03YTRjZjhlMTk2ZWU`



Command to get access token from auth code
```
curl -F 'client_secret=x_yctuQtvsEo1IMTnDotNdBazZM_gR_WYZMjHYYx' \
    -F 'client_id=VXsQntCvlmfiTFw9dNhRA81jXDCO_yNU' \
    -F 'grant_type=authorization_code' \
    -F 'redirect_uri=https://hacktech-2019-lifesavor.github.io' \
    -F 'scope=profile delivery history places ride_widgets all_trips request_receipt request' \
    -F 'code=crd.EA.CAESEKEROeco0kUppceDbAPmvSUiATE.kE7aJRrSfQ95679aObxWV-kcklwXJg92-ybs4yV6uEI' \
    https://login.uber.com/oauth/v2/token
```





POST以下内容获得`fare_id`,使用产品uberx（由product_id决定）

```bash
curl -X POST -H "Authorization: Bearer JA.VUNmGAAAAAAAEgASAAAABwAIAAwAAAAAAAAAEgAAAAAAAAG8AAAAFAAAAAAADgAQAAQAAAAIAAwAAAAOAAAAkAAAABwAAAAEAAAAEAAAAF4n4Ev1XX_06M7h07GUkGVsAAAAalJyiAOkLpJ4ukBu03sdRF5C3MYnotMBvYI5uJ4O8QtcfQJUdZPXuIAsI-VTNextrwkGAqegQTv2xho1JP3ctPR8q1a3ckIHrukIzJLfjStUYIxHj9eFmmMF4Sf7bZawoQ8BCaXSw54dc25fDAAAAJzyOofz3Fxt4FQ6RCQAAABiMGQ4NTgwMy0zOGEwLTQyYjMtODA2ZS03YTRjZjhlMTk2ZWU" \
     -H "Content-Type: application/json" -d \
     '{"product_id": "57c0ff4e-1493-4ef9-a4df-6b961525cf92", "start_latitude":"37.775232", "start_longitude": "-122.4197513", "end_latitude":"37.7899886", "end_longitude": "-122.4021253","seat_count": "4"}' \
      https://api.uber.com/v1.2/requests/estimate
```

example respond

```bash
{
  "fare": {
    "value": 4.32,
    "fare_id": "d67b07577b3c86fd23e483d50c84e5152e550b6abb03cece4fc3793c0c068f2e",
    "expires_at": 1477285210,
    "display": "$4.32",
    "currency_code": "USD"
  },
  "trip": {
    "distance_unit": "mile",
    "duration_estimate": 600,
    "distance_estimate": 2.39
  },
  "pickup_estimate": 4
}
```

request a ride now

```bash
curl -X POST 'https://sandbox-api.uber.com/v1.2/requests' \
     -H 'Content-Type: application/json' \
     -H 'Authorization: Bearer JA.VUNmGAAAAAAAEgASAAAABwAIAAwAAAAAAAAAEgAAAAAAAAG8AAAAFAAAAAAADgAQAAQAAAAIAAwAAAAOAAAAkAAAABwAAAAEAAAAEAAAAF4n4Ev1XX_06M7h07GUkGVsAAAAalJyiAOkLpJ4ukBu03sdRF5C3MYnotMBvYI5uJ4O8QtcfQJUdZPXuIAsI-VTNextrwkGAqegQTv2xho1JP3ctPR8q1a3ckIHrukIzJLfjStUYIxHj9eFmmMF4Sf7bZawoQ8BCaXSw54dc25fDAAAAJzyOofz3Fxt4FQ6RCQAAABiMGQ4NTgwMy0zOGEwLTQyYjMtODA2ZS03YTRjZjhlMTk2ZWU' \
     -d '{ "fare_id": "从上次获得的fareid", "product_id": "57c0ff4e-1493-4ef9-a4df-6b961525cf92", "start_latitude": 37.761492, "start_longitude": -122.423941, "end_latitude": 37.775393, "end_longitude": -122.417546 }'
```

