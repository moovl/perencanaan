# Api References <br />
url on /api.php<br />
return JSON<br /><br />

function :
  - cmd=signup
  - cmd=signin
  - cmd=setting
  - cmd=list&list=users
  - cmd=user&uid=_:userid_
  - cmd=list&list=events
  - cmd=create&types=event
  - cmd=event&eid=_:eventid_
  - cmd=upload&type=_:type_
  
  
more :
  - \:userid, \:eventid, \:type
  - filter
  - Using Get and Post
  - encryption
  - return
  
## Function


### cmd=signup
method : POST
enctype : text/plain
status : encrypted
```
//id_sys, id_pub, fullname, birth, email, pw, location, bio, session, star, follower, following, lookup, ev_done, ev_do, ev_made, ev_come, ev_saved
//data first included :
fullname = text
birth =  DD/MM/YYYY
email = email
pw = text_encrypt
```

### cmd=signin
method : POST
```
//use email or id
email=email
id=text
pw=text_encrypt
```

### cmd=setting
method : POST
```
//only include key that will changed
//id_sys, session, star, follower, following, ev_done, ev_made, ev_come, ev_saved cant changed
```

### cmd=list&list=users
method : GET
more query : filter=key:value;
return : id_pub, fullname, location, bio, star, follower, following, lookup, ev_done, ev_do, ev_made, ev_come, ev_saved

### cmd=user&uid=_:userid_
method : GET
return : id_pub, fullname, location, bio, star, follower, following, lookup, ev_done, ev_do, ev_made, ev_come, ev_saved

### cmd=list&list=events
### cmd=create&types=event
### cmd=event&eid=_:eventid_
