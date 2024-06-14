

- megyék listázása: /counties, pl. 127.0.0.1:8000/counties
- egy megyét visszaad: /counties/{county}, pl. 127.0.0.1:8000/counties/43
- megyéhez tartozó városok: /counties/{county}/cities, pl. 127.0.0.1:8000/counties/43/cities
- új város: /new_city
    - List item
    - város neve: city_name
    - megye id-ja: county_id
    - pl. 127.0.0.1:8000/new_city?city_name=tiszasziget&county_id=43
- város törlése: /delete_city/{city}, pl. 127.0.0.1:8000/delete_city/5
- város nevének módosítása: /update_city/{city}
    - város neve: city_name
    - pl. 127.0.0.1:8000/update_city/6?city_name=sándorfalva
