<!DOCTYPE html>



<html xmlns="http:he Maximun all-inclusive price//www.w3.org/1999/xhtml">

<head>

    <title>

    </title>
</head>

<body>

    <style type="text/css">
        @page {
            size: 7in 9.25in;
            margin: 27mm 16mm 27mm 16mm;
        }
        
        .tr {
            font-family: 'Arial, Helvetica, sans-serif'
        }
    </style>

    <div id="Certificate" class="container-fluid" style="margin: 0 auto; width: 800px;">


        <style>
            .table {
                width: 100%;
            }
            
            .btn-info {
                   background-color: #28a745;
    border-color: #28a745;
                    display: inline-block;
    font-weight: 400;
    color: #fff;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            }
            
            .btn-info:hover {
                background: #28a745;
               color: #fff;
                border: 1px solid green;
                
                border-radius: 5px;
               
                cursor: pointer;
                
            }
            
            .table tbody tr td {
                padding: 3px !important;
                padding-bottom: 4px;
                font-size: 12px;
                font-family: 'Arial, Helvetica, sans-serif';
                color: black;
                padding-left: 10px;
                border: solid .1pt grey;
                vertical-align: top;
            }
            
            .table tbody tr {
                padding: 5px !important;
                padding-bottom: 5px;
                font-size: 14px;
                color: black;
                padding-left: 10px;
            }
            .pdf-gen svg {
    width: 100px;
    height: 100px;
}
.new-table td {
        border: 0;
    border-bottom: 1px solid #000;
}
        </style>
        <div class="container-fluid" style="margin: auto; padding: 0;">
            <div class="row" style="margin: auto; padding: 0; color: black; height: 130px">
                <div>
                    <img src="../images/averywm.jpg" style="position: absolute; width: 800px; height: 1050px; z-index: -1; opacity: .3" />
                </div>
                <div style="position: absolute; height: 35px; width: 200px; margin-left: 300px; margin-top: 120px; border: dashed 1px grey; text-align: center; color: GrayText; padding-top: 5px;">
                    Paste Hologram here
                </div> 
                <div class="container-fluid" style="margin: auto; padding: 0;">
                    <div class="row" style="margin: auto; padding: 0; color: black;">

                        <div class="container-fluid" style="margin: auto; padding: 0;">
                            <div style="width: 800px; margin: auto;">
                                <div style="float: left; margin-left: 0px;" class="pdf-gen">
                                    {!! QrCode::size(200)->generate($string); !!}
                              
                                    <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/220px-QR_code_for_mobile_English_Wikipedia.svg.png" style="height: 120px;" /> -->
                                </div>
                                <div style="float: left; margin-left: 40px;width:60%;">
                                    <center>
                                        <h3 style="font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:22px; padding-top:0px;padding-bottom:0px;margin-bottom:0px;">{{ strtoupper($company['name']) }}</h3>
                                        <p style="font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:12px;margin:0;padding:0">VECHICLE CONSPICUITY ONLINE MIS CERTIFICATE</p>
                                        <p style="font-family:Arial, Helvetica, sans-serif;font-weight:bold; align-content:center;font-size:12px;margin:0;padding:0;">COMPLIANCE TO AUTOMOTIVE INDUSTRY STANDARD -089,090&037<br /></p>

                                    </center>
                                </div>
                                <div style="float: right; padding-right: 0px;">

            <img src="{{ URL::to('/') }}/uploads/{{ $company['logo'] }}" style="height: 80px;margin-top: 5px;margin-right: 5px;"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="row">
            <div style="width: 99%; margin: auto;">
                <p style="margin: 0px; padding-left: 5px;">TO:</p>
                <span style="padding-left: 5px; float: left; width: 400px">The Regional Transport Office
                    <br />
                    {{ strtoupper($data->rto->email) }} ({{ strtoupper($data->rto->name) }})</span><span style="float: right; text-align: right">Certificate NO :<b> {{ strtoupper($data->certificate_no) }} </b>
                        <br />
                        Fitment Date : {{ date("d-m-Y", strtotime($data->created_at)) }}</span>
                <table class="table table-bordered" style="border-collapse: collapse; float: left; border: solid 2px black; margin-bottom: 2px; width: 100%; font-family: Calibri; text-align: center">
                    <tr>
                        <td colspan="2" style="text-align: left; font-size: 18px"><b>Vehicle Details</b></td>
                    </tr>
                    <tr>
                        <td>
                            <span>Registration No : </span>
                            <span id="vhlnolbl" style="font-weight:bold;">{{ strtoupper($data->vehicle_no) }}</span></td>
                        <td>Registration Year:<b>{{ strtoupper($data->vehicle_year) }}</b></td>

                    </tr>
                    <!--  <tr>
                    <td><span style="font-family:Times New Roman;font-weight:bold;">UIN : </span> 
                    <span id="rtolbl" style="font-family:Times New Roman;font-weight:bold;"></span></td>
                    <td><span style="font-family:Times New Roman;">Date : </span>
                    <span id="datelbl1" style="font-family:Times New Roman;"></span></td>
                  <td><span style="font-family:Times New Roman;">Validity: </span>
                    <span id="expdate" style="font-family:Times New Roman;"></span></td>
                  <td><span style="font-family:Times New Roman;">SLD Make : </span>
                    <span id="speedmklbl" style="font-family:Times New Roman;"></span></td>
                  
                </tr>-->

                    <tr>
                        <td>
                            <span>Chassis No : </span>
                            <span id="chissnolbl" style="font-weight:bold;">{{ strtoupper($data->class_no) }}</span></td>

                        <td>
                            <span>Engine NO : </span>
                            <span id="englbl" style="font-weight:bold;">{{ strtoupper($data->engine_no) }}</span></td>
                    </tr>
                    <tr>
                        <td>
                            <span>Vehicle Make: </span>
                            <span id="vhlmakelbl">{{ strtoupper($data->vehicle_make) }}</span></td>
                        <td>
                            <span>Vehicle Model : </span>
                            <span id="modellbl">{{ strtoupper($data->vehicle_model) }}</span></td>
                    </tr>


                </table>

                <table class="col-sm-12 table table-bordered new-table " style="margin-left: auto; margin-right: auto; border-collapse: collapse; border: solid 2px black; margin-bottom: 2px; font-family: Calibri">
                    <tr>
                        <td style="font-size: 18px; width: 50%"><b>Vehicle Owner Details</b></td>
                        <td colspan="2" style="font-size: 18px;"><b>Manufacture & Distributor Details</b></td>
                    </tr>
                    <tr>
                        <td>
                            <span>Company Name/Owner Name : </span><span id="ownerlbl">{{ strtoupper($data->owner_name) }}</span>
                            <br />
                            <span>Contact Number : </span><span id="phonelbl">{{ strtoupper($data->phone) }}</span>
                        </td>
                        <td colspan="2">
                            <span>Manufacturer Name : </span><span id="Label1"> {{ strtoupper($company['name']) }}</span>
                            <br />
                            <span>Distributor Name :
                                <span id="distname">  {{ strtoupper($distributor_details->name) }}</span></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span style="font-weight:bold;">Owner Address / Register Address :</span>
                            <div style="min-height: 70px; max-height: 150px; padding-left: 5px; padding-right: 5px; padding-top: 0px; padding-bottom: 0px;">

                                <p style="padding: 0px; margin: 0">
                                {{ strtoupper($data->address) }}

                                </p>
                            </div>
                        </td>
                        <td>
                            <span style="font-family:Times New Roman;font-weight:bold;">MFG Address:</span>
                            <div style="min-height: 70px; max-height: 150px; padding-left: 5px; padding-right: 5px; padding-top: 0px; padding-bottom: 0px;">

                                <p style="padding: 0px; margin: 0">
                                {{ strtoupper($company['address']) }}
                                </p>
                            </div>
                        </td>
                        <td>
                            <p><b>Distributor Address:</b></p>
                            <div style="min-height: 70px; max-height: 150px; padding-left: 5px; padding-right: 5px; padding-top: 0px; padding-bottom: 0px;">

                                <p style="padding: 0px; margin: 0">
                                   {{ strtoupper($distributor_details->address) }}
                                    <br />

                                </p>
                            </div>

                        </td>
                    </tr>



                </table>
                <table class="col-sm-12 table table-bordered new-table" style="margin-left: auto; margin-right: auto; border-collapse: collapse; margin-bottom: 2px; vertical-align: central; font-size: 12px; border: solid 2px black">
                    <tr style="font-size: 14px; font-weight: bold">
                        <td style="font-size: 14px; min-width: 30%">Conspicuity Tapes 20MM Fitment Details</td>
                        <td colspan="2" style="width: 20px; font-size: 14px;">Rear Marking Plates Details</td>
                        <td style="font-size: 14px;">Certificate Details</td>
                    </tr>
                    
                    <tr>
                        <td>
                        <table class="col-sm-12 table table-bordered new-table" style="margin-left: auto; margin-right: auto; border-collapse: collapse; margin-bottom: 2px; vertical-align: central; font-size: 12px;">
                        @if(count($twenty) > 0) 
                                    @foreach($twenty as $twen)
                                        <tr>
                                            <td style="border:0;border-bottom:1px solid #000;">
                                                    {{ strtoupper($twen) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td>
                                               0
                                        </td>
                                    </tr>
                                    @endif
                            </table>
                        </td>

                        <td>
                        <table class="col-sm-12 table table-bordered new-table " style="margin-left: auto; margin-right: auto; border-collapse: collapse; margin-bottom: 2px; vertical-align: central; font-size: 12px;">
                        @if(count($class) > 0) 
                                    @foreach($class as $clas)
                                        <tr>
                                           <td style="border:0;border-bottom:1px solid #000;">
                                                    {{ strtoupper($clas) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td>
                                               0
                                        </td>
                                    </tr>
                                    @endif
                            </table>
                        </td>
                        <td>
                            @if($class_exist == 1)
                            <img style="width: 25px; margin-top: 7px;" src="https://www.vahansafety.org/images/tick.png" />
                            @else
                                0
                            @endif

                        </td>
                        <td>    
                                
                            <table class="col-sm-12 table table-bordered new-table" style="margin-left: auto; margin-right: auto; border-collapse: collapse; margin-bottom: 2px; vertical-align: central; font-size: 12px;">
                                <tr>
                                   <td style="border:0;border-bottom:1px solid #000;">
                                        Type Approved Number: {{ strtoupper($approved_no) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:0;border-bottom:1px solid #000;">
                                        COP Number :
                                        <br />  {{ strtoupper($company['cop_number']) }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- <tr>

                                            <td>COP Number :
                            <br />  {{ $company['cop_number'] }}
                        </td>

                        
                        <td>
                            <span>20MM WHITE :</span>
                            <span id="White20lbl">0.00 Mtrs</span></td>
                        <span id="Label2"></span></td>
                        <td>Class 4 : Red Retro Reflective border and Yellow Retro Reflective Centre </td>
                        <td>

                        </td>
                        <td>COP Number :
                            <br />  {{ $company['cop_number'] }}
                        </td>

                    </tr> -->







                    <tr>
                        <td style="font-weight: bold; font-size: 14px;">Conspicuity Tapes 50MM Fitment Details</td>
                        <td colspan="2" style="width: 20px; font-size: 14px; font-weight: bold">80MM Circular Reflector
                        </td>
                        <td>Test Report Number : {{ strtoupper($company['test_report_no']) }}</td>
                    </tr>

                    <tr>
                        <td>
                            <!-- <span>50MM-RED : </span>
                            <span id="red50mmlbl">2.50 Mtrs</span> -->
                                <table class="col-sm-12 table table-bordered new-table " style="margin-left: auto; margin-right: auto; border-collapse: collapse; margin-bottom: 2px; vertical-align: central; font-size: 12px;">
                                    @if(count($fifty) > 0) 
                                    @foreach($fifty as $fif)
                                        <tr>
                                            <td style="border:0;border-bottom:1px solid #000;">
                                                    {{ strtoupper($fif) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td>
                                               0
                                        </td>
                                    </tr>
                                    @endif
                                    <!-- <tr>
                                        <td>
                                                <span>50MM-YELLOW : </span>
                                                <span id="yellow50mmlbl">16.00 Mtrs</span>
                                        </td>
                                    </tr> -->
                                </table>
                            </td>
                        <td colspan="2">
                                <table class="col-sm-12 table table-bordered new-table " style="margin-left: auto; margin-right: auto; border-collapse: collapse; margin-bottom: 2px; vertical-align: central; font-size: 12px;">
                                @if(count($eighty) > 0) 
                                    @foreach($eighty as $eig)
                                        <tr>
                                           <td style="border:0;border-bottom:1px solid #000;">
                                                    {{ strtoupper($eig) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td>
                                               0
                                        </td>
                                    </tr>
                                    @endif
                                </table>
                        </td>
                        <td>
                           
                            <table class="col-sm-12 table table-bordered new-table" style="margin-left: auto; margin-right: auto; border-collapse: collapse; margin-bottom: 2px; vertical-align: central; font-size: 12px;">
                                    <tr>
                                        <td style="border:0;border-bottom:1px solid #000;">
                                                 REAR MARK :  {{ strtoupper($company['rear_mark']) }}
                                        </td>
                                    </tr>
                                    <tr>
                                       <td style="border:0;border-bottom:1px solid #000;">
                                                 Certified By : {{ strtoupper($company['certified_by']) }}
                                        </td>
                                    </tr>
                                </table>
                        </td>
                    </tr>
                   
                   
                    <!-- <tr>
                        <td>
                            <span>50MM-WHITE : </span>
                            <span id="white50mmlbl">3.00 Mtrs</span></td>
                        <td colspan="2">80MM White Circular Reflector : 0.00 Nos
                        </td>
                        <td rowspan="2">Certified By : {{ $company['certified_by'] }}</td>
                    </tr> -->
                  
                   <!-- <tr>
                        <td>
                            <span>50MM-YELLOW : </span>
                            <span id="yellow50mmlbl">16.00 Mtrs</span></td>
                        <td colspan="2">80MM Yellow Circular Reflector : 0.00 Nos
                        </td>
                    </tr> -->

                    </table>

                    <table class="col-sm-12 table table-bordered new-table " style="margin-left: auto; margin-right: auto; border-collapse: collapse; border: solid 2px black; margin-bottom: 2px;">
                        <tr>
                            <td colspan="4">The Maximun all-inclusive price (including GST and Fitment Charges)for the products specified in this Certificate is as below:<br /> {{ strtoupper($product) }}
                            </td>

                        </tr>
                        <tr>
                            <td colspan="4"><b>Fitment Images</b>
                            </td>
                        </tr>
                        <tr>
                            <td>Front</td>
                            <td>Back</td>
                            <td>Side-1</td>
                            <td>Side-2</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; width: 25%;text-align:center;">
                                <img src="{{ URL::to('/') }}/uploads/customer/{{ $data->images->front_image }}" style="width: 160px;height: 200px;" />
                            </td>
                            <td style="margin: 0; width: 25%;text-align:center;">
                                <img src="{{ URL::to('/') }}/uploads/customer/{{ $data->images->back_image }}" style="width: 160px;height: 200px;" /></td>
                            <td style="margin: 0; width: 25%;text-align:center;">
                                <img src="{{ URL::to('/') }}/uploads/customer/{{ $data->images->left_image }}" style="width: 160px;height: 200px;" /></td>
                            <td style="margin: 0; width: 25%;text-align:center;">
                                <img src="{{ URL::to('/') }}/uploads/customer/{{ $data->images->right_image }}" style="width: 160px;height: 200px;" /></td>
                        </tr>
                        <tr style="padding-bottom: 0">
                            <td colspan="3">
                                <p style="vertical-align: bottom; font-family: 'Times New Roman'; font-size: 10px; margin: 0;">This is to certify that we have authorised Distributor / Dealer for the sale AIS-089,090,&037 Compliant {{ $company['name'] }} Brand Retro reflective Tapes Supplied by us as per CMVR 104-1989</p>
                            </td>
                            <td rowspan="2" style="padding-bottom: 0; width: 300px; vertical-align: bottom; text-align: center">
                                <p style="vertical-align: bottom; padding-bottom: 0; font-size: 10px; margin-bottom: 0; font-weight: bold">
                                    <br />
                                    <br />
                                    <br /> Authorized Distributor Seal & Signature
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p style="vertical-align: bottom; margin-bottom: 0; font-size: 10px">We hereby certify that we have supplied/installed ICAT/ARAI Approved Retro Reflective Tapes as per CMRV rule 104 specified under CMVR GSR 784 (E)</p>
                            </td>

                        </tr>
                        <tr>
                            <td colspan="4">
                                <div style="padding-top: 50px;">
                                    <div style="float: left; font-size: 12px; font-weight: bold; border-top: solid 1px black;">Authorized Dealer Signature</div>
                                    <div style="float: right; margin-right: 50px; font-size: 12px; font-weight: bold; border-top: solid 1px black;">Customer Signature</div>

                                </div>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
        <!--<div style="text-align: center; color: black; font-weight: bold; font-size: 16px; margin: auto; width: 99%">[Note: HOLOGRAM MANDATORY WITHOUT HOLOGRAM CERTIFICATE NOT VALID]</div>-->

    </div>





    <div style="margin:auto">
        <table style="margin-bottom:10px;margin-left:auto;margin-right:auto;margin-top:10px;padding:10px;">
            <tr>

                <td style="padding:10px;">
                    <button name="Print" class="btn btn-info" onclick="PrintDiv2()">Download</button>
                </td>
                <!-- <td style="padding:10px;">
                    <a href="tapesentry.aspx"> <button class="btn btn-primary">New Entry</button></a>
                </td> -->
            </tr>


        </table>
        <div style="width:800px;margin:auto">
            <p style="color:orange;margin:auto;padding-left:50px;padding-bottom:100px;">Note : While Saving Customer Copy as PDF please select paper size as A4. For More details <a href="../home/images/pdfsettings.png"> click here</a></p>
        </div>

    </div>



</body>
<script type="text/javascript">
    function PrintDiv2() {
        var divContents = document.getElementById("Certificate").innerHTML;
        var printWindow = window.open('', '', 'height=1000,width=800');
        printWindow.document.write('<html><head> <style>.table tbody tr td { font-size:14px;color:black;padding-left:10px;padding:0px; }</style><title>Customer Copy</title>');
        printWindow.document.write('</head><body style="padding:0;margin-top:20;">');
        printWindow.document.write(divContents);
        printWindow.document.write('</body></html>');
        printWindow.document.close();

        function show() {
            if (printWindow.document.readyState === "complete") {
                printWindow.focus();
                printWindow.print();
                printWindow.close();
            } else {
                setTimeout(show, 100);
            }
        };
        show();
    };
</script>
<script type="text/javascript">
    function PrintDiv1() {
        var divContents = document.getElementById("Certificate").innerHTML;
        var printWindow = window.open('', 'print', 'height=1000,width=800');
        printWindow.document.write('<html><head> <style>.table tbody tr td { font-size:14px;color:black;padding-left:10px;padding:0px;  }</style><title>Department Copy</title>');
        printWindow.document.write('</head><body style="padding:0;margin-top:20;>');
        printWindow.document.write(divContents);
        printWindow.document.write('</body></html>');
        printWindow.document.close();

        function show() {
            if (printWindow.document.readyState === "complete") {
                printWindow.focus();
                printWindow.print();
                printWindow.close();
            } else {
                setTimeout(show, 100);
            }
        };
        show();
    };
</script>
<script type="text/javascript">
    function PrintDiv() {
        var divContents = document.getElementById("Certificate").innerHTML;
        var printWindow = window.open('', '', 'height=1000,width=800');
        printWindow.document.write('<html><head> <style>.table tbody tr td { font-size:14px;color:black;padding-left:10px;padding:0px !importangt;  }</style><title>Dealer Copy</title>');
        printWindow.document.write('</head><body style="padding:0;margin-top:20;">');
        printWindow.document.write(divContents);
        printWindow.document.write('</body></html>');
        printWindow.document.close();

        function show() {
            if (printWindow.document.readyState === "complete") {
                printWindow.focus();
                printWindow.print();
                printWindow.close();
            } else {
                setTimeout(show, 100);
            }
        };
        show();
    };
</script>

</html>