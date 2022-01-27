@extends('admin.admin_master');
@section('content');

<div class="content-wrap">
            <div class="home-title">
                <h1>Welcome to Best <strong>Web Admin Panel <span>FOXIO</span>.</strong></h1>
                <p>Web applications with very clean and aesthetic style.</p>
            </div>
            <div class="content-inner remove-ext5">
                <div class="row mrg20">
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="wdgt-box stats-box box-blu">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <i class="icon ion-arrow-graph-up-right"></i>
                            <div class="stats-inr">
                                <h6><span class="counter">789</span>K</h6>
                                <span>Social Users</span>
                            </div>
                            <span><i class="icon ion-ios-stopwatch"></i>Updated:<span>05:14pm</span></span>
                            <div class="progress">
                                <div class="progress-bar wdth20"><span>20%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="wdgt-box stats-box box-prpl">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <i class="icon ion-android-desktop"></i>
                            <div class="stats-inr">
                                <h6><span class="counter">289</span>K</h6>
                                <span>Visitors This Month</span>
                            </div>
                            <span><i class="icon ion-ios-stopwatch"></i>Updated:<span>05:14pm</span></span>
                            <div class="progress">
                                <div class="progress-bar wdth25"><span>25%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="wdgt-box stats-box box-red">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <i class="icon ion-ios-person-outline"></i>
                            <div class="stats-inr">
                                <h6><span class="counter">349</span>K</h6>
                                <span>Total Users</span>
                            </div>
                            <span><i class="icon ion-ios-stopwatch"></i>Updated:<span>05:14pm</span></span>
                            <div class="progress">
                                <div class="progress-bar wdth80"><span>80%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="wdgt-box stats-box box-grn">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <i class="icon ion-social-usd-outline"></i>
                            <div class="stats-inr">
                                <h6><span class="counter">120</span>K</h6>
                                <span>Total Sales</span>
                            </div>
                            <span><i class="icon ion-ios-stopwatch"></i>Updated:<span>05:14pm</span></span>
                            <div class="progress">
                                <div class="progress-bar wdth30"><span>30%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="wdgt-box pie-chart">
                            <div class="wdgt-titl">
                                <h4>Pie Chart</h4>
                                <p>Your last activity is posted 4 hours ago</p>
                            </div>
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div id="piechart"></div>
                            <a class="dwnld-btn" href="#" title="">Download Chart</a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8">
                        <div class="wdgt-box actv-box">
                            <div class="wdgt-titl">
                                <h4>Activities</h4>
                                <p>Your last activity is posted 4 hours ago</p>
                            </div>
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="actv-sls-wrp">
                                <div class="actv-sls wd-icn">
                                    <i class="icon ion-connection-bars"></i>
                                    <h6><span class="counter">170,20</span></h6>
                                    <span>Today</span>
                                </div>
                                <div class="actv-sls">
                                    <h6><span class="counter">19.91</span>%</h6>
                                    <span>Last Month</span>
                                </div>
                                <div class="actv-sls">
                                    <h6><span class="counter">16</span>K</h6>
                                    <span>Weekly Visitors</span>
                                </div>
                            </div>
                            <div id="chrt1" class=""></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="wdgt-box wethr-box">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="ideaboxWeather" id="weather"></div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="wdgt-box wrkng-ordr">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <h4>Working Order</h4>
                            <div class="slct-box">
                                <i class="icon ion-android-funnel"> Sort By:</i>
                                <select>
                                    <option>Date</option>
                                    <option>Date</option>
                                    <option>Date</option>
                                    <option>Date</option>
                                    <option>Date</option>
                                </select>
                            </div>
                            <div class="ordr-tbl-wrp">
                                <table>
                                    <thead><tr><th>#</th><th>Date</th><th>Name</th><th>Phone No</th><th>Address</th><th>Action</th></tr></thead>
                                    <tbody>
                                        <tr><td>01</td><td>10 June 2017</td><td><h4><a href="#" title="">Michael Baker</a></h4></td><td>076 9477 4896</td><td>Some St. 77, LA</td><td><a class="act-btn" href="#" title="">Accept</a><a class="rej-btn" href="#" title="">Reject</a></td></tr>
                                        <tr><td>02</td><td>10 June 2017</td><td><h4><a href="#" title="">Larisa Maskalyova</a></h4></td><td>0500 034548</td><td>Another St. 456</td><td><a class="act-btn" href="#" title="">Accept</a><a class="rej-btn" href="#" title="">Reject</a></td></tr>
                                        <tr><td>03</td><td>10 June 2017</td><td><h4><a href="#" title="">Natasha Kim</a></h4></td><td>(01315) 27698</td><td>294-318 Duis Ave</td><td><a class="act-btn" href="#" title="">Accept</a><a class="rej-btn" href="#" title="">Reject</a></td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="wdgt-box totl-sal-reprt">
                            <h4>Total Sale Report</h4>
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="prc"><sup>$</sup>45K<span><i class="fa fa-long-arrow-up"></i>2.6%</span></div>
                            <div id="chrt2" class="chrt"></div>
                            <div class="reprt-lst">
                                <div class="reprt-itm">
                                    <h4><span class="counter">358</span></h4>
                                    <span>Last Month</span>
                                </div>
                                <div class="reprt-itm">
                                    <h4><span class="counter">458</span></h4>
                                    <span>Current Month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="wdgt-box totl-sal-reprt drk-lyr" style="background-image: url(assets/images/aflt-rpt-bg.jpg);">
                            <h4>Affiliate Report</h4>
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="prc"><sup>$</sup>34K<span><i class="fa fa-long-arrow-up"></i>2.6%</span></div>
                            <div id="chrt3" class="chrt"></div>
                            <div class="reprt-lst">
                                <div class="reprt-itm">
                                    <h4><span class="counter">358</span></h4>
                                    <span>Last Month</span>
                                </div>
                                <div class="reprt-itm">
                                    <h4><span class="counter">458</span></h4>
                                    <span>Current Month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="wdgt-box calndr">
                            <h4>Calendar</h4>
                            <a class="evnt-btn" href="#" title="">Add Event</a>
                            <div class="slct-box">
                                <i class="ion-android-funnel"></i>
                                <select>
                                    <option>Monthly</option>
                                    <option>Yearly</option>
                                    <option>Weekly</option>
                                </select>   
                            </div>
                            <div id="calendar" class="calendar"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="wdgt-box scrb-box">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="scrb-box-wrp grn-bg">
                                <i class="icon ion-email"></i>
                                <div class="scrb-box-inr">
                                    <h6>9.25k Subscribers</h6>
                                    <span>Your main list is growing!</span>
                                </div>
                            </div>
                            <a class="scrb-btm" href="#" title=""><i class="icon ion-android-settings"></i>Manage List</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="wdgt-box scrb-box">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="scrb-box-wrp twtr-bg">
                                <i class="icon ion-social-twitter"></i>
                                <div class="scrb-box-inr">
                                    <h6>690+ Followers</h6>
                                    <span>You are doing great!</span>
                                </div>
                            </div>
                            <a class="scrb-btm" href="#" title=""><i class="icon ion-android-people"></i>Check Theme Out</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="wdgt-box scrb-box">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="scrb-box-wrp red-bg">
                                <i class="icon ion-android-upload"></i>
                                <div class="scrb-box-inr">
                                    <h6>Business Plan</h6>
                                    <span>This is your current active plan.</span>
                                </div>
                            </div>
                            <a class="scrb-btm" href="#" title=""><i class="icon ion-arrow-up-a"></i>Upgrade To Vip</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
