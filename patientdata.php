<?php
    $json=file_get_contents("patientsample.json");
    $data =  json_decode($json);

    if (count($data->patient_meta)) {
        // Open the table
        echo "<table id='myTable'>";
        echo "<tr class='header'>";
        // Output the headings
        echo "<th>Diagnosis Age</th>";
        echo "<th>Sex</th>";
        echo "<th>Ethnicity Category</th>";
        echo "<th>Histology</th>";
        echo "<th>Adjuvant Treatment</th>";
        echo "<th>ECOG Performance Status</th>";
        echo "<th>Smoking History</th>";
        echo "<th>Person Cigarette Smoking History Pack Year Value</th>";
        echo "<th>Relapse Free Status</th>";
        echo "<th>Relapse Free Status (Months)</th>";
        echo "<th>Ubiquitous Assay Panel</th>";
        echo "<th>Percent Necrosis</th>";
        echo "<th>Tumor Volume(cm3)</th>";
        echo "<th>Tumor Stage</th>";
        echo "<th>Positron emission tomography, tumor background ratio</th>";
        echo "<th>cfDNA Input (ng)</th>";
        echo "<th>Lymph Node Involvement</th>";
        echo "<th>Ki67 Percentage</th>";
        echo "<th>CT Slice Spacing</th>";
        echo "<th>patient_id</th>";
        echo"</tr>";
        // Cycle through the array
        foreach ($data->patient_meta as $idx => $patient_meta) {
            
            // Output a row
            echo "<tr>";
            echo "<td>$patient_meta->DiagnosisAge</td>";
            echo "<td>$patient_meta->Sex</td>";
            echo "<td>$patient_meta->EthnicityCategory</td>";
            echo "<td>$patient_meta->Histology</td>";
            echo "<td>$patient_meta->AdjuvantTreatment</td>";
            echo "<td>$patient_meta->ECOGPerformanceStatus</td>";
            echo "<td>$patient_meta->SmokingHistory</td>";
            echo "<td>$patient_meta->PersonCigaretteSmokingHistoryPackYearValue</td>";
            echo "<td>$patient_meta->RelapseFreeStatus</td>";
            echo "<td>$patient_meta->RelapseFreeStatus(Months)</td>";
            echo "<td>$patient_meta->UbiquitousAssayPanel</td>";
            echo "<td>$patient_meta->PercentNecrosis</td>";
            echo "<td>$patient_meta->TumorVolume(cm3)</td>";
            echo "<td>$patient_meta->TumorStage</td>";
            echo "<td>$patient_meta->Positronemissiontomographytumorbackgroundratio</td>";
            echo "<td>$patient_meta->cfDNAInput(ng)</td>";
            echo "<td>$patient_meta->LymphNodeInvolvement</td>";
            echo "<td>$patient_meta->Ki67Percentage</td>";
            echo "<td>$patient_meta->CTSliceSpacing</td>";
            echo "<td>$patient_meta->patient_id</td>";
            echo "</tr>";
        }
        // Close the table
        echo "</table>";
    }
?>
