<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Document</title>
</head>

<body>

  <!-- Main -->
  <div class="container-fluid">

    <!-- Row -->
    <div class="row m-0 ">

      <!-- Sidebar -->
      <div class="sidebar col  col-md-2 border-0  border-0 d-flex flex-column p-1 d-none d-md-block "
        style="background-color:rgb(17, 53, 90)"id="side_Nav" >
        <img class="image-fluid w-100" src="images/ifmis-logo2.png" alt="" style="padding:7px">
        <hr>


        <div class=" line text-white" style="background-color:rgb(17, 57, 100)">
          <div class="w3-bar-block w3-light-grey w3-card">
            <ul class="list-group text-align-left my-2 p-2 font-size:2px;" style="list-style-type:none">
              <li class ="active text-decoration:none ">Home</li>
              <li class="text-decoration:none">Masters</li>
              <li class="text-decoration:none">Transcations</li>
              <li class="text-decoration:none">Reports</li>
              <li class="text-decoration:none">Return check generation</li>
              <li class="text-decoration:none">Forest transcation</li>
              <li class="text-decoration:none">Forest transcation report</li>
              <li class="text-decoration:none">E-kuber returns received list</li>
              <li class="text-decoration:none">E-kuber Return challan print</li>
              <li class="text-decoration:none">UTR search</li>
              <li class="text-decoration:none">Failed transcations</li>
              <li class="text-decoration:none">check sattus report</li>
              <li class="text-decoration:none">Rejected cheque due to finyear End</li>
              <li class="text-decoration:none">Finyear New cheque Report </li>
              <li class="text-decoration:none">pd budget cheque</li>
            </ul>
          </div>

        </div>
      </div>

      <!--------------sidebar complete-------->

      <!---body-->
      <div class="col-12 col-md-10 p-0 bg-dark bg-opacity-50">


        <!----Header-->
        <div class="header d-flex justify-content-between" style="background-image: url('./images/black.jpg')">
          
         
         <div class="d-sm-block d-md-none d-flex " >  <img
                        src="https://ifmis.telangana.gov.in/images/govt_logo.png"
                        width="80px"
                        height="80px"
                        class="" alt="..." />
                        
                      <h1 class="text-white ">IFMIS</h1> </div>


          <div id="click_hambergur" class="left d-flex text-white p-0 my-4">
         
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list"
              viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
            &nbsp;
            <button class="btn btn-primary  d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-boxes"
                viewBox="0 0 16 16">
                <path
                  d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z" />
              </svg>
              <p class="m-0">Modules</p>
              <div class="text-white">
            </button>
          </div>
          <div class="right d-flex align-items-center my-0">
            <div class="row text-white d-none  d-md-block right d-flex m-0">
              <p class="mx-2 my-0 p-0" style="font-size:10px">Last Login</p>
              <p class="mx-2 my-0 p-0" id="displayDateTime" style="font-size: 12px;"></p>
            </div>
           
            <div class="dropdown align-items-center justify-content-center  d-flex bg-secondary bg-opacity-75  rounded-2" style="font-size: 0.8rem"> 
              <button class="btn  dropdown-toggle d-flex p-0 align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false"> 
              <div class="icon text-white bg-secondary p-2">
                  <i class="bi text-white bi-person m-0"></i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                      <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                  </div>
                    <div class="text-white align-items-center d-none d-lg-block bg-secondary px-1 m-0 " style="font-size:0.8rem"> 
                      <p class="m-0">WELCOME M.USHASREE</p>
                      <p class="m-0">(23031014097)</p> 
                  </div> 
                </button>
                <ul class="dropdown-menu w-100 text-white">
                  <li><a class="dropdown-item d-flex align-items-center" href="#">
                    <i class="bi text-white bi-person m-0"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                      </svg><br>
                    <P class="m-0 mx-2">Profile</P>
                  </a></li>
                  <li><a class="dropdown-item d-flex align-items-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                      <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                      <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                    <p class="m-0 mx-2">Change Password</p></a></li>
                  <li><a class="dropdown-item d-flex align-items-center" onclick="login()" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                      <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                  </svg>
                   <p class="m-0 mx-2" id="log2">Logout</p></a></li>
                </ul>
            </div>
            <div class="d-none d-md-block">
              <button type="button" class= "bg-primary" onclick="login()"
                class="logout d-flex bg-light border-0 bg-opacity-25 text-white align-items-center rounded-2 m-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                  class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                  <path fill-rule="evenodd"
                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                </svg>
                &nbsp;
                &nbsp;
                <h3 style="font-size:15px" id="log">logout </h4>
              </button>
            </div>
          </div>
        </div>


        <!--main content-->
        <div class="bg-secondary m-3">
          <div class="main-content card ">
            <div class="bar-block white border-3 m-0 d-none d-md-block">
              <div class="text-dark bg-primary bg-opacity-25">
                <h4>
                  <strong>issue cheque (E-Kuber Cheque from 01/03/2019)</strong>
                </h4>
              </div>
            </div>

            <div class="p-3 bar-block border-2">
              <div class="text-bg-warning bg-opacity-25 rounded-2">
                <h5>
                  <strong> . Points to be remember</strong>
                </h5>
                <div class="m-3">
                  <ul class="list-group text-align-left">
                    <ul>
                      <li>note that all cheques which are approved from DDOChecker/ Officer/Govt from 01/03/2019 shall
                        get
                        paid through E-kuber which is a Core Banking Solution of RBI. </li>
                      <li>There is no need to present the cheques at the Bank for these cheques which got approved after
                        01/03/2019.</li>
                      <li>Please give correct account details as it is when the Account was opened. </li>
                      <li>Make sure there is no "Your self' or 'Self" in the account names while issuing cheques. Such
                        cheques
                        get auto-rejected by the E-Kuber </li>
                      <li>Please check the exact length of the Bank Account Number and NO special characters are to be
                        entered, which leads to auto-rejection. </li>
                      <li>Finally, in multiple party cheques please do not enter the same party details in the same
                        chequeno
                        which will be considered as a duplicacy transaction and gets auto-rejeted. </li>
                      <li>This is just a one-time procedure to get your Party details corrected and once when corrected
                        the
                        same details can be re-used for smooth transactions. </li>
                      <li>PD-to-PD cheques shall be adjusted in treasury itself in the regular procedure. </li>
                    </ul>
                  </ul>
                </div>
              </div>
            </div>

           <p id="errorsid"></p>  

        
          
           <form action="#" onsubmit="return false" class="bg-light">
            <div class="row d-flex">
                <div class="bg-secondary  bg-opacity-10 mx-0 d-md-flex justify-content-around align-items-center">
                  <h5><b> Transcation Type*</b></h5>
                  <div class=" form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="inlineRadio1"> Single party</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="inlineRadio2"> Multiple parties</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                    <label class="form-check-label" for="inlineRadio3">PD account to PD Account</label>
                  </div>
                  <div class="form-check  form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                    <label class="form-check-label" for="inlineRadio4">PD account to other</label>
                  </div>
                </div>
            </div>

      
            <p id="errorsid"></p> 
              <div class="row mb-1 p-3 d-flex">
                <label class="col-md-3 col-form-label"><b>PartyAccountno*</b></label>
                <b class="col-12 col-md-1 d-none d-lg-block">:</b>
                <div class="col-12 col-md-5 d-lg-flex align-items-center">
                  <input type="tel" onkeypress="return" class="form-control" id="partyAccountNumber" placeholder="Enter A/c No">
                </div>
            
              </div>

              <div class=" row  mb-1 p-3 d-flex">
                <label class="col-md-3 col-form-label"><b>Confirm party Account No*</b></label>
                <b class="col-12 col-md-1 d-none d-lg-block">:</b>
                <div class="col-md-5  d-lg-flex align-items-center">
                   <input type="text" class="form-control" id="confirmpartyAccountNumber"
                    placeholder="confirm A/c no">
                </div>
              </div>

            
                <div class="row mb-1 p-3  d-flex">
                  <label class="col-md-3 "><b> partyname*</b></label>
                  <b class="col-12 col-md-1 d-none d-lg-block">:</b>
                  <div class=" col-12 col-md-5  d-lg-flex align-items-center">
                   <input type="text" class="form-control" id="partyName"
                      placeholder="Enter party name">
                  </div>
                </div>
              




              <div class="bg-info  bg-opacity-25" style="margin:5px">
                <div class="row mb-1 p-3 d-flex">
                  <label class="col-12 col-md-3 col-form-label"><b> bankifsccode*</b></label>
                  <b class="col-12 col-md-1 d-none d-lg-block">:</b>
                  <div class=" col-12 col-md-5 d- lg-flex align-items-center">
                  <input type="text" class="form-control" id="bankifsccode" placeholder="Enter ifsc code">
                      <div class="input-group-append"> 
                        <button class=" btn btn-outline-secondary btn-primary text-white d-flex" id="search"  type="button">Search</button>
                      </div>
                  </div>
                </div>



                <div class="row mb-1 p-3 ">
                  <label class="col-md-3 col-form-label"><b> Bank Name*</b></label>
                  <div class="col-md-6">
                    <label class="col-12 col-md-2">: &nbsp; &nbsp;</label>
                    <label class=" col-12 col-md-5"></label>
                    <label id="bankname"></label>
                  </div>


                  <div class="row mb-1 p-3">
                    <label class="col-md-3 col-form-label"><b>Bank branch</b> </label>
                    <div class="col-md-6"> 
                      <label class="col-12 col-md-2">: &nbsp; &nbsp;</label>
                      <label class=" col-12 col-md-5"></label> 
                      <label id="bankbranch"></label>
                    </div>
                  </div>
                </div>

              </div>

             
                <div class="row mb-1 p-3 d-flex">
                  <label class="col-md-3 "><b> Headofaccount*</b></label>
                  <b class="col-12 col-md-1 d-none d-lg-block">:</b>
                  <div class="col-md-5 d-lg-flex align-items-center">
                    <select class="form-select" id="headofAccount"  placeholder="select">  
                      <option value="">Select</option>
                  
                      <option value="0853001020002000000NVN">
                        0853001020002000000NVN
                    </option>
                    <option value="8342001170004001000NVN" >
                      8342001170004001000NVN
                  </option>
                  <option value="  2071011170004320000NVN " >
                    2071011170004320000NVN
                </option>
                <option value="8342001170004002000NVN" >
                  8342001170004002000NVN
              </option>
                      </select>
                  </div>
                </div> 
  
              <div class="row mb-1 p-3 d-flex">
                <label class="col-md-3 col-form-label"><b>Balance (inRs*)</b></label>
                <div class="col-md-6   d-lg-flex align-items-center">
                  <label class="col-12 col-md-2">: &nbsp; &nbsp;</label>
                  <label id="balance"></label>
                </div>
              </div>
  
              <div class="row mb-1 p-3 d-flex ">
                     <label class="col-md-3 col-form-label"><b>Loc (inRs)*</b> </label>
                <div class="col-md-6 d-lg-flex align-items-center">
                  <label class="col-12 col-md-2">: &nbsp; &nbsp;</label>
                  <label id="Loc"></label>
                </div>
              </div>
  
  
              <div class="row mb-1 p-3 d-flex">
                <label class="col-md-3 "><b> Expendituretype*</b></label>
                <b class="col-12 col-md-1 d-none d-lg-block">:</b>
                <div class="col-md-5 d-lg-flex align-items-center">
                 <select name="" class="form-select form-select-sm" id="Expendituretype" placeholder="select" onchange="random_function()">  
                  <option>
                    Select
                  </option>
                  <option>Capital Expenditure</option>
                  <option >Revenue Expenditure</option>
                  <option >Deffered Revenue Expenditure</option>
                </select>
                </div>
              </div>

              <div class="row mb-1 p-3 d-flex">
                <label class="col-md-3 "><b> Purposetype*</b></label>
                <b class="col-12 col-md-1 d-none d-lg-block">:</b>
                <div class="col-md-5 d-lg-flex align-items-center">
                  <select class="form-select  form-select-sm" id="Purposetype" placeholder="select">  
                    <option selected="selected"></option>
                    </select>
                </div>
              </div>
  
              <div class="row mb-1 p-3 d-flex">
                <label class="col-md-3 "><b> purpose*</b></label>
                <b class="col-12 col-md-1 d-none d-lg-block">:</b>
                <div class="col-md-5 d-lg-flex align-items-center">
                 <input type="text" class="form-control" id="purpose" placeholder="enter purpose here" maxlength="500">
                </div>
              </div>

              <div class="row mb-1 p-3 d-flex">
                <label class="col-md-3 "><b> party Amount in Rs*</b></label>
                <b class="col-12 col-md-1 d-none d-lg-block">:</b>
                <div class="col-md-5 d-lg-flex align-items-center">
                 <input type="text" class="form-control" id="partyAmount"placeholder="select"  oninput=" numberToWords()">
                </div>
              </div>
  
            
              <div class="row mb-1 p-3 d-flex">
                <label class="col-md-3 col-form-label"> <b>Party Amount in Words </b></label>
                <div class="col-md-6 d-lg-flex align-items-center">
                  <label  class="col-12 col-md-2">: &nbsp; &nbsp;</label>
                  <label id="partyAmountWords1"></label>
                </div>
              </div>
  
              <div class="row mb-1 p-3">
                <label class="col-md-3 col-form-label"> <b>upload documents </b></label>
                <b class="col-12 col-md-1 d-none d-lg-block">:</b>
                <div class="col-md-5 d-lg-flex align-items-center ">
                  <label for="formFile" class="form-label"></label>
                  <input class="form-control" type="file" id="formFile" multiple>
                  <button type="button" class="btn btn-primary pull-right">+Add</button>
                </div>
              

                <p></p>
                <div class="d-flex justify-content-center">
                  <label> Note:Documents of Cheque (Letters/G.O.etc)can be uploaded here</label>
                </div>
                <hr>
                <div class="d-flex justify-content-center">
              
              <button type="submit" id="submit" name="submit"  class="btn btn-primary pull-right">Submit</button>
              </div>
            </form>
         
       
    </div>
  </div>
  </div>
  <script src="validate.js"></script>
</body>

</html>