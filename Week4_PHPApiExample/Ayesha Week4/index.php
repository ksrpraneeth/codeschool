<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>IFMIS</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style2.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header no-bullets">
                <h3>IFMS<br>Govt Of Telangana</h3>
            </div>
            <a href="#">
                <ul style="list-style-type: none;">
                    <li>Home
            </a>
            <a href="#">Masters</a>
            <a href="#">Transactions</a>
            <a href="#">Reports</a>
            <a href="#">Return Cheque Generation</a>
            <a href="#">Forest Transactions</a>
            <a href="#">Forest Transactions Report</a>
            <a href="#">E-Kuber Returns Received List</a>
            <a href="#">E-Kuber Returns Challan Print</a>
            <a href="#">UTR Search</a>
            <a href="#">Failed transactions</a>
            <a href="#">Cheque Status Report</a>
            <a href="#">Pd Budget Check</a>
            <a href="#">Update Receipts</a>
            </li>
            </ul>
        </nav>
    

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-blue">
                <div class="container-fluid">
    
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Modules</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <div id="cont">
                            <li class="nav-item active">
                                <a class="nav-link text text-light" href="#" id="p1"></a>
<script>
	function setTime(){
                                    setTimeout(() => {
                                        var date = new Date();
                                        document.getElementById("p1").innerHTML = date;
                                        setTime();
                                    }, 1000);
                                }
                                setTime();
