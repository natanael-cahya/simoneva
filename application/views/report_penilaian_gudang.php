<!DOCTYPE html>
<html>
<head>
    <title>Laporan 5S</title>
</head>
<style type="text/css">
    .table-bordered {
  border: 1px solid #dee2e6;
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #dee2e6;
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

</style>
<body>
<table class="table table-bordered" border="0" width="105%" style="margin-top: -30px;margin-left: -35px;">
    <tr class="" >
            <td style="width: 20%;"><img src="<?= base_url('img');?>/PJB_LOGO.jpg" width="80px" style="text-align: center;margin-left: 35px;margin-top: 10px;"></td>
            <td rowspan="4" style="text-align: center;font-weight: bolder;font-family: ARIAL;font-size: 22px;">PT PEMBANGKITAN JAWA BALI<br>UNIT KERJA PT PJB UBJOM PAITON</td>
            <td style="width: 20%;font-size: 12px;height: 30px;">No. Dok : IKKP-12.6.4.4.4.19</td>
    </tr>
    <tr class="">
            <td style="width: 20%;text-align: center;font-size: 10px;">UNIT KERJA</td>
            <td style="width: 20%;font-size: 12px;">Revisi : 01</td>
    </tr>
    <tr class="">
            <td style="width: 20%;text-align: center;font-size: 10px;padding-top:-10px; " rowspan="2">PT PJB UBJOM PAITON</td>
            <td style="width: 20%;font-size: 12px;">Tanggal Terbit : 15-9-2017</td>
    </tr>
    <tr class="">
             <td style="width: 20%;font-size: 12px;">Halaman : 1 Dari 1</td>
    </tr>
    <tr class="">
            <td style="font-size: 16px;text-align: center;font-weight: bolder;" colspan="3">CHECK LIST PENILAIAN AUDIT 5S</td>
    </tr>
</table>
<table class="" height="" width="105%" border="" style="margin-left:-35px;border: 1px solid #000;margin-top: 10px;">
    
    <?php
    foreach ($join_4 as $val) {
        

        
    ?>

    <tr style="border: 1px solid #000;">
            <td colspan="3" style="border: 1px solid #000;font-size: 13px;width: 230px;text-align: center;">
                KATEGORI AREA : <br><strong><?= $val->nama_kategori; ?></strong><br> &nbsp;
            </td>
            <td width="" style="border: 1px solid #000;font-size: 13px;width: 150px;text-align: center;">
                AREA : <br><strong><?= $val->nama_area ?></strong> &nbsp;
            </td>
            <td colspan="5" style="border: 1px solid #000;font-size: 13px;width: 10px;text-align: center;">
                TANGGAL : <br><strong><?= date('d-m-Y'); ?></strong> &nbsp;
            </td>
            <td style="border: 1px solid #000;font-size: 13px;width: 120px;text-align: center;">
                AUDITEE : <br><strong><?= $val->auditee; ?></strong> &nbsp;
            </td>
            <td colspan="2" style="border: 1px solid #000;font-size: 13px;text-align: center;width: 20%;">
                AUDITOR : <br><strong><?= $val->nama; ?></strong> &nbsp;
            </td>
    </tr>
    <?php } ?>
    <tr style="border: 1px solid #000;">
            <td colspan="12" style="border: 1px solid #000;">&nbsp;</td>
            
    </tr>
</table>
<table width="105%" style="margin-left: -35px;border: 1px solid #000";>

            <tr style="background-color: cyan;font-weight: bold;">
               <td colspan="2" style="border: 1px solid #000;font-size: 13px;text-align: center;width: 9%;">POIN<br>AUDIT</td> 
               <td  style="border: 1px solid #000;font-size: 13px;text-align: center;width: 13%;">DAFTAR<br>PERIKSA</td> 
               <td  style="border: 1px solid #000;font-size: 13px;text-align: center;width: 35%;">EVALUASI</td> 
               <td colspan="5" style="border: 1px solid #000;font-size: 13px;text-align: center;width: 23%;">NILAI</td> 
              
               <td  style="border: 1px solid #000;font-size: 13px;text-align: center;width: 13%;">JUMLAH<br>NILAI</td> 
               <td  style="border: 1px solid #000;font-size: 13px;text-align: center;width: 12%;">RATA-<br>RATA</td> 
            </tr>
            <tr style="font-weight: bolder;">
                <td colspan="2" style="border: 1px solid #000;text-align: center;font-size: 12px;">1</td> 
                <td colspan="2" style="border: 1px solid #000;text-align: center;font-size: 12px;">Hanya yang diperlukan, tidak berlebihan</td> 
                <td colspan="7" style="border: 1px solid #000;text-align: center;font-size: 12px;"><i>ZERO WASTE</i></td> 
            </tr>
          
            <?php
            $urut=1;
            $sum=0;
            $iterasi=count($join_4);
    foreach ($join_4 as $value) {
            $pp=$value;
            $sum+=$value->nilai;
            $rata=$sum/$iterasi;
    ?>
             <tr>
                    <?php
                    if($urut == 1){
                    echo"<td rowspan='$iterasi' style='border: 1px solid #000;font-size: 13px;text-align: center;background-color:82b3e2;'>S<br>E<br>I<br>R<br>I</td>";
                    }
                    ?>
              <td style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $urut ?></td>
              
              <td  style="border: 1px solid #000;font-size: 13px;"><?= $value->kat_deskripsi ?></td>
              <td  style="border: 1px solid #000;font-size: 13px;"><?= $value->deskripsi_eva ?></td>
              <td colspan="5" style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $value->nilai ?></td>
              
              <td  style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $sum; ?></td>
              <td  style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $rata; ?></td> 
            </tr>
            <?php  $urut++; } ?>

            <!-- 2 -->

            <tr style="font-weight: bolder;">
                <td colspan="2" style="border: 1px solid #000;text-align: center;font-size: 12px;">2</td> 
                <td colspan="2" style="border: 1px solid #000;text-align: center;font-size: 12px;">Setiap item / barang jelas kebaradaannya dan statusnya</td> 
                <td colspan="7" style="border: 1px solid #000;text-align: center;font-size: 12px;"><i>ZERO DELAY</i></td> 
            </tr>

             <?php
            $urut=1;
            $sum=0;
            $iterasi=count($join_42);
    foreach ($join_42 as $value) {
        
            $pp=$value;
            $sum+=$value->nilai;
           

            $rata=$sum/$iterasi;
           
        
    ?>
             <tr>
                    <?php
                    if($urut == 1){
                    echo"<td rowspan='$iterasi' style='border: 1px solid #000;font-size: 13px;text-align: center;background-color:e5b8b7'>S<br>E<br>I<br>T<br>O<br>N</td>";
                    }
                    ?>
              <td style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $urut ?></td>
              
              <td  style="border: 1px solid #000;font-size: 13px;"><?= $value->kat_deskripsi ?></td>
              <td  style="border: 1px solid #000;font-size: 13px;"><?= $value->deskripsi_eva ?></td>
              <td colspan="5" style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $value->nilai ?></td>
              
              <td  style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $sum; ?></td>
              <td  style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $rata; ?></td> 
            </tr>
            <?php  $urut++; } ?>

            <!-- 3 -->

            <tr style="font-weight: bolder;">
                <td colspan="2" style="border: 1px solid #000;text-align: center;font-size: 12px;">3</td> 
                <td colspan="2" style="border: 1px solid #000;text-align: center;font-size: 12px;">Area kerja bebas dari sumber kontaminasi, mengupayakan kondisi optimum</td> 
                <td colspan="7" style="border: 1px solid #000;text-align: center;font-size: 12px;"><i>ZERO BREAKDOWN</i></td> 
            </tr>

                    <?php
            $urut=1;
            $sum=0;
            $iterasi=count($join_43);
            foreach ($join_43 as $value) {
        
            $pp=$value;
            $sum+=$value->nilai;
           

            $rata=$sum/$iterasi;
           
        
    ?>
             <tr>
                    <?php
                    if($urut == 1){
                    echo"<td rowspan='$iterasi' style='border: 1px solid #000;font-size: 13px;text-align: center;background-color:c2d69b'>S<br>E<br>I<br>S<br>O</td>";
                    }
                    ?>
              <td style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $urut ?></td>
              
              <td  style="border: 1px solid #000;font-size: 13px;"><?= $value->kat_deskripsi ?></td>
              <td  style="border: 1px solid #000;font-size: 13px;"><?= $value->deskripsi_eva ?></td>
              <td colspan="5" style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $value->nilai ?></td>
              
              <td  style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $sum; ?></td>
              <td  style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $rata; ?></td> 
            </tr>
            <?php  $urut++; } ?>

            <!-- 4 -->

             <tr style="font-weight: bolder;">
                <td colspan="2" style="border: 1px solid #000;text-align: center;font-size: 12px;">4</td> 
                <td colspan="2" style="border: 1px solid #000;text-align: center;font-size: 12px;">Mempertahankan Kondisi optimum</td> 
                <td colspan="7" style="border: 1px solid #000;text-align: center;font-size: 12px;"><i>ZERO DEFECT</i></td> 
            </tr>

                    <?php
            $urut=1;
            $sum=0;
            $iterasi=count($join_44);
            foreach ($join_44 as $value) {
        
            $pp=$value;
            $sum+=$value->nilai;
           

            $rata=$sum/$iterasi;
           
        
    ?>
             <tr>
                    <?php
                    if($urut == 1){
                    echo"<td rowspan='$iterasi' style='border: 1px solid #000;font-size: 13px;text-align: center;background-color:c2d69b'>S<br>E<br>I<br>K<br>E<br>T<br>S<br>U</td>";
                    }
                    ?>
              <td style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $urut ?></td>
              
              <td  style="border: 1px solid #000;font-size: 13px;"><?= $value->kat_deskripsi ?></td>
              <td  style="border: 1px solid #000;font-size: 13px;"><?= $value->deskripsi_eva ?></td>
              <td colspan="5" style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $value->nilai ?></td>
              
              <td  style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $sum; ?></td>
              <td  style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $rata; ?></td> 
            </tr>
            <?php  $urut++; } ?>

            <!-- 5 -->
             <tr style="font-weight: bolder;">
                <td colspan="2" style="border: 1px solid #000;text-align: center;font-size: 12px;">5</td> 
                <td colspan="2" style="border: 1px solid #000;text-align: center;font-size: 12px;">Setiap personil berdisiplin dan taat pada standar</td> 
                <td colspan="7" style="border: 1px solid #000;text-align: center;font-size: 12px;"><i>ZERO NON UTILIZED TALENT</i></td> 
            </tr>

                    <?php
            $urut=1;
            $sum=0;
            $iterasi=count($join_45);
            foreach ($join_45 as $value) {
        
            $pp=$value;
            $sum+=$value->nilai;
           

            $rata=$sum/$iterasi;
           
        
    ?>
             <tr>
                    <?php
                    if($urut == 1){
                    echo"<td rowspan='$iterasi' style='border: 1px solid #000;font-size: 13px;text-align: center;background-color:c2d69b'>S<br>H<br>I<br>T<br>S<br>U<br>K<br>E</td>";
                    }
                    ?>
              <td style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $urut ?></td>
              
              <td  style="border: 1px solid #000;font-size: 13px;"><?= $value->kat_deskripsi ?></td>
              <td  style="border: 1px solid #000;font-size: 13px;"><?= $value->deskripsi_eva ?></td>
              <td colspan="5" style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $value->nilai ?></td>
              
              <td  style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $sum; ?></td>
              <td  style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $rata; ?></td> 
            </tr>
            <?php  $urut++; } ?>
            <tr>
                <td colspan="9"></td>
                <td style="border: 1px solid #000;font-size: 13px;text-align: center;">TOTAL</td>
                <?php
                $sumx=0;
                $iter=count($join_all);
                foreach ($join_all as $valu) {
            
                 $sumx+=$valu->nilai;  

                 $rata2=$sumx/$iter;
                  }
                 ?>
                <td style="border: 1px solid #000;font-size: 13px;text-align: center;"><?= $rata2; ?></td>

            </tr>
            


</table>
</body>
</html>