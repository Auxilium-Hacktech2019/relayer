GET:

`https://maps.googleapis.com/maps/api/place/findplacefromtext/json?key=AIzaSyBqPCGw7u3KY1ycZ8MpB7o5rCXIltzF7r8&input=hospital&inputtype=textquery&locationbias=point:37.775232,-122.4197513`

change point to start point lat,long

key is generated: `AIzaSyBqPCGw7u3KY1ycZ8MpB7o5rCXIltzF7r8`

input is category hospital

return respond sample:

```
{
    "candidates": [
        {
            "place_id": "ChIJiUQVVmsw6IARZV_J1cMl_MI"
        }
    ],
    "status": "OK"
}
```

Use `place_id` to get end point lat, long:

GET:

`https://maps.googleapis.com/maps/api/place/details/json?key=AIzaSyBqPCGw7u3KY1ycZ8MpB7o5rCXIltzF7r8&placeid=ChIJiUQVVmsw6IARZV_J1cMl_MI`

just change placeid

respond sample, just get result->geometry->location-> lat and lng

```
{
    "html_attributions": [],
    "result": {
        "address_components": [
            {
                "long_name": "215",
                "short_name": "215",
                "types": [
                    "street_number"
                ]
            },
            {
                "long_name": "West Janss Road",
                "short_name": "W Janss Rd",
                "types": [
                    "route"
                ]
            },
            {
                "long_name": "Thousand Oaks",
                "short_name": "Thousand Oaks",
                "types": [
                    "locality",
                    "political"
                ]
            },
            {
                "long_name": "Ventura County",
                "short_name": "Ventura County",
                "types": [
                    "administrative_area_level_2",
                    "political"
                ]
            },
            {
                "long_name": "California",
                "short_name": "CA",
                "types": [
                    "administrative_area_level_1",
                    "political"
                ]
            },
            {
                "long_name": "United States",
                "short_name": "US",
                "types": [
                    "country",
                    "political"
                ]
            },
            {
                "long_name": "91360",
                "short_name": "91360",
                "types": [
                    "postal_code"
                ]
            }
        ],
        "adr_address": "<span class=\"street-address\">215 W Janss Rd</span>, <span class=\"locality\">Thousand Oaks</span>, <span class=\"region\">CA</span> <span class=\"postal-code\">91360</span>, <span class=\"country-name\">USA</span>",
        "formatted_address": "215 W Janss Rd, Thousand Oaks, CA 91360, USA",
        "formatted_phone_number": "(805) 497-2727",
        "geometry": {
            "location": {
                "lat": 34.207871,
                "lng": -118.8826862
            },
            "viewport": {
                "northeast": {
                    "lat": 34.2091054802915,
                    "lng": -118.8815384197085
                },
                "southwest": {
                    "lat": 34.2064075197085,
                    "lng": -118.8842363802915
                }
            }
        },
        "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/doctor-71.png",
        "id": "457dce4b7da38038928761e6aef797b04a2e214f",
        "international_phone_number": "+1 805-497-2727",
        "name": "Los Robles Regional Medical Center",
        "opening_hours": {
            "open_now": true,
            "periods": [
                {
                    "open": {
                        "day": 0,
                        "time": "0000"
                    }
                }
            ],
            "weekday_text": [
                "Monday: Open 24 hours",
                "Tuesday: Open 24 hours",
                "Wednesday: Open 24 hours",
                "Thursday: Open 24 hours",
                "Friday: Open 24 hours",
                "Saturday: Open 24 hours",
                "Sunday: Open 24 hours"
            ]
        },
        "photos": [
            {
                "height": 499,
                "html_attributions": [
                    "<a href=\"https://maps.google.com/maps/contrib/100245350833566921575/photos\">Los Robles Regional Medical Center</a>"
                ],
                "photo_reference": "CmRaAAAA4aW4vjAAkZ3roNxd5_fnWaZgdpLDPg--NJAjDhDI-8LUOlWW6kInCS1BHwS5qBy-OBbXtIThOb2bs47_bXYSia0oyX6tk_x7jEpQh6cdOeFYahCB5JBybvmeSSY9GZFOEhA-jFktDfkT-3TkfR_D_P1hGhTn47_wCrtYNmVy2DOVPuGi_CAF3Q",
                "width": 888
            },
            {
                "height": 4000,
                "html_attributions": [
                    "<a href=\"https://maps.google.com/maps/contrib/100245350833566921575/photos\">Los Robles Regional Medical Center</a>"
                ],
                "photo_reference": "CmRaAAAA4aGxCO5sLCm7o_vAinw6F24PTJeR-a44MVQcsKuLi8WrSGMABcHna3jYF1Ne9pgD8MRu9qowz0vbP9kJ1eaaq1eoh4PE1y6MB593w185A8SdfvJLMtv_mtFAUUfbGKFBEhDj4QEZudAlKX4wc5lbYH6zGhTHUaIlxkiAEp1mYwoE6jmkvW03vA",
                "width": 6000
            },
            {
                "height": 3856,
                "html_attributions": [
                    "<a href=\"https://maps.google.com/maps/contrib/100245350833566921575/photos\">Los Robles Regional Medical Center</a>"
                ],
                "photo_reference": "CmRaAAAAAqwEXpwrAybXq8TbmQWkbgmj8HgcdlA7_SWJW3MKW1F8_5GS_vCa83dquB9qXoXEPogvx0uipLLWe6ecUlO9t2jilmH6X1oM-94Ft_2YTARV-2sltihZusU4frS3R-hXEhAlqL_aDXUkPA5QDFwLEe3IGhTDf1yeV5QpFHX9RaKxEG_EEDAo7w",
                "width": 5784
            },
            {
                "height": 3398,
                "html_attributions": [
                    "<a href=\"https://maps.google.com/maps/contrib/100245350833566921575/photos\">Los Robles Regional Medical Center</a>"
                ],
                "photo_reference": "CmRaAAAA1DLyIat2Dqo2yhBeoyExHMI07MjIzHjIVwGo_j9xf9wBVheerPDkQrjVxsZUBr9YC6RFpaPU--_SEQ3eJ9QbYL3QHRV4LCde7dyMNNbsatl9NigvZXIyjEOt8IFK32xKEhBvKU3uGUZVfTrGEhMw28IJGhRcCOdqOtxGYWoFuEt8qEPsbOtPUg",
                "width": 5680
            },
            {
                "height": 3496,
                "html_attributions": [
                    "<a href=\"https://maps.google.com/maps/contrib/100245350833566921575/photos\">Los Robles Regional Medical Center</a>"
                ],
                "photo_reference": "CmRaAAAAToycDMXnfA8BL84MPfggHA26kTSlHGaNK1-OfVJ0xHGEdySfRE7pjbsne-EB2a8h5FNPzz1INC9lw6Iq8ys5VADddDqLpRvm8_jM1Srwm6YtzNoZgWvdIjkjSt8Ma6JIEhBbNfDOKOTeHT-QzYWWm5jdGhSjyPd10Nim8Y9teW0Li0TZ1940yg",
                "width": 5914
            },
            {
                "height": 3866,
                "html_attributions": [
                    "<a href=\"https://maps.google.com/maps/contrib/100245350833566921575/photos\">Los Robles Regional Medical Center</a>"
                ],
                "photo_reference": "CmRaAAAASm0Jc3GxJTAcM8B7dxgA4pegjdy8hW1k-7R3Y6lRANNIYPC27S2nTOGk3HWl7juYX0zIYhUYBxpkE3Zo9wDMj0uzOFBGe2_W1qPTkGYVmJsIfrplj2Cl9iEkbmkvXRoEEhDjHxmwEFBJHuvt-_6mt39RGhQu1eczCTBQ6nmvCYjqS1zFU--agQ",
                "width": 5799
            },
            {
                "height": 1440,
                "html_attributions": [
                    "<a href=\"https://maps.google.com/maps/contrib/101494898236439918481/photos\">Paul DiSalvio</a>"
                ],
                "photo_reference": "CmRaAAAAZ3Ygy-9upR3jn51aaipvjBje7A2OAwr9o9CvKlfcAKo_NzKK63dV67XIn17DRc4AZ2Yy4GBsZuqxQan6eYgYbAw1yOF2GaqPTnmzR5sN_-YCJhozd1DzX1msZpa-ZMQSEhDSxu4lE1N8scM6DwBD0xHAGhTA92RE4S1uIVGkcbqnd0heyYA-0Q",
                "width": 2560
            },
            {
                "height": 3630,
                "html_attributions": [
                    "<a href=\"https://maps.google.com/maps/contrib/100245350833566921575/photos\">Los Robles Regional Medical Center</a>"
                ],
                "photo_reference": "CmRaAAAAzU40r300SR12kZf015ofllW7EShD-lapaDR1CE8hAIG0JIzF0jtLM2LMWNja4f_sYxLtwgO6XdtXKAwU1tPmXnY-AJF2gUZSBeuEpyoMI4RQnx0qTzeRFrF4Yep1wSE8EhA86K0-2RyHb-BDPZ4ARt1CGhRPvTt-Wa426Bjz6JUbc8V442TXDQ",
                "width": 5727
            },
            {
                "height": 2988,
                "html_attributions": [
                    "<a href=\"https://maps.google.com/maps/contrib/107713335053686287338/photos\">Aaron Lemus</a>"
                ],
                "photo_reference": "CmRaAAAAffqu0Zzfg0BrXSfOh9G8wnA8z_IOMusZ3yFbRCBmfpTdHNpiVosc5sHXRb8fz6pvQ_1KV7Af3dVFq5UzVab86EjFBA5UADEouZRwHPGiwzht8cH6N9zNTBw14Yl_-ubTEhB2QDda5O81guqc0q6Le_i_GhTSNmUy5HmMZQyHljXfTM7o8RqLGA",
                "width": 5312
            },
            {
                "height": 1323,
                "html_attributions": [
                    "<a href=\"https://maps.google.com/maps/contrib/104398099469476310029/photos\">TheCHIEF BIGFAITH</a>"
                ],
                "photo_reference": "CmRaAAAAosaR44fd7DqYpQTX75Wx8BenJyKTo0UIHeJoA2Dz1n1w2UsC79YqZH2xY6pXCVhSe_99uaFfERKicBCmXmzsekAzyMe50S7snm8stEsX9j70uYlv92BccSUJbsIpcRvwEhA3bQWK6LCs8Gshc3IUm-0BGhQjFQHzYpsvbKVIlT-T_hHcK919_w",
                "width": 2592
            }
        ],
        "place_id": "ChIJiUQVVmsw6IARZV_J1cMl_MI",
        "plus_code": {
            "compound_code": "6458+4W Thousand Oaks, California, United States",
            "global_code": "85636458+4W"
        },
        "rating": 3.6,
        "reference": "ChIJiUQVVmsw6IARZV_J1cMl_MI",
        "reviews": [
            {
                "author_name": "Bette H",
                "author_url": "https://www.google.com/maps/contrib/110926718886576489255/reviews",
                "language": "en",
                "profile_photo_url": "https://lh3.googleusercontent.com/-CEUmyZUX23E/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rfhqJFobduaG2NUvGNLaMnt9xlnGA/s128-c0x00000000-cc-rp-mo/photo.jpg",
                "rating": 5,
                "relative_time_description": "in the last week",
                "text": "Although we retired and moved 30 minutes away from Thousand Oaks over 10 years ago, for medical treatment we always choose and prefer to return to Los Robles RMC in Thousand Oaks, for the best doctors and nurses and overall medical care.  For my recent hospitalization, night-nurse MARIA on the telemetry floor and day=nurse Vlad provided the best in nursing care that anyone could ask for. Maria was kind, strong, caring, professional, non-judging, and just plain wonderful. i just loved her!  And when Vlad took over for the day shift, the awesome nursing care continued. Thank you to both of them for making my stay comfortable and excellent!",
                "time": 1551371872
            },
            {
                "author_name": "Kevin Anderson",
                "author_url": "https://www.google.com/maps/contrib/117730254804192323187/reviews",
                "language": "en",
                "profile_photo_url": "https://lh5.googleusercontent.com/-Z0S-1fZxbQc/AAAAAAAAAAI/AAAAAAAAL-Y/C5nj5SfhK8k/s128-c0x00000000-cc-rp-mo-ba5/photo.jpg",
                "rating": 3,
                "relative_time_description": "a week ago",
                "text": "Why bother calling to find out the wait time in the emergency room? They said 7 minutes. An hour later and we are still waiting.\n\nYou're better off going anywhere else.\n\nThree stars for having clean rooms, hallways and very nice doctors.",
                "time": 1550449431
            },
            {
                "author_name": "Norma Beck",
                "author_url": "https://www.google.com/maps/contrib/108775736358583186972/reviews",
                "language": "en",
                "profile_photo_url": "https://lh4.googleusercontent.com/-3Mn8rtBoIPs/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3reZfbXHnJNEVY9LWUXawMF8EHjVdw/s128-c0x00000000-cc-rp-mo/photo.jpg",
                "rating": 1,
                "relative_time_description": "2 weeks ago",
                "text": "The ER Waiting Room was simply AWFUL.   I was constipated, but had to sit on a HARD, FIBERGLASS CHAIR FOR ABOUT 2 HRS. in a freezing cold room.  The \"nurses\", (or were they only attendants?) came out in sloppy grey (looked like pajamas) to roll me into an xray room.  I wanted to leave but couldn't move.   Finally, I went to the bathroom and had a bowel movement, and ONLY THEN did I see a medical doctor who discharged me.  Heaven help me when and if I have to return to the ER Room at Los Robles.",
                "time": 1550260101
            },
            {
                "author_name": "les ronaldo",
                "author_url": "https://www.google.com/maps/contrib/117699509683256463753/reviews",
                "language": "en",
                "profile_photo_url": "https://lh5.googleusercontent.com/-EYBkWBgBruE/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rfcLzOSkcGKq2XVh8kiU1Fp2FJg1g/s128-c0x00000000-cc-rp-mo/photo.jpg",
                "rating": 1,
                "relative_time_description": "2 weeks ago",
                "text": "Horrible experience at ER.  Waiting for 5 hours until blood result and one X-ray came out. Restrooms very felthy and when my wife went to ask the clerk about the doctor, she saw him sitting at the back room laughing and joking with other employee. Great service",
                "time": 1550037468
            },
            {
                "author_name": "Dianne Kelly",
                "author_url": "https://www.google.com/maps/contrib/114170825259698183008/reviews",
                "language": "en",
                "profile_photo_url": "https://lh6.googleusercontent.com/-T4aVGXp8OHI/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rck4tp7zBfBzkVgAM8Eds3dxX1wSw/s128-c0x00000000-cc-rp-mo/photo.jpg",
                "rating": 5,
                "relative_time_description": "in the last week",
                "text": "Each person I came in contact with during this visit was kind and professional.  It was so nice to not be treated as if I had just walked off the street and wanted a cup of coffee.",
                "time": 1551380971
            }
        ],
        "scope": "GOOGLE",
        "types": [
            "hospital",
            "point_of_interest",
            "establishment"
        ],
        "url": "https://maps.google.com/?cid=14050146460524699493",
        "user_ratings_total": 134,
        "utc_offset": -480,
        "vicinity": "215 West Janss Road, Thousand Oaks",
        "website": "http://losrobleshospital.com/?utm_campaign=corp_listings_mgmt&utm_source=google&utm_medium=business_listing&utm_content=FarWest_2"
    },
    "status": "OK"
}
```