</script>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#"><p class="text text-light">Welcome Ayesha</p></a>
                            </li>
                            </div>
                            <li class="nav-item">
                                <input type="button" value="LogOut" id="bt" class="btn btn-light" onclick="toggle(this)">
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h2 id="heading">Points to Remember:</h2>
            <p>
            <ul>
                <li>All cheques are approved from DDO Checker/Govt from 01/03/2019 shall get paid through E-Kuber which is a
                    Core Banking Solution of Rbi.
                </li>
                <li>There is no need to present the Cheques at the ban for these cheques which got approved after
                    01/03/2019.
                </li>
                <li>Please give correct account details as it when the account was opened.</li>
                <li>Make sure there is no "your self" or "self" while issuing cheques.Such cheques get auto rejected by
                    E-Kuber.
                </li>
                <li>Please check the exact length of the Bank Account Number and NO special characters are to be entered
                    which leads to auto-rejection.
                </li>
                <li>Finally,in multiple party cheques please do not enter the same party details in the same chequeno which
                    will be considered as a duplicacy transaction and gets auto-rejected.
                </li>
                <li>PD-to-PD cheques shall be adjusted in treasury itself in the regular procedure.</li>
            </ul>
            </p>
    
            <!-- Form control-->
           <div class="form p-20">
                <div class="line"></div>
                <div class="form-check form-check-inline">
                    <label for="form-check-input" class="col-form-label">Transaction type:</label>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                           value="option1">
                    <label class="form-check-label" for="inlineRadio1">Single party</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                           value="option2">
                    <label class="form-check-label" for="inlineRadio2">Multiple party</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                           value="option3">
                    <label class="form-check-label" for="inlineRadio3"></label>PD account to PD account</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                           value="option3">
                    <label class="form-check-label" for="inlineRadio3">PD account to other</label>
                </div>
                <div id="error"></div>
    
                <!-- partyaccount-->
                <div class="line"></div>
                <div class="input-control row align-items-center">
                    <div class="col-sm-12 md-6 lg-6">
                        <label for="partyaccount" class="col-form-label">Party Account Number:</label>
                    </div>
                    <div class="col-md-6 lg-6">
                        <input type="number" id="partyaccount" name="partyaccount" class="form-control"
                               placeholder="Enter A/C number">
                    </div>
                    <div id="e_partyaccount" class="text-danger"></div>
                </div>
        <!--confrim party account-->
                <div class="input-control row align-items-center">
                    <div class="col-sm-12 md-6 lg-6">
                        <label for="cpartyaccount" class="col-form-label">Confirm Party Account Number:</label>
                    </div>
                    <div class="col-md-6 lg-6">
                        <input type="number" id="cpartyaccount" name="cpartyaccount" class="form-control"
                               placeholder="Confirm A/C number">
                    </div>
                    <div id="e_cpartyaccount" class="text-danger"></div>    
                </div>
                <!--partyname-->
                <div class="input-control row align-items-center">
                    <div class="col-sm-12 md-6 lg-6">
                        <label for="partyname" class="col-form-label">Party Name:</label>
                    </div>
                    <div class="col-md-6 lg-6">
                        <input type="text" id="partyname" name="partyname" class="form-control"
                               placeholder="Enter party name">
                    </div>
                    <div id="e_partyname" class="text-danger"></div>
                </div>
    
                <!--Bank code-->
    
                <div class="line"></div>
                <div class="input-control row align-items-center">
                    <div class="col-sm-12 md-4">
                        <label for="bankcode" class="col-form-label">Bank IFSC Code:</label>
                    </div>
                    <div class="col-md-4 lg-4">
                        <input type="text" id="bankcode" name="bankcode" class="form-control" placeholder="Enter IFSC Code">
                    </div>
                    <div id="e_bankcode" class="text-danger"></div>
                    <!--Search button-->
                    <div class="col-md-4 lg-4" style="padding: 20px;">
                        <button id="search" class="btn btn-primary" type="submit" onclick="getifsc()">Search</button>
                    </div>
                    </div>
                    <!--bank name-->
                <div class="input-control row align-items-center">
                    <div class="col-sm-12 md-4">
                        <label for="bankname" class="col-form-label">Bank Name:</label>
                    </div>
                    <div class="col-md-4 lg-4">
                        <h5 id="bankname">xxxxxx</h5>
                    </div>
                </div>
                <!--bank branch-->
                <div class="input-control row align-items-center">
                    <div class="col-sm-12 md-4">
                        <label for="bankbranch" class="col-form-label">Bank Branch:</label>
                    </div>
                    <div class="col-md-4 lg-4">
                        <h5 id="bankbranch">xxxxxxx</h5>
                    </div>
                </div>
                <!--Head of Account-->
                <div class="line"></div>
                <div class="row inputGroup align-items-center">
                    <div class="col-sm-12 md-4">
                        <p class="">
                            Head of account
                        </p>
                    </div>
                    <div class="col-md-4 lg-4">
                        <select
                            name=""
                            class="form-select"
                            placeholder="Select"
                            id="headOfAccount"
                            onchange="accountChange()"
                        >
                            <option class="d-none" value="-1">
                                Select
                            </option>
                            <option
                                value="0853001020002000000NVN"
                                data-balance="1000000"
                                data-loc="5000"
                            >
                                0853001020002000000NVN
                            </option>
                            <option
                                value="8342001170004001000NVN"
                                data-balance="1008340"
                                data-loc="4000"
                            >
                                8342001170004001000NVN
                            </option>
                            <option
                                value="2071011170004320000NVN"
                                data-balance="14530000"
                                data-loc="78000"
                            >
                                2071011170004320000NVN
                            </option>
                    
                        </select>
                    </div>
                </div>
                <!-- Balance -->
                <div class="row inputGroup align-items-center">
                    <div class="col-sm-12 md-6">
                        <p class="">
                            Balance <span>(in Rs.)</span>
                        </p>
                    </div>
                    <div class="col-md-6 lg-6" id="balance">
                        XXXXX
                    </div>
                </div>
                <!-- LOC -->
                <div class="row inputGroup align-items-center">
                    <div class="col-sm-12 md-6">
                        <p class="">LOC <span>(in Rs.)</span></p>
                    </div>
                    <div class="col-md-6 lg-6" id="loc">
                        XXXXX
                    </div>
                </div>
