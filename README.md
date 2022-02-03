setup the db connection
migrate:fresh --seed
post request /api/login username=root&password=password
copy the token
and use it on headers Authorization token to have access on api/beers/get route

happy dd()
