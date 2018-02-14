### Path<br />
- \/api.php
- \/api.php\/signup
- \/api.php\/signin
- \/api.php\/setting
- \/api.php\/upload
- \/api.php\/users
- \/api.php\/user\/:id_pub
- \/api.php\/events
- \/api.php\/event\/create
- \/api.php\/event\/:event_id
- \/api.php\/event\/:event_id\/setting
<br /><br />
### \/api.php
#### req (GET\/POST|X-Code*\/Multer\/Text-Plain) :
```
--headers-request--

ELSE
```
#### res(JSON) :
```
--headers-responds--

{"status":"400 Bad Request", "data":"no query included"}
```
### \/api.php\/signup
#### req (POST|JSON\/X-Code\*\/Text_Plain\/\*) :
```
--headers-request--

//data using fullname, birth, email, pw, location
```
#### res(JSON) Success:
```
--headers-responds--

{"status":"201 Created", "data":"id_sys"}
```
#### res(JSON) Failed:
```
--headers-responds--

{"status":"406 Not Acceptable", "data":""}
```
### \/api.php\/signin
#### req (POST|JSON\/X-Code\*\/Text_Plain\/\*) :
```
--headers-request--

//data using (id_pub|email), pw
```
#### res(JSON) Success:
```
--headers-responds--
Cookies: session=session_id

{"status":"202 Accepted", "data":{include all user data, exclude pw, session, extra[optional]}}
```
#### res(JSON) Error:
```
--headers-responds--

{"status":"401 Unauthorized", "data":""}
```
### \/api.php\/setting
#### req (POST|JSON\/X-Code\*\/Text_Plain\/\*) :
```
--headers-request--
Cookies: Session=sessions_id

//data using all data icluded, for password use old_pw and new_pw.
```
#### res(JSON) Success:
```
--headers-responds--

{"status":"202 Accepted", "data":{include all user data, exclude pw, session, extra[optional]}}
```
#### res(JSON) Error:
```
--headers-responds--

{"status":"406 Not Acceptable", "data":""} //data can be "password incorrect", "error input", ""
```
### \/api.php\/upload
#### req (POST|Multipart-data) :
```
--headers-request--
Cookies: Session=sessions_id

//file_chunks
```
#### res(JSON) Success:
```
--headers-responds--

{"status":"201 Created", "data":"file url"}
```
#### res(JSON) Error:
```
--headers-responds--

{"status":"500 Internal Server Error", "data":""} //get error $e->errorMessage();
```
### \/api.php\/users
#### req (POST\/GET|\*)
```
--headers-request--
```
#### res(JSON) :
```
--headers-responds--

[{id_sys, fullname, location, star, follower, following}]
```
### \/api.php\/user\/:id_pub
#### req (POST\/GET|\*)
```
--headers-request--
```
#### res(JSON) :
```
--headers-responds--

{everything except id_sys, pw, session, ev_*, extra}
```
### \/api.php\/events
#### req (POST\/GET|\*)
```
--headers-request--
```
#### res(JSON) :
```
--headers-responds--

[{id, author, title, date_created, date_event, img, join, types, member, rate, done}]
```
### \/api.php\/event\/create
#### req (POST|JSON\/X-Code\*\/Text_Plain\/\*) :
```
--headers-request--
Cookies: Session=sessions_id

//data using fullname, birth, email, pw, location
```
#### res(JSON) Success:
```
--headers-responds--

{"status":"201 Created", "data":"id"}
```
#### res(JSON) Failed:
```
--headers-responds--

{"status":"406 Not Acceptable", "data":""}
```
### \/api.php\/event\/:event_id
#### req (POST\/GET|\*)
```
--headers-request--
```
#### res(JSON) :
```
--headers-responds--

{everything excepts desc, private}
```
### \/api.php\/event\/:event_id\/setting
#### req (POST|JSON\/X-Code\*\/Text_Plain\/\*) :
```
--headers-request--
Cookies: Session=sessions_id

//data using all data icluded
```
#### res(JSON) Success:
```
--headers-responds--

{"status":"202 Accepted", "data":{include all data}}
```
#### res(JSON) Error:
```
--headers-responds--

{"status":"406 Not Acceptable", "data":""} //data can be "password incorrect", "error input", ""
```
