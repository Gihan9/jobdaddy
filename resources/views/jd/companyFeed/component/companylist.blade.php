<div class="companyListBox mb-3">

    <div class="companyListFrame row">

        <h3>Top Companies</h3>

        <!-- new card -->
        @foreach($savedCompanies as $company)
                <div class="personCard col-2">
                    <div class="personImgSet">
                        <div class="personImg">
                        <img src="{{ asset('storage/' . $company->profile_picture) }}" alt="Profile Picture">
                        </div>
                        <div class="comName">{{ $company->name }}</div>
                        <div class="location">
                            <span class="ico"><i class="bi bi-geo-alt-fill"></i></span>
                            <span>{{ $company->location }}</span>
                           <a href="{{ route('company.show', ['id' => $company->id]) }}">view</a>
                        </div> 
                    </div>
</div>
        @endforeach

            
                   
                
       
            



   



       






    </div>

   


    
</div>