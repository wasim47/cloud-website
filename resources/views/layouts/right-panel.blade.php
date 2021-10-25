<div class="col-md-4 col-sm-8 col-xs-8" style="background-color:#4a494a; color:#fff;">
                     
                        <table class="table" width="100%">
                        <thead>
                        <tr>
                        <th class="thh" colspan="2">CP 00 11 22</th>
                        </tr>
                        </thead>
                        
                        <tr>
                        <td colspan="2">Welcome {{ Auth::user()->fname.' '.Auth::user()->lname }}</td>
                        </tr>
                        
                        <tr>
                        <td>Today:</td>
                        <td>$0.00</td>
                        </tr>
                        
                        <tr>
                        <td>Balance:</td>
                        <td>$0.00</td>
                        </tr>
                        
                        <tr>
                        <td>Paid:</td>
                        <td>$0.00</td>
                        </tr>
                        
                        <thead>
                        <tr>
                        <th class="thh" colspan="2">Affiliate Manager</th>
                        </tr>
                        </thead>
                        
                        <tr>
                        <td align="center" colspan="2"><img src="{{ URL::asset('admin/uploads/user/'.Auth::user()->photo) }}" alt="user" style="width:150px; height:auto"></td>
                        </tr>
                        
                        <tr>
                        <td colspan="2"><i class="fa fa-user color1" aria-hidden="true"></i><span class="tabletr">{{ Auth::user()->fname.' '.Auth::user()->lname }}</span></td>
                        </tr>
                        
                        <tr>
                        <td colspan="2"><i class="fa fa-envelope color1" aria-hidden="true"></i><span class="tabletr">{{ Auth::user()->email }}</span></td>
                        </tr>
                        
                        <tr>
                        <td colspan="2"><i class="fa fa-phone color1" aria-hidden="true"></i><span class="tabletr">{{ Auth::user()->phone }}</span></td>
                        </tr>
                        
                        <tr>
                        <td colspan="2"><i class="fa fa-skype color1" aria-hidden="true"></i><span class="tabletr">{{ Auth::user()->messenger.' : '.Auth::user()->messenger_id }}</span></td>
                        </tr>
                        
                    </table>
                  </div>