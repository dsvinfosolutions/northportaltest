 @include('admin.adminnav')
  <div class="container-fluid">

 <div class="tab-pane employeeagreements" id="nav-agreements" role="tabpanel" aria-labelledby="nav-agreements-tab">
                        
                        <!--- employee agreement   -->
                      
                      
                                <h3>Agreement</h3>
                                <div style="width:100%;">
                                    <table style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Employee Name</th>
                                                <th >Employee Agreement</th>
                                                <th >code Of conduct</th>
                                            </tr>
                                        </thead>
                                        @if (isset($employee))
                                        @foreach ($employee as $user)
                                        <tbody>
                                            <tr style="margin-bottom:10px;">
                                                <td>{{$user->created_at}}</td>
                                                <td>{{$user->firstname}}</td>
                                                <td>
                                                    @if($user->agreement)
                                                    <a href="javascript:void(0);" onclick="show_modal_agreement('{{$user->id}}','EA')">Edit</a>
                                                    <a href="{{asset('agreement/'.$user->agreement)}}"  target="_blank">View</a>
                                                    <a href="javascript:void(0);" onclick="delete_agreement('{{$user->id}}','EA')" class="down">DELETE</a>
                                                    @else
                                                    <a href="javascript:void(0);" onclick="show_modal_agreement('{{$user->id}}','EA')">Uplaod</a>
                                                    @endif
                                                </td> 

                                                <td>
                                                    @if($user->coc_agreement)
                                                    <a href="javascript:void(0);" onclick="show_modal_agreement('{{$user->id}}','COC')">Edit</a>
                                                    <a href="{{asset('codeofconduct/'.$user->coc_agreement)}}"  target="_blank">View</a>

                                                    <a href="javascript:void(0);" onclick="delete_agreement('{{$user->id}}','COC')" class="down">DELETE</a>
                                                    @else
                                                    <a href="javascript:void(0);" onclick="show_modal_agreement('{{$user->id}}','COC')">Uplaod</a>
                                                    @endif
                                                   
                                                </td> 
                                               
                                            </tr>
                                            <tr class="spacer"></tr>
                                            
                                        <tbody>
                                            @endforeach
                                            @endif
                                    </table>
                                </div>

</div><!-------------end--------->
               
 </div>

@include('admin.adminfooter')


