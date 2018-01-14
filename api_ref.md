# Api References
url on /api.php<br />
return JSON<br /><br />

[Function](#function) :
  - [cmd=signup](#cmdsignup)
  - [cmd=signin](#cmdsignin)
  - [cmd=setting](#cmdsetting)
  - [cmd=list&list=users](#cmdlistlistusers)
  - [cmd=user&uid=_:userid_](#cmduseruiduserid)
  - [cmd=list&list=events](#cmdlistlistevents)
  - [cmd=create&type=event](#cmdcreatetypevent)
  - [cmd=event&eid=_:eventid_](#cmdeventeideventid)
  - [cmd=upload&type=_:type_](#cmduploadtypetype)
  
  
More :
  - [All Queries and Variables](#all-queries-and-variables)
    -[Queries](#queries)
    -[Variables](#variables)
  - [Filter](#filter)
  - [Using Get and Post](#using-get-and-post)
  - [Encryption](#encryption)
  - [Return](#return)
  
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
method : GET
more query : filter=key:value;
return : id, author, title, date_created, date_event, img, desc, join, types, follower, rate, done

### cmd=create&types=event
method : POST
```
// using id, author, title, date_created, date_event, img, desc, join, types, follower, private, rate, done
```
### cmd=event&eid=_:eventid_
method : GET
return : id, author, title, date_created, date_event, img, desc, join, types, follower, rate, done

### cmd=upload&type=_:type_
method : POST

## More
### All Queries and Variables
#### Queries
query : cmd, list, uid, type, eid, types, filter <br /><br />
cmd : signup, signin, setting, list, user, event, create, upload <br />
list : users, events <br />
uid : _id_pub_ <br />
type : event <br />
eid : _eventid_ <br />
filter : _key:value_ <br />
#### Vairables
_id_sys_ : (new Date()).getTime().toString() + random(1000, 9999).toString() <br />

### Filter
| Key | Value | Description |
|-|-|-|
| sort | accending | sorting data from A to Z |
| sort | decending | sorting data from Z to A
| \_key | $val | get all \_key that have $val in there (match with RegExp) |
| \_key | #val | get all \_ key value that equal as #val (number) |
| \_key | #val+ | get all \_key value that more than #val (number) |
| \_key | #val- | get all \_key value that less than #val (number) |

### Using Get and Post
Get using for non secure data. Get using in address ` ?query=value `. see about Queries above <br />
Post using for securing data such as Signup, Setting, Create Event and Upload. Recomended to use JSON and see [Queries above](#queries).

### Encryption
We use Enigma Encryption with value range 4096(16^3 || 2^12 || #ffff) <br />
using 4 value : abcd <br />
each a, b, c and d has 16 values (0~15) <br />
value used : abcd,abdc,acbd,acdb,adbc,adcb,bacd,badc,bcad,bcda,bdac,bdca,cabd,cadb,cbad,cbda,cdab,cdba,dabc,dacb,dbac,dbca,dcab,dcba <br />
Method : 
```
abcd, abdc, acbd, acdb ...
abcd x abdc = aa+bb+cd+dc
abdc x acbd = aa+bc+bd+cd
acbd x acdb = aa+cc+bd+db
```
table : 
```
it will used later
```

### Return
JSON <br />
```
{
  status : [#code, "status name"],
  data : "this will include data as Objects, Array or Error Code"
}
```
you can read about status in [Wikipedia](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes)

