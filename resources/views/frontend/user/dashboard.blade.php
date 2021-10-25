@include('layouts.user-header')

<div id="page-wrapper" style="background-color:#ffffff !important; height:auto !important;">
            <div id="page-inner">
                    <div class="row">
                         <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="col-md-6 col-sm-6 col-xs-12">
							  
                              <div class="x_panel tile fixed_height_320" style="box-shadow:#ccc 0 0 1px 1px; background:#eaeaea">
                               <table width="100%" class="table table-responsive bordered">
                                  <tr>
                                      <th>SI</th>
                                        <th>Today Offer</th>
                                        <th>Rewards</th>
                                    </tr>
                                     <?php $i=1; ?>
                                    @foreach($todayOffers as $menu)
                                    
                                    <tr>
                                      <td>{{ $i++ }}</td>
                                      <td><a href="{{ url('user/browse/'.$menu->id) }}">{{ $menu->title}} </a>
										
                                      </td>
                                      <td>{{ $menu->points }}</td>
                                    </tr>  
                                    
                                                                       
                                  @endforeach                                     
                                 </table>
                                   </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                            
                            <div class="x_panel tile fixed_height_320" style="box-shadow:#ccc 0 0 1px 1px; background:#eaeaea">
                               <table width="100%" class="table table-responsive bordered">
                                  <tr>
                                      <th>SI</th>
                                      <th>Blog Post</th>
                                    </tr>
                                     <?php $i=1; ?>
                                    @foreach($blogs as $menu)
                                    <tr>
                                      <td>{{ $i++ }}</td>
                                      <td><a href="javascript:void();" data-toggle="modal" data-target="#highOffers{{$i}}">{{ $menu->title}} </a>
										<div id="highOffers{{$i}}" class="modal fade" role="dialog">
                                          <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">{{ $menu->title}}</h4>
                                              </div>
                                              <div class="modal-body">
                                                <table width="100%" class="table">
                                                	<tr>
                                                        <td width="100%" colspan="3"><h4>{{ $menu->title}}</h4></td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Banner Image</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">
                                                        <img src="{{ URL::asset('admin/uploads/blog/'.$menu->image) }}" 
                                                        style="width:100px; height:auto" /></td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Details</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{!! $menu->full_desc !!}</td>
                                                  </tr>
                                                 
                                                </table>
                                              </div>
                                             
                                            </div>
                                        
                                          </div>
										</div>
                                      </td>
                                    </tr>
                                    @endforeach
                                 </table>
                                   </div>
                            </div>
                
                
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="x_panel tile" style="box-shadow:#ccc 0 0 1px 1px; background:#eaeaea">
                               <table width="100%" class="table table-responsive bordered">
                                  <tr>
                                      <th>SI</th>
                                        <th>Top offer</th>
                                        <th>Rewards</th>
                                    </tr>
                                     <?php $i=1; ?>
                                    @foreach($topOffers as $menu)
                                    <tr>
                                      <td>{{ $i++ }}</td>
                                       <td><a href="javascript:void();" data-toggle="modal" data-target="#topOffers{{$i}}">{{ $menu->title}} </a>
										<div id="topOffers{{$i}}" class="modal fade" role="dialog">
                                          <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">{{ $menu->title}}</h4>
                                              </div>
                                              <div class="modal-body">
                                                <table width="100%" class="table">
                                                	<tr>
                                                    	<td width="23%">Offer</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{{ $menu->title}}</td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Banner Image</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">
                                                        <img src="{{ URL::asset('admin/uploads/offer/'.$menu->image) }}" style="width:100px; height:auto" /></td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Details</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{!! $menu->full_desc !!}</td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Action Link</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{{ $menu->action_link}}</td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Conversation Points</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{{ $menu->points}}</td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Category</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{{ $menu->category}}</td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Allowed Country</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{{ $menu->allowed_country }}</td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Date</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{{ $menu->date}}</td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Rewards Amounts</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{{ $menu->rewards_amount}}</td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Note</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{!! $menu->note !!}</td>
                                                  </tr>
                                                </table>
                                              </div>
                                             
                                            </div>
                                        
                                          </div>
										</div>
                                      </td>
                                      <td>{{ $menu->points }}</td>
                                    </tr>
                                     
                                  @endforeach 
                                    
                                 </table>
                                   </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="x_panel tile fixed_height_320" style="box-shadow:#ccc 0 0 1px 1px; background:#eaeaea">
                               <table width="100%" class="table table-responsive bordered">
                                  <tr>
                                      <th>SI</th>
                                        <th>Highest Converting Offer</th>
                                        <th>Rewards</th>
                                    </tr>
                                     <?php $i=1; ?>
                                    @foreach($highestOffers as $menu)
                                    <tr>
                                      <td>{{ $i++ }}</td>
                                       <td><a href="javascript:void();" data-toggle="modal" data-target="#highOffers{{$i}}">{{ $menu->title}} </a>
										<div id="highOffers{{$i}}" class="modal fade" role="dialog">
                                          <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">{{ $menu->title}}</h4>
                                              </div>
                                              <div class="modal-body">
                                                <table width="100%" class="table">
                                                	<tr>
                                                    	<td width="23%">Offer</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{{ $menu->title}}</td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Banner Image</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">
                                                        <img src="{{ URL::asset('admin/uploads/offer/'.$menu->image) }}" style="width:100px; height:auto" /></td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Details</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{!! $menu->full_desc !!}</td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Action Link</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{{ $menu->action_link}}</td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Conversation Points</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{{ $menu->points}}</td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Category</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{{ $menu->category}}</td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Allowed Country</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{{ $menu->allowed_country }}</td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Date</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{{ $menu->date}}</td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Rewards Amounts</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{{ $menu->rewards_amount}}</td>
                                                  </tr>
                                                  <tr>
                                                    	<td width="23%">Note</td>
                                                        <td width="2%"> : </td>
                                                        <td width="75%">{!! $menu->note !!}</td>
                                                  </tr>
                                                </table>
                                              </div>
                                             
                                            </div>
                                        
                                          </div>
										</div>
                                      </td>
                                      <td>{{ $menu->points }}</td>
                                    </tr>
                                     
                                  @endforeach 
                                    
                                 </table>
                                   </div>
                            </div>
                    </div>
                    
                    
                    <!--leftbar -->
                    
                     @include('layouts.right-panel')
                </div>
                <!-- /. ROW  -->
            <!--<footer><p>Powered By: TechToday &copy 2017 <a href="#">click piper</a></p></footer>--> 
            </div>
            <!-- /. PAGE INNER  -->
        </div>


        
       
                                      	
@include('layouts.user-footer')