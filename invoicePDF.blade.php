<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNA</title>
    <style>
        body {
        	font-size:12px;
        }
        @page { sheet-size: A5; }
        .box{
            padding-top:-3px;
        }
        .dna-form-body{
            margin: -40px;
            border:1px solid black;
        }
        .dna-form-body h1 {
            font-size: 18px;
            text-align: center;
            font-weight: bold;
            margin-bottom: -5px;
        }
        .dna-form-body h3 {
            font-size: 8px;
            text-align: center;
            top:-3px;
        }
        .dna-form-body h4 {
            font-size: 10px;
            text-align: center;
            margin-bottom: -5px;
            margin-top: -5px;
            color:black;
        }

        .basicInfo{
            padding:15px;
        }
        
        
        
        .pt2{
            margin-top:-15px;
            margin-left:385px;
        }
        .txt{
            font-weight:bold;
            width:100%;
        }
        .txt2{
            font-weight:bold;
            border-bottom:1px solid black;
        }
        .pt3{
            margin-top:-15px;
            margin-left:285px;
        }
        
        .dna-table-text{
              height:250px !important;
        }
      
        .cusTable,.cusTable2{
            width:100%;
            border-collapse:collapse;
            
        }    
        .cusTable th{
            border:1px solid #C8C8C8;    
          
        }
        .dna-form-last-text h6 {
            text-align: center;
            font-size: 8px;
            color:black;
            margin-top:5px;
            margin-bottom:5px;
        }
        
        .cusTable2  td{
            border-bottom:1px solid black;    
            padding:5px;
        }
        
        
        .dna-form-payment-cash{
            width:100%;
             border-top:1px solid black;
        }
     
        
        
        .line{
            border-right:1px solid black;
            padding:15px;
            width:65%;
        }
        
        .tblAlign{
            text-align:right;
        }
        
        
        .tblText{
            font-size:10px;
            font-weight:300;
            padding:5px;
        }
        .tblAlign2{
           text-align:right; 
           padding-right:8px;
        }
        .tblAlign3{
            text-align:left; 
        }
        
        .col{
           border-bottom:1px solid black; 
        }
        
        
        
        .nameTitle{
            width:12%;
        }
        .AnsName{
            width:90%;
            margin-top:-15px;
            margin-left:65px;
            border-bottom:1px solid black; 
        }
        .AnsAge{
            width:18%;
            margin-top:-15px;
            margin-left:65px;
            border-bottom:1px solid black; 
        }
        .AnsSex{
            width:18%;
            margin-top:-15px;
            margin-left:325px;
            border-bottom:1px solid black; 
        }
        .AnsMobile{
            width:25%;
            margin-top:-15px;
            margin-left:65px;
            border-bottom:1px solid black; 
        }
        .AnsRef{
            width:28%;
            margin-top:-15px;
            margin-left:325px;
            border-bottom:1px solid black; 
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="dna-form-body">
	        <h1>DNA DIAGNOSTICS</h1>
		    <h3><i>(A unit of D-Strand Research Laboratories Pvt. Ltd.)</i></h3>
		    <hr>
		        <h4>
		            Address :Near Career Point, Main Road, Dayaldand Bilaspur (C.G.)<br>
                    Contact : 07752-434343, +91 97559-57000
                </h4>
            <hr>
                <div class="basicInfo">
                    <div class="basic">Invoice No.  <span class="txt">{{rand(100,1000)}}</span></div>
                    <div class="pt2">Date :         <span class="txt">{{date('d-m-Y')}}</span></div>
                    
                    <div>
                        <div class="nameTitle">Mr./Ms.</div>
                        <div class=" AnsName">{{$patient->name}}</div>
                    </div> 
                    <div>
                        <div class="nameTitle">Age</div>
                        <div class="AnsAge">{{$patient->patient_age}}Y</div>
                    </div> 
                    <div>
                        <div class="pt3">Sex</div>
                        <div class="AnsSex">{{$patient->gender}}</div>
                    </div>
                    <div>
                        <div class="basic">Mobile</div>
                        <div class="AnsMobile">{{$patient->phone}}</div>
                    </div>
                    <div>
                        <div class="pt3">Ref By</div>
                        <div class="AnsRef">@if($doctor != ''){{$doctor->name}} @else {{'.'}}@endif</div>
                    </div>
                    <div>
                        <div class="basic">Address</div>
                        <div class="AnsName">
                            @if($patient != '') 
                                @if($patient->address != '')
                                    {{$patient->address}}  
                                @else 
                                    {{'.'}}
                                @endif
                            @else {{'.'}}
                            @endif</div>
                    </div>
                    
                    
                    
                    
                    
                </div>
                <div class="dna-table-text">
                    <table class="table  table-bordered cusTable">
                        <thead>
                            <tr>
                              <th class="col">S.n.</th>
                              <th class="col">Test Name</th>
                              <th class="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            {!! $tbl !!}
                        </tbody>
                    </table>
                </div>
                
                
                
                
                
                
                
                <div class="dna-form-payment-cash">
                    <table class="table cusTable2">
                            <tbody>
                                <tr >
                                    <td rowspan="6" class="line">
                                        <p>Payment Type: cash</p><br>
                                    	<p>
                                    	    Inwords<br>
                                    	    Rupees @if($group->total != ''){{displaywords($group->total)}}@endif
                                    	</p>
                                    </td>
                                </tr>
                                <tr>
                                  <td class="tblAlign">Subtotal</td>
                                  <td class="tblAlign">{{$group->subtotal}}</td>
                                </tr>
                                <tr>
                                  <td class="tblAlign">(-)Reward</td>
                                  <td class="tblAlign">0.00</td>
                                </tr>
                                <tr>
                                  <td class="tblAlign"><b>Total</b></td>
                                  <td class="tblAlign"><b>{{$group->total}}</b></td>
                                </tr>
                                <tr>
                                  <td class="tblAlign">Paid</td>
                                  <td class="tblAlign">{{$group->paid}}</td>
                                </tr>
                                <tr>
                                  <td class="tblAlign">Balance</td>
                                  <td class="tblAlign">{{$group->total - $group->paid}}</td>
                                </tr>
                            </tbody>
                        </table>
                   
                </div>
                <div class="dna-form-last-text">
                    <h6>Reportng may be delayed due to unforeseen circumstance. sInconvenience is regreted.</h6>
                </div>
        </div>
       
    </div>

</body>
</html>

































