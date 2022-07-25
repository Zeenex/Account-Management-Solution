<?php
use Dompdf\Dompdf;

session_start();
if (! empty($_SESSION["staff_id"])) {


include("$_SERVER[DOCUMENT_ROOT]/Coporative/admin/scripts/dashboard.php");


require_once 'dompdf/autoload.inc.php';

$contriinv = mysqli_query($mysqli, "SELECT * FROM contribution ORDER BY month");


$document = new Dompdf();


$output = '
     


             <div class="row">
              <div class="col" style="margin: 0">
                  <img src="img/capture3.png" />
              </div>
            </div>


                      <table align="center" style="font-size: 14px; margin-top: 10px;border: 1px solid black;border-collapse: collapse; width: 100%;">
                        <thead>
                          <tr>

                            <th style="padding: 10px; border: 1px solid black;"> Name </th>
                            <th style="padding: 10px; border: 1px solid black;"> Monthly Amount  </th>
                            <th style="padding: 10px; border: 1px solid black;"> Savings</th>
                            <th style="padding: 10px; border: 1px solid black;"> Month </th>
                            
                          </tr>
                        </thead>
                        <tbody>

';
                         while($rows=mysqli_fetch_array($contriinv)){

$output .= '

                <tr>
                              <td style="padding: 10px; border: 1px solid black;">'.$rows['name'].'</td>
                              <td style="padding: 10px; border: 1px solid black;">'.$rows['contrib_amount'].'</td>
                              <td style="padding: 10px; border: 1px solid black;">'.$rows['savings'].'</td>
                              <td style="padding: 10px; border: 1px solid black;">'.$rows['month'].'</td>
                              </tr>
                   
';

} 

$output .= '

            
                        </tbody>
                      </table>


';
   




$document->loadHtml($output);

//set page size and orientation

$document->setPaper('A4', 'portrait');

$document->render();

//Get output of generated pdf in Browser

$document->stream("Report", array("Attachment"=>0));

}
?>