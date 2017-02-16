<html ng-app="ionicApp">
<style>
  /*.login{text-align: center;margin-top: 200px;}*/
  .duoxue{background: #fff;border-radius: 60px;color:#8E8E8E;}
  body {font: normal 100% Helvetica, Arial, sans-serif;}
  h1 {font-size: 1.5em; }
  small {font-size: 0.875em;}

</style>
<head>
        <meta charset="UTF-8">
<!--     <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" /> 
    <title>我的信息</title>
    <link href="{{asset('style/css/ionic.min.css')}}" rel="stylesheet">
    <script src="{{asset('style/js/ionic.bundle.min.js')}}"></script>
     <script type="text/javascript">
    angular.module('ionicApp', ['ionic'])

    .controller('SlideController', function($scope) {
      
      $scope.myActiveSlide = 0;
      
    });
    
    
    </script>
</head>
<body>
<!--我的信息-->

<!--顶部-->
 <div class="bar bar-header bar-positive item-input-inset " >
     <h1 class="title">我的信息</h1>
      <a class="button button-clear icon ion-person-stalker" href="{{URL('myinfo')}}"></a>
    </div>
<!--内容-->   
   <ion-view title="Home" hide-nav-bar="true">
   <ion-scroll  direction="y" scrollbar-y="false" style="width: 100%; height: 100%">
    <div style="display:none;" id="user_info">
             <div style="width:70px;height:70px;"></div>
              <div style="margin:10px auto;width:100px;height:100px;border-radius:50px;overflow:hidden;">
                    <img src="{{asset('style/img/3.jpg')}}" style="margin:0;width:100%;height:100%;">
              </div>
<<<<<<< HEAD
                   <p style="text-align:center">昵称：张三</p>
              <div>

                 <ul class="list">
                  <li class="item  item-button-right icon ion-ios-person-outline">
                        <a class="button button-clear icon " href="{{URL('myinfo')}}" style="margin-right:150px;color:#000;">个人信息</a>
                    </li>
                    <li  class="item  item-button-right icon ion-ios-folder-outline">
                      <a class="button button-clear icon " href="{{URL('mycart')}}" style="margin-right:130px;color:#000;">我的购物车</a>
                    </li>
                     <li  class="item  item-button-right icon ion-ios-folder-outline">
                     <a class="button button-clear icon " href="{{URL('myinfo')}}" style="margin-right:150px;color:#000;">我的订单</a>
                    </li>
                    <li class="item item-button-right icon ion-ios-star-outline">
                      <a class="button button-clear icon " href="{{URL('myinfo')}}" style="margin-right:150px;color:#000;">我的收藏</a>
                    </li>
                     
                    <li class="item  item-button-right icon ion-ios-person-outline">
                  <a class="button button-clear icon " href="{{URL('myinfo')}}" style="margin-right:150px;color:#000;">意见反馈</a>
=======
                   <p style="text-align:center">张三</p>
        
             <div>
                     <hr style="height:2px;background-color:#E6E6FA;border:0px" >
                       <table width="95%" border="1" cellpadding="1" cellspacing="1">
                          <tr>
                               <td >
                                    <p style="text-align:center">0</P>
                                    <p style="text-align:center">帖子</p>
                               </td>
                               
                               <td >
                                    <p style="text-align:center">10</P>
                                    <p style="text-align:center">关注</p>
                               </td>
                               
                               <td >
                                    <p style="text-align:center">12</P>
                                    <p style="text-align:center">粉丝</p>
                               </td>
                        </tr>
                       </table>
                                   </div>
              <div>
                 <ul class="list" >
                    <li class="item item-button-right icon ion-ios-folder-outline">
                      我的订单
                       <a href="{{URL('myinfo')}}" class="button button-clear icon ion-ios-arrow-right"></a>
>>>>>>> 1c58f7dc90614de8ff03e5b25c2083fae3580404
                    </li>
                </ul>
              </div>
             
    </div>
     <div style="display:none;" id="user_login">
             <div style="width:70px;height:70px;"></div>
                  <a href="{{URL('login')}}"> <p style="text-align:center"><button class="duoxue" style="width:150px;height:50px;">登录多学网</button></p></a>
              <div>
              <div>

                 <ul class="list">
                  <li class="item  item-button-right icon ion-ios-person-outline">
                        <a class="button button-clear icon " href="{{URL('myinfo')}}" style="margin-right:150px;color:#000;">个人信息</a>
                    </li>
                    <li  class="item  item-button-right icon ion-ios-folder-outline">
                      <a class="button button-clear icon " href="{{URL('myinfo')}}" style="margin-right:130px;color:#000;">我的购物车</a>
                    </li>
                     <li  class="item  item-button-right icon ion-ios-folder-outline">
                     <a class="button button-clear icon " href="{{URL('myinfo')}}" style="margin-right:150px;color:#000;">我的订单</a>
                    </li>
                    <li class="item item-button-right icon ion-ios-star-outline">
                      <a class="button button-clear icon " href="{{URL('myinfo')}}" style="margin-right:150px;color:#000;">我的收藏</a>
                    </li>
                     
                    <li class="item  item-button-right icon ion-ios-person-outline">
                  <a class="button button-clear icon " href="{{URL('myinfo')}}" style="margin-right:150px;color:#000;">意见反馈</a>
                    </li>
                </ul>
              </div>
        </div>
      </div>
    <div style="height:50px;width:100%;clear:all"></div>
     </ion-scroll>
    </ion-view>
    <!-- 底部-->
     @include('master')


</body> 
</html>
<script ></script>
<script type="text/javascript" src="{{asset('style/js/jquery.js')}}"></script>
<script>
  $(function(){
     var user_session = "{{session()->get('key')}}";
    if(user_session == '')
    {
       $("#user_login").show();
       $("#user_info").hide();
    }else
    {
       $("#user_info").show();
       $("#user_login").hide();
    }
  })
</script>