### Path<br />
- /api.php
- /api.php/signup
- /api.php/signin
- /api.php/setting
- /api.php/upload
- /api.php/users
- /api.php/user/:id_pub
- /api.php/events
- /api.php/event/create
- /api.php/event/:event_id
- /api.php/event/:event_id/setting
<br /><br />
### /api.php
#### req (GET/POST|X-Code*/Multer/Text-Plain) :
```
--headers-request--

ELSE
```
#### res(JSON) :
```
--headers-responds--

{"status":"400 Bad Request", "data":"no query included"}
```
### /api.php/signup
req (POST|JSON/X-Code*/Text_Plain/*) :
```
--headers-request--

//data using fullname, birth, email, pw, location
```
res(JSON) Success:
```
--headers-responds--

{"status":"201 Created", "data":""}
```
res(JSON) Failed:
```
--headers-responds--

{"status":"406 Not Acceptable", "data":""}
```
### /api.php/signin
req (POST|JSON/X-Code*/Text_Plain/*) :
```
--headers-request--

//data using (id_pub|email), pw
```
res(JSON) Success:
```
--headers-responds--
Cookies: session=session_id

{"status":"202 Accepted", "data":{include all user data, exclude pw, session, extra[optional]}}
```
res(JSON) Error:
```
--headers-responds--

{"status":"401 Unauthorized", "data":""}
```
### /api.php/setting
### /api.php/upload
### /api.php/users
### /api.php/user/:id_pub
### /api.php/events
### /api.php/event/create
### /api.php/event/:event_id
### /api.php/event/:event_id/setting
