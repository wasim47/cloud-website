@include('admin.includes.header')
   <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-users"></i> Total Users</span>
              <div class="count">{{ $totalUsers }}</div>
            </div>
            
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-connectdevelop"></i> Total Offers</span>
              <div class="count">{{ $totalOffers }}</div>
            </div>
            
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-question"></i> Total Faqs</span>
              <div class="count">{{ $totalFaqs }}</div>
            </div>
            
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-newspaper-o"></i> Total Posts</span>
              <div class="count">{{ $totalBlogs }}</div>
            </div>
            
          </div>
         

          <div class="row">


            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_320" style="box-shadow:#F37653 0 0 1px 1px">
                <div class="x_title">
                  <h2>Last Registered User</h2>
                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                 <table width="100%" class="table table-responsive bordered">
                  <tr>
                      <th>SI</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Created</th>
                    </tr>
                     <?php $i=1; ?>
                    @foreach($members as $k=>$menu)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $menu->fname.' '.$menu->fname }}</td>
                        <td>{{ $menu->city }}</td>
                        <td>{{ $menu->created_at }}</td>
                    </tr>
                     
                  @endforeach
                 </table>
                  

                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_320" style="box-shadow:#F37653 0 0 1px 1px">
                <div class="x_title">
                  <h2>Latest Blog Post</h2>
                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                 <table width="100%" class="table table-responsive bordered">
                  <tr>
                        <th>SI</th>
                        <th>Title</th>
                        <th>Created</th>
                    </tr>
                   <?php $i=1; ?>
                    @foreach($blogs as $menu)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $menu->title}}</td>
                        <td>{{ $menu->created_at }}</td>
                    </tr>
                    @endforeach
                 </table>
                  

                </div>
              </div>
            </div>


            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_320" style="box-shadow:#F37653 0 0 1px 1px">
                <div class="x_title">
                  <h2>Today Offers</h2>
                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                 <table width="100%" class="table table-responsive bordered">
                  <tr>
                      <th>SI</th>
                        <th>Title</th>
                        <th>Points</th>
                        <th>Created</th>
                    </tr>
                    
                     <?php $i=1; ?>
                    @foreach($offers as $menu)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $menu->title}}</td>
                        <td>{{ $menu->points }}</td>
                        <td>{{ $menu->created_at }}</td>
                    </tr>
                     
                  @endforeach 
                    
                 </table>
                  

                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_320" style="box-shadow:#F37653 0 0 1px 1px">
                <div class="x_title">
                  <h2>FAQ</h2>
                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                 <table width="100%" class="table table-responsive bordered">
                  <tr>
                      <th>SI</th>
                        <th>Question</th>
                        <th>Created</th>
                    </tr>
                     <?php $i=1; ?>
                    @foreach($faqs as $faq)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $faq->question }}</td>
                      <td>{{ $faq->created_at }}</td>
                    </tr>
                    @endforeach


                 </table>
                  

                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_320" style="box-shadow:#F37653 0 0 1px 1px">
                <div class="x_title">
                  <h2>Highest Converting Offers</h2>
                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                 <table width="100%" class="table table-responsive bordered">
                  <tr>
                      <th>SI</th>
                        <th>Title</th>
                        <th>Points</th>
                        <th>Created</th>
                    </tr>
                    
                    <?php $i=1; ?>
                    @foreach($offers as $menu)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $menu->title}}</td>
                      <td>{{ $menu->points }}</td>
                      <td>{{ $menu->created_at }}</td>
                    </tr>                     
                  @endforeach
                   
                 </table>
                  

                </div>
              </div>
            </div>
            

          </div>


          
        </div>
 @include('admin.includes.footer')