

<!-- Modal for the User -->
<div class="modal fade" id="ShowUser{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="EditUserLabel{{ $user->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditUserLabel{{ $user->id }}">User Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <div class="container mt-5 d-flex justify-content-center">

                    <div class="card p-3" style="width: 400px; border: none;border-radius: 10px;background-color: #fff;">

                        <div class="d-flex align-items-center">

                            <div class="image">
                        <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="155" >
                        </div>

                        <div class="ml-3 w-100">
                            
                        <h4 class="mb-0 mt-0">{{$user->name}}</h4>
                        <!-- <span>Senior Journalist</span> -->

                        <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats" style=" background: #f2f5f8 !important; color: #000 !important;">

                            <!-- <div class="d-flex flex-column">

                                <span class="articles" style=" font-size:10px;  color: #a1aab9;">Articles</span>
                                <span class="number1" style="font-weight:500;">38</span>
                                
                            </div>

                            <div class="d-flex flex-column">

                                <span class="followers" style="font-size:10px;color: #a1aab9;">Followers</span>
                                <span class="number2" style="font-weight:500;">980</span>
                                
                            </div>
 -->

                            <div class="d-flex flex-column">
                                <span class="rating"  style="font-size:12px;font-weight:bold;">Type:  {{$user->role}}</span>
                                <span class="rating"  style="font-size:10px;">Email:{{$user->email}}</span>
                                <span class="number3" style="font-size:10px; font-weight:500;">Phone:{{$user->phone}}</span>
                                
                            </div>
                            
                        </div>


                        <!-- <div class="button mt-2 d-flex flex-row align-items-center">

                            <button class="btn btn-sm btn-outline-primary w-100">Chat</button>
                            <button class="btn btn-sm btn-primary w-100 ml-2">Follow</button>

                            
                        </div> -->


                        </div>

                            
                        </div>
                        
                    </div>
    
                </div>  
               
            </div>
          
        </div>
    </div>
</div>






