# Importing Modules

import pandas as pd
import mysql.connector as msql

# Establishing connection to Database
mydb = msql.connect(
  host="remotemysql.com",
  user="Eis9ZXGnt4",
  password="yMgWEvYmjb",
  db="Eis9ZXGnt4"
)

# Reading the values from CSV file
file = "patientdata.csv"
data = pd.read_csv(file, index_col=False, delimiter = ',')
data.head()

mycursor = mydb.cursor()

# Mentioning which Database to use
mycursor.execute("USE Eis9ZXGnt4")

# Creating the table
mycursor.execute("CREATE TABLE patientdata (DiagnosisAge nvarchar(10), Sex nvarchar(10), EthnicityCategory nvarchar(50), Histology nvarchar(50), AdjuvantTreatment nvarchar(50), ECOGPerformanceStatus nvarchar(10), SmokingHistory nvarchar(50), PersonCigaretteSmokingHistoryPackYearValue nvarchar(30), RelapseFreeStatus nvarchar(30),RelapseFreeStatusinMonths nvarchar(30), UbiquitousAssayPanel nvarchar(30), PercentNecrosis nvarchar(30), TumorVolumeincm3 nvarchar(30), TumorStage varchar(30), Positronemissiontomographytumorbackgroundratio nvarchar(30), cfDNAInput_ng nvarchar(30), LymphNodeInvolvement nvarchar(30), Ki67Percentage nvarchar(30), CTSliceSpacing nvarchar(30), patient_id nvarchar(20))")

# Inserting values into the table
insert_statement = "INSERT INTO patientdata VALUES(%s, %s, %s,%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)"
    
for i,row in data.iterrows():
  mycursor.execute(insert_statement, tuple(row)) 

# Saving the changes made
mydb.commit()

# Viewing the inserted values
mycursor.execute("select * from Eis9ZXGnt4.patientdata")
indexList = mycursor.fetchall()
print(indexList)

