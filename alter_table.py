# Importing modules
import mysql.connector as msql

# Establishing connection to Database
mydb = msql.connect(
  host="remotemysql.com",
  user="Eis9ZXGnt4",
  password="yMgWEvYmjb",
  db="Eis9ZXGnt4"
)



mycursor = mydb.cursor()


# Query to rename the column
mycursor.execute("ALTER TABLE Eis9ZXGnt4.patientdata RENAME COLUMN `CT Slice Spacing` TO CTSliceSpacing")
# mycursor.execute("ALTER TABLE Eis9ZXGnt4.patientdata RENAME COLUMN `Ki67 Percentage` TO Ki67Percentage")
# mycursor.execute("ALTER TABLE Eis9ZXGnt4.patientdata RENAME COLUMN `Adjuvant Treatment` TO AdjuvantTreatment")
# mycursor.execute("ALTER TABLE Eis9ZXGnt4.patientdata RENAME COLUMN `Percent Necrosis` TO PercentNecrosis")
# mycursor.execute("ALTER TABLE Eis9ZXGnt4.patientdata RENAME COLUMN `ECOG Performance Status` TO ECOGPerformanceStatus")
# mycursor.execute("ALTER TABLE Eis9ZXGnt4.patientdata RENAME COLUMN `Smoking History` TO SmokingHistory")
# mycursor.execute("ALTER TABLE Eis9ZXGnt4.patientdata RENAME COLUMN `Person Cigarette Smoking History Pack Year Value` TO PersonCigaretteSmokingHistoryPackYearValue")
# mycursor.execute("ALTER TABLE Eis9ZXGnt4.patientdata RENAME COLUMN `Relapse Free Status` TO RelapseFreeStatus")
# mycursor.execute("ALTER TABLE Eis9ZXGnt4.patientdata RENAME COLUMN `Relapse Free Status (Months)` TO RelapseFreeStatusinMonths")
# mycursor.execute("ALTER TABLE Eis9ZXGnt4.patientdata RENAME COLUMN `Ubiquitous Assay Panel` TO UbiquitousAssayPanel")

# Query to modify the datatype of a column
mycursor.execute("ALTER TABLE Eis9ZXGnt4.patientdata MODIFY Tumor_Stage nvarchar(30)")

# Query to view the column name and its details
mycursor.execute("describe Eis9ZXGnt4.patientdata")

# Query to drop the table
# mycursor.execute("DROP TABLE Eis9ZXGnt4.patientdata")

# To view all data 
#mycursor.execute("select * from Eis9ZXGnt4.patientdata")
# indexList = mycursor.fetchall()
# print(indexList)