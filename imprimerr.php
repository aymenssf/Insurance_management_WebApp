
<?php  
 require_once('./tcpdf/tcpdf.php');  

$dbHandler = new PDO('mysql:host=localhost;dbname=gestion_assurance', 'root', '');
$dbStatment = $dbHandler->prepare("select * from assurance join client on client.ndoss=assurance.ndoss WHERE dateF between '".$_GET['date1']."' and '".$_GET['date2']."'  ");
$dbStatment->execute();
$c = $dbStatment->fetch(PDO::FETCH_OBJ);

    
    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des assurances</title>
    </head>
    <style>
    *{
        font-family: Arial, Helvetica, sans-serif;
    }
        
        .container{
            width: 100%;
            margin: 0 auto;
        }
        table{
            border-collapse: collapse;
            width: 100%;
            margin: 0 auto;
        }
        th,td{
            border: 1px solid gray;
            height:20px
            padding: 20px;
            text-align: left;
        }
        th{
            font-weight:900;
        }
        .table{
            text-align: right;
        }
        </style>
        <body>
        <h1>Liste des assurances</h1>
        <div class="container">
            <table>
            <thead>
                <tr>
                    <th>N°Dossier</th>
                    <th>Police</th>
                    <th>Assuré</th>
                    <th>Telephone</th>
                    <th>Usage</th>
                    <th>Date Fin</th>
                </tr>
                </thead>
                <tbody>';           
    do
    { 
        $html .= '<tr>  
                    <td>'. $c->ndoss .'</td>  
                    <td>'.$c->police.'</td>  
                    <td>'.$c->asr.'</td>  
                    <td>'.$c->tel.'</td>
                    <td>'.$c->type.'</td>
                    <td>'.$c->dateF.'</td>
                </tr>';
    }
    while($c = $dbStatment->fetch(PDO::FETCH_OBJ)) ;
        
                  

    $html .= '</tbody>
        </table>
        </div>
        </body>
        </html>';


      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);   
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();    
      $obj_pdf->writeHTML($html);  
      ob_end_clean();
      $obj_pdf->Output('liste.pdf', 'I');  

 ?>  