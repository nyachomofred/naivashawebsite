                        

                    @foreach($users as $user)
                    @if($user->key=="facebook")    
                        <a href="{{$user->data}}" target="_blank" class="btn mr-5 btn-fab btn-pink btn-round" rel="tooltip" title="Facebook">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    @endif
                    @endforeach 



                    @foreach($users as $user)
                    @if($user->key=="twitter")    

                        <a href="{{$user->data}}" target="_blank" class="btn mr-5 btn-fab btn-pink btn-round" rel="tooltip" title="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    @endif
                    @endforeach 


                    @foreach($users as $user)
                    @if($user->key=="you-tube")    

                        <a href="{{$user->data}}" target="_blank" class="btn mr-5 btn-fab btn-pink btn-round" rel="tooltip" title="YouTube">
                            <i class="fa fa-youtube"> </i>
                        </a>
                    @endif
                    @endforeach 