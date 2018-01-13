# Web Maps Based Form or AJAX methods

|method|action|target|dtType|enctype|data|
|------|------|------|------|-------|----|
| GET | /api.php\[?key=value\[&key=value]\[&key=value]...] | \_self | * | * | _null_ |
| POST | /api.php | \_self | form | application/x-www-form-urlencoded | _formData_ |
| POST | /api.php | \_self | form | text/plain | _formData_ |
| POST | /api.php | \_self | form | multipart/form-data | _formData_ |
| POST | /api.php | \_self | text/plain | text/plain | _data_ |
| POST | /api.php | \_self | json | text/plain | _JSON_ |
| GET | /index.html | \_self | * | * | _null_ |
| GET | /account/signup.html | \_self | * | * | _null_ |
| GET | /account/signin.html | \_self | * | * | _null_ |
| GET | /account/setting.html | \_self | * | * | _null_ |
| GET | /account/repair.html | \_self | * | * | _null_ |
| GET | /account/:userid/index.html | \_self | * | * | _null_ |
| GET | /account/:userid/about.html\[?type=(bio\|followers\|following\|joins\|likes)] | \_self | * | * | _null_ |
| GET | /account/:userid/statistic.html | \_self | * | * | _null_ |
| GET | /events/index.html\[?filter=\[sort:(accending\|decending);]\[key:value;]\[key:value;]\[key:value;]...] => key=time_created,time_done,time_comes,time_now,type,fav,price,max,join | \_self | * | * | _null_ |
| GET | /events/event.php?id=:eventid | \_self | * | * | _null_ |
| GET | /events/create.html | \_self | * | * | _null_ |
| POST | /events/event.php?id=:eventid | \_self | text/plain | text/plain | edit |
| GET | /events/event.php?id=:eventid&cmd=forum&id1=:id1 | \_self | * | * | _null_ |
| GET | /events/event.php?id=:eventid&cmd=forms | \_self | * | * | _null_ |

notes :
_key_ : this means data is Object.key
api.php see refenrences
