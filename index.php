<!--Assignment Name : Patient Database
Date       : 05 Nov 2021
Time Taken  : 5 Days
Reference1 : https://www.w3schools.com/
Reference2 : https://www.geeksforgeeks.org
Reference3 : https://stackoverflow.com/ 
Author name : B Madhan
Take away  : In depth understanding of python Mysql module, performing operations in Database, Converting data into json, got the opportunity to learn php, html and css as well and I understood the working of all this together in real time environment.-->

<html>
  <head>
    <!-- Title for the Page -->
    <title>Patient Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Including style for the page -->
    <style>
    * {
      box-sizing: border-box;
    }

    #myInput {
      background-position: 10px 10px;
      background-repeat: no-repeat;
      width: 100%;
      font-size: 16px;
      padding: 12px 20px 12px 40px;
      border: 1px solid #ddd;
      margin-bottom: 12px;
    }

    #myTable {
      border-collapse: collapse;
      width: 100%;
      border: 1px solid #ddd;
      font-size: 18px;
    }

    #myTable th, #myTable td {
      text-align: left;
      padding: 12px;
    }

    #myTable tr {
      border-bottom: 1px solid #ddd;
    }

    #myTable tr.header, #myTable tr:hover, .header {
      background-color: #f1f1f1;
    }

    
    </style>
  </head>
  <body>

    <!-- Script to perform the search -->
    <script>
      function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[19];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }       
        }
      }
      </script>

      <!-- Search Box -->
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Patient ID" title="Type in a Patient ID">
    <div>

    <!-- Including the php file -->
    <?php include 'patientdata.php'; ?> 
    </div>
  </body>
</html>