<!--Expenditure Type-->
                <div class="row inputGroup align-items-center py-2">
                    <div class="col-sm-12 md-6">
                        <p class="">
                            Expenditure Type:
                        </p>
                    </div>
                    <div class="col-md-6 lg-6">
                        <select
                            name=""
                            class="form-select"
                            placeholder="Select"
                            id="expenditureType"
                            onchange="expenditureSelect()"
                        >
                            <option class="d-none" value="-1">
                                Select
                            </option>
                            <option value="opt1">Capital Expenditure </option>
                            <option value="opt2">Revenue Expenditure</option>
                            <option value="opt3">Deferred Revenue Expenditure</option>
                        </select>
                    </div>
                </div>
                <!-- Purpose Type -->
                <div class="row inputGroup align-items-center py-2">
                    <div class="col-sm-12 md-6">
                        <p class="">
                            Purpose Type<span class="text-danger"
                                >*</span
                            >
                        </p>
                    </div>
                    <div class="col-md-6 lg-6">
                        <select
                            name=""
                            class="form-select"
                            placeholder="Select"
                            id="purposeType"
                        >
                            </select>
                            <p id="e_purposeType"></p>
                </div>
                            </div>

                <div class="input-control row align-items-center">
                    <div class="col-sm-12 md-6 lg-6">
                        <label for="purpose" class="col-form-label">Purpose:</label>
                    </div>
                    <div class="col-md-6 lg-6">
                        <textarea class="form-control" rows="3" id="purpose" name="purpose"  placeholder="Max 500 characters"></textarea>
                    </div>
                    <div id="e_purpose" class="text-danger"></div>
                </div>
                <div class="input-control row align-items-center">
                    <div class="col-sm-12 md-6 lg-6">
                        <label for="partyamount" class="col-form-label">Party Amount(in Rs.):</label>
                    </div>
                    <div class="col-md-6 lg-6">
                        <input type="number" id="partyamount" class="form-control" placeholder="Enter Party Amount">
                    </div>
                    <div id="e_partyamount" class="text-danger"></div>
                </div>
                <div class="input-control row align-items-center">
                    <div class="col-sm-12 md-6 lg-6">
                        <label for="partyaccount" class="col-form-label">Party Amount in words:</label>
                    </div>
                    <div class="col-md-6 lg-6">
                        <h5>xxxxx</h5>
                    </div>
                </div>
    
                <div class="line"></div>
                <div class="row align-items-center">
                    <div class="col-sm-12 md-6 lg-6">
                        <label for="partyaccount" class="col-form-label">Upload Documents:</label>
                    </div>
                    <div class="col-md-4 lg-4">
                        <input type="file" id="dropdownMenuLink" class="form-control"
                               placeholder="No File Choosen" multiple></div>
                    <div class="col-md-2 lg-2" style="padding: 20px;">
                        <button class="btn btn-primary" type="submit">+ADD</button>
                    </div>
                    <div class="line"></div>
                 
                    <button type="submit" id="submitBtn" class="btn btn-primary" value="submit">Next</button>
                    </div>
                </div>
        </div>
   
    
            

    
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript" src="java2.js"></script>
    
    <!--ifsc code-->
    <script>
function getifsc(){
	bankcode = $('#bankcode').val();
	$.ajax({
		method:'POST',
		data:{'bankcode':bankcode},
		url:'bankvalidate.php',
		success:function(msg){
            var response= JSON.parse(msg);
			//console.log(msg);
            if(response.status==true){
            $('#bankname').html(response.data.CITY);
            $('#bankbranch').html(response.data.BRANCH);
        }else{
            $('#e_bankcode').html(response.error);
        }
		}
	});
}
//head of account
function accountChange(){
    headOfAccount=$("#headOfAccount").val();
    $.ajax({
        method:"POST",
        data:{'headOfAccount':headOfAccount},
        url:'hoa.php',
        success:function(data)
        {
            var response=JSON.parse(data);
            if(response.status==true){
        console.log(124);
        $('#balance').html(response.data.balance);
            $('#loc').html(response.data.loc);
            }else{
                $('#balance').html(response.error);
            }
        }
    });
}

//expenditure
function expenditureSelect() {
            expenditureType = $("#expenditureType").val();
            $("#e_purposeType").html('');
            $('#purposeType').find('option').remove();
            $.ajax({
                method: "POST",
                data: {'expenditureType': expenditureType},
                url: 'expenditure.php',
                success: function (result) {
                    result = JSON.parse(result);
                    console.log('see',result);
                    if(result.status==false){
                        $("#e_purposeType").html(result.error);
                    }else{
                        console.log(result.data);
                        $('#purposeType').append(`<option value="0">Select</option>`);
                        for (let i=0;i<result.data.length;i++){
                            let optionText = result.data[i];
                            let optionValue = result.data[i];
                            $('#purposeType').append(`<option value="${optionValue}">${optionText}</option>`);
                        }
                    }
                }
            });
        }
      



</script>
</body>
</html>
        