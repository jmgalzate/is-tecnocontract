<?php

function arraysql ($result) {
  $arrayresult=array();
  if (mysqli_num_rows($result) > 0) {
  	 while ($row = mysqli_fetch_assoc($result)){
  		   $arrayresult[] = $row;
  	 }
  }
  return $arrayresult;
};


/** This function read the table headers and after that the table rows */
function bigtable($data) {
  echo "<tr>";
  
        foreach ($data as $arrayKey => $valor) {
  
              foreach ($valor as $key => $value) {
                  echo "<th style= '
                  background-color: #FFEA80; 
                  border-top-left-radius: 1em 1em;
                  border-top-right-radius: 1em 1em;
                  border-color: white;
                  !important
                  '>".$key."</th>";
                  }
                  break;
              };
  
  echo "</tr>";
  
            foreach ($data as $arrayKey => $valor) {
              echo "<tr>";
                foreach ($valor as $key => $value) {
                  echo "<td>".$value."</td>";
                }
              echo "</tr>";
              }
  };