# Importing the necessary modules
import mysql.connector as msql
import json

# Establishing connection to Database
mydb = msql.connect(
  host="remotemysql.com",
  user="Eis9ZXGnt4",
  password="yMgWEvYmjb",
  db="Eis9ZXGnt4"
)

# Function to parse the values in the database
def query_db(query, args=(), one=False):
  cur = mydb.cursor()
  cur.execute(query, args)
  r = [dict((cur.description[i][0], value) \
    for i, value in enumerate(row)) for row in cur.fetchall()]
  return (r[0] if r else None) if one else r

# query to get all the values from the database
my_query = query_db("select * from patientdata limit %s", (100,))

# Printing the values as a JSON file
json_output = json.dumps(my_query)
print(json_output)