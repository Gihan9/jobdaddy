<div class="contentframe personalDetailsFrame" style="position: relative">

    <h5 style="margin-bottom: 30px; margin-top:10px">General Information</h5>

    <div class="form">
        <form action="" class="row" >
       
            <div class="col-lg-5 col-md-5 col-sm-12 mb-3">
                <div class="profdatatype">Established</div>
            
                <div class="profdata">&nbsp; &nbsp;{{ $company->date }}</div> 
   
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 mb-3">
                <div class="profdatatype">Company email</div>
                
                <div class="profdata">&nbsp; &nbsp;{{ $company->email }}</div> 
                  
            </div>
            <div class="col-md-5 col-sm-12 mb-3">
                <div class="profdatatype">Contact</div>
                
                <div class="profdata">&nbsp; &nbsp;{{ $company->phone }}</div> 
                 
            </div>
            <div class="col-md-5 col-sm-12 mb-3">
                <div class="profdatatype">Location</div>
               
                <div class="profdata">&nbsp; &nbsp;{{ $company->location }}</div> 
   
            </div>
        
          

          
            
        </form>
    </div>


</div