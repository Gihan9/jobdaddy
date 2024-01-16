<div class="payDetailFrame col-6">
    <div class="smalldescrip">Select A Payment Method</div>
    <div class="payOptions row">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
       
            <li class=" tabs" role="presentation">
              <button class="nav-link active payOpBtn" id="pills-credit-tab" data-bs-toggle="pill" data-bs-target="#pills-credit" type="button" role="tab" aria-controls="pills-credit" aria-selected="false">
                <i class="bi bi-credit-card"></i>
                <span>Credit Card</span>
                </button>
            </li>
            <li class=" tabs" role="presentation">
              <button class="nav-link  payOpBtn" id="pills-bank-tab" data-bs-toggle="pill" data-bs-target="#pills-bank" type="button" role="tab" aria-controls="pills-bank" aria-selected="true">
                <i class="bi bi-arrow-left-right"></i>
                <span>Bank Transfer</span>
                </button>
            </li>
            <li class=" tabs" role="presentation">
                <button class="nav-link  payOpBtn" id="pills-direct-tab" data-bs-toggle="pill" data-bs-target="#pills-direct" type="button" role="tab" aria-controls="pills-direct" aria-selected="true">
                    <i class="bi bi-arrow-up-right-square-fill"></i>
                    <span>Direct</span>
                </button>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="tab-content" id="pills-tabContent">

            <!--credit card content -->
            <div class="tab-pane fade show active " id="pills-credit" role="tabpanel" aria-labelledby="pills-credit-tab">

                <div class="credtDetailsCard">
                    <div class="cardTitle">Enter Credit Card Details</div>

                    <form class="row" action="">

                        <div class="col-12  mb-3">
                            <label for="hname" class="form-label">Card Holder’s Name</label>
                            <div class="inframe">
                                <input class="form-control" id="hname" type="text" placeholder="Enter Name on Card"  />
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="cnumber" class="form-label">Card number</label>
                            <div class="inframe">
                                <div class="input-group">
                                    <input type="text" name="cnumber" id="cnumber" class="form-control" aria-label="cnumber" required>
                                    <span class="input-group-text " >
                                        <img src="/jd_img/creditimg.png" alt="creditlogo" style="width: 23px">
                                    </span>
                                </div>
                            </div>
                        </div>


                        <div class="row  mb-3">
                            <div class="col-7">
                                <label for="month" class="form-label">Expire Data</label>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="inframe">
                                            <select name="month" id="month" class="form-select" aria-label="expire month">
                                                <option value="">Month</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="inframe">
                                            <select name="year" id="year" class="form-select" aria-label="expire year">
                                                <option value="">Year</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-4">
                                <label for="cvc" class="form-label">CVC</label>
                                <div class="inframe">
                                    <input class="form-control" id="cvc" type="text"   />
                                </div>
                            </div>


                           

                            
                        </div>
        
                    </form>
                    <div class="assurance">Your Payment information is safe with us</div>

                </div>
                
            </div>















            <div class="tab-pane fade " id="pills-bank" role="tabpanel" aria-labelledby="pills-bank-tab">
                <div>Need to add bank payment details here</div>
            </div>
            <div class="tab-pane fade " id="pills-direct" role="tabpanel" aria-labelledby="pills-direct-tab">
                <div>Need to add direct payment details here</div>
            </div>
            
          </div>

    </div>

</div>



